<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\UserTrace;
use Illuminate\Http\Request;

class UserTraceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!request()->user()->hasPermission('user_show')) {
            return $this->noIndexPermissionResponse();
        }

        $vs = new CustomVueTable2Service();

        return  $vs->get(new UserTrace(), [
            'id', 'user_ip', 'location', 'device', 'user_id', 'fingerprint', 'created_at','pat_id'
        ], ['user:id,name,student_id:foreign_key=user_id']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}