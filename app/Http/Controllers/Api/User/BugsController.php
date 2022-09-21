<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\BugStoreRequest;
use App\Models\User\Bug;
use Illuminate\Http\Request;

class BugsController extends Controller
{
    public function store(BugStoreRequest $request)
    {

        $filesNames = [];

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $key => $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $full_name = $filename . '_' . time() . '.' . $extension;
                $file->storeAs('public/bugs', $full_name);
                $filesNames[$key] = $full_name;
            }
        }

        $fileNames = count($filesNames) == 0 ? null : json_encode($filesNames);

        $bug = Bug::create(array_merge($request->validated(), ['files' => $fileNames]));

        return $bug != null ? $this->successResponse('REPORT_SAVED') : $this->errorResponse('REPORT_NOT_SAVED');
    }
}