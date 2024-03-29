<?php

namespace App\Console\Commands;

use App\Traits\UserTrait;
use Hamcrest\Type\IsNumeric;
use App\Models\Admin\UserData;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateMeritPosition extends Command
{
    use UserTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'merit:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Changes the merit position to numeric only with padded zero at start.';

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
        UserData::chunk(500, function ($users) {
            foreach ($users as $user) {
                $this->info("Updating user $user->student_id");
                if (!is_numeric($user->merit)) {
                    $user->where('id', $user->id)->update(['merit' => sprintf("%04d", (int) substr($user->merit, 1))]);

                }
                $user->where('id', $user->id)->update(['student_id' => $this->studentIdWithoutPrefix($user->student_id)]);
            }
        });
    }
}