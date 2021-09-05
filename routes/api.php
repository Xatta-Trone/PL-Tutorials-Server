<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\AuthController;
use App\Http\Controllers\Api\Admin\BookController;
use App\Http\Controllers\Api\Admin\PostController;
use App\Http\Controllers\Api\Admin\UserController;
use App\Http\Controllers\Api\admin\UsersController;
use App\Http\Controllers\Api\Admin\ContactController;
use App\Http\Controllers\Api\Admin\SoftwareController;
use App\Http\Controllers\Api\admin\UserDataController;
use App\Http\Controllers\Api\Admin\AdminAuthController;
use App\Http\Controllers\Api\Admin\SettingsController;
use App\Http\Controllers\Api\Util\PublicInfoController;
use App\Http\Middleware\UpdateSanctumConfigForCustomGuard;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {


    // Auth routes
    Route::post('register/', [AuthController::class, 'register']);
    Route::post('login/', [AuthController::class, 'login'])->name('loginapi');
    // logged in user
    Route::middleware(['auth:sanctum', 'type.user'])->group(function () {
        Route::get('me', [AuthController::class, 'me']);
        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('logout-all', [AdminAuthController::class, 'logout_all']);
    });

    // Admin
    Route::prefix('admin')->group(function () {

        // public urls
        Route::post('login', [AdminAuthController::class, 'login']);

        Route::middleware(['auth:sanctum', UpdateSanctumConfigForCustomGuard::class, 'type.admin'])->group(function () {
            Route::get('me', [AdminAuthController::class, 'me']);
            Route::get('permissions', [AdminAuthController::class, 'permissions']);
            Route::get('logout', [AdminAuthController::class, 'logout']);
            Route::get('logout-all', [AdminAuthController::class, 'logout_all']);




            //User Data resource

            Route::get('emailcheck', [PublicInfoController::class, 'checkEmail']);
            Route::get('studentidcheck', [PublicInfoController::class, 'checkstudentID']);
            Route::get('getdepartments', [PublicInfoController::class, 'getdepartments']);
            Route::get('getlevelterms/{id}', [PublicInfoController::class, 'getlevelterms']);
            Route::get('getcourse/{dept_id}/{levelterm_id}', [PublicInfoController::class, 'getcourse']);




            // Route::get('userdatas', [UserDataController::class, 'index']);
            Route::get('users/restore/{id}', [UserController::class, 'restore']);
            Route::get('users/resetpass/{id}', [UserController::class, 'passwordReset']);
            Route::apiResource('users', UserController::class);
            Route::apiResource('userdatas', UserDataController::class);
            Route::apiResource('posts', PostController::class);
            Route::apiResource('softwares', SoftwareController::class);
            Route::apiResource('books', BookController::class);
            Route::apiResource(
                'contacts',
                ContactController::class
            );
            Route::apiResource('settings', SettingsController::class);
        });
    });
});
