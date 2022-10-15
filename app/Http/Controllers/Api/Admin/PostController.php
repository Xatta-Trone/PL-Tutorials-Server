<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Admin\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Services\VueTable2Service;
use App\Http\Services\CustomVueTable2Service;
use App\Traits\ImageTrait;
use App\Traits\PostTrait;
use Illuminate\Auth\Events\Validated;

class PostController extends Controller
{
    use ImageTrait, PostTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!request()->user()->hasPermission('post_show')) {
            return $this->noIndexPermissionResponse();
        }


        $vs = new CustomVueTable2Service();
        return  $vs->get(new Post(), [
            'id', 'name', 'department_slug', 'level_term_slug', 'status',  'course_id', 'user_id',
        ], ['admin:id,name:foreign_key=user_id', 'course:id,slug']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
        if (!request()->user()->hasPermission('post_create')) {
            return  $this->noPermissionResponse();
        }

        // return $request->validated();
        $post =  Post::create(array_merge($request->validated(), ['image' => $this->upload(), 'user_id' => auth()->id(), 'user_type' => 'admin']));


        if ($post) {
            return response()->json([
                'message' => self::$POST_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$POST_CREATION_ERROR,
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
        if (!request()->user()->hasPermission('post_show')) {
            return  $this->noPermissionResponse();
        }

        $post = Post::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$POST_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$POST_NOT_FOUND,
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
    public function update(PostUpdateRequest $request, $id)
    {
        if (!request()->user()->hasPermission('post_update')) {
            return  $this->noPermissionResponse();
        }

        // return $request->validated();
        $post = Post::findOrFail($id);

        $post->update(array_merge($request->validated(), ['image' => $this->updateimage(), 'user_id' => auth()->id(), 'user_type' => 'admin']));
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$POST_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$POST_NOT_UPDATED,
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
        if (!request()->user()->hasPermission('post_delete')) {
            return  $this->noPermissionResponse();
        }

        $post = Post::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$POST_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }

        if ($post->image) {
            $this->deleteimage($post->image, $post->post_type);
        }

        if ($post->delete()) {
            return response()->json([
                'message' => self::$POST_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$POST_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}