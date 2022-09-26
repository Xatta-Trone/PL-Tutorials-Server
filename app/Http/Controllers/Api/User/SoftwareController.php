<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\Software;

class SoftwareController extends Controller
{
    public function index()
    {
        $vs = new CustomVueTable2Service();
        return  $vs->get(new Software(), [
            'id', 'name', 'description', 'status', 'link', 'author'
        ], [], 1);
    }
}
