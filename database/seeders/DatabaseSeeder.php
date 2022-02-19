<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Artisan::call('migrate:fresh');

        $this->call([UserSeeder::class,
            AdminSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            RolesHasPermissionSeederAdmin::class,
            AttachRoleToAdmin::class,
            DeptLevelTerm::class,
            PostBookSoftwareSeeder::class,
            SettingSeeder::class,
            FaqTestimonialSeeder::class,
            UserDAtaSeeder::class,
        ]);
    }
}