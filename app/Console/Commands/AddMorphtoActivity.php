<?php

namespace App\Console\Commands;


use App\Models\Admin\Activity;

use App\Traits\ActivityTrait;
use Illuminate\Console\Command;

class AddMorphtoActivity extends Command
{
    use ActivityTrait;
    /*
    **
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'activity:morph';

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
        Activity::chunkById(200, function ($flights) {
            foreach ($flights as $flight) {
                $data = [
                    'causer' => $this->getuserclass($flight->causer),
                ];

                if ($flight->activity != 'searched') {
                    $data['model'] = $this->getpostclass($flight->model);
                }



                $flight->update($data);
                // dd($this->getpostclass($flight->model));
                // dd($flight->model);
            }
        }, $column = 'id');
    }
}
