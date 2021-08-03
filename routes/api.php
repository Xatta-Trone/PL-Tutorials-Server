<?php

use App\Http\Controllers\Api\Admin\AdminAuthController;
use App\Http\Controllers\Api\User\AuthController;
use App\Http\Middleware\UpdateSanctumConfigForCustomGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    Route::post('login/', [AuthController::class, 'login']);
    // logged in user
    Route::middleware(['auth:sanctum', 'type.user'])->group(function () {
        Route::get('me', [AuthController::class, 'me']);
        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('logout-all', [AdminAuthController::class, 'logout_all']);
    });

    // Admin
    Route::prefix('admin')->group(function () {
        Route::post('login', [AdminAuthController::class, 'login']);

        Route::middleware(['auth:sanctum', UpdateSanctumConfigForCustomGuard::class, 'type.admin'])->group(function () {
            Route::get('me', [AdminAuthController::class, 'me']);
            Route::get('logout', [AdminAuthController::class, 'logout']);
            Route::get('logout-all', [AdminAuthController::class, 'logout_all']);
        });
    });
});
