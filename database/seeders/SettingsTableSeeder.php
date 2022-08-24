<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 5,
                'key' => 'email',
                'value' => 'pltutorialsbuet@gmail.com',
                'fa5_icon' => 'fas fa-eye-slash',
                'fa4_icon' => 'fa-envelope-open-o',
                'created_at' => '2021-09-14 16:38:54',
                'updated_at' => '2021-09-14 16:38:54',
            ),
            1 => 
            array (
                'id' => 6,
                'key' => 'facebook',
                'value' => 'https://www.facebook.com/thepltutorials/',
                'fa5_icon' => NULL,
                'fa4_icon' => NULL,
                'created_at' => '2021-09-14 16:39:16',
                'updated_at' => '2021-09-14 16:39:16',
            ),
            2 => 
            array (
                'id' => 7,
                'key' => 'messenger',
                'value' => 'm.me/thepltutorials',
                'fa5_icon' => NULL,
                'fa4_icon' => NULL,
                'created_at' => '2021-09-14 16:39:26',
                'updated_at' => '2021-09-14 16:39:26',
            ),
            3 => 
            array (
                'id' => 8,
                'key' => 'hero-title',
                'value' => 'next pl in',
                'fa5_icon' => NULL,
                'fa4_icon' => NULL,
                'created_at' => '2021-09-14 16:39:56',
                'updated_at' => '2021-09-14 16:39:56',
            ),
            4 => 
            array (
                'id' => 9,
                'key' => 'youtube',
                'value' => 'https://www.youtube.com/c/PLTutorials',
                'fa5_icon' => NULL,
                'fa4_icon' => NULL,
                'created_at' => '2021-09-14 16:40:10',
                'updated_at' => '2021-09-14 16:40:10',
            ),
        ));
        
        
    }
}