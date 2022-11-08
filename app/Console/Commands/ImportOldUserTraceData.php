<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use hisorange\BrowserDetect\Parser as Browser;


class ImportOldUserTraceData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'usertrace:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrives old user trace table data and puts into the new table';

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
        $bar = $this->output->createProgressBar(DB::table('old_user_traces')->count());
        DB::table('user_traces')->truncate();
        DB::table('user_trace_data')->truncate();
        $bar->start();

        DB::table('old_user_traces')->orderBy('id')
            ->chunk(1000, function ($traces) {
                $newData = [];
                $newData2 = [];


                foreach ($traces as $trace) {
                    $device_data = json_decode($trace->browser_info);

                    // dd($device_data);

                    // $location = $location_data->isp.','.$location_data->city.','.$location_data->country;
                    // $deviceName = $device_data->browserName . ' on ' . $device_data->platformName;
                    // $device = $device_data->userAgent;

                    $ipAddress = $trace->user_ip;
                    // $location_info = $this->getLocationInfo($ipAddress);
                    $location_info = $trace->location_info;
                    $browser_info = $trace->browser_info;
                    // $location_info = $this->getLocationInfo('92.202.150.106');
                    // $browser_info = (new Browser())->parse($device_data->userAgent);

                    $data = [
                        'user_id' => $trace->user_id,
                        'user_ip' => $trace->user_ip,
                        'fingerprint' => null,
                        'location' => $this->getLocation($location_info),
                        'user_agent' => $device_data->userAgent,
                        'device' =>  $this->getBrowser($browser_info),
                        'created_at' => $trace->created_at,
                        'updated_at' => $trace->updated_at,

                    ];
                    $data2 = [
                        'location_info' => $location_info,
                        'browser_info' => $browser_info,
                        'user_trace_id' => $trace->id,
                        'created_at' => $trace->created_at,
                        'updated_at' => $trace->updated_at,

                    ];
                    // dd($device);

                    // array_push($newData, $data);
                    // array_push($newData2, $data2);
                    DB::table('user_traces')->insert($data);
                    DB::table('user_trace_data')->insert($data2);
                }








                // dd($data, $data2);
            });
        $bar->finish();
    }

    public function getLocation($location_info)
    {
        $location_data = json_decode($location_info);

        return $location_data->isp . ',' . $location_data->city . ',' . $location_data->country;
    }

    public function getBrowser($browser_info)
    {

        $device_data = json_decode($browser_info);


        return $device_data->browserName . ' on ' . $device_data->platformName;
    }

    public function getLocationInfo($ip_address)
    {

        $loc = file_get_contents("http://ip-api.com/json/" . $ip_address);
        $location_info = json_decode($loc);
        // if ($location_info->status == 'fail') {
        //     $loc = file_get_contents("https://extreme-ip-lookup.com/json/" . $ip_address);
        // }
        return $loc;
    }
}
