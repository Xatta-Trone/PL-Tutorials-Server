<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsCreateRequest;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\Settings;
use App\Traits\SettingsTrait;

class SettingsController extends Controller
{
    use SettingsTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vs = new CustomVueTable2Service();
        return  $vs->get(new Settings(), [
            'id', 'key', 'value',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SettingsCreateRequest $request)
    {
        // return $request->validated();



        if (Settings::create($request->validated())) {
            return response()->json([
                'message' => self::$SETTINGS_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$SETTINGS_CREATION_ERROR,
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
        $post = Settings::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$SETTINGS_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$SETTINGS_NOT_FOUND,
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
    public function update(SettingsCreateRequest $request, $id)
    {
        $post = Settings::findOrFail($id);

        $post->update($request->validated());
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$SETTINGS_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$SETTINGS_NOT_UPDATED,
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
        $post = Settings::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$SETTINGS_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }

        if ($post->delete()) {
            return response()->json([
                'message' => self::$SETTINGS_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$SETTINGS_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}