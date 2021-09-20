<?php

namespace App\Console\Commands;

use App\Models\Admin\UserTrace;
use Illuminate\Console\Command;

class UpdateUsertracesTableData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'usertrace:update';

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
        UserTrace::chunkById(500, function ($usertraces) {
            foreach ($usertraces as $trace) {
                $location_data = json_decode($trace->location_info);
                $device_data = json_decode($trace->browser_info);

                $location = $location_data->isp.','.$location_data->city.','.$location_data->country;
                $device = $device_data->browserName.' on '.$device_data->platformName;

                $data = [
                    'location' => $location,
                    'device' => $device,
                ];
                // dd($device);

                $trace->update($data);
            }
        }, $column = 'id');
    }
}
