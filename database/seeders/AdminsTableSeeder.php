<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Monzurul Islam',
                'student_id' => '1404143',
                'email' => 'monzurul-islam@example.com',
                'password' => '$2y$10$khy5xLoVgwyBQbspxeXhdeD4WcX4T77SiBFC6MbQm0SISgF7IDz0S',
                'user_letter' => 'M',
                'status' => 1,
                'remember_token' => '8iF4JvdLEJs8I2EsdhoICjd59hRPXP4eqBFwwaiRXRjErVjfBciWPiMVX1Wo',
                'created_at' => '2018-06-20 18:09:11',
                'updated_at' => '2022-08-24 17:24:04',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Tajrin Alom Nizhum',
                'student_id' => '1604143',
                'email' => 'tajrin-alom-nizhum@example.com',
                'password' => '$2y$10$khy5xLoVgwyBQbspxeXhdeD4WcX4T77SiBFC6MbQm0SISgF7IDz0S',
                'user_letter' => 'T',
                'status' => 1,
                'remember_token' => 'tLTKbQvfx9oAdKNUxaqovRoIzB0KNxEFsqgg7z0SG5ryKGZQLjuLEEz0xINK',
                'created_at' => '2018-06-20 21:03:08',
                'updated_at' => '2022-08-24 17:24:04',
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'Atiqur Rahaman Sikder',
                'student_id' => '1604051',
                'email' => 'atiqur-rahaman-sikder@example.com',
                'password' => '$2y$10$khy5xLoVgwyBQbspxeXhdeD4WcX4T77SiBFC6MbQm0SISgF7IDz0S',
                'user_letter' => 'A',
                'status' => 1,
                'remember_token' => '9Ay64ACM01OtqLzHU4zDiXRrAkPOdkI918LgeYO2XasDFgtWIEU7VyTJPhoU',
                'created_at' => '2018-06-20 21:03:46',
                'updated_at' => '2022-08-24 17:24:04',
            ),
            3 => 
            array (
                'id' => 10,
                'name' => 'Rakibul Hasan',
                'student_id' => '1504075',
                'email' => 'rakibul-hasan@example.com',
                'password' => '$2y$10$khy5xLoVgwyBQbspxeXhdeD4WcX4T77SiBFC6MbQm0SISgF7IDz0S',
                'user_letter' => 'R',
                'status' => 1,
                'remember_token' => 'pIdSE2H6MzL4F2q8fgseZfxloBnm8ocS2aXxcYh0uixQFckHPmcyP7ryQshW',
                'created_at' => '2018-06-20 21:04:13',
                'updated_at' => '2022-08-24 17:24:04',
            ),
            4 => 
            array (
                'id' => 11,
                'name' => 'Kamol Debnath Dip',
                'student_id' => '1504077',
                'email' => 'kamol-debnath-dip@example.com',
                'password' => '$2y$10$khy5xLoVgwyBQbspxeXhdeD4WcX4T77SiBFC6MbQm0SISgF7IDz0S',
                'user_letter' => 'K',
                'status' => 1,
                'remember_token' => 'Td2cdM9SHsQaHs2F4ehOeiIlzhy57SFWWoRZhihCCi4c2ybyKjCR8gzmLBUE',
                'created_at' => '2018-06-20 21:04:38',
                'updated_at' => '2022-08-24 17:24:04',
            ),
            5 => 
            array (
                'id' => 13,
                'name' => 'Md. Mahmudul Hasan Novo',
                'student_id' => '1604152',
                'email' => 'md-mahmudul-hasan-novo@example.com',
                'password' => '$2y$10$khy5xLoVgwyBQbspxeXhdeD4WcX4T77SiBFC6MbQm0SISgF7IDz0S',
                'user_letter' => 'N',
                'status' => 0,
                'remember_token' => 'SkphRvsTifoxB4WUGE6M8nzHhPbtEXauAt0dZAwXl0X683aZb8KsjtAGdwYX',
                'created_at' => '2018-06-20 22:43:50',
                'updated_at' => '2022-08-24 17:24:04',
            ),
            6 => 
            array (
                'id' => 250,
                'name' => 'Faiyaz',
                'student_id' => '1704147',
                'email' => 'faiyaz@example.com',
                'password' => '$2y$10$khy5xLoVgwyBQbspxeXhdeD4WcX4T77SiBFC6MbQm0SISgF7IDz0S',
                'user_letter' => 'F',
                'status' => 1,
                'remember_token' => 'kANHOKsu3YZssfDejZ2TvIE6ZDN4xX9e5uP8dvr2NAPllUtPM5O9gz3FGbCf',
                'created_at' => '2021-02-23 01:00:31',
                'updated_at' => '2022-08-24 17:24:04',
            ),
            7 => 
            array (
                'id' => 1005,
                'name' => 'MD. NAYEEMUR RASHID NAYEEM',
                'student_id' => '1804077',
                'email' => 'md-nayeemur-rashid-nayeem@example.com',
                'password' => '$2y$10$khy5xLoVgwyBQbspxeXhdeD4WcX4T77SiBFC6MbQm0SISgF7IDz0S',
                'user_letter' => 'M',
                'status' => 1,
                'remember_token' => 'rzotaYIJxtbP2XeeeWC27KIPmjz2c4SzJ5kF3EcC2MJYL1XiqlRrTnjCroEc',
                'created_at' => '2022-01-25 12:24:41',
                'updated_at' => '2022-08-24 17:24:04',
            ),
            8 => 
            array (
                'id' => 1127,
                'name' => 'ISA RAHMAN',
                'student_id' => '1804131',
                'email' => 'isa-rahman@example.com',
                'password' => '$2y$10$khy5xLoVgwyBQbspxeXhdeD4WcX4T77SiBFC6MbQm0SISgF7IDz0S',
                'user_letter' => 'I',
                'status' => 1,
                'remember_token' => 'CPKmIWWDvSC07zGzImmkbKk2jrm6tnWLi2xgthiWo6pjWFjSnHYcDSI3p9HM',
                'created_at' => '2022-01-25 12:25:22',
                'updated_at' => '2022-08-24 17:24:04',
            ),
            9 => 
            array (
                'id' => 1969,
                'name' => 'Mehzad Galib',
                'student_id' => '1715003',
                'email' => 'mehzad-galib@example.com',
                'password' => '$2y$10$khy5xLoVgwyBQbspxeXhdeD4WcX4T77SiBFC6MbQm0SISgF7IDz0S',
                'user_letter' => 'M',
                'status' => 1,
                'remember_token' => '1SZCblupOhO7GCmCLWJ5U3dNrYb1SkQLaGngreB86jXOUNqyNefZVKNpRDBc',
                'created_at' => '2022-04-24 20:37:38',
                'updated_at' => '2022-08-24 17:24:04',
            ),
            10 => 
            array (
                'id' => 100000000,
                'name' => 'Pl Tutorials',
                'student_id' => '0000000',
                'email' => 'pl-tutorials@example.com',
                'password' => '$2y$10$khy5xLoVgwyBQbspxeXhdeD4WcX4T77SiBFC6MbQm0SISgF7IDz0S',
                'user_letter' => 'P',
                'status' => 1,
                'remember_token' => 'Ba5ssmMmfU0Q5DAo1aErtb2mIyBjQoaRQXz84QlqfZMrGnTznncjBqfEjmWO',
                'created_at' => '2018-06-20 21:08:26',
                'updated_at' => '2022-08-24 17:24:04',
            ),
        ));
        
        
    }
}