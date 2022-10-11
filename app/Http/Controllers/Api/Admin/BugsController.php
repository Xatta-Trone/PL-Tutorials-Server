<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\User\Bug;
use Illuminate\Http\Request;

class BugsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = request()->input('query', null);
        $limit = request()->input('limit', 10);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 1);
        $byColumn = request()->input('byColumn', 1);


        $bugs = Bug::query()->selectRaw("id, SUBSTRING(message, 1, 30) AS msg,is_seen,updated_at");

        if ($query != null) {
            $bugs = $bugs->where('message', 'LIKE', "%{$query}%");
        }

        $bugs = $bugs->skip(($page - 1) * $limit)->take($limit)->orderBy($orderBy, $ascending == 1 ? 'asc' : 'desc')->get();




        return response()->json([
            'data' => $bugs->toArray(),
            'count' => Bug::count(),
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
        Bug::find($id)->update(['is_seen' => true]);

        $post = Bug::find($id);
        if ($post) {
            return response()->json([
                'message' => 'BUG_FOUND',
                'status' => 'true',
                'data' => $post,
            ], 200);
        }

        return response()->json([
            'message' => 'BUG_NOT_FOUND',
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