<?php

namespace App\Http\Controllers\Api\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Admin\UserData;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserDataAddRequest;
use App\Http\Services\VueTable2Service;
use App\Http\Resources\UserDataResource;
use App\Traits\UserTrait;

class UserDataController extends Controller
{
    use UserTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!request()->user()->hasPermission('userdata_show')) {
            return $this->noIndexPermissionResponse();
        }


        $u = UserData::query();
        $t = new VueTable2Service();
        return $t->get($u, [
            'id',
            'student_name',
            'merit',
            'student_id',
            'hall_name',
            'status',
            'grad_level'
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserDataAddRequest $request)
    {
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
    public function update(UserDataAddRequest $request, $id)
    {
        if (!request()->user()->hasPermission('user_create')) {
            return  $this->noPermissionResponse();
        }

        $user = UserData::find($id);
        $userdata = ['name' => $user->student_name, 'student_id' => $user->student_id, 'email' => $request->input('email')];


        return $this->createNewAccount($userdata,  $id, true);
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
