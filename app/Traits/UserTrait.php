<?php

namespace App\Traits;

use App\Models\User\User;
use Illuminate\Support\Str;
use App\Mail\UserLoginDetails;
use App\Models\Admin\UserData;
use App\Models\User\UserDevice;
use App\Mail\UserPasswordUpdate;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UserDeviceCreateRequest;
use App\Http\Requests\UserDeviceUpdateRequest;
use GuzzleHttp\Psr7\Request;
use hisorange\BrowserDetect\Parser as Browser;


trait UserTrait
{
    public static $USER_ALREADY_REGISTERED = 'USER_ALREADY_REGISTERED';
    public static $USER_CREATED = 'USER_CREATED';
    public static $USER_CREATION_ERROR = 'USER_CREATION_ERROR';

    public static $USER_NOT_FOUND = 'USER_NOT_FOUND';
    public static $USER_FOUND = 'USER_FOUND';

    public static $USER_NOT_UPDATED = 'USER_NOT_UPDATED';
    public static $USER_UPDATED = 'USER_UPDATED';

    public static $USER_NOT_DELETED = 'USER_NOT_DELETED';
    public static $USER_DELETED = 'USER_DELETED';

    public static $USER_NOT_RESTORED = 'USER_NOT_RESTORED';
    public static $USER_RESTORED = 'USER_RESTORED';

    public static $USER_NOT_PASSWORD_RESET = 'USER_NOT_PASSWORD_RESET';
    public static $USER_PASSWORD_RESET = 'USER_PASSWORD_RESET';
    public static $USER_OLD_PASSWORD_DOES_NOT_MATCH = 'USER_OLD_PASSWORD_DOES_NOT_MATCH';
    public static $USER_NEW_PASSWORDS_DO_NOT_MATCH = 'USER_NEW_PASSWORDS_DO_NOT_MATCH';
    public static $USER_PASSWORD_CHANGED_SUCCESSFULLY = 'USER_PASSWORD_CHANGED_SUCCESSFULLY';
    public static $USER_PASSWORD_CHANGE_ERROR = 'USER_PASSWORD_CHANGE_ERROR';
    public static $ACCOUNT_NOT_ACTIVE = 'ACCOUNT_NOT_ACTIVE';


    public static $DEVICE_SAVED = 'DEVICE_SAVED';
    public static $DEVICE_SAVE_ERROR = 'DEVICE_SAVE_ERROR';
    public static $DEVICE_UPDATED = 'DEVICE_UPDATED';
    public static $DEVICE_UPDATE_ERROR = 'DEVICE_UPDATE_ERROR';
    public static $DEVICE_FOUND = 'DEVICE_FOUND';
    public static $DEVICE_NOT_FOUND = 'DEVICE_NOT_FOUND';
    public static $DEVICE_DELETED = 'DEVICE_DELETED';
    public static $DEVICE_DELETE_ERROR = 'DEVICE_DELETE_ERROR';
    public static $ERROR_MAXIMUM_DEVICE_REACHED = 'ERROR_MAXIMUM_DEVICE_REACHED';
    public static $DEVICE_ALREADY_ADDED = 'DEVICE_ALREADY_ADDED';



    public function studentIdWithoutPrefix($student_id)
    {
        $student_id = strtolower($student_id);
        return (substr($student_id, 0, 1) == 's') ? substr($student_id, 3) : $student_id;
    }

    public function createNewAccount($userData,  $updateUserData = null)
    {
        // add max user devices
        $userData = array_merge($userData, ['max_devices' => config('user.allowed_device_number')]);

        $userPassword = $this->randomPassword();
        $userData['password'] = bcrypt($userPassword);
        $userData['student_id'] = $this->studentIdWithoutPrefix($userData['student_id']);
        $userData['user_letter'] = $this->userLetter($userData['name']);
        $user = User::create($userData);
        $user->password = $userPassword;

        if ($user) {
            if ($updateUserData != null) {

                $updateUserDataStat = UserData::where('id', $updateUserData)->get()->first();
                $updateUserDataStat->update(['status' => 1]);
                // dd($updateUserDataStat);
            }

            Mail::to($user['email'])->send(new UserLoginDetails($user));
            $this->saveAdminActivity('added', $user->id, 'user', $user->student_id, ['oldData' => null, 'newData' => $user->toArray()]);


            return response()->json([
                'message' => self::$USER_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$USER_CREATION_ERROR,
                'status' => 'false'
            ], 422);
        }
    }

    public function randomPassword($len = 8)
    {
        return Str::random($len);
    }

    public function userLetter($name = '')
    {
        $array = explode(" ", $name);
        if (count($array) == 1) {
            return substr(
                $array[0],
                0,
                1
            );
        } elseif ($array[0] != 'Md' && $array[0] != 'Md.' && $array[0] != 'Mohammad') {
            return substr(
                $array[0],
                0,
                1
            );
        } else {
            return substr(
                $array[1],
                0,
                1
            );
        }
    }

    public function resetuserpassword($user)
    {
        $userPassword = $this->randomPassword();
        $userpassHashed = bcrypt($userPassword);

        $u = User::find($user->id);

        $status = $u->update(['password' => $userpassHashed]);
        $user->password = $userPassword;

        if ($status) {
            Mail::to($user['email'])->send(new UserPasswordUpdate($user));
            $this->saveAdminActivity('updated_password', $user->id, 'user', $user->student_id, ['oldData' => null, 'newData' => null]);

            return response()->json([
                'message' => self::$USER_PASSWORD_RESET,
                'status' => 'true'
            ], 200);
        }

        return response()->json([
            'message' => self::$USER_NOT_PASSWORD_RESET,
            'status' => 'false'
        ], 422);
    }

    public function saveDevice(UserDeviceCreateRequest $request)
    {

        $browser_info = (new Browser())->detect();
        $deviceName = $request->has('deviceName') ? $request->deviceName : $this->getBrowser($browser_info);
        // dummy api for local dev
        $ipAddress = request()->ip() == "127.0.0.1" ? '92.202.150.106' : request()->ip();
        $location_info = $this->getLocationInfo($ipAddress);

        $data = [
            'fingerprint' => $request->fingerprint,
            'device' => $deviceName,
            'device_ua' => request()->server('HTTP_USER_AGENT'),
            'ip_address' => $request->ip(),
            'location_json' => json_encode($location_info),
            'location' => $this->getLocation($location_info),
            'user_id' => $request->user()->id
        ];

        return UserDevice::create($data);
    }

    public function deviceUpdate(UserDeviceUpdateRequest $request, UserDevice $userDevice)
    {

        // $userDevice =  UserDevice::where('id', $id)->get()->first();
        if ($userDevice->fingerprint != $request->fingerprint) {
            return false;
        }

        $browser_info = (new Browser())->detect();
        $deviceName = $request->has('deviceName') ? $request->deviceName : $this->getBrowser($browser_info);
        // dummy api for local dev
        $ipAddress = request()->ip() == "127.0.0.1" ? '92.202.150.106' : request()->ip();
        $location_info = $this->getLocationInfo($ipAddress);

        $data = [
            'device' => $deviceName,
            'device_ua' => request()->server('HTTP_USER_AGENT'),
            'ip_address' => $request->ip(),
            'location_json' => json_encode($location_info),
            'location' => $this->getLocation($location_info),
        ];

        return $userDevice->update($data);
    }
}
