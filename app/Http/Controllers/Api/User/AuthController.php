<?php

namespace App\Http\Controllers\Api\User;

use Carbon\Carbon;
use App\Models\User\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Traits\UserAuthTrait;
use App\Models\Admin\UserTrace;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    use UserAuthTrait;
    public function register(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        // dd($validatedData);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ]);
    }

    public function login(LoginRequest $request)
    {
        $validatedData = $request->validated();
        // dd($validatedData);


        $user = User::where('email', $validatedData['email'])->get()->first();

        // check if user has registered
        if (!$user) {
            return response()->json([
                'message' => 'No account found!',
            ], 401);
        }


        // check if profile is active
        if ($user->status == 0) {
            return response()->json([
                'message' => 'Account not active, please contact admins!',
            ], 401);
        }

        // check max authorized devices

        // $total_device  = UserTrace::distinct()->where('user_id', $user->id)->whereDate('created_at', '>=', Carbon::now()->subMonth())->get('fingerprint')->count();

        // return $total_device;


        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                'message' => 'Invalid login details!',
            ], 401);
        }


        $token = $user->createToken('auth_token', ['type:user'])->plainTextToken;

        $this->saveUserTrace($user->id, $request->fingerprint);

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ]);
    }

    public function me(Request $request)
    {
        return $request->user();
    }

    public function logout(Request $request)
    {
        return $request->user()->currentAccessToken()->delete();
    }

    public function logout_all(Request $request)
    {
        return $request->user()->tokens()->delete();
    }
}
