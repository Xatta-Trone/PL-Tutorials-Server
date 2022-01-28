<?php

namespace App\Http\Controllers\Api\User;

use App\Models\Admin\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\CustomVueTable2Service;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vs = new CustomVueTable2Service();
        return  $vs->get(new Book(), [
            'id', 'name', 'author', 'status', 'link'
        ], [], 1);
    }
}
