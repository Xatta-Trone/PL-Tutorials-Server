<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\Activity;
use Facade\FlareClient\Http\Response;

class ActivityController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->authorizeResource(Activity::class, 'activities');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (!request()->user()->hasPermission('activities_show')) {
            return response()->json([
                'data' => [],
                'count' => 0,
            ]);
        }


        $query = request()->input('query', null);
        $limit = request()->input('limit', 10);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 0);
        $byColumn = request()->input('byColumn', 1);


        $activiey = Activity::query()->select(['id', 'causer_type', 'causer_id', 'activity', 'label', 'pat_id', 'created_at']);

        if ($query != null) {
            $activiey = $activiey->where('activity', 'LIKE', "%{$query}%");
            $activiey = $activiey->orWhere('label', 'LIKE', "%{$query}%");
            // $activiey = $activiey->whereHas('causer');
            // $activiey = $activiey->orWhere('label', 'LIKE', "%{$query}%");
            // $activiey = $activiey->with(['causer' => function ($q) use ($query) {
            //     $q->where(function ($q) {
            //         $q->where('name', 'LIKE', "%{$query}%");
            //     });
            // }]);
        }

        $activiey = $activiey->with('causer:id,name,student_id')->skip(($page - 1) * $limit)->take($limit)->orderBy($orderBy, $ascending == 1 ? 'asc' : 'desc')->get();




        return response()->json([
            'data' => $activiey->toArray(),
            'count' => Activity::count(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
