<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {

        $user = new User;



        $data = [
            'online_users' => $user->allOnline()->count()
        ];

        return response()->json($data);
    }
}
