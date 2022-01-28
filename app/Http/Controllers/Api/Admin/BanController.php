<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BanLocationCreateRequest;
use App\Http\Requests\BanLocationUpdateRequest;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\Ban;
use App\Traits\BanLocationTrait;

class BanController extends Controller
{
    use BanLocationTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vs = new CustomVueTable2Service();
        return  $vs->get(new Ban(), [
            'id', 'location',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BanLocationCreateRequest $request)
    {
        $post =  Ban::create($request->validated());


        if ($post) {
            return response()->json([
                'message' => self::$BAN_LOCATION_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$BAN_LOCATION_CREATION_ERROR,
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
        $post = Ban::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$BAN_LOCATION_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$BAN_LOCATION_NOT_FOUND,
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
    public function update(BanLocationUpdateRequest $request, $id)
    {
        $post = Ban::findOrFail($id);

        $post->update($request->validated());
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$BAN_LOCATION_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$BAN_LOCATION_NOT_UPDATED,
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
        $post = Ban::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$BAN_LOCATION_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }

        if ($post->delete()) {
            return response()->json([
                'message' => self::$BAN_LOCATION_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$BAN_LOCATION_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}
