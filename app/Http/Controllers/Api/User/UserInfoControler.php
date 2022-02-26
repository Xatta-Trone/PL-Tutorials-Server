<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Models\Admin\Activity;
use App\Http\Controllers\Controller;

class UserInfoControler extends Controller
{
    public function getUserActivity()
    {
        $query = request()->input('query', null);
        $limit = request()->input('limit', 10);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 0);
        $byColumn = request()->input('byColumn', 1);


        $activiey = Activity::query()->select(['id', 'activity', 'label', 'created_at'])->where('causer_type', 'App\Models\User\User')->where('causer_id', auth()->user()->id);



        if ($query != null) {
            $activiey = $activiey->where('activity', 'LIKE', "%{$query}%");
            $activiey = $activiey->orWhere('label', 'LIKE', "%{$query}%");
        }

        $activiey = $activiey->skip(($page - 1) * $limit)->take($limit)->orderBy($orderBy, $ascending == 1 ? 'asc' : 'desc')->get();




        return response()->json([
            'data' => $activiey->toArray(),
            'count' => Activity::where('causer_type', 'App\Models\User\User')->where('causer_id', auth()->user()->id)->count(),
        ]);
    }
}