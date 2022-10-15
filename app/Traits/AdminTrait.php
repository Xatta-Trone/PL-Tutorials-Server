<?php

namespace App\Traits;

use App\Models\Role;
use App\Models\Admin\Admin;
use Illuminate\Support\Arr;
use App\Mail\AdminWelcomeMsg;
use Illuminate\Support\Facades\Mail;

trait AdminTrait
{
    use UserTrait;

    public static $ADMIN_CREATED = 'ADMIN_CREATED';
    public static $ADMIN_CREATION_ERROR = 'ADMIN_CREATION_ERROR';

    public static $ADMIN_NOT_FOUND = 'ADMIN_NOT_FOUND';
    public static $ADMIN_FOUND = 'ADMIN_FOUND';

    public static $ADMIN_NOT_UPDATED = 'ADMIN_NOT_UPDATED';
    public static $ADMIN_UPDATED = 'ADMIN_UPDATED';

    public static $ADMIN_NOT_DELETED = 'ADMIN_NOT_DELETED';
    public static $ADMIN_DELETED = 'ADMIN_DELETED';

    public static $ADMIN_NOT_RESTORED = 'ADMIN_NOT_RESTORED';
    public static $ADMIN_RESTORED = 'ADMIN_RESTORED';

    public static $ADMIN_MUST_HAVE_USER_ACCOUNT = 'ADMIN_MUST_HAVE_USER_ACCOUNT';


    public function createNewAdminAccount($userdata,  $roles)
    {

        $userPassword = $this->randomPassword(10);
        $userdata['password'] = bcrypt($userPassword);
        $userdata['student_id'] = $this->studentIdWithoutPrefix($userdata['student_id']);
        $userdata['user_letter'] = $this->userLetter($userdata['name']);


        $user = Admin::create(Arr::except($userdata, ['roles']));

        $user->password = $userPassword;

        $role = Role::find($roles);
        $user->syncRoles($role);

        $this->saveAdminActivity('added', $user->id, 'admin', 'Admin::' . $user->name . '::' . $user->student_id, ['oldData' => null, 'newData' => $user->toArray()]);


        if ($user) {

            Mail::to($user['email'])->send(new AdminWelcomeMsg($user));
            return response()->json([
                'message' => self::$ADMIN_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$ADMIN_CREATION_ERROR,
                'status' => 'false'
            ], 422);
        }
    }
}