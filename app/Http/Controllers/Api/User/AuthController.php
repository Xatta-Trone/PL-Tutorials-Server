<?php

namespace App\Http\Controllers\Api\User;

use Carbon\Carbon;
use App\Models\User\User;
use App\Traits\UserTrait;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Traits\UserAuthTrait;
use App\Models\Admin\UserData;
use App\Models\Admin\UserTrace;
use App\Traits\UserRegisterTrait;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserPasswordResetRequest;

class AuthController extends Controller
{
    use UserAuthTrait, UserRegisterTrait, UserTrait;

    public function register(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        // dd($validatedData);
        //data pre-process
        $student_id_without_prefix = $request->student_id = $this->studentIdWithoutPrefix($validatedData['student_id']);
        $merit = sprintf("%04d", $validatedData['merit_position']);

        //check if already registered
        $checkinUsers = User::where('student_id',  $student_id_without_prefix)->orWhere('email', '=', $request->email)->get()->first();
        if ($checkinUsers) {
            return response()->json([
                'message' => self::$USER_ALREADY_REGISTERED,
                'status' => 'false',
            ], 422);
        }

        //check in our db

        $checkForStudentInDB = UserData::select('student_name', 'student_id', 'id', 'status', 'merit')
            ->where([['student_id', 'like', '%' . $student_id_without_prefix . '%'], ['hall_name', '=', $validatedData['hall_name']], ['merit', '=', $validatedData['merit']]])
            ->orWhere([['student_id', 'like',  '%' . $student_id_without_prefix . '%'], ['student_name',  $validatedData['name']], ['merit', '=', $validatedData['merit']]])
            ->get()->first();

        if (!$checkForStudentInDB) {
            return response()->json([
                'message' => 'NO_DATA_FOUND',
                'status' => 'false',
            ], 422);
        }


        if ($this->formatMeritPosition($checkForStudentInDB->merit) != $request->merit_position) {
            return response()->json([
                'message' => 'DATA_NOT_MATCHING',
                'status' => 'false',
            ], 422);
        }

        if ($checkForStudentInDB && $checkForStudentInDB->status == 1) {
            return response()->json([
                'message' => self::$USER_ALREADY_REGISTERED,
                'status' => 'false',
            ], 422);
        }

        return $this->createNewAccount(array_merge($request->validated(), ['student_id' => $student_id_without_prefix, 'name' => $checkForStudentInDB->student_name]), $checkForStudentInDB->id);

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
        // dd($validatedData, $request->platform);


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


        $checkIfUserShouldBeBanned = $this->checkIfUserShouldBeBanned($user);


        if ($checkIfUserShouldBeBanned) {
            $response = $this->banUser($user);
            return response()->json([
                'message' => $response ?? 'Account banned due to login from restricted locations.',
            ], 401);
        }


        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                'message' => 'Email or password incorrect !',
            ], 401);
        }


        $token = $user->createToken('auth_token', ['type:user'])->plainTextToken;

        $this->saveUserTrace($user->id, $request->fingerprint, $request->deviceName, $request->platform, $token);

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
        $this->saveLogoutEvent($request->user()->id, $request->user()->currentAccessToken()->id);
        return $request->user()->currentAccessToken()->delete();
    }

    public function logout_all(Request $request)
    {
        return $request->user()->tokens()->delete();
    }


    public function changeUserPassword(UserPasswordResetRequest $request)
    {
        $user = User::where('id', $request->user()->id)->get()->first();

        if (!$user) {
            return response()->json([
                'message' => self::$USER_NOT_FOUND,
                'status' => 'false',
            ], 404);
        }

        if ($user->status == 0) {
            return response()->json([
                'message' => self::$ACCOUNT_NOT_ACTIVE,
                'status' => 'false',
            ], 401);
        }

        if (!Hash::check($request->old_password, $user->password)) {
            return response()->json([
                'message' => self::$USER_OLD_PASSWORD_DOES_NOT_MATCH,
                'status' => 'false',
            ], 422);
        }

        if ($user->update(['password' => Hash::make($request->password)])) {
            return response()->json([
                'message' => self::$USER_PASSWORD_CHANGED_SUCCESSFULLY,
                'status' => 'true',
            ], 201);
        } else {
            return response()->json([
                'message' => self::$USER_PASSWORD_CHANGE_ERROR,
                'status' => 'false',
            ], 201);
        }
    }
}