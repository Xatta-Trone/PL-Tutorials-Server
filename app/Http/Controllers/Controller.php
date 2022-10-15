<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function successResponse($message, $data = '', $statusCode = 200)
    {
        return response()->json([
            'message' => $message,
            'status' => 'true',
            'data' => $data
        ], $statusCode);
    }

    public function errorResponse($message, $data = '', $statusCode = 422)
    {
        return response()->json([
            'message' => $message,
            'status' => 'false',
            'data' => $data
        ], $statusCode);
    }

    public function noPermissionResponse($permissionResponseName = 'YOU_DO_NOT_HAVE_PERMISSION', $statusCode = 422)
    {
        return response()->json([
            'message' => $permissionResponseName,
            'status' => 'false',
        ], $statusCode);
    }

    public function noIndexPermissionResponse($permissionResponseName = 'YOU_DO_NOT_HAVE_PERMISSION', $statusCode = 422)
    {
        return response()->json([
            'data' => [],
            'count' => 0,
        ]);
    }
}