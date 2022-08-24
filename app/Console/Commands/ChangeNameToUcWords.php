<?php

namespace App\Console\Commands;

use App\Models\Admin\DummyUserData;
use App\Models\admin\UserData;
use App\Models\User\User;
use Illuminate\Console\Command;

class ChangeNameToUcWords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'names:ucwords {table=all}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Changes the names on users, user_data table to sentence case';

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
        $table = $this->argument('table');

        if ($table == 'all') {
            $this->updateUsers();
            $this->updateUserData();
            $this->updateDummyUserData();
        } else if ($table == 'users') {
            $this->updateUsers();
        } else if ($table == 'user_data') {
            $this->updateUserData();
        } else if ($table == 'dummy_user_data') {
            $this->updateDummyUserData();
        }
    }

    public function updateUsers()
    {
        User::chunkById(
            500,
            function ($records) {
                foreach ($records as $record) {
                    $record->update(['name' => $this->sentenceCase($record->name)]);
                }
            },
            $column = 'id'
        );
    }

    public function updateUserData()
    {
        UserData::chunkById(
            500,
            function ($records) {
                foreach ($records as $record) {
                    $record->update(['student_name' => $this->sentenceCase($record->student_name)]);
                }
            },
            $column = 'id'
        );
    }

    public function updateDummyUserData()
    {
        DummyUserData::chunkById(
            500,
            function ($records) {
                foreach ($records as $record) {
                    $record->update(['student_name' => $this->sentenceCase($record->student_name)]);
                }
            },
            $column = 'id'
        );
    }

    public function sentenceCase($string)
    {
        return ucwords(strtolower($string));
    }
}