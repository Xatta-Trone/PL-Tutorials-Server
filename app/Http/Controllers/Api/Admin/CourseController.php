<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Admin\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseCreateRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Http\Services\CustomVueTable2Service;
use App\Traits\CourseTrait;

class CourseController extends Controller
{
    use CourseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!request()->user()->hasPermission('course_show')) {
            return $this->noIndexPermissionResponse();
        }

        $vs = new CustomVueTable2Service();
        return  $vs->get(new Course(), [
            'id', 'course_name', 'slug',
        ], ['levelterm:id,slug:foreign_key=level_term_id', 'department:id,name:foreign_key=department_id']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseCreateRequest $request)
    {
        if (!request()->user()->hasPermission('course_create')) {
            return  $this->noPermissionResponse();
        }

        $post =  Course::create($request->validated());


        if ($post) {
            return response()->json([
                'message' => self::$COURSE_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$COURSE_CREATION_ERROR,
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
        if (!request()->user()->hasPermission('course_show')) {
            return  $this->noPermissionResponse();
        }
        $post = Course::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$COURSE_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$COURSE_NOT_FOUND,
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
    public function update(CourseUpdateRequest $request, $id)
    {
        if (!request()->user()->hasPermission('course_update')) {
            return  $this->noPermissionResponse();
        }

        $post = Course::findOrFail($id);

        $post->update($request->validated());
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$COURSE_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$COURSE_NOT_UPDATED,
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
        if (!request()->user()->hasPermission('course_delete')) {
            return  $this->noPermissionResponse();
        }

        $post = Course::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$COURSE_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }


        if ($post->delete()) {
            return response()->json([
                'message' => self::$COURSE_DELETED,
                'status' => 'true',
            ], 200);
        }

        return response()->json([
            'message' => self::$COURSE_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}