<?php

namespace App\Traits;

use App\Mail\SendBannedUserMail;
use App\Models\Admin\Ban;
use App\Models\User\User;
use App\Models\Admin\BanDays;
use App\Models\Admin\Activity;
use App\Models\Admin\Settings;
use Illuminate\Support\Carbon;
use App\Models\Admin\UserTrace;
use App\Models\Admin\BanHistory;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\UserTraceData;
use hisorange\BrowserDetect\Parser;
use Google\Service\Calendar\Setting;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use hisorange\BrowserDetect\Parser as Browser;


trait UserAuthTrait
{
    use ActivityTrait;

    public function saveUserTrace($userId, $fingerprint, $deviceName = null, $platform = 'web', $token = null)
    {

        $ipAddress = request()->ip() == "127.0.0.1" ? '92.202.150.106' : request()->ip();
        $location_info = $this->getLocationInfo($ipAddress);
        // $location_info = $this->getLocationInfo('92.202.150.106');
        $browser_info = (new Browser())->detect();


        $data = [
            'user_id' => $userId,
            'user_ip' => request()->ip(),
            // 'location_info' => json_encode($location_info),
            // 'browser_info' => json_encode($browser_info),
            'fingerprint' => $fingerprint,
            'location' => $this->getLocation($location_info),
            'user_agent' => request()->server('HTTP_USER_AGENT'),
            'device' => $deviceName ?? $this->getBrowser($browser_info),
            'platform' => $platform ?? 'web',
            'pat_id' => explode('|', $token)[0],
        ];

        $userTrace =  UserTrace::create($data);

        $data['user_trace_id'] = $userTrace->id;

        $userTrace =  UserTraceData::create([
            'location_info' => $location_info,
            'browser_info' => $browser_info,
            'user_trace_id' => $userTrace->id
        ]);


        $this->saveAuthEvent($data, explode('|', $token)[0]);



        // call artisan to parse data
    }

    public function getBrowser($browser_info)
    {

        $device_data = json_decode(json_encode($browser_info));


        return $device_data->browserName . ' on ' . $device_data->platformName;
    }

    public function getLocation($location_info)
    {
        $location_data = json_decode($location_info);

        return $location_data->isp . ',' . $location_data->city . ',' . $location_data->country;
    }

    public function getLocationIspFromIpAddress(string $ip_address)
    {
        $location_data = json_decode($this->getLocationInfo($ip_address));

        // return $location_data->isp . ',' . $location_data->city . ',' . $location_data->country;
        return $location_data->isp;
    }

    public function getLocationInfo($ip_address)
    {
        $checkedIpAddress = $ip_address == "127.0.0.1" ? '92.202.150.106' : $ip_address;
        $loc = file_get_contents("http://ip-api.com/json/" . $checkedIpAddress);
        // $location_info = json_decode($loc);
        // if ($location_info->status == 'fail') {
        //     $loc = file_get_contents("https://extreme-ip-lookup.com/json/" . $ip_address);
        // }
        return $loc;
    }

    public function saveAuthEvent(array $data, string $pat_id, string $type = 'login',)
    {

        $label = (string) $data['pat_id'] . "::" . (string) $data['device'] . " :: " . (string) $data['location'];
        $data = [
            'causer_type' => $this->getpostclass('user'),
            'causer_id' => $data['user_id'],
            'activity' => $type,
            'model_id' => $data['user_trace_id'],
            'model_type' => $this->getpostclass('usertrace'),
            'label' => $label,
            'pat_id' => $pat_id,
        ];

        Activity::create($data);
    }

    public function saveLogoutEvent(int $userId, int $tokenId)
    {

        $label = (string) $tokenId . ":: logout :: " . request()->server('HTTP_USER_AGENT');

        $userTrace = UserTrace::select('id')->where('pat_id', $tokenId)->first();

        $data = [
            'causer_type' => $this->getpostclass('user'),
            'causer_id' => $userId,
            'activity' => 'logout',
            'model_id' => $userTrace ? $userTrace->id : null,
            'model_type' => $this->getpostclass('usertrace'),
            'label' => $label,
            'pat_id' => $this->getUserTokenId(),
        ];

        Activity::create($data);
    }

    public function checkIfUserShouldBeBanned(User $user)
    {
        // check if user is whitelisted
        if ($user->whitelisted) {
            return false;
        }

        // check for settings
        $shouldCheckBan = Settings::where('key', 'user-ban-checka')->first();

        if ($shouldCheckBan != null && (int) $shouldCheckBan->value == 0) {
            return false;
        }

        // check for ban locations
        $userLocation = $this->getLocationIspFromIpAddress(request()->ip());;

        $checkUserLocationShouldBeBanned = Ban::where('location', 'like', '%' . $userLocation . '%')->exists();

        if ($checkUserLocationShouldBeBanned) {
            return true;
        }

        // dd($userLocation, $banLocations, $checkUser, $banLocations->contains($userLocation));

        return false;
    }

    public function banUser(User $user)
    {
        $msg = null;
        // get latest ban level
        $oldBanHistory = BanHistory::where('user_id', $user->id)->latest()->first();

        $nextBanLevelShouldBeMoreThan = $oldBanHistory == null ? 1 : $this->getDaysBetweenTwoDates($oldBanHistory->ban_from, $oldBanHistory->ban_upto);

        $nextBanLevel = BanDays::where('days', '>', $nextBanLevelShouldBeMoreThan)->first();

        if ($nextBanLevel) {
            $msg  = "Banned for $nextBanLevel->days days due to login form restricted location";
            DB::transaction(function () use ($user, $nextBanLevel, $msg) {
                // delete all tokens
                DB::table('personal_access_tokens')->where('tokenable_type', User::class)->where('tokenable_id', $user->id)->delete();
                // update all past records to todays date
                BanHistory::where('user_id', $user->id)->where('ban_upto', '>=', Carbon::now()->startOfDay())->update(['ban_upto' => Carbon::now()]);
                // update user status
                $user->update(['status' => 0]);
                // create a ban history record
                $ban = BanHistory::create([
                    'user_id' => $user->id,
                    'ban_from' => Carbon::now()->startOfDay(),
                    'ban_upto' => Carbon::now()->startOfDay()->addDays($nextBanLevel->days),
                    'reason' => $msg
                ]);

                $banMailContent = BanHistory::with('user')->find($ban->id);

                Mail::to($user->email)->send(new SendBannedUserMail($banMailContent));
            });
        }
        return $msg;
    }

    public function getDaysBetweenTwoDates($fromDate, $toDate)
    {
        $pastDate = Carbon::parse($fromDate);
        $futureDate =  Carbon::parse($toDate);

        return $pastDate->diffInDays($futureDate);
    }
}