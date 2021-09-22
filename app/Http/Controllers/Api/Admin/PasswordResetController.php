<?php

namespace App\Http\Controllers\Api\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Mail\PasswordResetNotificatoin;
use App\Models\Admin\Admin;
use App\Traits\PasswordResetTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PasswordResetController extends Controller
{
    use PasswordResetTrait;


    public function requestPassword(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        //get email
        $email = $request->input('email');

        //check in db
        $check = Admin::where('email', $email)->get()->first();

        if (!$check) {
            return response()->json([
                'message' => self::$ACCOUNT_DOES_NOT_EXISTS,
                'status' => 'false',

            ], 422);
        }

        //check if inactive
        if ($check->status == 0) {
            return response()->json([
                'message' => self::$ACCOUNT_NOT_ACTIVE,
                'status' => 'false',

            ], 422);
        }

        //create token
        $plainToken = $this->createToken($email);
        $hashedToken = Hash::make($plainToken);

        $insertData = DB::table('password_resets')->insert(['email' => $email, 'token' => $hashedToken, 'created_at' => now()]);

        // Send email

        Mail::to($email)->send(new PasswordResetNotificatoin($check, $hashedToken));

        if (!$insertData) {
            return response()->json([
                'message' => self::$TOKEN_CREATION_ERROR,
                'status' => 'false',

            ], 422);
        }

        return response()->json([
            'message' => self::$TOKEN_CREATED_SUCCESSFULLY,
            'status' => 'true',
            'token' => $hashedToken,
            'expires' => config('auth.passwords.users.expire')

        ], 201);
    }


    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'token' => 'required',
            'password' => 'bail|required|confirmed|min:8',
        ]);

        $email = $request->input('email');
        $token = $request->input('token');
        $password = $request->input('password');

        //check the time

        $data = DB::table('password_resets')->where('email', $email)->where('token', $token)->get()->first();

        if (!$data) {
            return response()->json([
                'message' => self::$RECORD_DOES_NOT_EXISTS,
                'status' => 'false',
            ], 422);
        }

        //check timer

        if (Carbon::parse($data->created_at)->diffInMinutes(now()) > config('auth.passwords.users.expire')) {
            //if expired
            return response()->json([
                'message' => self::$TOKEN_EXPIRED,
                'status' => 'false',
            ], 422);
        }

        // change password

        // get admin

        $admin = Admin::where('email', $email)->get()->first();
        //check for record
        if (!$admin) {
            return response()->json([
                'message' => self::$ACCOUNT_DOES_NOT_EXISTS,
                'status' => 'false',

            ], 422);
        }
        //check if inactive
        if ($admin->status == 0) {
            return response()->json([
                'message' => self::$ACCOUNT_NOT_ACTIVE,
                'status' => 'false',

            ], 422);
        };

        if ($admin->update(['password' => Hash::make($password)])) {
            DB::table('password_resets')->where('email', $email)->where('token', $token)->delete();
            return response()->json([
                'message' => self::$PASSWORD_UPDATED_SUCCESSFULLY,
                'status' => 'true',

            ], 200);
        } else {
            return response()->json([
                'message' => self::$PASSWORD_NOT_UPDATED,
                'status' => 'false',

            ], 422);
        }
    }
}
