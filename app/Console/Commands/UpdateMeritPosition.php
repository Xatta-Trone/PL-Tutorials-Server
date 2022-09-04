<?php

namespace App\Console\Commands;

use Hamcrest\Type\IsNumeric;
use App\Models\Admin\UserData;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateMeritPosition extends Command
{
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
        UserData::chunkById(500, function ($users) {

            foreach ($users as $user) {

                if (!is_numeric($user->merit)) {
                    $user->where('id', $user->id)->update(['merit' => sprintf("%04d", (int) substr($user->merit, 1))]);
                }
            }
        });
    }
}
