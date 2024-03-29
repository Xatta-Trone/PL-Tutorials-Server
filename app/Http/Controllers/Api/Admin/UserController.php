<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\User\User;
use App\Traits\UserTrait;
use Illuminate\Http\Request;
use App\Models\Admin\Activity;
use App\Models\Admin\UserData;
use App\Models\Admin\UserTrace;
use App\Models\User\UserDevice;
use App\Http\Controllers\Controller;
use App\Models\Admin\WhitelistedData;
use App\Http\Services\VueTable2Service;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

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
        if (!request()->user()->hasPermission('user_show')) {
            return $this->noIndexPermissionResponse();
        }

        $u = User::query();

        if (request()->input('type') == 'deleted') {
            $u->onlyTrashed();
        }

        $t = new VueTable2Service();

        return $t->get($u, [
            'id', 'name', 'email', 'student_id', 'status', 'deleted_at', 'created_at'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        if (!request()->user()->hasPermission('user_create')) {
            return  $this->noPermissionResponse();
        }

        // return $request->validated();
        $student_id_without_prefix = $request->student_id = $this->studentIdWithoutPrefix($request->student_id);

        $checkForStudentInDB = UserData::select('student_name', 'student_id', 'id', 'status')->where('student_id', 'like', '%'.$student_id_without_prefix.'%')->get()->first();

        if ($checkForStudentInDB && $checkForStudentInDB->status == 1) {
            return response()->json([
                'message' => self::$USER_ALREADY_REGISTERED,
                'status' => 'false',
            ], 422);
        }

        $checkinUsers = User::where('student_id', 'like', '%'.$student_id_without_prefix.'%')->orWhere('email', '=', $request->email)->get()->first();

        if ($checkinUsers) {
            return response()->json([
                'message' => self::$USER_ALREADY_REGISTERED,
                'status' => 'false',
            ], 422);
        }

        $userdata = $checkForStudentInDB != null ? array_merge($request->validated(), ['name' => $checkForStudentInDB->student_name, 'student_id' => $student_id_without_prefix, 'max_devices' => config('user.allowed_device_number')]) : array_merge($request->validated(), ['student_id' => $student_id_without_prefix, 'max_devices' => config('user.allowed_device_number')]);

        return $this->createNewAccount($userdata, $checkForStudentInDB != null ? $checkForStudentInDB->id : null, true);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!request()->user()->hasPermission('user_show')) {
            return  $this->noPermissionResponse();
        }


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
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        if (!request()->user()->hasPermission('user_update')) {
            return  $this->noPermissionResponse();
        }


        $user = User::findOrFail($id);
        $userOld =  $user->replicate();

        $user->update($request->validated());
        $this->saveAdminUpdateActivity($user->id, 'user', $user->student_id, $userOld, $user->getChanges());
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
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!request()->user()->hasPermission('user_delete')) {
            return  $this->noPermissionResponse();
        }


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
            $checkForStudentInDB = UserData::select('id', 'status', 'student_id')->where('student_id', 'like', '%'.$user->student_id.'%')->get()->first();
            $user->forceDelete();

            if ($checkForStudentInDB) {
                $checkForStudentInDB->update(['status' => 0]);
            }
        } else {
            $user->update(['status' => 0, 'deleted_at' => now()]);
        }

        $postOld =  $user->replicate();

        $this->saveAdminDeleteActivity($user->id, 'user', $user->student_id, $postOld);

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

    public function deleteSavedDevice($id)
    {
        if (!request()->user()->hasPermission('user_update')) {
            return  $this->noPermissionResponse();
        }

        $device = UserDevice::find($id);

        if ($device == null) {
            return response()->json([
                'message' => self::$DEVICE_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }

        if ($device->delete()) {
            return response()->json([
                'message' => self::$DEVICE_DELETED,
                'status' => 'true',
            ], 200);
        }

        return response()->json([
            'message' => self::$DEVICE_DELETE_ERROR,
            'status' => 'false',
        ], 422);
    }

    public function restore($id)
    {
        if (!request()->user()->hasPermission('user_update')) {
            return  $this->noPermissionResponse();
        }


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
        if (!request()->user()->hasPermission('user_password')) {
            return  $this->noPermissionResponse();
        }


        $user = User::find($id);

        if ($user == null) {
            return response()->json([
                'message' => self::$USER_NOT_FOUND,
                'status' => 'false',
            ], 404);
        }

        return $this->resetuserpassword($user);
    }

    public function userActivity($id)
    {
        if (!request()->user()->hasPermission('user_show')) {
            return $this->noIndexPermissionResponse();
        }

        $query = request()->input('query', null);
        $limit = request()->input('limit', 10);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 0);
        $byColumn = request()->input('byColumn', 1);

        $activiey = Activity::query()->where('causer_type', 'App\Models\User\User')->where('causer_id', $id)->select(['id', 'activity', 'label', 'created_at', 'pat_id']);

        if ($query != null) {
            $activiey = $activiey->where('activity', 'LIKE', "%{$query}%");
            $activiey = $activiey->orWhere('label', 'LIKE', "%{$query}%");
        }

        $activiey = $activiey->skip(($page - 1) * $limit)->take($limit)->orderBy($orderBy, $ascending == 1 ? 'asc' : 'desc')->get();

        return response()->json([
            'data' => $activiey->toArray(),
            'count' => Activity::where('causer_type', get_class(new User()))->where('causer_id', $id)->count(),
        ]);
    }

    public function userLocation($id)
    {
        if (!request()->user()->hasPermission('user_show')) {
            return $this->noIndexPermissionResponse();
        }

        $query = request()->input('query', null);
        $limit = request()->input('limit', 10);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 0);
        $byColumn = request()->input('byColumn', 1);

        $columns = ['id', 'user_ip', 'location', 'device', 'fingerprint', 'created_at', 'user_id', 'pat_id'];

        $activiey = UserTrace::query()->select($columns);

        if ($query != null) {
            foreach ($columns as $key => $value) {
                if ($key == 0) {
                    $activiey = $activiey->where($value, 'LIKE', "%{$query}%");
                } else {
                    $activiey = $activiey->orWhere($value, 'LIKE', "%{$query}%");
                }
            }
        }

        $activiey = $activiey->where('user_id', $id)->skip(($page - 1) * $limit)->take($limit)->orderBy($orderBy, $ascending == 1 ? 'asc' : 'desc')->get();

        return response()->json([
            'data' => $activiey->toArray(),
            'count' => UserTrace::where('user_id', $id)->count(),
        ]);
    }

    public function userActivityByDeviceId($deviceId)
    {
        if (!request()->user()->hasPermission('user_show')) {
            return $this->noIndexPermissionResponse();
        }

        $query = request()->input('query', null);
        $limit = request()->input('limit', 10);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 0);
        $byColumn = request()->input('byColumn', 1);

        $columns = ['id', 'user_ip', 'location', 'device', 'fingerprint', 'created_at', 'user_id', 'pat_id'];

        $activiey = UserTrace::query()->select($columns)->with('user:id,name,student_id');

        if ($query != null) {
            foreach ($columns as $key => $value) {
                if ($key == 0) {
                    $activiey = $activiey->where($value, 'LIKE', "%{$query}%");
                } else {
                    $activiey = $activiey->orWhere($value, 'LIKE', "%{$query}%");
                }
            }
        }

        $activiey = $activiey->where('fingerprint', $deviceId);

        $total = $activiey->count();

        $activiey = $activiey->skip(($page - 1) * $limit)->take($limit)->orderBy($orderBy, $ascending == 1 ? 'asc' : 'desc')->get();

        return response()->json([
            'data' => $activiey->toArray(),
            'count' => $total,
        ]);
    }

    public function userActivityByIpAddress($ipAddress)
    {
        if (!request()->user()->hasPermission('user_show')) {
            return $this->noIndexPermissionResponse();
        }

        $query = request()->input('query', null);
        $limit = request()->input('limit', 10);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 0);
        $byColumn = request()->input('byColumn', 1);

        $columns = ['id', 'user_ip', 'location', 'device', 'fingerprint', 'created_at', 'user_id', 'pat_id'];

        $activiey = UserTrace::query()->select($columns)->with('user:id,name,student_id');

        if ($query != null) {
            foreach ($columns as $key => $value) {
                if ($key == 0) {
                    $activiey = $activiey->where($value, 'LIKE', "%{$query}%");
                } else {
                    $activiey = $activiey->orWhere($value, 'LIKE', "%{$query}%");
                }
            }
        }

        $activiey = $activiey->where('user_ip', $ipAddress)->skip(($page - 1) * $limit)->take($limit)->orderBy($orderBy, $ascending == 1 ? 'asc' : 'desc')->get();

        return response()->json([
            'data' => $activiey->toArray(),
            'count' => UserTrace::where('user_ip', $ipAddress)->count(),
        ]);
    }

    public function userActivityByLogin($patId)
    {
        if (!request()->user()->hasPermission('user_show')) {
            return $this->noIndexPermissionResponse();
        }

        $query = request()->input('query', null);
        $limit = request()->input('limit', 10);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 1);
        $byColumn = request()->input('byColumn', 1);

        $activiey = Activity::query()->where('causer_type', 'App\Models\User\User')->where('pat_id', $patId)->select(['id', 'activity', 'label', 'created_at', 'causer_id']);

        if ($query != null) {
            $activiey = $activiey->where('activity', 'LIKE', "%{$query}%");
            $activiey = $activiey->orWhere('label', 'LIKE', "%{$query}%");
        }

        $activiey = $activiey->skip(($page - 1) * $limit)->take($limit)->orderBy($orderBy, $ascending == 1 ? 'asc' : 'desc')->get();

        return response()->json([
            'data' => $activiey->toArray(),
            'count' => Activity::where('causer_type', get_class(new User()))->where('pat_id', $patId)->count(),
        ]);
    }

    public function userSavedDevices($userId)
    {
        if (!request()->user()->hasPermission('user_show')) {
            return $this->noIndexPermissionResponse();
        }

        $query = request()->input('query', null);
        $limit = request()->input('limit', 10);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 1);
        $byColumn = request()->input('byColumn', 1);

        $activiey = UserDevice::query()->where('user_id', $userId)->select(['id','ip_address', 'location', 'device', 'fingerprint', 'platform', 'created_at']);

        if ($query != null) {
            $activiey = $activiey->where('activity', 'LIKE', "%{$query}%");
            $activiey = $activiey->orWhere('label', 'LIKE', "%{$query}%");
        }

        $activiey = $activiey->skip(($page - 1) * $limit)->take($limit)->orderBy($orderBy, $ascending == 1 ? 'asc' : 'desc')->get();

        return response()->json([
            'data' => $activiey->toArray(),
            'count' => UserDevice::query()->where('user_id', $userId)->count(),
        ]);
    }

    public function userWhitelistedData($userId)
    {
        if (!request()->user()->hasPermission('user_show')) {
            return $this->noIndexPermissionResponse();
        }

        $query = request()->input('query', null);
        $limit = request()->input('limit', 10);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 1);
        $byColumn = request()->input('byColumn', 1);

        $activiey = WhitelistedData::query()->where('user_id', $userId)
            ->select(['id', 'access_type', 'data_type', 'data', 'created_at']);

        if ($query != null) {
            $activiey = $activiey->where('access_type', 'LIKE', "%{$query}%");
            $activiey = $activiey->orWhere('data_type', 'LIKE', "%{$query}%");
            $activiey = $activiey->orWhere('data', 'LIKE', "%{$query}%");
        }

        $activiey = $activiey->skip(($page - 1) * $limit)->take($limit)->orderBy($orderBy, $ascending == 1 ? 'asc' : 'desc')->get();

        return response()->json([
            'data' => $activiey->toArray(),
            'count' => WhitelistedData::query()->where('user_id', $userId)->count(),
        ]);
    }
}
