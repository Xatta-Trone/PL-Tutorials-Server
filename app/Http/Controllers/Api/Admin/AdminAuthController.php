<?php

namespace App\Http\Controllers\Api\Admin;

use App\Traits\AuthTrait;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminProfileUpdateRequest;
use App\Models\User\User;
use App\Traits\PasswordResetTrait;

class AdminAuthController extends Controller
{
    use AuthTrait, PasswordResetTrait;
    // public function register(RegisterRequest $request)
    // {
    //     $validatedData = $request->validated();
    //     // dd($validatedData);

    //     $user = User::create([
    //         'name' => $validatedData['name'],
    //         'email' => $validatedData['email'],
    //         'password' => Hash::make($validatedData['password']),
    //     ]);

    //     $token = $user->createToken('auth_token')->plainTextToken;
    //     return response()->json([
    //         'access_token' => $token,
    //         'token_type' => 'Bearer',
    //     ]);
    // }

    public function login(AdminLoginRequest $request)
    {
        $validatedData = $request->validated();

        $admin = Admin::where('email', $validatedData['email'])->first();

        if ($admin == null) {
            return response()->json([
                'message' => self::$INVALID_EMAIL_PASSWORD,
            ], 401);
        }

        if ($admin->status == 0) {
            return response()->json([
                'message' => self::$ACCOUNT_NOT_ACTIVE,
            ], 401);
        }

        if (!$admin || !Hash::check($validatedData['password'], $admin->password)) {
            return response()->json([
                'message' => self::$INVALID_EMAIL_PASSWORD,
            ], 401);
        }

        $token = $admin->createToken('auth_token', ['type:admin'])->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $admin,
            'message' => self::$AUTH_SUCCESS,
        ]);
    }

    public function me(Request $request)
    {
        // return auth()->guard('admin')->user();
        return $request->user();
    }

    public function permissions(Request $request)
    {
        // return auth()->guard('admin')->user();
        return $request->user()->allPermissions()->pluck('name');
    }

    public function logout(Request $request)
    {
        $STATUS =  $request->user()->currentAccessToken()->delete();

        return response()->json([
            'code' => $STATUS,
            'message' => $STATUS == 1 ? self::$LOGGED_OUT : self::$SOMETHING_WENT_WRONG,
        ]);
    }

    public function logout_all(Request $request)
    {
        $STATUS =  $request->user()->tokens()->delete();
        return response()->json([
            'code' => $STATUS,
            'message' => $STATUS == 1 ? self::$LOGGED_OUT : self::$SOMETHING_WENT_WRONG,
        ]);
    }

    public function resetpassword(Request $request)
    {

        $request->validate([
            'password' => 'bail|required|confirmed|min:8',

            'id' => 'required'
        ]);
        $STATUS =  Admin::find($request->id)->update(['password' => Hash::make($request->password)]);
        return response()->json([
            'code' => $STATUS,
            'message' => $STATUS == 1 ? self::$PASSWORD_UPDATED_SUCCESSFULLY :
                self::$PASSWORD_NOT_UPDATED,
        ]);
    }

    public function updateprofile(AdminProfileUpdateRequest $request)
    {

        $STATUS =  Admin::find($request->id)->update(['name' => $request->name, 'email' => $request->email]);
        return response()->json([
            'code' => $STATUS,
            'message' => $STATUS == 1 ? self::$PASSWORD_UPDATED_SUCCESSFULLY :
                self::$PASSWORD_NOT_UPDATED,
        ]);
    }
}
