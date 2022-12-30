<?php

namespace App\Traits;

use App\Models\Admin\Ban;
use App\Models\User\User;
use App\Models\Admin\BanDays;
use App\Models\Admin\Activity;
use App\Models\Admin\Settings;
use Illuminate\Support\Carbon;
use App\Models\Admin\UserTrace;
use App\Mail\SendBannedUserMail;
use App\Models\Admin\BanHistory;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\UserTraceData;
use App\Models\Admin\WhitelistedData;
use hisorange\BrowserDetect\Parser;
use Google\Service\Calendar\Setting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use hisorange\BrowserDetect\Parser as Browser;
use Spatie\DiscordAlerts\Facades\DiscordAlert;


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

        // return $location_data->isp . ',' . $location_data->city . ',' . $location_data->country;
        return $location_data->isp . ',' . $location_data->city . ',' . $location_data->country_name;
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
        $ipApiKey = env('IP_API_KEY', 'e0f405abbe884c7eb6b6f37e79b4884b');
        // $loc = file_get_contents("http://ip-api.com/json/" . $checkedIpAddress);
        // $loc = file_get_contents("https://api.ipgeolocation.io/ipgeo?apiKey={$ipApiKey}&ip=" . $checkedIpAddress);
        // $location_info = json_decode($loc);
        // if ($location_info->status == 'fail') {
        //     $loc = file_get_contents("https://extreme-ip-lookup.com/json/" . $ip_address);
        // }
        // return $loc;
        $response = Http::get("https://api.ipgeolocation.io/ipgeo?apiKey=$ipApiKey&ip=$checkedIpAddress");
        return json_encode($response->json());
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

    public function checkForVPN()
    {
        // check for settings
        $shouldCheckBan = Settings::where(
            'key',
            'proxy-check'
        )->first();

        if ($shouldCheckBan != null && (int) $shouldCheckBan->value == 0) {
            return false;
        }

        $email = config('mail.from.address', 'pltutorialsbuet@gmail.com');
        $ip = config('app.env') != 'production' ? '92.202.150.106' : request()->ip();
        $proxyKey = env('PROXY_API_KEY', '9f2024-9b7e38-11u232-nu5577');

        // $ipInfo = Http::get("http://check.getipintel.net/check.php?ip={$ip}&contact={$email}&format=json&flags=m");

        // $ipInfoRes = $ipInfo->json();

        // if ($ipInfoRes['status'] == 'success' && floatval($ipInfoRes['result']) > 0.9) {
        //     return true;
        // }

        $proxyCheck =  Http::get("https://proxycheck.io/v2/{$ip}?key={$proxyKey}&vpn=1&risk=1");

        $result = $proxyCheck->json();

        if ($result['status'] == "ok") {
            if ($result[$ip]['proxy'] == "yes" && ((int) $result[$ip]['risk'] > 85)) {
                return true;
            }
        }

        // dd($result, $result['status'], $result[$ip], $result[$ip]['risk']);
        return false;
    }

    public function checkIfUserShouldBeBanned(User $user)
    {
        $ipAddress =  request()->ip();


        // check if user is whitelisted
        if ($user->whitelisted) {
            return false;
        }

        // check for settings
        $shouldCheckBan = Settings::where(
            'key',
            'user-ban-check'
        )->first();



        if ($shouldCheckBan != null && (int) $shouldCheckBan->value == 0) {
            return false;
        }

        // check whitelisted locations

        // check for ban locations
        $userLocation = strtolower($this->getLocationIspFromIpAddress($ipAddress));

        // check for whitelisted locations
        $whitelistedUserDataLocationCheck = WhitelistedData::where('user_id', $user->id)->where('access_type', 'whitelisted')
        ->where(function ($q) use ($userLocation, $ipAddress) {
            $q->where('data', $ipAddress);
            $q->orWhere('data', $userLocation);
        })
        ->exists();

        if ($whitelistedUserDataLocationCheck) {
            return false;
        }

        $checkUserLocationShouldBeBanned = Ban::where('location', 'like', "%$userLocation%")->exists();
        // $checkUserLocationShouldBeBanned = Ban::where('location', $userLocation)->get();

        // dd(
        //     $user->whitelisted,
        //     $shouldCheckBan,
        //     (int) $shouldCheckBan->value == 0,
        //     $userLocation,
        //     $checkUserLocationShouldBeBanned
        // );

        if ($checkUserLocationShouldBeBanned) {
            return true;
        }

        // dd($userLocation, $banLocations, $checkUser, $banLocations->contains($userLocation));

        return false;
    }

    public function banUser(User $user, $reason = null)
    {
        $msg = null;
        // get latest ban level
        $oldBanHistory = BanHistory::where('user_id', $user->id)->latest()->first();

        $nextBanLevelShouldBeMoreThan = $oldBanHistory == null ? 1 : $this->getDaysBetweenTwoDates($oldBanHistory->ban_from, $oldBanHistory->ban_upto);

        $nextBanLevel = BanDays::where('days', '>', $nextBanLevelShouldBeMoreThan)->first();

        if ($nextBanLevel) {
            $msg  = "Banned for $nextBanLevel->days days";
            $msg  .= $reason ? $reason : " due to login form restricted location";
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
                    'ban_upto' => Carbon::now()->startOfDay()->addMinute()->addDays($nextBanLevel->days),
                    'reason' => $msg
                ]);

                $banMailContent = BanHistory::with('user')->find($ban->id);

                Mail::to($user->email)->send(new SendBannedUserMail($banMailContent));

                DiscordAlert::to('banCheck')->message("{$user->name}( {$user->student_id} ) ::{$msg}");
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
