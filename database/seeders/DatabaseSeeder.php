<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
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

        // $this->call([UserSeeder::class,
        //     AdminSeeder::class,
        //     RoleSeeder::class,
        //     PermissionSeeder::class,
        //     RolesHasPermissionSeederAdmin::class,
        //     AttachRoleToAdmin::class,
        //     DeptLevelTerm::class,
        //     PostBookSoftwareSeeder::class,
        //     SettingSeeder::class,
        //     FaqTestimonialSeeder::class,
        //     UserDAtaSeeder::class,
        // ]);

        Schema::disableForeignKeyConstraints();

        $this->call(AdminsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(LevelTermsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(SoftwaresTableSeeder::class);
        $this->call(SettingsTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(UserDataTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(QuotesTableSeeder::class);

        Artisan::call('rename:columns');

        $this->call(UserTracesTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
    }
}