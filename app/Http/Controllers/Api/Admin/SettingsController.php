<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Traits\SettingsTrait;
use App\Models\Admin\Settings;
use App\Http\Controllers\Controller;
use Google\Service\Calendar\Setting;
use App\Http\Requests\SettingsCreateRequest;
use App\Http\Services\CustomVueTable2Service;
use Spatie\DiscordAlerts\Facades\DiscordAlert;

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
        if (!request()->user()->hasPermission('utilities_show')) {
            return $this->noIndexPermissionResponse();
        }

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
        if (!request()->user()->hasPermission('utilities_update')) {
            return  $this->noPermissionResponse();
        }

        $post = Settings::create($request->validated());

        if ($post) {
            $this->saveAdminActivity('added', $post->id, 'utilities', $post->key, ['oldData' => null, 'newData' => $post->toArray()]);

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
        if (!request()->user()->hasPermission('utilities_show')) {
            return  $this->noPermissionResponse();
        }

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
        if (!request()->user()->hasPermission('utilities_update')) {
            return  $this->noPermissionResponse();
        }

        $post = Settings::findOrFail($id);

        if ($post->key == 'user-ban-check' && !request()->user()->hasPermission('user_ban_check')) {
            return  $this->noPermissionResponse();
        }

        $postOld =  $post->replicate();

        $post->update($request->validated());

        $this->sendAlert($postOld->value);


        $this->saveAdminUpdateActivity($post->id, 'utilities', $post->key, $postOld, $post->getChanges());
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
        if (!request()->user()->hasPermission('utilities_update')) {
            return  $this->noPermissionResponse();
        }

        $post = Settings::find($id);



        if ($post == null) {
            return response()->json([
                'message' => self::$SETTINGS_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }

        if ($post->key == 'user-ban-check' && !request()->user()->hasPermission('user_ban_check')) {
            return  $this->noPermissionResponse();
        }



        $postOld =  $post->replicate();

        $this->saveAdminDeleteActivity($post->id, 'utilities', $post->key, $postOld);

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toggleUserBan()
    {
        if (!request()->user()->hasPermission('user_ban_check')) {
            return  $this->noPermissionResponse();
        }

        $post = Settings::where('key', 'user-ban-check')->firstOrFail();
        $postOld =  $post->replicate();

        $post->value = !(int)$post->value;

        $this->saveAdminUpdateActivity($post->id, 'utilities', $post->key, $postOld, $post->getChanges());

        if ($post->save()) {
            $this->sendAlert($postOld->value);

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

    private function sendAlert($status)
    {
        $status = (int)$status == 0 ? "True" : "False";
        DiscordAlert::to('banCheck')->message(request()->user()->name . " " . request()->user()->student_id . " changed user ban settings to " . $status);
    }
}