<?php

namespace App\Console\Commands;

use App\Models\Admin\Ban;
use Illuminate\Console\Command;

class ChangeBanLocationToLowercase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ban:lowercase';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Changes the ban location to lowercase';

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
        Ban::chunkById(
            500,
            function ($records) {
                foreach ($records as $record) {
                    $record->update(['location' => strtolower($record->location)]);
                }
            },
            $column = 'id'
        );
    }
}
