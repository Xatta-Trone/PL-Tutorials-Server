<?php

namespace App\Console\Commands;

use App\Models\User\User;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;
use App\Models\Admin\BanHistory;

class UnbanBannedUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:unban';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Removes the ban form the users who have served the period';

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
        $startOfDay = Carbon::now()->startOfDay()->addSecond();
        BanHistory::where('ban_upto', '<', $startOfDay)
            ->lazyById(200, $column = 'id')
            ->each(function ($item) use ($startOfDay) {
                $this->info('updating user id ' . $item->user_id);
                User::find($item->user_id)->update(['status' => 1]);
                $item->update(['ban_upto' => $startOfDay]);
            });
    }
}