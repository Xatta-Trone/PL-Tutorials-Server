<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_user')->delete();
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'user_id' => 1,
                'user_type' => 'App\\Models\\Admin\\Admin',
            ),
            1 => 
            array (
                'role_id' => 1,
                'user_id' => 2,
                'user_type' => 'App\\Models\\Admin\\Admin',
            ),
            2 => 
            array (
                'role_id' => 1,
                'user_id' => 1211,
                'user_type' => 'App\\Models\\Admin\\Admin',
            ),
            3 => 
            array (
                'role_id' => 3,
                'user_id' => 1211,
                'user_type' => 'App\\Models\\Admin\\Admin',
            ),
            4 => 
            array (
                'role_id' => 4,
                'user_id' => 1211,
                'user_type' => 'App\\Models\\Admin\\Admin',
            ),
        ));
        
        
    }
}