<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BanHistoryCreateRequest;
use App\Http\Requests\BanHistoryUpdateRequest;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\BanHistory;
use App\Traits\BanHistoryTrait;

class BanHistoriesController extends Controller
{
    use BanHistoryTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!request()->user()->hasPermission('user_show')) {
            return $this->noIndexPermissionResponse();
        }

        $vs = new CustomVueTable2Service();
        return  $vs->get(new BanHistory(), [
            'id', 'ban_from', 'ban_upto', 'reason'
        ], ['user:id,name,student_id:foreign_key=user_id']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BanHistoryCreateRequest $request)
    {
        if (!request()->user()->hasPermission('user_create')) {
            return  $this->noPermissionResponse();
        }

        $post =  BanHistory::create($request->validated());
        $this->saveAdminActivity('added', $post->id, 'banhistory', $post->user_id . $post->reason, ['oldData' => null, 'newData' => $post->toArray()]);



        if ($post) {
            return response()->json([
                'message' => self::$BAN_HISTORY_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$BAN_HISTORY_CREATION_ERROR,
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

        $post = BanHistory::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$BAN_HISTORY_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$BAN_HISTORY_NOT_FOUND,
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
    public function update(BanHistoryUpdateRequest $request, $id)
    {
        if (!request()->user()->hasPermission('user_update')) {
            return  $this->noPermissionResponse();
        }

        $post = BanHistory::findOrFail($id);
        $postOld =  $post->replicate();

        $post->update($request->validated());

        $this->saveAdminUpdateActivity($post->id, 'banhistory', $post->user_id . $post->reason, $postOld, $post->getChanges());
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$BAN_HISTORY_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$BAN_HISTORY_NOT_UPDATED,
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
        $post = BanHistory::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$BAN_HISTORY_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }
        $postOld =  $post->replicate();

        $this->saveAdminDeleteActivity($post->id, 'banhistory', $post->user_id . $post->reason, $postOld);

        if ($post->delete()) {
            return response()->json([
                'message' => self::$BAN_HISTORY_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$BAN_HISTORY_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}
