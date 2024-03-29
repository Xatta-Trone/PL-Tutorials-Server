<?php

namespace App\Http\Controllers\Api\Admin;

use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use App\Traits\SoftwareTrait;
use App\Models\Admin\Software;
use App\Http\Controllers\Controller;
use App\Http\Requests\SoftwareCreateRequest;
use App\Http\Requests\SoftwareUpdateRequest;
use App\Http\Services\CustomVueTable2Service;

class SoftwareController extends Controller
{
    use ImageTrait, SoftwareTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!request()->user()->hasPermission('software_show')) {
            return $this->noIndexPermissionResponse();
        }

        $vs = new CustomVueTable2Service();
        return  $vs->get(new Software(), [
            'id', 'name', 'department_slug', 'level_term_slug', 'status', 'user_id',
        ], ['admin:id,name:foreign_key=user_id']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SoftwareCreateRequest $request)
    {
        if (!request()->user()->hasPermission('software_create')) {
            return  $this->noPermissionResponse();
        }

        $post =  Software::create(array_merge($request->validated(), ['image' => $this->upload(), 'user_id' => auth()->id(), 'user_type' => 'admin']));

        $this->saveAdminActivity('added', $post->id, 'software', $post->name, ['oldData' => null, 'newData' => $post->toArray()]);

        if ($post) {
            return response()->json([
                'message' => self::$SOFTWARE_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$SOFTWARE_CREATION_ERROR,
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
        if (!request()->user()->hasPermission('software_show')) {
            return  $this->noPermissionResponse();
        }

        $post = Software::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$SOFTWARE_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$SOFTWARE_NOT_FOUND,
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
    public function update(SoftwareUpdateRequest $request, $id)
    {
        if (!request()->user()->hasPermission('software_update')) {
            return  $this->noPermissionResponse();
        }

        // return $request->all();
        $post = Software::findOrFail($id);
        $postOld =  $post->replicate();

        if ($request->has('course_id') && ($request->input('course_id') == null || $request->input('course_id') == 'null' || $request->input('course_id') == '')) {
            $request->input('course_id') == null;
        }

        $post->update(array_merge($request->validated(), ['image' => $this->updateimage(), 'user_id' => auth()->id(), 'user_type' => 'admin']));
        // dd($post);
        $this->saveAdminUpdateActivity($post->id, 'software', $post->name, $postOld, $post->getChanges());

        if ($post) {
            return response()->json([
                'message' => self::$SOFTWARE_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$SOFTWARE_NOT_UPDATED,
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
        if (!request()->user()->hasPermission('software_delete')) {
            return  $this->noPermissionResponse();
        }

        $post = Software::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$SOFTWARE_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }

        if ($post->image) {
            $this->deleteimage($post->image, $post->post_type);
        }
        $postOld =  $post->replicate();

        $this->saveAdminDeleteActivity($post->id, 'software', $post->name, $postOld);

        if ($post->delete()) {
            return response()->json([
                'message' => self::$SOFTWARE_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$SOFTWARE_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}
