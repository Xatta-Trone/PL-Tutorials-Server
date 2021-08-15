<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Services\VueTable2Service;
use App\Models\admin\UserData;
use App\Traits\UserTrait;

class UserController extends Controller
{
    use UserTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $u = User::query();

        if (request()->input('type') == 'deleted') {
            $u->onlyTrashed();
        }


        $t = new VueTable2Service();
        return $t->get($u, [
            'id', 'name', 'email', 'student_id', 'status', 'deleted_at'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        // return $request->validated();
        $student_id_without_prefix = $request->student_id = $this->studentIdWithoutPrefix($request->student_id);

        $checkForStudentInDB = UserData::select('student_name', 'student_id', 'id', 'status')->where('student_id', 'like', '%' . $student_id_without_prefix . '%')->get()->first();




        if ($checkForStudentInDB && $checkForStudentInDB->status == 1) {
            return response()->json([
                'message' => self::$USER_ALREADY_REGISTERED,
                'status' => 'false'
            ], 422);
        }

        $checkinUsers = User::where('student_id', 'like', '%' . $student_id_without_prefix . '%')->orWhere('email', '=', $request->email)->get()->first();

        if ($checkinUsers) {
            return response()->json([
                'message' => self::$USER_ALREADY_REGISTERED,
                'status' => 'false'
            ], 422);
        }

        $userdata = $checkForStudentInDB != null ? array_merge($request->validated(), ['name' => $checkForStudentInDB->student_name, 'student_id' => $student_id_without_prefix]) : array_merge($request->validated(), ['student_id' => $student_id_without_prefix]);

        return $this->createNewAccount($userdata,  $checkForStudentInDB != null ? $checkForStudentInDB->id : null);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json([
                'message' => self::$USER_FOUND,
                'status' => 'true',
                'user' => $user,
            ], 200);
        }

        return response()->json([
            'message' => self::$USER_NOT_FOUND,
            'status' => 'true',
            'user' => null,
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->validated());
        // dd($user);
        if ($user) {
            return response()->json([
                'message' => self::$USER_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$USER_NOT_UPDATED,
            'status' => 'false',
        ], 422);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::query();

        if (request()->input('forcedelete') == 'true') {
            $user = $user->withTrashed()->find($id);
        } else {
            $user = $user->find($id);
        }

        // dd($user);



        if ($user == null) {
            return response()->json([
                'message' => self::$USER_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }

        if (request()->input('forcedelete') == 'true') {

            $checkForStudentInDB = UserData::select('id', 'status', 'student_id')->where('student_id', 'like', '%' . $user->student_id . '%')->get()->first();
            $user->forceDelete();

            if ($checkForStudentInDB) {
                $checkForStudentInDB->update(['status' => 0]);
            }
        } else {
            $user->update(['status' => 0, 'deleted_at' => now()]);
        }

        if ($user) {
            return response()->json([
                'message' => self::$USER_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$USER_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }


    public function restore($id)
    {
        $user = User::withTrashed()->find($id);

        if ($user == null) {
            return response()->json([
                'message' => self::$USER_NOT_FOUND,
                'status' => 'false',
            ], 404);
        }

        $user->update(['status' => 1, 'deleted_at' => null]);

        if ($user) {
            return response()->json([
                'message' => self::$USER_RESTORED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$USER_NOT_RESTORED,
            'status' => 'false',
        ], 422);
    }

    public function passwordReset($id)
    {
        $user = User::find($id);

        if ($user == null) {
            return response()->json([
                'message' => self::$USER_NOT_FOUND,
                'status' => 'false',
            ], 404);
        }

        return $this->resetuserpassword($user);
    }
}
