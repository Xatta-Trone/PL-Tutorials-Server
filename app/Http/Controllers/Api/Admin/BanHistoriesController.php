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
        $post =  BanHistory::create($request->validated());


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
        $post = BanHistory::findOrFail($id);

        $post->update($request->validated());
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
        $post = BanHistory::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$BAN_HISTORY_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }

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