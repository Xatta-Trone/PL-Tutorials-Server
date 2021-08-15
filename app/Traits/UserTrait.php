<?php

namespace App\Traits;

use App\Mail\UserLoginDetails;
use App\Mail\UserPasswordUpdate;
use App\Models\admin\UserData;
use App\Models\User\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

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





    public function studentIdWithoutPrefix($student_id)
    {
        $student_id = strtolower($student_id);
        return (substr($student_id, 0, 1) == 's') ? substr($student_id, 3) : $student_id;
    }

    public function createNewAccount($userdata,  $updateUserdata = null)
    {

        $userPassword = $this->randomPassword();
        $userdata['password'] = bcrypt($userPassword);
        $userdata['student_id'] = $this->studentIdWithoutPrefix($userdata['student_id']);
        $userdata['user_letter'] = $this->userLetter($userdata['name']);
        $user = User::create($userdata);
        $user->password = $userPassword;

        if ($user) {
            if ($updateUserdata != null) {

                $updateUserdatau = UserData::where('id', $updateUserdata)->get()->first();
                $updateUserdatau->update(['status' => 1]);
                // dd($updateUserdatau);
            }

            Mail::to($user['email'])->send(new UserLoginDetails($user));
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
}
