<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Admin\Admin;
use Illuminate\Database\Seeder;

class AttachRoleToAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::find(1);
        $role = Role::find(1);
        $admin->attachRole($role);
    }
}
