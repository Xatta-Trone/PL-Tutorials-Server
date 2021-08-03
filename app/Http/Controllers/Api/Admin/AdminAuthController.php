<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
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

        $admin = Admin::where('email', $validatedData['email'])->firstOrFail();

        if (!$admin || !Hash::check($validatedData['password'], $admin->password)) {
            return response()->json([
                'message' => 'Invalid login details',
            ], 401);
        }

        $token = $admin->createToken('auth_token', ['type:admin'])->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $admin,
        ]);
    }

    public function me(Request $request)
    {
        // return auth()->guard('admin')->user();
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
