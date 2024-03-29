<?php

namespace App\Http\Controllers\Api\Admin;

use App\Traits\BanDaysTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BanDaysCreateRequest;
use App\Http\Requests\BanDaysUpdateRequest;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\BanDays;

class BanDaysController extends Controller
{
    use BanDaysTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!request()->user()->hasPermission('ban_show')) {
            return $this->noIndexPermissionResponse();
        }

        $vs = new CustomVueTable2Service();
        return  $vs->get(new BanDays(), [
            'id', 'level', 'days'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BanDaysCreateRequest $request)
    {
        if (!request()->user()->hasPermission('ban_create')) {
            return  $this->noPermissionResponse();
        }

        $post =  BanDays::create($request->validated());
        $this->saveAdminActivity('added', $post->id, 'bandays', $post->level, ['oldData' => null, 'newData' => $post->toArray()]);



        if ($post) {
            return response()->json([
                'message' => self::$BAN_DAYS_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$BAN_DAYS_CREATION_ERROR,
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
        if (!request()->user()->hasPermission('ban_show')) {
            return  $this->noPermissionResponse();
        }


        $post = BanDays::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$BAN_DAYS_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$BAN_DAYS_NOT_FOUND,
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
    public function update(BanDaysUpdateRequest $request, $id)
    {
        if (!request()->user()->hasPermission('ban_update')) {
            return  $this->noPermissionResponse();
        }

        $post = BanDays::findOrFail($id);
        $postOld =  $post->replicate();

        $post->update($request->validated());
        $this->saveAdminUpdateActivity($post->id, 'bandays', $post->level, $postOld, $post->getChanges());
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$BAN_DAYS_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$BAN_DAYS_NOT_UPDATED,
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
        if (!request()->user()->hasPermission('ban_delete')) {
            return  $this->noPermissionResponse();
        }

        $post = BanDays::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$BAN_DAYS_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }
        $postOld =  $post->replicate();

        $this->saveAdminDeleteActivity($post->id, 'bandays', $post->level, $postOld);

        if ($post->delete()) {
            return response()->json([
                'message' => self::$BAN_DAYS_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$BAN_DAYS_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}
