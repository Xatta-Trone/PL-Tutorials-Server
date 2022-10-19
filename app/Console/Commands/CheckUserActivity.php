<?php

namespace App\Console\Commands;

use App\Models\User\User;
use Illuminate\Support\Carbon;
use App\Models\Admin\UserTrace;
use App\Models\User\UserDevice;
use App\Traits\UserAuthTrait;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckUserActivity extends Command
{
    use UserAuthTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:activityCheck';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks the activity of all users and bans ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $currentHour = Carbon::now()->hour;
        $totalUser = User::count();
        $userPerHour = (int) ceil($totalUser / 24);

        // generate user range by hour
        $userFrom = $userPerHour * ($currentHour) + 1;
        $userUpto = $userFrom + $userPerHour;
        $this->info($currentHour . "::" . $userFrom . "::" . $userUpto);

        // get user ids

        // get activity user ids
        $userIds = UserTrace::whereBetween('id', [$userFrom, $userUpto])->select('user_id')->distinct()->get()->pluck('user_id');

        $today = Carbon::now();
        $pastWeek = Carbon::now()->subWeek();


        User::whereIn('id', $userIds)->where('status', 1)->with(['devices:id,user_id,fingerprint'])
            ->lazyById(200, $column = 'id')
            ->each(function ($user) use ($pastWeek, $today) {
                $this->info('updating user id ' . $user->id);

                // get other logins
                $otherLogins = UserTrace::select('fingerprint', DB::raw('count(*) as total'))
                    ->where('user_id', $user->id)
                    ->whereNotIn('fingerprint', $user->devices->pluck('fingerprint'))
                    ->whereBetween('created_at', [$pastWeek, $today])
                    ->groupBy('fingerprint')->get();

                // check if using others device frequently

                // guest device fingerprint
                $otherUsersDeviceUsedByThisUser = UserDevice::select('user_id', 'fingerprint')->where('user_id', '<>', $user->id)->whereIn('fingerprint', $otherLogins->pluck('fingerprint'))->get();

                $guestDevices = null;
                // filter guest device
                if ($otherUsersDeviceUsedByThisUser) {
                    $guestDevices =  $otherLogins->whereNotIn('fingerprint', $otherUsersDeviceUsedByThisUser->pluck('fingerprint'));
                } else {
                    $guestDevices = $otherUsersDeviceUsedByThisUser;
                }

                if ($guestDevices->where('total', '>', 8)->count()) {
                    $this->banUser($user, 'due to unusual activity');
                }
            });






        // dd($totalUser, $userPerHour);
    }
}