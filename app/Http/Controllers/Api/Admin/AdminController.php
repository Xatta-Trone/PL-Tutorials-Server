<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Role;
use App\Models\User\User;
use App\Traits\UserTrait;
use App\Traits\AdminTrait;
use App\Models\Admin\Admin;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Activity;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCreateRequest;
use App\Http\Requests\AdminUpdateRequest;
use App\Http\Services\CustomVueTable2Service;

class AdminController extends Controller
{
    use AdminTrait, UserTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = request()->input('query', null);
        $limit = request()->input('limit', 10);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 0);
        $byColumn = request()->input('byColumn', 1);
        $cols = ['id', 'name', 'student_id', 'email', 'status'];


        $activiey = Admin::query()->select($cols);

        if ($query != null) {

            foreach ($cols as $key => $value) {
                if ($key == 0) {
                    $activiey = $activiey->where($value, 'LIKE', "%{$query}%");
                } else {
                    $activiey = $activiey->orWhere($value, 'LIKE', "%{$query}%");
                }
            }
        } else {
            $activiey = $activiey->with('roles:id,name');
        }

        $activiey = $activiey->with('roles:id,name')->skip(($page - 1) * $limit)->take($limit)->orderBy($orderBy, $ascending == 1 ? 'asc' : 'desc')->get();




        return response()->json([
            'data' => $activiey->toArray(),
            'count' => Admin::count(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminCreateRequest $request)
    {


        $student_id_without_prefix = $request->student_id = $this->studentIdWithoutPrefix($request->student_id);



        $find_user = User::where('student_id', $request->student_id)->get()->first();

        if (!$find_user) {
            return response()->json([
                'message' => self::$ADMIN_MUST_HAVE_USER_ACCOUNT,
                'status' => 'false',
            ], 422);
        }

        $checkinUsers = Admin::where('student_id', 'like', '%' . $student_id_without_prefix . '%')->orWhere('email', '=', $request->email)->get()->first();

        if ($checkinUsers) {
            return response()->json([
                'message' => self::$USER_ALREADY_REGISTERED,
                'status' => 'false',
            ], 422);
        }


        $userdata = array_merge($request->validated(), ['student_id' => $student_id_without_prefix]);



        return $this->createNewAdminAccount($userdata, $request->roles);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Admin::with('roles:id,name')->find($id);
        if ($user) {
            return response()->json([
                'message' => self::$ADMIN_FOUND,
                'status' => 'true',
                'user' => $user,
            ], 200);
        }

        return response()->json([
            'message' => self::$ADMIN_NOT_FOUND,
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
    public function update(AdminUpdateRequest $request, $id)
    {
        $user = Admin::findOrFail($id);
        $role = Role::find($request->roles);
        $user->syncRoles($role);

        $user->update(Arr::except($request->validated(), ['roles']));

        // dd($user);
        if ($user) {
            return response()->json([
                'message' => self::$ADMIN_UPDATED,
                'status' => 'true',
            ], 200);
        }

        return response()->json([
            'message' => self::$ADMIN_NOT_UPDATED,
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
        $user = Admin::query();

        $user = $user->find($id);

        $user->syncRoles([]);
        $user->delete();

        // dd($user);

        if ($user == null) {
            return response()->json([
                'message' => self::$ADMIN_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }



        if ($user) {
            return response()->json([
                'message' => self::$ADMIN_DELETED,
                'status' => 'true',
            ], 200);
        }

        return response()->json([
            'message' => self::$ADMIN_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }

    public function adminActivity($id)
    {
        $query = request()->input('query', null);
        $limit = request()->input('limit', 10);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 0);
        $byColumn = request()->input('byColumn', 1);

        $activiey = Activity::query()->where('causer_type', 'App\Models\Admin\Admin')->where('causer_id', $id)->select(['id', 'activity', 'label', 'created_at']);

        if ($query != null) {
            $activiey = $activiey->where('activity', 'LIKE', "%{$query}%");
            $activiey = $activiey->orWhere('label', 'LIKE', "%{$query}%");
        }

        $activiey = $activiey->skip(($page - 1) * $limit)->take($limit)->orderBy($orderBy, $ascending == 1 ? 'asc' : 'desc')->get();

        return response()->json([
            'data' => $activiey->toArray(),
            'count' => Activity::where('causer_type', get_class(new Admin()))->where('causer_id', $id)->count(),
        ]);
    }
}