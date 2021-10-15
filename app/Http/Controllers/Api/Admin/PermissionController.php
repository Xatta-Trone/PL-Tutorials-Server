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
        $post =  Permission::create($request->validated());


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
        $post = Permission::findOrFail($id);



        $post->update($request->validated());
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
        $post = Permission::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$PERMISSION_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }

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
