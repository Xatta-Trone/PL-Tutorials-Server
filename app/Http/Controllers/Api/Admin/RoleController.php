<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Role;
use App\Traits\RoleTrait;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleCreateRequest;
use App\Http\Requests\RoleUpdateRequest;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Permission;

class RoleController extends Controller
{
    use RoleTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!request()->user()->hasPermission('role_show')) {
            return $this->noIndexPermissionResponse();
        }

        $vs = new CustomVueTable2Service();
        return  $vs->get(new Role(), [
            'id', 'name',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleCreateRequest $request)
    {
        if (!request()->user()->hasPermission('role_create')) {
            return  $this->noPermissionResponse();
        }

        $permisssions = Permission::find($request->permisssions);

        // dd($permisssions);


        $post =  Role::create(Arr::except($request->validated(), 'permissions'));
        $post->syncPermissions($permisssions);


        if ($post) {
            return response()->json([
                'message' => self::$ROLE_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$ROLE_CREATION_ERROR,
                'status' => 'false'
            ], 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!request()->user()->hasPermission('role_show')) {
            return  $this->noPermissionResponse();
        }

        $post = Role::with('permissions')->find($id);
        if ($post) {
            return response()->json([
                'message' => self::$ROLE_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$ROLE_NOT_FOUND,
            'status' => 'false',
            'post' => null,
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleUpdateRequest $request, $id)
    {
        if (!request()->user()->hasPermission('role_update')) {
            return  $this->noPermissionResponse();
        }

        $post = Role::findOrFail($id);
        $permisssions = Permission::find($request->permissions);
        $post->update(Arr::except($request->validated(), 'permissions'));
        $post->syncPermissions($permisssions);
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$ROLE_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$ROLE_NOT_UPDATED,
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
        if (!request()->user()->hasPermission('role_delete')) {
            return  $this->noPermissionResponse();
        }

        $post = Role::find($id);


        if ($post == null) {
            return response()->json([
                'message' => self::$ROLE_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }

        $post->syncPermissions([]);

        if ($post->delete()) {
            return response()->json([
                'message' => self::$ROLE_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$ROLE_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}