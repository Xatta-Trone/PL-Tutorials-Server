<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionCreateRequest;
use App\Http\Requests\PermissionUpdateRequest;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Permission;
use App\Traits\PermissionTrait;

class PermissionController extends Controller
{
    use PermissionTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!request()->user()->hasPermission('permission_show')) {
            return $this->noIndexPermissionResponse();
        }

        $vs = new CustomVueTable2Service();
        return  $vs->get(new Permission(), [
            'id', 'name',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionCreateRequest $request)
    {
        if (!request()->user()->hasPermission('permission_create')) {
            return  $this->noPermissionResponse();
        }

        $post =  Permission::create($request->validated());
        $this->saveAdminActivity('added', $post->id, 'permission', $post->name, ['oldData' => null, 'newData' => $post->toArray()]);



        if ($post) {
            return response()->json([
                'message' => self::$PERMISSION_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$PERMISSION_CREATION_ERROR,
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
        if (!request()->user()->hasPermission('permission_show')) {
            return  $this->noPermissionResponse();
        }

        $post = Permission::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$PERMISSION_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$PERMISSION_NOT_FOUND,
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
    public function update(PermissionUpdateRequest $request, $id)
    {
        if (!request()->user()->hasPermission('permission_update')) {
            return  $this->noPermissionResponse();
        }

        $post = Permission::findOrFail($id);
        $postOld =  $post->replicate();


        $post->update($request->validated());
        $this->saveAdminUpdateActivity($post->id, 'permission', $post->name, $postOld, $post->getChanges());
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$PERMISSION_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$PERMISSION_NOT_UPDATED,
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
        if (!request()->user()->hasPermission('permission_delete')) {
            return  $this->noPermissionResponse();
        }

        $post = Permission::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$PERMISSION_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }
        $postOld =  $post->replicate();

        $this->saveAdminDeleteActivity($post->id, 'permission', $post->name, $postOld);

        if ($post->delete()) {
            return response()->json([
                'message' => self::$PERMISSION_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$PERMISSION_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}
