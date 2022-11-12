<?php

namespace App\Http\Controllers\Api\User;

use App\Traits\UserTrait;
use Illuminate\Http\Request;
use App\Traits\UserAuthTrait;
use App\Models\User\UserDevice;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserDeviceCreateRequest;
use App\Http\Requests\UserDeviceUpdateRequest;

class UserDevicesController extends Controller
{
    use UserTrait, UserAuthTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'max_allowed_device' => config('user.allowed_device_number'),
            'devices' => request()->user()->devices,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserDeviceCreateRequest $request)
    {
        $maxAllowedDevices = $request->user()->max_devices ??= config('user.allowed_device_number');

        if (count($request->user()->devices) >= $maxAllowedDevices) {
            return $this->errorResponse(self::$ERROR_MAXIMUM_DEVICE_REACHED);
        }

        if (UserDevice::where('user_id', $request->user()->id)->where('fingerprint', $request->fingerprint)->exists()) {
            return $this->errorResponse(self::$DEVICE_ALREADY_ADDED);
        }

        $data = $this->saveDevice($request->validated());
        return $data != null ? $this->successResponse(self::$DEVICE_SAVED) : $this->errorResponse(self::$DEVICE_SAVE_ERROR);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_device)
    {
        $user_device = UserDevice::find($user_device);
        return $user_device != null ? $this->successResponse(self::$DEVICE_FOUND, $user_device) : $this->errorResponse(self::$DEVICE_NOT_FOUND, '', 404,);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserDeviceUpdateRequest  $request
     * @param  int  $user_device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_device)
    {
    }

    public function updateDevice(UserDeviceUpdateRequest $request, $id)
    {
        // dd(request()->server('HTTP_USER_AGENT'));
        $user_device  =  UserDevice::where('id', $id)->get()->first();

        if ($user_device == null) {
            return response()->json([
                'message' => self::$DEVICE_NOT_FOUND,
                'status' => 'false',
            ], 404);
        }

        $data = $this->deviceUpdate($request, $user_device);

        if ($data) {
            return response()->json([
                'message' => self::$DEVICE_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$DEVICE_UPDATE_ERROR,
            'status' => 'false',
        ], 422);
    }


    public function checkDevice()
    {
        // dd(request()->server('HTTP_USER_AGENT'));
        $deviceFingerprint = request()->get('fingerprint', null);

        if ($deviceFingerprint == null) {
            return response()->json([
                'message' => self::$DEVICE_NOT_FOUND,
                'status' => false,
            ], 200);
        }

        $user_device  =  UserDevice::select('id')->where('fingerprint', $deviceFingerprint)->exists();

        if ($user_device) {
            return response()->json([
                'message' => self::$DEVICE_FOUND,
                'status' => true,
            ], 200);
        } else {
            return response()->json([
                'message' => self::$DEVICE_NOT_FOUND,
                'status' => false,
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_device)
    {
        $user_device = UserDevice::find($user_device);

        if ($user_device == null) {
            return response()->json([
                'message' => self::$DEVICE_NOT_FOUND,
                'status' => 'false',
            ], 404);
        }

        if ($user_device->delete()) {
            return response()->json([
                'message' => self::$DEVICE_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$DEVICE_DELETE_ERROR,
            'status' => 'false',
        ], 422);
    }
}
