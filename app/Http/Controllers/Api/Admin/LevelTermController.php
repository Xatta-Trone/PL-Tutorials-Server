<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Traits\LevelTermTrait;
use App\Models\Admin\LevelTerm;
use App\Http\Controllers\Controller;
use App\Http\Requests\LevelTermCreateRequest;
use App\Http\Requests\LevelTermUpdateRequest;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\Department;

class LevelTermController extends Controller
{
    use LevelTermTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!request()->user()->hasPermission('level_term_show')) {
            return $this->noIndexPermissionResponse();
        }

        $vs = new CustomVueTable2Service();
        return  $vs->get(new LevelTerm(), [
            'id', 'name', 'slug',
        ], ['department:id,name']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LevelTermCreateRequest $request)
    {

        if (!request()->user()->hasPermission('level_term_create')) {
            return  $this->noPermissionResponse();
        }

        $post = LevelTerm::create($request->validated());
        $this->saveAdminActivity('added', $post->id, 'levelterm', $post->name, ['oldData' => null, 'newData' => $post->toArray()]);



        if ($post) {
            return response()->json([
                'message' => self::$LEVEL_TERM_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$LEVEL_TERM_CREATION_ERROR,
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
        if (!request()->user()->hasPermission('level_term_show')) {
            return  $this->noPermissionResponse();
        }

        $post = LevelTerm::with('department:id,name')->find($id);
        if ($post) {
            return response()->json([
                'message' => self::$LEVEL_TERM_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$LEVEL_TERM_NOT_FOUND,
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
    public function update(LevelTermUpdateRequest $request, $id)
    {
        if (!request()->user()->hasPermission('level_term_update')) {
            return  $this->noPermissionResponse();
        }

        $post = LevelTerm::findOrFail($id);
        $postOld =  $post->replicate();

        $post->update($request->validated());
        $this->saveAdminUpdateActivity($post->id, 'levelterm', $post->name, $postOld, $post->getChanges());
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$LEVEL_TERM_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$LEVEL_TERM_NOT_UPDATED,
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
        if (!request()->user()->hasPermission('level_term_delete')) {
            return  $this->noPermissionResponse();
        }

        $post = LevelTerm::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$LEVEL_TERM_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }

        $postOld =  $post->replicate();

        $this->saveAdminDeleteActivity($post->id, 'levelterm', $post->name, $postOld);

        if ($post->delete()) {
            return response()->json([
                'message' => self::$LEVEL_TERM_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$LEVEL_TERM_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}