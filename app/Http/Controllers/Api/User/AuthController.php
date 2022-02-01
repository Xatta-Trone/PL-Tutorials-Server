<?php

namespace App\Http\Controllers\Api\User;

use Carbon\Carbon;
use App\Models\User\User;
use App\Traits\UserTrait;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Traits\UserAuthTrait;
use App\Models\admin\UserData;
use App\Models\Admin\UserTrace;
use App\Traits\UserRegisterTrait;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    use UserAuthTrait, UserRegisterTrait, UserTrait;
    public function register(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        // dd($validatedData);
        //data pre-process
        $student_id_without_prefix = $request->student_id = $this->studentIdWithoutPrefix($validatedData['student_id']);



        //check if already registered
        $checkinUsers = User::where('student_id', 'like', '%' . $student_id_without_prefix . '%')->orWhere('email', '=', $request->email)->get()->first();
        if ($checkinUsers) {
            return response()->json([
                'message' => self::$USER_ALREADY_REGISTERED,
                'status' => 'false',
            ], 422);
        }

        //check in our db



        $checkForStudentInDB = UserData::select('student_name', 'student_id', 'id', 'status')->where('student_id', 'like', '%' . $student_id_without_prefix . '%')->get()->first();

        if ($checkForStudentInDB && $checkForStudentInDB->status == 1) {
            return response()->json([
                'message' => self::$USER_ALREADY_REGISTERED,
                'status' => 'false',
            ], 422);
        }





        $userdata = $checkForStudentInDB != null ? array_merge($request->validated(), ['name' => $checkForStudentInDB->student_name, 'student_id' => $student_id_without_prefix]) : array_merge($request->validated(), ['student_id' => $student_id_without_prefix]);

        return $this->createNewAccount($userdata, $checkForStudentInDB != null ? $checkForStudentInDB->id : null);

        // $user = User::create([
        //     'name' => $validatedData['name'],
        //     'email' => $validatedData['email'],
        //     'password' => Hash::make($validatedData['password']),
        // ]);

        // $token = $user->createToken('auth_token')->plainTextToken;

        // return response()->json([
        //     'access_token' => $token,
        //     'token_type' => 'Bearer',
        //     'user' => $user,
        // ]);
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
