<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'system',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2021-08-03 16:02:10',
                'updated_at' => '2021-08-03 16:02:10',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2021-08-03 16:02:10',
                'updated_at' => '2021-08-03 16:02:10',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'user_add',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2021-08-03 16:02:10',
                'updated_at' => '2021-08-03 16:02:10',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'utilities_edit',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2021-08-03 16:02:10',
                'updated_at' => '2021-08-03 16:02:10',
            ),
        ));
        
        
    }
}