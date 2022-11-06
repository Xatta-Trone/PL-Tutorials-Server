<?php

namespace App\Console\Commands;

use App\Traits\UserTrait;
use App\Models\Admin\UserData;
use Illuminate\Console\Command;
use App\Models\Admin\DummyUserData;

class Update19BatchData extends Command
{
    use UserTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update19batch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        DummyUserData::chunk(500, function ($users) {
            foreach ($users as $user) {
                $this->info("Updating user $user->student_id");
                $stid = $this->studentIdWithoutPrefix($user->student_id);
                // if (!is_numeric($user->merit)) {
                //     // $user->where('id', $user->id)->update(['merit' => sprintf("%04d", (int) substr($user->merit, 1))]);
                // }
                UserData::where('student_id', $stid)->update(['merit' => $user->merit]);
                // $user->where('id', $user->id)->update(['student_id' => $this->studentIdWithoutPrefix($user->student_id)]);
            }
        });
    }
}