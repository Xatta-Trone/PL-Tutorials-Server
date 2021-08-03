<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User\User;
use App\Models\Admin\Admin;
use Illuminate\Database\Seeder;
use App\Models\Admin\Permission;
use Illuminate\Support\Facades\DB;

class RolesHasPermissionSeederAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //for system all permissions
        $permissions = Permission::all();
        // $role1 = Role::find(1)->permissions()->sync($permissions);
        // $role1 = Role::find(1)->attachPermissions($permissions);
        // $admin = Admin::where('id', 1)->first();
        $role = Role::find(1);
        $role->syncPermissions($permissions);



        //for admin all permissions
        $permissions = Permission::whereIn(
            'id',
            [
                '5',
                '6',
                '7',
                '8',
                '1',
                '21',
                '22',
                '23',
                '24',
                '25',
                '26',
                '27',
                '28',
                '29',
                '30',
                '31',
                '32',
                '33',
                '34',
                '35',
                '36',
                '42',
                '54',
            ]
        )->get();
        // $role2 = Role::find(2)->permissions()->sync($permissions);
        $role2 = Role::find(2)->syncPermissions($permissions);

        //for user_add all permissions
        $permissions = Permission::whereIn(
            'id',
            [
                '2',
                '3',
                '41',
            ]
        )->get();
        // $role3 = Role::find(3)->permissions()->sync($permissions);
        $role3 = Role::find(3)->syncPermissions($permissions);

        //for utilities_edit permissions
        $permissions = Permission::whereIn(
            'id',
            ['55']
        )->get();
        // $role4 = Role::find(4)->permissions()->sync($permissions);
        $role4 = Role::find(4)->syncPermissions($permissions);

        //         /$sql = '
        // INSERT INTO `admin_role` (`id`, `admin_id`, `role_id`, `created_at`, `updated_at`) VALUES
        //             (3, 2, 2, NULL, NULL),
        //             (4, 3, 2, NULL, NULL),
        //             (5, 4, 2, NULL, NULL),
        //             (6, 5, 2, NULL, NULL),
        //             (10, 7, 2, NULL, NULL),
        //             (12, 1, 1, NULL, NULL),
        //             (13, 6, 2, NULL, NULL),
        //             (14, 8, 2, NULL, NULL),
        //             (15, 5, 3, NULL, NULL),
        //             (16, 4, 3, NULL, NULL),
        //             (17, 6, 3, NULL, NULL),
        //             (18, 4, 4, NULL, NULL),
        //             (19, 5, 4, NULL, NULL),
        //             (20, 6, 4, NULL, NULL),
        //             (21, 8, 4, NULL, NULL),
        //             (22, 7, 4, NULL, NULL),
        //             (23, 3, 4, NULL, NULL),
        //             (24, 2, 4, NULL, NULL),
        //             (25, 5, 1, NULL, NULL),
        //             (26, 4, 1, NULL, NULL),
        //             (27, 3, 3, NULL, NULL),
        //             (28, 2, 3, NULL, NULL),
        //             (29, 6, 1, NULL, NULL);';

        //         DB::statement($sql);
    }
}
