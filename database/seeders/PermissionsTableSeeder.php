<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'user_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:30:04',
                'updated_at' => '2018-06-15 19:30:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user_create',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:30:22',
                'updated_at' => '2018-06-15 19:30:22',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'user_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:30:41',
                'updated_at' => '2018-06-15 19:30:41',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'user_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:30:54',
                'updated_at' => '2018-06-15 19:30:54',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'post_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:31:13',
                'updated_at' => '2018-06-15 19:31:13',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'post_create',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:31:24',
                'updated_at' => '2018-06-15 19:31:24',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'post_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:31:36',
                'updated_at' => '2018-06-15 19:31:36',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'post_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:31:45',
                'updated_at' => '2018-06-15 19:31:45',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'department_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:32:21',
                'updated_at' => '2018-06-15 19:32:21',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'department_create',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:32:39',
                'updated_at' => '2018-06-15 19:32:39',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'department_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:32:54',
                'updated_at' => '2018-06-15 19:32:54',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'department_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:33:05',
                'updated_at' => '2018-06-15 19:33:05',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'level_term_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:34:07',
                'updated_at' => '2018-06-15 19:34:07',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'level_term_create',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:34:28',
                'updated_at' => '2018-06-15 19:34:28',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'level_term_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:34:41',
                'updated_at' => '2018-06-15 19:34:41',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'level_term_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:34:55',
                'updated_at' => '2018-06-15 19:34:55',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'course_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:35:18',
                'updated_at' => '2018-06-15 19:35:18',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'course_create',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:35:29',
                'updated_at' => '2018-06-15 19:35:29',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'course_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:35:41',
                'updated_at' => '2018-06-15 19:35:41',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'course_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:35:53',
                'updated_at' => '2018-06-15 19:35:53',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'software_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:36:14',
                'updated_at' => '2018-06-15 19:36:14',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'software_create',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:36:15',
                'updated_at' => '2018-06-15 19:36:15',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'software_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:36:58',
                'updated_at' => '2018-06-15 19:36:58',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'software_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:37:11',
                'updated_at' => '2018-06-15 19:37:11',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'book_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:37:31',
                'updated_at' => '2018-06-15 19:37:31',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'book_create',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:37:42',
                'updated_at' => '2018-06-15 19:37:42',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'book_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:38:23',
                'updated_at' => '2018-06-15 19:38:23',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'book_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:38:39',
                'updated_at' => '2018-06-15 19:38:39',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'faq_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:39:17',
                'updated_at' => '2018-06-15 19:39:17',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'faq_create',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:39:33',
                'updated_at' => '2018-06-15 19:39:33',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'faq_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:39:46',
                'updated_at' => '2018-06-15 19:39:46',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'faq_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:39:57',
                'updated_at' => '2018-06-15 19:39:57',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'testimonial_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:40:17',
                'updated_at' => '2018-06-15 19:40:17',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'testimonial_create',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:40:28',
                'updated_at' => '2018-06-15 19:40:28',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'testimonial_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:40:40',
                'updated_at' => '2018-06-15 19:40:40',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'testimonial_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:40:51',
                'updated_at' => '2018-06-15 19:40:51',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'contact_view',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:42:03',
                'updated_at' => '2018-06-15 19:42:03',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'contact_reply',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:42:15',
                'updated_at' => '2018-06-15 19:42:15',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'contact_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:42:29',
                'updated_at' => '2018-06-15 19:42:29',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'userdata_import',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:43:57',
                'updated_at' => '2018-06-15 19:43:57',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'userdata_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:44:15',
                'updated_at' => '2018-06-15 19:44:15',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'admin_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:44:59',
                'updated_at' => '2018-06-15 19:44:59',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'admin_create',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:45:11',
                'updated_at' => '2018-06-15 19:45:11',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'admin_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:45:23',
                'updated_at' => '2018-06-15 19:45:23',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'admin_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:45:43',
                'updated_at' => '2018-06-15 19:45:43',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'role_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:46:15',
                'updated_at' => '2018-06-15 19:46:15',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'role_create',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:46:28',
                'updated_at' => '2018-06-15 19:46:28',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'role_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:46:39',
                'updated_at' => '2018-06-15 19:46:39',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'role_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:46:50',
                'updated_at' => '2018-06-15 19:46:50',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'permission_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:47:07',
                'updated_at' => '2018-06-15 19:47:07',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'permission_create',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:47:19',
                'updated_at' => '2018-06-15 19:47:19',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'permission_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:47:34',
                'updated_at' => '2018-06-15 19:47:34',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'permission_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:47:50',
                'updated_at' => '2018-06-15 19:47:50',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'utilities_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:48:19',
                'updated_at' => '2018-06-15 19:48:19',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'utilities_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:48:36',
                'updated_at' => '2018-06-15 19:48:36',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'activities_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2018-06-15 19:48:51',
                'updated_at' => '2018-06-15 19:48:51',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'dashboard',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'user_password',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'custom',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2021-10-03 17:35:45',
                'updated_at' => '2021-10-03 17:35:45',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'ban_show',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2022-10-15 15:28:58',
                'updated_at' => '2022-10-15 15:28:58',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'ban_create',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2022-10-15 15:29:08',
                'updated_at' => '2022-10-15 15:29:08',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'ban_update',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2022-10-15 15:29:16',
                'updated_at' => '2022-10-15 15:29:16',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'ban_delete',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2022-10-15 15:29:22',
                'updated_at' => '2022-10-15 15:29:22',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'user_ban_check',
                'display_name' => NULL,
                'description' => NULL,
                'created_at' => '2022-10-17 18:16:52',
                'updated_at' => '2022-10-17 18:16:52',
            ),
        ));
        
        
    }
}