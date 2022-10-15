<?php

namespace App\Http\Controllers;

use App\Traits\ActivityTrait;
use App\Models\Admin\Activity;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, ActivityTrait;

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

    public function saveAdminActivity($activity = 'updated', $modelId = 0, $modelType = 'user', $label = '', $jsonData = null)
    {
        $data = [
            'causer_type' => $this->getpostclass('admin'),
            'causer_id' => request()->user()->id,
            'activity' => $activity,
            'model_id' =>  $modelId,
            'model_type' => $this->getpostclass($modelType),
            'label' => $label,
            'data' => json_encode($jsonData),
            'pat_id' => $this->getUserTokenId(),
        ];

        return Activity::create($data);
    }

    public function saveAdminUpdateActivity($modelId = 0, $modelType = 'user', $label = '', $oldData = null, $newData = null)
    {

        $originalData = null;

        if ($oldData) {
            $originalData =
                array_intersect_key(
                    $oldData->toArray(),
                    array_flip(array_keys($newData))
                );
        }

        $this->saveAdminActivity('updated', $modelId, $modelType, $label, ['oldData' => $originalData, 'newData' => $newData]);
    }

    public function saveAdminDeleteActivity($modelId = 0, $modelType = 'user', $label = '', $oldData = null, $newData = null)
    {
        $this->saveAdminActivity('deleted', $modelId, $modelType, $label, ['oldData' => $oldData->toArray(), 'newData' => $newData]);
    }
}