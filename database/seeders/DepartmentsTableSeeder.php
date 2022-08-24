<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Civil Engineering',
                'code' => '04',
                'slug' => 'ce',
                'image' => 'ce_04.png',
                'created_at' => NULL,
                'updated_at' => '2022-02-27 03:47:07',
                'deleted_at' => NULL,
                'can_be_accessed_by' => 'ce,wre',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Water Resources Engineering',
                'code' => '16',
                'slug' => 'wre',
                'image' => 'asdfadsf.adf',
                'created_at' => NULL,
                'updated_at' => '2022-08-02 17:38:39',
                'deleted_at' => NULL,
                'can_be_accessed_by' => 'arch,bme,ce,wre',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Architecture',
                'code' => '01',
                'slug' => 'arch',
                'image' => 'arch_01png',
                'created_at' => '2022-08-24 15:42:11',
                'updated_at' => '2022-08-24 15:42:11',
                'deleted_at' => NULL,
                'can_be_accessed_by' => 'arch',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Chemical Engineering',
                'code' => '02',
                'slug' => 'che',
                'image' => 'che_02png',
                'created_at' => '2022-08-24 15:42:36',
                'updated_at' => '2022-08-24 15:42:36',
                'deleted_at' => NULL,
                'can_be_accessed_by' => 'che',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Computer Science & Engineering',
                'code' => '05',
                'slug' => 'cse',
                'image' => 'cse_05png',
                'created_at' => '2022-08-24 15:42:55',
                'updated_at' => '2022-08-24 15:42:55',
                'deleted_at' => NULL,
                'can_be_accessed_by' => 'cse',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Electrical & Electronics Engineering',
                'code' => '06',
                'slug' => 'eee',
                'image' => 'eee_06png',
                'created_at' => '2022-08-24 15:43:20',
                'updated_at' => '2022-08-24 15:43:20',
                'deleted_at' => NULL,
                'can_be_accessed_by' => 'eee',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Mechanical Engineering',
                'code' => '10',
                'slug' => 'me',
                'image' => 'me_10png',
                'created_at' => '2022-08-24 15:44:02',
                'updated_at' => '2022-08-24 15:44:02',
                'deleted_at' => NULL,
                'can_be_accessed_by' => 'me',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Materials & Metallurgical Engineering',
                'code' => '11',
                'slug' => 'mme',
                'image' => 'mme_11png',
                'created_at' => '2022-08-24 15:44:21',
                'updated_at' => '2022-08-24 15:44:21',
                'deleted_at' => NULL,
                'can_be_accessed_by' => 'mme',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Naval Architect & Marine Engineering',
                'code' => '12',
                'slug' => 'name',
                'image' => 'name_12png',
                'created_at' => '2022-08-24 15:44:41',
                'updated_at' => '2022-08-24 15:44:41',
                'deleted_at' => NULL,
                'can_be_accessed_by' => 'name',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Urban & Regional Planning',
                'code' => '15',
                'slug' => 'urp',
                'image' => 'urp_15png',
                'created_at' => '2022-08-24 15:45:01',
                'updated_at' => '2022-08-24 15:45:01',
                'deleted_at' => NULL,
                'can_be_accessed_by' => 'urp',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Industrial & Production Engineering',
                'code' => '08',
                'slug' => 'ipe',
                'image' => 'ipe_08png',
                'created_at' => '2022-08-24 15:45:22',
                'updated_at' => '2022-08-24 15:45:22',
                'deleted_at' => NULL,
                'can_be_accessed_by' => 'ipe',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Bio Medical Engineering',
                'code' => '18',
                'slug' => 'bme',
                'image' => 'bme_18png',
                'created_at' => '2022-08-24 15:45:43',
                'updated_at' => '2022-08-24 15:45:43',
                'deleted_at' => NULL,
                'can_be_accessed_by' => 'bme',
            ),
        ));
        
        
    }
}