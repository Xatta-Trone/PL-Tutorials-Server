<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Activity;
use App\Models\User\User;
use App\Traits\ActivityTrait;
use Illuminate\Http\Request;

class ActivitySaveController extends Controller
{
    use ActivityTrait;
    public function index(Request $request)
    {


        $data = [
            'causer_type' => $this->getpostclass($request->input('model_type', 'user')),
            'causer_id' => $request->input('causer_id', 0),
            'model_type' => get_class(new User()),
            'activity' => $request->input('activity', 'downloaded'),
            'model_id' => $request->input('model_id', 0),
            'model_type' => $this->getpostclass($request->input('model_type')),
            'label' => $request->input('label', ''),
        ];

        $data = Activity::create($data);
        return $data != null ? $this->successResponse('ACTIVITY_SAVED') : $this->errorResponse('ACTIVITY_SAVED_NOT');



        //
    }
}
