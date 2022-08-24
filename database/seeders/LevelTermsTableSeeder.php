<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LevelTermsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('level_terms')->delete();
        
        \DB::table('level_terms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Level 1 Term 1',
                'slug' => '1-1',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Level 1 Term 2',
                'slug' => '1-2',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Level 2 Term 1',
                'slug' => '2-1',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Level 2 Term 2',
                'slug' => '2-2',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Level 3 Term 1',
                'slug' => '3-1',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Level 3 Term 2',
                'slug' => '3-2',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Level 4 Term 1',
                'slug' => '4-1',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Level 4 Term 2',
                'slug' => '4-2',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Level 1 Term 1',
                'slug' => '1-1',
                'department_id' => 10,
                'created_at' => '2022-08-24 15:55:33',
                'updated_at' => '2022-08-24 15:55:33',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Level 1 Term 2',
                'slug' => '1-2',
                'department_id' => 10,
                'created_at' => '2022-08-24 15:55:47',
                'updated_at' => '2022-08-24 15:55:47',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Level 2 Term 1',
                'slug' => '2-1',
                'department_id' => 10,
                'created_at' => '2022-08-24 15:55:52',
                'updated_at' => '2022-08-24 15:55:52',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Level 2 Term 2',
                'slug' => '2-2',
                'department_id' => 10,
                'created_at' => '2022-08-24 15:55:57',
                'updated_at' => '2022-08-24 15:55:57',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Level 3 Term 1',
                'slug' => '3-1',
                'department_id' => 10,
                'created_at' => '2022-08-24 15:56:02',
                'updated_at' => '2022-08-24 15:56:02',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Level 3 Term 2',
                'slug' => '3-2',
                'department_id' => 10,
                'created_at' => '2022-08-24 15:56:06',
                'updated_at' => '2022-08-24 15:56:06',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Level 4 Term 1',
                'slug' => '4-1',
                'department_id' => 10,
                'created_at' => '2022-08-24 15:56:11',
                'updated_at' => '2022-08-24 15:56:11',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Level 4 Term 2',
                'slug' => '4-2',
                'department_id' => 10,
                'created_at' => '2022-08-24 15:56:35',
                'updated_at' => '2022-08-24 15:56:35',
            ),
        ));
        
        
    }
}