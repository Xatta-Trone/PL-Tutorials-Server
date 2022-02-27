<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentCreateRequest;
use App\Http\Requests\DepartmentUpdateRequest;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\Department;
use App\Traits\DepartmentTrait;
use App\Models\Admin\Post;

class DepartmentController extends Controller
{
    use DepartmentTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vs = new CustomVueTable2Service();
        return  $vs->get(new Department(), [
            'id', 'name', 'slug', 'code', 'can_be_accessed_by'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentCreateRequest $request)
    {
        $post =  Department::create(array_merge($request->validated(), ['image' => $this->upload()]));


        if ($post) {
            return response()->json([
                'message' => self::$DEPARTMENT_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$DEPARTMENT_CREATION_ERROR,
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
        $post = Department::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$DEPARTMENT_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$DEPARTMENT_NOT_FOUND,
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
    public function update(DepartmentUpdateRequest $request, $id)
    {
        $post = Department::findOrFail($id);

        $post->update(array_merge($request->validated(), ['image' => $this->updateimage()]));
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$DEPARTMENT_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$DEPARTMENT_NOT_UPDATED,
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
        $post = Department::query();
        $post = $post->withTrashed()->find($id);



        if ($post == null) {
            return response()->json([
                'message' => self::$DEPARTMENT_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }



        if ($post->image) {
            $this->deleteimage($post->image);
        }
        $post->forceDelete();



        if ($post) {
            return response()->json([
                'message' => self::$DEPARTMENT_DELETED,
                'status' => 'true',
            ], 200);
        }

        return response()->json([
            'message' => self::$DEPARTMENT_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}