<?php

use App\Http\Controllers\Api\Admin\ActivityController;
use App\Http\Controllers\Api\Admin\AdminAuthController;
use App\Http\Controllers\Api\Admin\AdminController;
use App\Http\Controllers\Api\Admin\BanController;
use App\Http\Controllers\Api\Admin\BanDaysController;
use App\Http\Controllers\Api\Admin\BanHistoriesController;
use App\Http\Controllers\Api\Admin\BookController;
use App\Http\Controllers\Api\Admin\ChatController;
use App\Http\Controllers\Api\Admin\ContactController;
use App\Http\Controllers\Api\Admin\CourseController;
use App\Http\Controllers\Api\Admin\DashboardController;
use App\Http\Controllers\Api\Admin\DepartmentController;
use App\Http\Controllers\Api\Admin\DummyUserDataController;
use App\Http\Controllers\Api\Admin\FaqController;
use App\Http\Controllers\Api\Admin\LevelTermController;
use App\Http\Controllers\Api\Admin\PasswordResetController;
use App\Http\Controllers\Api\Admin\PermissionController;
use App\Http\Controllers\Api\Admin\PostController;
use App\Http\Controllers\Api\Admin\RoleController;
use App\Http\Controllers\Api\Admin\SettingsController;
use App\Http\Controllers\Api\Admin\SoftwareController;
use App\Http\Controllers\Api\Admin\TestimonialController;
use App\Http\Controllers\Api\Admin\UserController;
use App\Http\Controllers\Api\admin\UserDataController;
use App\Http\Controllers\Api\Admin\UserTraceController;
use App\Http\Controllers\Api\User\ActivitySaveController;
use App\Http\Controllers\Api\User\AuthController;
use App\Http\Controllers\Api\User\BookController as UserBookController;
use App\Http\Controllers\Api\User\GeneralDataController;
use App\Http\Controllers\Api\User\MaterialController;
use App\Http\Controllers\Api\User\SoftwareController as UserSoftwareController;
use App\Http\Controllers\Api\Util\PublicInfoController;
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
    //general routes
    Route::get('quote', [GeneralDataController::class, 'quote']);
    Route::get('count-data', [GeneralDataController::class, 'countData']);
    Route::get('testimonials', [GeneralDataController::class, 'testimonials']);
    Route::get('social-links', [GeneralDataController::class, 'socialLinks']);
    Route::get('faqs', [GeneralDataController::class, 'faq']);
    Route::post('submit-response', [GeneralDataController::class, 'contactSubmission']);
    Route::post('submit-activity', [ActivitySaveController::class, 'index']);

    Route::get('books', [UserBookController::class, 'index']);

    //departments
    Route::get('departments', [MaterialController::class, 'departments']);
    Route::get('departments/{deptSlug}/{ltSlug?}/{courseSlug?}', [MaterialController::class, 'infos']);

    // Auth routes
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login'])->name('loginapi');
    // logged in user
    Route::middleware(['auth:sanctum', 'type.user'])->group(function () {
        Route::get('me', [AuthController::class, 'me']);
        Route::get('logout-all', [AuthController::class, 'logout_all']);
        Route::get('logout', [AuthController::class, 'logout']);

        //book
        Route::get('softwares', [UserSoftwareController::class, 'index']);
    });

    // Admin
    Route::prefix('admin')->group(function () {
        // public urls
        //login & password reset
        Route::post('login', [AdminAuthController::class, 'login']);
        Route::post('request-password', [PasswordResetController::class, 'requestPassword']);
        Route::get('reset-password', [PasswordResetController::class, 'resetPassword'])->name('api.reset.password');
        Route::post('reset-password', [PasswordResetController::class, 'resetPassword']);
        Route::post('reset-pass', [AdminAuthController::class, 'resetpassword']);

        Route::get('dummyuserdata/download', [DummyUserDataController::class, 'backupData']);



        Route::middleware(['auth:sanctum', UpdateSanctumConfigForCustomGuard::class, 'type.admin'])->group(function () {
            Route::get('me', [AdminAuthController::class, 'me']);
            Route::get('permissions', [AdminAuthController::class, 'permissions']);
            Route::get('logout-all', [AdminAuthController::class, 'logout_all']);
            Route::get('logout', [AdminAuthController::class, 'logout']);

            //User Data resource

            Route::get('emailcheck', [PublicInfoController::class, 'checkEmail']);
            Route::get('studentidcheck', [PublicInfoController::class, 'checkstudentID']);
            Route::get('getdepartments', [PublicInfoController::class, 'getdepartments']);
            Route::get('getlevelterms/{id}', [PublicInfoController::class, 'getlevelterms']);
            Route::get('getcourse/{dept_id}/{levelterm_id}', [PublicInfoController::class, 'getcourse']);
            Route::get('getroles', [PublicInfoController::class, 'getroles']);
            Route::get('getpermissions', [PublicInfoController::class, 'getpermissions']);

            // Route::get('userdatas', [UserDataController::class, 'index']);
            Route::get('users/restore/{id}', [UserController::class, 'restore']);
            Route::get('users/resetpass/{id}', [UserController::class, 'passwordReset']);
            Route::get('users/activitydata/{id}', [UserController::class, 'userActivity']);
            Route::get('users/locationdata/{id}', [UserController::class, 'userLocation']);
            //chat with user
            Route::get('users/chat/{id}', [ChatController::class, 'show']);
            Route::post('chats/create', [ChatController::class, 'store']);


            Route::get('admins/activitydata/{id}', [AdminController::class, 'adminActivity']);

            Route::apiResource('users', UserController::class);
            Route::apiResource('admins', AdminController::class);
            Route::apiResource('userdatas', UserDataController::class);
            Route::apiResource('posts', PostController::class);
            Route::apiResource('softwares', SoftwareController::class);
            Route::apiResource('books', BookController::class);
            Route::apiResource('contacts', ContactController::class);
            Route::apiResource('settings', SettingsController::class);
            Route::apiResource('testimonials', TestimonialController::class);
            Route::apiResource('faqs', FaqController::class);
            Route::apiResource('activities', ActivityController::class);
            Route::apiResource('usertraces', UserTraceController::class);
            Route::apiResource('departments', DepartmentController::class);
            Route::apiResource('levelterms', LevelTermController::class);
            Route::apiResource('courses', CourseController::class);
            Route::apiResource('roles', RoleController::class);
            Route::apiResource('permissions', PermissionController::class);
            Route::apiResource('bans', BanController::class);
            Route::apiResource('bandays', BanDaysController::class);
            Route::apiResource('banhistory', BanHistoriesController::class);


            Route::apiResource('dummyuserdata', DummyUserDataController::class);

            // Dashboard data
            Route::get('dashboard/all', [DashboardController::class, 'index']);
            Route::get('dashboard/chartdata', [DashboardController::class, 'chartdata']);
            Route::get('dashboard/deptbatchdatapie', [DashboardController::class, 'batchDeptDataPie']);
            Route::get('dashboard/deptbatchdatatable', [DashboardController::class, 'batchDeptDatatable']);
        });
    });
});
