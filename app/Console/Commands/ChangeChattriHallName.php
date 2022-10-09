<?php

namespace App\Console\Commands;

use App\Models\Admin\UserData;
use Illuminate\Console\Command;

class ChangeChattriHallName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chattrihall:change';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Changes the chattri hall name from Chattri Hall to Sabekun Nahar Sony Hall';

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
        UserData::where('hall_name', 'Chattri Hall')->update(['hall_name' => 'Sabekun Nahar Sony Hall']);
    }
}