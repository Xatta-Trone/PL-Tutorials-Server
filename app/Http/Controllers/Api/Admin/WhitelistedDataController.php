<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\WhitelistedDataTrait;
use App\Models\Admin\WhitelistedData;
use App\Http\Services\CustomVueTable2Service;
use App\Http\Requests\WhitelistedDataCreateRequest;
use App\Http\Requests\WhitelistedDataUpdateRequest;

class WhitelistedDataController extends Controller
{
    use WhitelistedDataTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vs = new CustomVueTable2Service();
        return  $vs->get(new WhitelistedData(), [
            'id', 'user_id', 'access_type', 'data_type', 'data', 'created_at'
        ], ['user:id,name,student_id:foreign_key=user_id']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WhitelistedDataCreateRequest $request)
    {
        if (!request()->user()->hasPermission('user_create')) {
            return  $this->noPermissionResponse();
        }

        // user id
        $user_id = User::where('student_id', $request->student_id)->first()->id;

        $post =  WhitelistedData::create(
            $request->except('student_id')
                + ['user_id' => $user_id]
        );

        $this->saveAdminActivity('added', $post->id, 'whitelisted', $post->user_id . $post->data_type, ['oldData' => null, 'newData' => $post->toArray()]);



        if ($post) {
            return response()->json([
                'message' => self::$WHITELISTED_DATA_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$WHITELISTED_DATA_CREATION_ERROR,
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
        if (!request()->user()->hasPermission('user_show')) {
            return  $this->noPermissionResponse();
        }

        $post = WhitelistedData::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$WHITELISTED_DATA_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$WHITELISTED_DATA_NOT_FOUND,
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
    public function update(WhitelistedDataUpdateRequest $request, $id)
    {
        if (!request()->user()->hasPermission('user_update')) {
            return  $this->noPermissionResponse();
        }

        $post = WhitelistedData::findOrFail($id);
        $postOld =  $post->replicate();



        $post->update($request->validated());

        // dd($request->validated());

        $this->saveAdminUpdateActivity($post->id, 'whitelisted', $post->user_id . $post->data_type . $post->data, $postOld, $post->getChanges());
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$WHITELISTED_DATA_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$WHITELISTED_DATA_NOT_UPDATED,
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
        if (!request()->user()->hasPermission('user_delete')) {
            return  $this->noPermissionResponse();
        }
        $post = WhitelistedData::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$WHITELISTED_DATA_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }
        $postOld =  $post->replicate();

        $this->saveAdminDeleteActivity($post->id, 'whitelisted', $post->user_id . $post->data_type . $post->data, $postOld);

        if ($post->delete()) {
            return response()->json([
                'message' => self::$WHITELISTED_DATA_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$WHITELISTED_DATA_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}
