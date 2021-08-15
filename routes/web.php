<?php

use App\Mail\UserLoginDetails;
use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $a = Admin::find(1);
    $a->password = 'asdfasdf';
    $a->allPermissions()->pluck('name');
    return new UserLoginDetails($a);

    // dd($a->hasRole('system'));



    return view('welcome');
});
