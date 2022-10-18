<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BanDaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ban_days')->delete();
        
        \DB::table('ban_days')->insert(array (
            0 => 
            array (
                'id' => 1,
                'level' => 1,
                'days' => 5,
                'created_at' => '2022-10-09 16:43:57',
                'updated_at' => '2022-10-18 17:38:05',
            ),
            1 => 
            array (
                'id' => 2,
                'level' => 2,
                'days' => 10,
                'created_at' => '2022-10-09 17:59:36',
                'updated_at' => '2022-10-09 17:59:36',
            ),
            2 => 
            array (
                'id' => 3,
                'level' => 3,
                'days' => 20,
                'created_at' => '2022-10-18 17:38:22',
                'updated_at' => '2022-10-18 17:38:22',
            ),
            3 => 
            array (
                'id' => 4,
                'level' => 4,
                'days' => 40,
                'created_at' => '2022-10-18 17:38:31',
                'updated_at' => '2022-10-18 17:38:31',
            ),
            4 => 
            array (
                'id' => 5,
                'level' => 5,
                'days' => 80,
                'created_at' => '2022-10-18 17:38:41',
                'updated_at' => '2022-10-18 17:38:41',
            ),
            5 => 
            array (
                'id' => 6,
                'level' => 6,
                'days' => 160,
                'created_at' => '2022-10-18 17:38:53',
                'updated_at' => '2022-10-18 17:38:53',
            ),
            6 => 
            array (
                'id' => 7,
                'level' => 7,
                'days' => 320,
                'created_at' => '2022-10-18 17:39:05',
                'updated_at' => '2022-10-18 17:39:05',
            ),
            7 => 
            array (
                'id' => 8,
                'level' => 8,
                'days' => 640,
                'created_at' => '2022-10-18 17:39:15',
                'updated_at' => '2022-10-18 17:39:15',
            ),
            8 => 
            array (
                'id' => 9,
                'level' => 9,
                'days' => 1280,
                'created_at' => '2022-10-18 17:39:34',
                'updated_at' => '2022-10-18 17:39:34',
            ),
            9 => 
            array (
                'id' => 10,
                'level' => 10,
                'days' => 2560,
                'created_at' => '2022-10-18 17:39:46',
                'updated_at' => '2022-10-18 17:39:46',
            ),
        ));
        
        
    }
}