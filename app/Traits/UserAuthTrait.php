<?php

namespace App\Traits;

use App\Models\Admin\UserTrace;
use hisorange\BrowserDetect\Parser as Browser;
use hisorange\BrowserDetect\Parser;


trait UserAuthTrait
{

    public function saveUserTrace($userId, $fingerprint)
    {
        $location_info = $this->getLocationInfo(request()->ip());
        $location_info = $this->getLocationInfo('92.202.150.106');
        $browser_info = (new Browser())->detect();


        $data = [
            'user_id' => $userId,
            'user_ip' => request()->ip(),
            'location_info' => json_encode($location_info),
            'browser_info' => json_encode($browser_info),
            'fingerprint' => $fingerprint,
            'location' => $this->getLocation($location_info),
            'user_agent' => request()->server('HTTP_USER_AGENT'),
            // 'browser' => $this->getBrowser($browser_info)
        ];

        UserTrace::create($data);

        // call artisan to parse data
    }

    public function getBrowser($browser_info)
    {

        $device_data = $browser_info;


        return $device_data->browserName . ' on ' . $device_data->platformName;
    }

    public function getLocation($location_info)
    {
        $location_data = json_decode($location_info);

        return $location_data->isp . ',' . $location_data->city . ',' . $location_data->country;
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
