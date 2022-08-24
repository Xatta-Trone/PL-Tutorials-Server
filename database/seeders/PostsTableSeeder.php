<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('posts')->delete();

        \DB::table('posts')->insert(array(
            0 =>
            array(
                'id' => 2,
                'name' => 'Afia Apu\'s Note',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/open?id=16tXAb2CVqQji9wTqOH_gSzLRTpxK2oHG',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Afia Apu\'s Note  ce 1-2  ',
                'created_at' => '2018-06-23 01:45:32',
                'updated_at' => '2018-07-06 02:06:31',


            ),
            1 =>
            array(
                'id' => 3,
                'name' => 'Class Lecture\'15',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 6,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1GzCOKoXAxAK6nWjxLME8G499blCea5eS?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture\'15  ce 1-2  Computer Aided Drafting ce102 1.5 credit',
                'created_at' => '2018-06-23 01:47:33',
                'updated_at' => '2018-07-06 02:07:24',


            ),
            2 =>
            array(
                'id' => 4,
                'name' => 'Videos',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 6,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/19_pX8lpUbOstSSZJrqwk808yaJEej2wh?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Videos  ce 1-2  Computer Aided Drafting ce102 1.5 credit',
                'created_at' => '2018-06-23 01:48:09',
                'updated_at' => '2018-07-06 02:07:29',


            ),
            3 =>
            array(
                'id' => 5,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 6,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1XHSDmbD6N4lVqbhNn4rQ0G6FNQXrUf-A?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-2  Computer Aided Drafting ce102 1.5 credit',
                'created_at' => '2018-06-23 01:48:42',
                'updated_at' => '2018-07-06 02:07:35',


            ),
            4 =>
            array(
                'id' => 6,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 1,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1cdd7w7QO9Onva2adhyloi-GkC1EBIb0G?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 1-2  Surveying ce103 4 Credit',
                'created_at' => '2018-06-23 01:49:48',
                'updated_at' => '2018-07-06 02:07:40',


            ),
            5 =>
            array(
                'id' => 7,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 1,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/19yOSUDdAyPtn8jiZYcM6noHM5EkdaADW?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 1-2  Surveying ce103 4 Credit',
                'created_at' => '2018-06-23 01:51:31',
                'updated_at' => '2018-07-06 02:08:48',


            ),
            6 =>
            array(
                'id' => 8,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 1,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1VL9PG92tdtM3UXLhhttis_BH4dIs8WKC?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 1-2  Surveying ce103 4 Credit',
                'created_at' => '2018-06-23 01:52:04',
                'updated_at' => '2018-07-06 02:08:53',


            ),
            7 =>
            array(
                'id' => 9,
                'name' => 'Videos',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 1,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1wMtE3_6h4OstnyMEswAjKzwKG1G082jG?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Videos  ce 1-2  Surveying ce103 4 Credit',
                'created_at' => '2018-06-23 01:52:36',
                'updated_at' => '2018-07-06 02:08:58',


            ),
            8 =>
            array(
                'id' => 10,
                'name' => 'CE 103',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 1,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/17vKONjzFRo8gJlGv6GFRcw0m38JTK3P_?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'CE 103  ce 1-2  Surveying ce103 4 Credit',
                'created_at' => '2018-06-23 01:53:10',
                'updated_at' => '2018-07-06 02:09:04',


            ),
            9 =>
            array(
                'id' => 11,
                'name' => 'Assignment',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 1,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1-g0N2o7SIGs6vEBsjGHiMWeRskaj4db_?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Assignment  ce 1-2  Surveying ce103 4 Credit',
                'created_at' => '2018-06-23 01:53:39',
                'updated_at' => '2018-07-06 02:09:10',


            ),
            10 =>
            array(
                'id' => 12,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 1,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/19EfC-KybCtHThROOmiTxuE0JGElUrMyg?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-2  Surveying ce103 4 Credit',
                'created_at' => '2018-06-23 01:54:46',
                'updated_at' => '2018-07-06 02:09:15',


            ),
            11 =>
            array(
                'id' => 13,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/14e_jSroyYGUa--YP0ZZHW9rl60T7LP7H?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 1-2  ',
                'created_at' => '2018-06-23 01:55:34',
                'updated_at' => '2018-07-06 02:09:19',


            ),
            12 =>
            array(
                'id' => 14,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 2,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1NO_fjo7_hXXdNtffQti5jagu9UENUH5d?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 1-2  Basic Electrical Technology eee165 3 credit',
                'created_at' => '2018-06-23 01:56:15',
                'updated_at' => '2018-07-06 02:09:22',


            ),
            13 =>
            array(
                'id' => 15,
                'name' => 'Chotha',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 2,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1qRzp0f9RzPy_YQCQ2ozDHs84KVHQA7BH?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Chotha  ce 1-2  Basic Electrical Technology eee165 3 credit',
                'created_at' => '2018-06-23 01:57:09',
                'updated_at' => '2018-07-06 02:09:26',


            ),
            14 =>
            array(
                'id' => 16,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 2,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1h_zOB7uwLg5yrCdOj8IeyeaO0AgBsm-e?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 1-2  Basic Electrical Technology eee165 3 credit',
                'created_at' => '2018-06-23 01:57:32',
                'updated_at' => '2018-07-06 02:09:31',


            ),
            15 =>
            array(
                'id' => 18,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 2,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1eX6CEX2Awb0owHY8qYuSC6Y8SmO7PPHT?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 1-2  Basic Electrical Technology eee165 3 credit',
                'created_at' => '2018-06-23 01:58:28',
                'updated_at' => '2018-07-06 02:11:04',


            ),
            16 =>
            array(
                'id' => 19,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 2,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Qur0KOpX5ueLyfNKga3VtenNOUUXYlgq?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 1-2  Basic Electrical Technology eee165 3 credit',
                'created_at' => '2018-06-23 01:58:55',
                'updated_at' => '2018-07-06 02:11:58',


            ),
            17 =>
            array(
                'id' => 20,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 2,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1fyGqRuQYHfriAwtCwDuj2DGzi8HtZHp9?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-2  Basic Electrical Technology eee165 3 credit',
                'created_at' => '2018-06-23 01:59:20',
                'updated_at' => '2018-07-06 02:11:46',


            ),
            18 =>
            array(
                'id' => 21,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 3,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1fgNsYnk-EjJNPAe2_KBEMO-iwfPOaNJi?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-2  English hum185 2 credit',
                'created_at' => '2018-06-23 02:05:43',
                'updated_at' => '2018-07-06 02:11:47',


            ),
            19 =>
            array(
                'id' => 22,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 7,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/10F5NtgdFOisNsHgD310-pcteOgG530tu?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-2  Developing English Language Skills hum274 1.5 credit',
                'created_at' => '2018-06-23 02:06:41',
                'updated_at' => '2018-07-06 02:12:30',


            ),
            20 =>
            array(
                'id' => 23,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 4,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ExpIZVxSq_tztur8MhBrRKVR9ZiSM5eH?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 1-2  Defferential Equations and Statistics math139 3 credit',
                'created_at' => '2018-06-23 02:07:20',
                'updated_at' => '2018-07-06 02:12:34',


            ),
            21 =>
            array(
                'id' => 24,
                'name' => 'Chotha',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 4,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1of3epoN6EA-bZLtgoVikymeLT_BCI8aE?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Chotha  ce 1-2  Defferential Equations and Statistics math139 3 credit',
                'created_at' => '2018-06-23 02:07:59',
                'updated_at' => '2018-07-06 02:12:38',


            ),
            22 =>
            array(
                'id' => 25,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 4,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1hZLkfp9gcTbUegeJrvrIUWIC5sdWL61J?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 1-2  Defferential Equations and Statistics math139 3 credit',
                'created_at' => '2018-06-23 02:08:34',
                'updated_at' => '2018-07-06 02:12:42',


            ),
            23 =>
            array(
                'id' => 26,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 4,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ANoho-3AR1CEzSHNqeY8rN62Sg7ycbOj?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-2  Defferential Equations and Statistics math139 3 credit',
                'created_at' => '2018-06-23 02:08:58',
                'updated_at' => '2018-07-06 02:12:45',


            ),
            24 =>
            array(
                'id' => 27,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 5,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1B_d8Fo7AW72FHtfbF49gcK6TV_rbnRnp?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 1-2  Structure of Matter, Electricity and Magnetism and Modern Physics phy151 3 credit',
                'created_at' => '2018-06-23 02:09:57',
                'updated_at' => '2018-07-06 02:12:49',


            ),
            25 =>
            array(
                'id' => 28,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 5,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1MtwXx4bF8a_u2Ize0eonTucWmQf9nZro?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 1-2  Structure of Matter, Electricity and Magnetism and Modern Physics phy151 3 credit',
                'created_at' => '2018-06-23 02:10:28',
                'updated_at' => '2018-07-06 02:13:15',


            ),
            26 =>
            array(
                'id' => 29,
                'name' => 'Physics extra',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 5,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1wXfAR55_E_Fk3NwpujWZ88ZXskVY-QGf?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Physics extra  ce 1-2  Structure of Matter, Electricity and Magnetism and Modern Physics phy151 3 credit',
                'created_at' => '2018-06-23 02:11:13',
                'updated_at' => '2018-07-06 02:13:03',


            ),
            27 =>
            array(
                'id' => 30,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 5,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1gnERocPfpAgIn0oYB8SOV2llC-gqK-MH?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 1-2  Structure of Matter, Electricity and Magnetism and Modern Physics phy151 3 credit',
                'created_at' => '2018-06-23 02:11:41',
                'updated_at' => '2018-07-06 02:13:05',


            ),
            28 =>
            array(
                'id' => 31,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 5,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1lYmOAuxKx6OCfvJ2jQF_FRDYqQftBqPu?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-2  Structure of Matter, Electricity and Magnetism and Modern Physics phy151 3 credit',
                'created_at' => '2018-06-23 02:12:18',
                'updated_at' => '2018-07-06 02:13:08',


            ),
            29 =>
            array(
                'id' => 32,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1MyWP_AvH39Rrlr9o8bzVORqqmEn-M08T?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 1-2  ',
                'created_at' => '2018-06-23 02:12:55',
                'updated_at' => '2018-07-06 02:13:47',


            ),
            30 =>
            array(
                'id' => 33,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 8,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1xtLaU_pcCjoDZInEmkPI-aT85EVd5S5x?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-2  Workshop Sessional shop132 1.5 credit',
                'created_at' => '2018-06-23 02:13:30',
                'updated_at' => '2018-07-06 02:13:49',


            ),
            31 =>
            array(
                'id' => 34,
                'name' => 'Extra',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1dV8Ym53PqqFWCUkHPk3wfCZ5hDdjWBQx?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Extra  ce 1-2  ',
                'created_at' => '2018-06-23 02:14:51',
                'updated_at' => '2018-07-06 02:13:53',


            ),
            32 =>
            array(
                'id' => 35,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1L8satFZh8QRyjwK7Q3V8AS_u1vJdq2rD?usp=sharing',
                'image' => '',
                'status' => '3',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-2  ',
                'created_at' => '2018-06-23 02:17:04',
                'updated_at' => '2018-10-30 19:50:56',


            ),
            33 =>
            array(
                'id' => 36,
                'name' => 'Afia Apu\'s Note',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1W2B2Aq1xxpImzKEym_V6daMKlBXWdVof?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Afia Apu\'s Note  ce 1-1  ',
                'created_at' => '2018-06-24 19:52:38',
                'updated_at' => '2018-07-06 02:14:00',


            ),
            34 =>
            array(
                'id' => 37,
                'name' => 'CE 16',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 32,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1kbl501K5GsQTcKOTjGWYuEN8dlgdw8V4?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'CE 16  ce 1-1  Civil Engineering Drawing ce100 ',
                'created_at' => '2018-06-24 19:54:11',
                'updated_at' => '2018-07-06 02:14:04',


            ),
            35 =>
            array(
                'id' => 38,
                'name' => 'Civil Drawing',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 32,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1rMz9jH7pCoSira9P-pzlP-NyPizphOTx?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Civil Drawing  ce 1-1  Civil Engineering Drawing ce100 ',
                'created_at' => '2018-06-24 19:55:00',
                'updated_at' => '2018-07-06 02:14:07',


            ),
            36 =>
            array(
                'id' => 39,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 32,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ZyGQ5aNMYe5nm5LacmZpb6XeDhSxVlk7?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-1  Civil Engineering Drawing ce100 ',
                'created_at' => '2018-06-24 19:55:56',
                'updated_at' => '2018-07-06 02:14:11',


            ),
            37 =>
            array(
                'id' => 40,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 26,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1PIzgf9ecQtjj1_tWvtD8NJIJgaTrEB8q?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 1-1  Analytic Mechanics ce101 ',
                'created_at' => '2018-06-24 19:56:39',
                'updated_at' => '2018-07-06 02:14:14',


            ),
            38 =>
            array(
                'id' => 41,
                'name' => 'Dynamics Yasin Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 26,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1KMWrAmX8S1U6JNaGqxgQ_RQx4k3--cps?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Dynamics Yasin Sir  ce 1-1  Analytic Mechanics ce101 ',
                'created_at' => '2018-06-24 19:57:08',
                'updated_at' => '2018-07-06 02:14:17',


            ),
            39 =>
            array(
                'id' => 42,
                'name' => 'Statics Siddiq Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 26,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1guuUOTSKwrHzrKyFuVj-vKemcs7gAXqp?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Statics Siddiq Sir  ce 1-1  Analytic Mechanics ce101 ',
                'created_at' => '2018-06-24 19:57:38',
                'updated_at' => '2018-07-06 02:14:54',


            ),
            40 =>
            array(
                'id' => 43,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 26,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1uzb1YKBy1Z_WS5cooZXZtspmZzHg4wIy?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 1-1  Analytic Mechanics ce101 ',
                'created_at' => '2018-06-24 20:00:01',
                'updated_at' => '2018-07-06 02:14:59',


            ),
            41 =>
            array(
                'id' => 44,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 26,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1f8jjk68hS-hFjHhxqU7uy5Dq2afRiO3o?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 1-1  Analytic Mechanics ce101 ',
                'created_at' => '2018-06-24 20:00:43',
                'updated_at' => '2018-07-06 02:15:02',


            ),
            42 =>
            array(
                'id' => 45,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 26,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1usHJNiUut-Yja3XkoXWwT86jm_2qbVXg?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-1  Analytic Mechanics ce101 ',
                'created_at' => '2018-06-24 20:01:28',
                'updated_at' => '2018-07-06 02:15:06',


            ),
            43 =>
            array(
                'id' => 46,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 27,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1OKwKol4uN2_hZKp66x3-OgVDGzCwVBO_?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 1-1  Chemistry I ce103 ',
                'created_at' => '2018-06-24 20:02:34',
                'updated_at' => '2018-07-06 02:15:09',


            ),
            44 =>
            array(
                'id' => 47,
                'name' => 'Chotha',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 27,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/15gkysHupKYmM81-e6bOQkyWe7kplGOen?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Chotha  ce 1-1  Chemistry I ce103 ',
                'created_at' => '2018-06-24 20:02:57',
                'updated_at' => '2018-07-06 02:15:13',


            ),
            45 =>
            array(
                'id' => 48,
                'name' => 'Essentials of Physical Chemistry by tuli',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 27,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1OEnEHQf7qlI_z731DuLRe6ytGrTy_Wpa?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Essentials of Physical Chemistry by tuli  ce 1-1  Chemistry I ce103 ',
                'created_at' => '2018-06-24 20:03:45',
                'updated_at' => '2018-07-06 02:15:18',


            ),
            46 =>
            array(
                'id' => 49,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 27,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1cnMxcPS7KcE-BWVaIf1N8AWG7pJbiWcn?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 1-1  Chemistry I ce103 ',
                'created_at' => '2018-06-24 20:04:09',
                'updated_at' => '2018-07-06 02:15:21',


            ),
            47 =>
            array(
                'id' => 50,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 27,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1VswY8eA6d0VkRKvqkO_555SZiVXJh4Sy?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-1  Chemistry I ce103 ',
                'created_at' => '2018-06-24 20:04:35',
                'updated_at' => '2018-07-06 02:15:43',


            ),
            48 =>
            array(
                'id' => 51,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 33,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1GTirntR4HG9No6nnMfXB2kp6o2f7yTE7?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-1  Inorganic Quantitative Analysis chem114 ',
                'created_at' => '2018-06-24 20:05:18',
                'updated_at' => '2018-07-06 02:15:35',


            ),
            49 =>
            array(
                'id' => 52,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1-CICzPQdEDzY2GQK9sDQ0mSwmdfu3lkI?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 1-1  ',
                'created_at' => '2018-06-24 20:05:50',
                'updated_at' => '2018-07-06 02:15:37',


            ),
            50 =>
            array(
                'id' => 53,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 30,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1TK3yFW6Q89rm88s2GUoOEF3qQ3_y4zdF?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 1-1  Sociology hum355 ',
                'created_at' => '2018-06-24 20:06:25',
                'updated_at' => '2018-07-06 02:16:26',


            ),
            51 =>
            array(
                'id' => 54,
                'name' => 'Material',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 30,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/10EltcUO7Bvg4NW6tSTCpkLKSTBbJxOaY?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Material  ce 1-1  Sociology hum355 ',
                'created_at' => '2018-06-24 20:07:05',
                'updated_at' => '2018-07-06 02:16:31',


            ),
            52 =>
            array(
                'id' => 55,
                'name' => 'Notes',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 30,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1KHUYcQ8-kdlZ7hsIdeGfWDGgLRWtRWAu?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Notes  ce 1-1  Sociology hum355 ',
                'created_at' => '2018-06-24 20:07:25',
                'updated_at' => '2018-07-06 02:16:35',


            ),
            53 =>
            array(
                'id' => 56,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 30,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ca39aK725D-oWSgWh0j1IeogXxWKCykz?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 1-1  Sociology hum355 ',
                'created_at' => '2018-06-24 20:07:47',
                'updated_at' => '2018-07-06 02:16:40',


            ),
            54 =>
            array(
                'id' => 57,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 30,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1zysdo_oplI2kwjI7TXaOPw9kA9Ot_bC9?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-1  Sociology hum355 ',
                'created_at' => '2018-06-24 20:08:08',
                'updated_at' => '2018-07-06 02:16:44',


            ),
            55 =>
            array(
                'id' => 58,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 28,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1S-wu2INUT5Jq8L6tk3-dNJCp103JNu0O?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 1-1  Differential and Integral Calculus, Matrices math137 3 credit',
                'created_at' => '2018-06-24 20:08:46',
                'updated_at' => '2018-07-06 02:16:47',


            ),
            56 =>
            array(
                'id' => 59,
                'name' => 'math',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 28,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1yHigGCEdgmj7vm42BRNx3Gmp2usGgSG-?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'math  ce 1-1  Differential and Integral Calculus, Matrices math137 3 credit',
                'created_at' => '2018-06-24 20:09:15',
                'updated_at' => '2018-07-06 02:16:50',


            ),
            57 =>
            array(
                'id' => 60,
                'name' => 'Solutions-Anton Bivens Davis',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 28,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1TmXQpJDsvwKPxA3XnpJ0rvmK8YHEB_qd?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Solutions-Anton Bivens Davis  ce 1-1  Differential and Integral Calculus, Matrices math137 3 credit',
                'created_at' => '2018-06-24 20:09:53',
                'updated_at' => '2018-07-06 02:16:53',


            ),
            58 =>
            array(
                'id' => 61,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 28,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1NzzMau-POm-_cxMNYPh1yn972caMxk30?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-1  Differential and Integral Calculus, Matrices math137 3 credit',
                'created_at' => '2018-06-24 20:10:18',
                'updated_at' => '2018-07-06 02:17:00',


            ),
            59 =>
            array(
                'id' => 62,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 29,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1uPAmF6wqXFUGIryMA-rQD3PawZuaHxRE?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 1-1  Physical Optics, Waves and Oscillation, Heat and Thermodynamics phy101 ',
                'created_at' => '2018-06-24 20:10:53',
                'updated_at' => '2018-07-06 02:17:03',


            ),
            60 =>
            array(
                'id' => 63,
                'name' => 'Chotha',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 29,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1l16rcrDxSyh2MGw9rG2MgUFQRy7fOU79?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Chotha  ce 1-1  Physical Optics, Waves and Oscillation, Heat and Thermodynamics phy101 ',
                'created_at' => '2018-06-24 20:11:32',
                'updated_at' => '2018-07-06 02:17:51',


            ),
            61 =>
            array(
                'id' => 64,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1oRPT8jkXny-9vxwYbYpGGkrsSzKc0G-Z?usp=sharing',
                'image' => '',
                'status' => '3',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-1  ',
                'created_at' => '2018-06-24 20:11:54',
                'updated_at' => '2018-10-30 19:50:44',


            ),
            62 =>
            array(
                'id' => 65,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 34,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1CKdrzbpFtjITih9q4NYsZgCl47QcN3Iv?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-1  Physics Laboratory phy102 ',
                'created_at' => '2018-06-24 20:12:34',
                'updated_at' => '2018-07-06 02:17:59',


            ),
            63 =>
            array(
                'id' => 66,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1spCJnar3QfTvSppvptor_SPZXbICn_Py?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 1-1  ',
                'created_at' => '2018-06-24 20:12:57',
                'updated_at' => '2018-07-06 02:18:03',


            ),
            64 =>
            array(
                'id' => 67,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1xcdyrsfunBhWi_3RjVkTp21JL7DCbN24?usp=sharing',
                'image' => '',
                'status' => '3',
                'custom_message' => NULL,
                'description' => 'All in one  ce 1-1  ',
                'created_at' => '2018-06-24 20:16:10',
                'updated_at' => '2018-10-30 19:50:37',


            ),
            65 =>
            array(
                'id' => 68,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 20,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1RlftTYVkQnnqHddmlvnZ27TvWl7tYpsE?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 2-2  Applied Mathematics for Engineers ce207 3 credit',
                'created_at' => '2018-06-24 20:18:13',
                'updated_at' => '2018-07-06 02:18:13',


            ),
            66 =>
            array(
                'id' => 69,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 20,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1SeG9NCXeQw2Vs8gFMPhJZRRHJqfedb4m?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 2-2  Applied Mathematics for Engineers ce207 3 credit',
                'created_at' => '2018-06-24 20:18:37',
                'updated_at' => '2018-07-06 02:18:17',


            ),
            67 =>
            array(
                'id' => 70,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 20,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1AeDEpxTB-xy_yZYTn2v6tAyDp0d55gZp?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 2-2  Applied Mathematics for Engineers ce207 3 credit',
                'created_at' => '2018-06-24 20:19:07',
                'updated_at' => '2018-07-06 02:18:20',


            ),
            68 =>
            array(
                'id' => 71,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 20,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1d_d2ka0iQzjvUbGdTup37XIS9B1WZpJx?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 2-2  Applied Mathematics for Engineers ce207 3 credit',
                'created_at' => '2018-06-24 20:19:34',
                'updated_at' => '2018-07-06 02:18:29',


            ),
            69 =>
            array(
                'id' => 72,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 20,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1qETISaKhRo0EeZjlTfvztCw5npSMSAGm?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 2-2  Applied Mathematics for Engineers ce207 3 credit',
                'created_at' => '2018-06-24 20:19:57',
                'updated_at' => '2018-07-06 02:18:33',


            ),
            70 =>
            array(
                'id' => 73,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 20,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1U3wh6Zve2S0D4Js-pBFZT4qCQlskwNpm?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-2  Applied Mathematics for Engineers ce207 3 credit',
                'created_at' => '2018-06-24 20:20:30',
                'updated_at' => '2018-07-06 02:18:38',


            ),
            71 =>
            array(
                'id' => 74,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 59,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1RQMrjK_2HRYLh4RWfhcDoX_jvsnRCpPA?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-2  Practical Surveying ce104 ',
                'created_at' => '2018-06-24 20:21:22',
                'updated_at' => '2018-07-06 02:18:41',


            ),
            72 =>
            array(
                'id' => 75,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1lKYQSrAZl8iDcDqiJ123Qi-YmJs88eez?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 2-2  ',
                'created_at' => '2018-06-24 20:21:47',
                'updated_at' => '2018-07-06 02:18:45',


            ),
            73 =>
            array(
                'id' => 76,
                'name' => 'Cover & Index',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1l6FDhs53cqWfB1SF-_9vynxi3lyLzyeA?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Cover & Index  ce 2-2  ',
                'created_at' => '2018-06-24 20:22:21',
                'updated_at' => '2018-07-06 02:18:50',


            ),
            74 =>
            array(
                'id' => 77,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 19,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/12xXKe76H4wDHS0XhnPDey99Nt67ze3UG?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 2-2  Engineering Economics hum217 2 credit',
                'created_at' => '2018-06-24 20:23:04',
                'updated_at' => '2018-07-06 02:19:06',


            ),
            75 =>
            array(
                'id' => 78,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 19,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1wbbYSbyFyDpKbc4RJJuObz4DYul_1nX4?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 2-2  Engineering Economics hum217 2 credit',
                'created_at' => '2018-06-24 20:23:27',
                'updated_at' => '2018-07-06 02:19:14',


            ),
            76 =>
            array(
                'id' => 79,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 19,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1N7MpF4rcsziMVlkc5aD5hm9lVVD9dD1M?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 2-2  Engineering Economics hum217 2 credit',
                'created_at' => '2018-06-24 20:23:53',
                'updated_at' => '2018-07-06 02:19:22',


            ),
            77 =>
            array(
                'id' => 80,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 19,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1JsrRzg9TigVgQQTG3Inv-hGaIwdZzanS?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 2-2  Engineering Economics hum217 2 credit',
                'created_at' => '2018-06-24 20:24:16',
                'updated_at' => '2018-07-06 02:19:25',


            ),
            78 =>
            array(
                'id' => 81,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 19,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1sv6vuOneQJjD76wDwEqql4CDlUi3mlzp?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 2-2  Engineering Economics hum217 2 credit',
                'created_at' => '2018-06-24 20:24:41',
                'updated_at' => '2018-07-06 02:19:28',


            ),
            79 =>
            array(
                'id' => 82,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 19,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1hXTKcruwMmO8rnDo7wO4pyMGQrKA9paq?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-2  Engineering Economics hum217 2 credit',
                'created_at' => '2018-06-24 20:25:06',
                'updated_at' => '2018-07-06 02:22:14',


            ),
            80 =>
            array(
                'id' => 83,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 21,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1OPxuG-DGvwIfiwaAfdmpVqoxHTldiVDm?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 2-2  Fluid Mechanics wre211 3 credit',
                'created_at' => '2018-06-24 20:25:34',
                'updated_at' => '2018-07-06 02:22:25',


            ),
            81 =>
            array(
                'id' => 84,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 21,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Gn33v17kvh4rsFtgC8QcmTxj8IVRP_-E?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 2-2 ',
                'created_at' => '2018-06-24 20:26:02',
                'updated_at' => '2018-06-24 20:26:02',


            ),
            82 =>
            array(
                'id' => 85,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 21,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1EBL_PMY6sB0UUf7Qh0qEvoFxBOWVadMm?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 2-2  Fluid Mechanics wre211 3 credit',
                'created_at' => '2018-06-24 20:26:26',
                'updated_at' => '2018-07-06 02:22:34',


            ),
            83 =>
            array(
                'id' => 86,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 21,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1fBEo5IAbANb5zS-6u_NScxZQ6uFZO1vu?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 2-2  Fluid Mechanics wre211 3 credit',
                'created_at' => '2018-06-24 20:26:50',
                'updated_at' => '2018-07-06 02:22:38',


            ),
            84 =>
            array(
                'id' => 87,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 21,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1LS8d1kapiIHzyGr89ux9qyhw3MGovSfg?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-2  Fluid Mechanics wre211 3 credit',
                'created_at' => '2018-06-24 20:27:22',
                'updated_at' => '2018-07-06 02:21:09',


            ),
            85 =>
            array(
                'id' => 88,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 25,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1IsDz_zPVU8u-TufnQodPla-bg3sFbvBm?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-2  Fluid Mechanics Sessional wre212 1.5 credit',
                'created_at' => '2018-06-24 20:28:24',
                'updated_at' => '2018-07-06 02:21:13',


            ),
            86 =>
            array(
                'id' => 89,
                'name' => 'Hamim Vai Lectures',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1FQc_E4YE6fwXSNt8baH4zdZ_bh0xd1Aa?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Hamim Vai Lectures  ce 2-2  ',
                'created_at' => '2018-06-24 20:28:55',
                'updated_at' => '2018-07-06 02:21:16',


            ),
            87 =>
            array(
                'id' => 90,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 22,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1PkYXipydnxHsBt7IvmHMjTW2vRjG1tB7?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 2-2  Engineering Computation Sessional ce206 1.5 credit',
                'created_at' => '2018-06-24 20:29:36',
                'updated_at' => '2018-07-06 02:21:20',


            ),
            88 =>
            array(
                'id' => 91,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 22,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1FIdaIYnQDRzHAW0FkbSqVanfNasROJ6C?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 2-2  Engineering Computation Sessional ce206 1.5 credit',
                'created_at' => '2018-06-24 20:30:08',
                'updated_at' => '2018-07-06 02:21:24',


            ),
            89 =>
            array(
                'id' => 92,
                'name' => 'M files',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 22,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/10EDkpT06zT3JtSiR-UKcjKTjijsuuVfL?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'M files  ce 2-2  Engineering Computation Sessional ce206 1.5 credit',
                'created_at' => '2018-06-24 20:30:39',
                'updated_at' => '2018-07-06 02:21:28',


            ),
            90 =>
            array(
                'id' => 93,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 22,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1a3bk9LSyN2NXxW-bmI3GZT0gS5TuxRg7?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 2-2  Engineering Computation Sessional ce206 1.5 credit',
                'created_at' => '2018-06-24 20:31:16',
                'updated_at' => '2018-07-06 02:21:32',


            ),
            91 =>
            array(
                'id' => 94,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 22,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1YFtU3ZmM413G8BOUvxPwauJ1FebvjaHo?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-2  Engineering Computation Sessional ce206 1.5 credit',
                'created_at' => '2018-06-24 20:31:42',
                'updated_at' => '2018-07-06 02:21:36',


            ),
            92 =>
            array(
                'id' => 95,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 17,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1gTZZ3zo7-wI50p6ofuiws2YEZi8yEejR?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 2-2  Numerical Methods ce205 2 credit',
                'created_at' => '2018-06-24 20:32:16',
                'updated_at' => '2018-07-06 02:21:40',


            ),
            93 =>
            array(
                'id' => 96,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 17,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/13KITH3vzq1aXq9mN3n79iwLgUwsnuNIb?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 2-2  Numerical Methods ce205 2 credit',
                'created_at' => '2018-06-24 20:32:37',
                'updated_at' => '2018-07-06 02:21:43',


            ),
            94 =>
            array(
                'id' => 97,
                'name' => 'Notes',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 17,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1XvviVHAxCRELUE_C4O9sBljlLmbo9NpY?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Notes  ce 2-2  Numerical Methods ce205 2 credit',
                'created_at' => '2018-06-24 20:32:59',
                'updated_at' => '2018-07-06 02:21:47',


            ),
            95 =>
            array(
                'id' => 98,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 17,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1SlXpCuY4obVR10CE2R9Ztte7WwgeY1n5?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 2-2  Numerical Methods ce205 2 credit',
                'created_at' => '2018-06-24 20:33:28',
                'updated_at' => '2018-07-06 02:21:50',


            ),
            96 =>
            array(
                'id' => 99,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 17,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/15st2mUkNBQ2j8JsgrkIE5cfiicJroZis?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 2-2  Numerical Methods ce205 2 credit',
                'created_at' => '2018-06-24 20:33:47',
                'updated_at' => '2018-07-06 02:21:54',


            ),
            97 =>
            array(
                'id' => 100,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 17,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1t1cMCe-ItqCbVJn9kngCDH8pgV7LeDaU?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 2-2  Numerical Methods ce205 2 credit',
                'created_at' => '2018-06-24 20:34:16',
                'updated_at' => '2018-07-06 02:22:00',


            ),
            98 =>
            array(
                'id' => 101,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 17,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1JP5Ve8-2MopgdZj7xnXUDFPat8yHiT_s?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-2  Numerical Methods ce205 2 credit',
                'created_at' => '2018-06-24 20:34:37',
                'updated_at' => '2018-07-06 02:22:09',


            ),
            99 =>
            array(
                'id' => 102,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 23,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1eRjiLYVpJplcO5O3tSvxlj4ruBBv1p0H?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-2  Quantity Surveying ce208 1.5 credit',
                'created_at' => '2018-06-24 20:35:19',
                'updated_at' => '2018-07-06 02:23:42',


            ),
            100 =>
            array(
                'id' => 103,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1EAaOq2B-vZpV-_HotLaI_ywZOS_eOq8_?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 2-2  ',
                'created_at' => '2018-06-24 20:35:54',
                'updated_at' => '2018-07-06 02:23:46',


            ),
            101 =>
            array(
                'id' => 104,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 24,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1rUSOhGX0vPtHWhcdzXg6u_3aS0MjCzt_?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-2  Structural Mechanics and Materials Sessional ce212 1.5 credit',
                'created_at' => '2018-06-24 20:36:38',
                'updated_at' => '2018-07-06 02:23:51',


            ),
            102 =>
            array(
                'id' => 105,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 18,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1tK8eFavjVc-oB73woHVtt9-wicQGV_td?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 2-2  Mechanics of Solids II ce213 3 credit',
                'created_at' => '2018-06-24 20:37:06',
                'updated_at' => '2018-07-06 02:23:56',


            ),
            103 =>
            array(
                'id' => 106,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 18,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ywrx9L_8PFd85xyCQubpr-g6-5PfJdwl?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 2-2  Mechanics of Solids II ce213 3 credit',
                'created_at' => '2018-06-24 20:37:30',
                'updated_at' => '2018-07-06 02:24:00',


            ),
            104 =>
            array(
                'id' => 107,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 18,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1vHP2WIWnrhrrDUN8aVMr35LL9SDmCveq?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 2-2  Mechanics of Solids II ce213 3 credit',
                'created_at' => '2018-06-24 20:37:52',
                'updated_at' => '2018-07-06 02:24:03',


            ),
            105 =>
            array(
                'id' => 108,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 18,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Yp4tB3flOWY2WxcElVs2ruklVgslocmh?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 2-2  Mechanics of Solids II ce213 3 credit',
                'created_at' => '2018-06-24 20:38:20',
                'updated_at' => '2018-07-06 02:24:08',


            ),
            106 =>
            array(
                'id' => 109,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 18,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1steDGoLASeplgxCLU1F__HhAaW7KcOGy?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 2-2  Mechanics of Solids II ce213 3 credit',
                'created_at' => '2018-06-24 20:38:45',
                'updated_at' => '2018-07-06 02:24:11',


            ),
            107 =>
            array(
                'id' => 110,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 18,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Z2i_MPOGkL3MB-g6XVTv2XOyJQ03lRMT?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-2  Mechanics of Solids II ce213 3 credit',
                'created_at' => '2018-06-24 20:39:11',
                'updated_at' => '2018-07-06 02:24:15',


            ),
            108 =>
            array(
                'id' => 111,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/11wXGjNSblxl4W559asobwkYZ0FdmkZAI?usp=sharing',
                'image' => '',
                'status' => '3',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-2  ',
                'created_at' => '2018-06-24 20:39:47',
                'updated_at' => '2018-10-30 19:50:21',


            ),
            109 =>
            array(
                'id' => 112,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 14,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1W_lDJ9cMfuUXzW-zsTDKsVhCFyKGd5-p?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-2  Concrete Structures Design Sessional I ce316 1.5 credit',
                'created_at' => '2018-06-24 20:43:06',
                'updated_at' => '2018-07-06 02:24:24',


            ),
            110 =>
            array(
                'id' => 113,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 9,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1C1erosOtEVYLwLD9D7scDRtGBq-5F3-o?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 3-2  Design of Concrete Structures II ce317 3 credit',
                'created_at' => '2018-06-24 20:43:46',
                'updated_at' => '2018-07-06 02:24:29',


            ),
            111 =>
            array(
                'id' => 114,
                'name' => 'Maksim Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 9,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1tL0SybH7vUAPbL07UB6j1Z_dXWuZh5JR?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Maksim Sir  ce 3-2  Design of Concrete Structures II ce317 3 credit',
                'created_at' => '2018-06-24 20:44:28',
                'updated_at' => '2018-07-06 02:24:32',


            ),
            112 =>
            array(
                'id' => 115,
                'name' => 'S. Bari Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 9,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1wSbsmBX_SveJUL9mAnQINkw2haO0YCL7?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'S. Bari Sir  ce 3-2  Design of Concrete Structures II ce317 3 credit',
                'created_at' => '2018-06-24 20:44:54',
                'updated_at' => '2018-07-06 02:24:37',


            ),
            113 =>
            array(
                'id' => 116,
                'name' => 'Sikandar Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 9,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1sJJtxiRrSzJGVwabQO1WPS2ZPcBRQC3h?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Sikandar Sir  ce 3-2  Design of Concrete Structures II ce317 3 credit',
                'created_at' => '2018-06-24 20:45:20',
                'updated_at' => '2018-07-06 02:24:41',


            ),
            114 =>
            array(
                'id' => 117,
                'name' => 'TRH Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 9,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1q5e9tgEqv03mm1PooYT7cCysz-Uh-0bg?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'TRH Sir  ce 3-2  Design of Concrete Structures II ce317 3 credit',
                'created_at' => '2018-06-24 20:45:47',
                'updated_at' => '2018-07-06 02:24:45',


            ),
            115 =>
            array(
                'id' => 118,
                'name' => 'AISC data',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 9,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1j84YsEdDUYLKknY-zW4C9iAorZU2rn4c?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'AISC data  ce 3-2  Design of Concrete Structures II ce317 3 credit',
                'created_at' => '2018-06-24 20:46:14',
                'updated_at' => '2018-07-06 02:24:49',


            ),
            116 =>
            array(
                'id' => 119,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 9,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1MudcKGjHL2R7tLC62-_IKaff8utZNtdt?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 3-2  Design of Concrete Structures II ce317 3 credit',
                'created_at' => '2018-06-24 20:46:36',
                'updated_at' => '2018-07-06 02:24:53',


            ),
            117 =>
            array(
                'id' => 120,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 9,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1_oV--DzfE0YWqeJt4uNo0rdI3ZgM_I37?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-2  Design of Concrete Structures II ce317 3 credit',
                'created_at' => '2018-06-24 20:47:23',
                'updated_at' => '2018-07-06 02:25:04',


            ),
            118 =>
            array(
                'id' => 121,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 15,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/17X5yAKym_7Pg9EenHB3MdAv_UYd-0zee?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-2  Steel Structures Design Sessional ce320 1.5 credit',
                'created_at' => '2018-06-24 20:49:06',
                'updated_at' => '2018-07-06 02:25:08',


            ),
            119 =>
            array(
                'id' => 122,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 16,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1E-mRpbAQuYwaDRSkSjMKfJbBh_wzBjrR?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-2  Open Channel Flow Sessional wre312 1.5 credit',
                'created_at' => '2018-06-24 20:49:32',
                'updated_at' => '2018-07-06 02:25:12',


            ),
            120 =>
            array(
                'id' => 124,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 10,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1IwLEjBB11F5nDCxUv39JSrWaLZKywlBN?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 3-2  Design of Steel Structures ce319 3 credit',
                'created_at' => '2018-06-24 20:50:59',
                'updated_at' => '2018-07-06 02:25:15',


            ),
            121 =>
            array(
                'id' => 125,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 10,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1mZdjrecOlh_iTXYVnYN3skkwbae335Ay?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 3-2  Design of Steel Structures ce319 3 credit',
                'created_at' => '2018-06-24 20:51:25',
                'updated_at' => '2018-07-06 02:25:20',


            ),
            122 =>
            array(
                'id' => 126,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 10,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1CxwyOw26GeDwL7rznlGnxUatvCv9SmCL?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 3-2  Design of Steel Structures ce319 3 credit',
                'created_at' => '2018-06-24 20:51:49',
                'updated_at' => '2018-07-06 02:25:24',


            ),
            123 =>
            array(
                'id' => 127,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 10,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1FD5XiPkIRYHcJbssTeXbcSXa_1k57dpJ?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 3-2  Design of Steel Structures ce319 3 credit',
                'created_at' => '2018-06-24 20:52:11',
                'updated_at' => '2018-07-06 02:25:29',


            ),
            124 =>
            array(
                'id' => 128,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 10,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1mfUTYqhyRpWmiHe6SG1K_K1vGv__-a6m?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-2  Design of Steel Structures ce319 3 credit',
                'created_at' => '2018-06-24 20:52:38',
                'updated_at' => '2018-07-06 02:25:32',


            ),
            125 =>
            array(
                'id' => 129,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 11,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1oFJycguEAOCcHx-XnDwkmRnw0zZhYB0N?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 3-2  Environmental Engineering II ce333 4 credit',
                'created_at' => '2018-06-24 20:53:23',
                'updated_at' => '2018-07-06 02:25:37',


            ),
            126 =>
            array(
                'id' => 130,
                'name' => 'A Zalil Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 11,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1XudiS18loLuLPJo-lmVDUDG06ryUPMqA?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'A Zalil Sir  ce 3-2  Environmental Engineering II ce333 4 credit',
                'created_at' => '2018-06-24 20:54:00',
                'updated_at' => '2018-07-06 02:25:41',


            ),
            127 =>
            array(
                'id' => 131,
                'name' => 'Ashraf Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 11,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1PN2VLbZhSkvnCgSGe-j7HoP1tstq9oFe?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Ashraf Sir  ce 3-2  Environmental Engineering II ce333 4 credit',
                'created_at' => '2018-06-24 20:54:51',
                'updated_at' => '2018-07-06 02:25:45',


            ),
            128 =>
            array(
                'id' => 132,
                'name' => 'Badruzzaman Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 11,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/13suTWdr-izz-vgDc8GR0fc5Zp2_JO5sX?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Badruzzaman Sir  ce 3-2  Environmental Engineering II ce333 4 credit',
                'created_at' => '2018-06-24 20:55:48',
                'updated_at' => '2018-07-06 02:25:49',


            ),
            129 =>
            array(
                'id' => 133,
                'name' => 'Mujib Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 11,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1HJKn9i5jhEwqtCCXx90ni8I6lp2v9S_6?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Mujib Sir  ce 3-2  Environmental Engineering II ce333 4 credit',
                'created_at' => '2018-06-24 20:56:28',
                'updated_at' => '2018-07-06 02:28:02',


            ),
            130 =>
            array(
                'id' => 134,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 11,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1XqngFtKoI-XbOcrf1e2_ArcdtVBkR9RC?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 3-2  Environmental Engineering II ce333 4 credit',
                'created_at' => '2018-06-24 20:56:57',
                'updated_at' => '2018-07-06 02:28:19',


            ),
            131 =>
            array(
                'id' => 135,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 11,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1npkFG4pojNtkJT9Urm0rNNvJIHyENsRX?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-2  Environmental Engineering II ce333 4 credit',
                'created_at' => '2018-06-24 20:57:20',
                'updated_at' => '2018-07-06 02:28:24',


            ),
            132 =>
            array(
                'id' => 136,
                'name' => 'Shamsul Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 12,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1jciyLFP9VMgiJKL_q22OmrhE3lbOYNRu?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Shamsul Sir  ce 3-2  Transportation Engineering I: Transportation Planning & Traffic Engineering ce351 3 credit',
                'created_at' => '2018-06-24 20:57:56',
                'updated_at' => '2018-07-06 02:28:30',


            ),
            133 =>
            array(
                'id' => 137,
                'name' => 'Moazzem Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 12,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1zIq_VSXXsi5Q3MTv3JFudQdups6yaT9C?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Moazzem Sir  ce 3-2  Transportation Engineering I: Transportation Planning & Traffic Engineering ce351 3 credit',
                'created_at' => '2018-06-24 20:58:18',
                'updated_at' => '2018-07-06 02:28:33',


            ),
            134 =>
            array(
                'id' => 138,
                'name' => 'Hasib Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 12,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ZNW_8APq4R5NkHVNRlJvxQ3ShgVh6Wf1?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Hasib Sir  ce 3-2  Transportation Engineering I: Transportation Planning & Traffic Engineering ce351 3 credit',
                'created_at' => '2018-06-24 21:00:07',
                'updated_at' => '2018-07-06 02:28:39',


            ),
            135 =>
            array(
                'id' => 139,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 12,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1bRIGSN9PCr_oXcclLN1RGVA_ltOT9h1Y?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 3-2  Transportation Engineering I: Transportation Planning & Traffic Engineering ce351 3 credit',
                'created_at' => '2018-06-24 21:00:30',
                'updated_at' => '2018-07-06 02:28:44',


            ),
            136 =>
            array(
                'id' => 140,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 12,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ioaBOR8uAJeGwZFX6VcYAq7gLXLltnNn?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-2  Transportation Engineering I: Transportation Planning & Traffic Engineering ce351 3 credit',
                'created_at' => '2018-06-24 21:00:50',
                'updated_at' => '2018-07-06 02:28:49',


            ),
            137 =>
            array(
                'id' => 141,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/12kt-e-QFLzvSbQyz6O96i35tTGzhWXja?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 3-2  ',
                'created_at' => '2018-06-24 21:01:17',
                'updated_at' => '2018-07-06 02:28:56',


            ),
            138 =>
            array(
                'id' => 142,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1P0tC2R6XihYPbr2ISHyLgBi4-ljz4Vjr?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 3-2  ',
                'created_at' => '2018-06-24 21:01:40',
                'updated_at' => '2018-07-06 02:29:00',


            ),
            139 =>
            array(
                'id' => 143,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 13,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1g2gURmpDnBMAm4RBUTTFNO0EBl2GQ11d?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 3-2  Open Channel Flow wre311 4 credit',
                'created_at' => '2018-06-24 21:02:09',
                'updated_at' => '2018-07-06 02:29:09',


            ),
            140 =>
            array(
                'id' => 144,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 13,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1V4n-Qh7am3AAB8jS2ZPX92MYMqyn1SYD?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 3-2  Open Channel Flow wre311 4 credit',
                'created_at' => '2018-06-24 21:02:33',
                'updated_at' => '2018-07-06 02:29:15',


            ),
            141 =>
            array(
                'id' => 145,
                'name' => 'Halim Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 13,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/14ystAoMuaS89r_YHf8Oi4lskxzrZvmMF?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Halim Solve  ce 3-2  Open Channel Flow wre311 4 credit',
                'created_at' => '2018-06-24 21:02:58',
                'updated_at' => '2018-07-06 02:29:19',


            ),
            142 =>
            array(
                'id' => 146,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 13,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1XVvWtGs3NMlcLO92qUtQ7l1yzemE_8jC?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 3-2  Open Channel Flow wre311 4 credit',
                'created_at' => '2018-06-24 21:03:22',
                'updated_at' => '2018-07-06 02:29:22',


            ),
            143 =>
            array(
                'id' => 147,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 13,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1cjMCGof9mc6zyM_FULifGhA1buOXpP6v?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 3-2  Open Channel Flow wre311 4 credit',
                'created_at' => '2018-06-24 21:03:49',
                'updated_at' => '2018-07-06 02:29:26',


            ),
            144 =>
            array(
                'id' => 148,
                'name' => 'Chotha',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 13,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1HhdVB99FDBT8ATs3EcQZKf1GaNMF-yNc?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Chotha  ce 3-2  Open Channel Flow wre311 4 credit',
                'created_at' => '2018-06-24 21:04:17',
                'updated_at' => '2018-07-06 02:29:30',


            ),
            145 =>
            array(
                'id' => 149,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 13,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1U1JMGuif2Msa4eEMLsIekbyaKqeTvIN6?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-2  Open Channel Flow wre311 4 credit',
                'created_at' => '2018-06-24 21:04:50',
                'updated_at' => '2018-07-06 02:29:34',


            ),
            146 =>
            array(
                'id' => 150,
                'name' => 'All in one (P01)(13GB)',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1goXL9vzOA-wPcCBPEqT2fP8GodHgCsry?usp=sharing',
                'image' => '',
                'status' => '3',
                'custom_message' => NULL,
                'description' => 'All in one (P01)(13GB)  ce 3-2  ',
                'created_at' => '2018-06-24 21:05:40',
                'updated_at' => '2018-10-30 19:50:13',


            ),
            147 =>
            array(
                'id' => 151,
                'name' => 'All in one (P02)(14GB)',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1-yfAFGOHs_3POcGy0fhw4QkQao9fdvbs?usp=sharing',
                'image' => '',
                'status' => '3',
                'custom_message' => NULL,
                'description' => 'All in one (P02)(14GB)  ce 3-2  ',
                'created_at' => '2018-06-24 21:06:52',
                'updated_at' => '2018-10-30 19:50:09',


            ),
            148 =>
            array(
                'id' => 152,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 38,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1EQK0DePrFDjPj_iwc1joZW5uTsFzmDLZ?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 2-1  Accounting hum353 ',
                'created_at' => '2018-06-28 18:46:10',
                'updated_at' => '2018-07-06 02:29:47',


            ),
            149 =>
            array(
                'id' => 153,
                'name' => 'Assignment',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 38,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Xs_jXf0ImAYtZKFNfuhibJ8ONdvCmCLr?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Assignment  ce 2-1  Accounting hum353 ',
                'created_at' => '2018-06-28 18:47:00',
                'updated_at' => '2018-07-06 02:29:51',


            ),
            150 =>
            array(
                'id' => 154,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 38,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1VShLYm7OpIiRqNmFz13YJk9wQ27Y_gaY?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 2-1  Accounting hum353 ',
                'created_at' => '2018-06-28 18:47:25',
                'updated_at' => '2018-07-06 02:29:55',


            ),
            151 =>
            array(
                'id' => 155,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 38,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ZtlrQPJHaeb69fN8VbJGs2JYcbJZpSJb?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 2-1  Accounting hum353 ',
                'created_at' => '2018-06-28 18:47:52',
                'updated_at' => '2018-07-06 02:29:59',


            ),
            152 =>
            array(
                'id' => 156,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 38,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1-5ZksL0RXWE01o3XkYE3hE6D7uS9CtVb?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 2-1  Accounting hum353 ',
                'created_at' => '2018-06-28 18:48:18',
                'updated_at' => '2018-07-06 02:30:43',


            ),
            153 =>
            array(
                'id' => 157,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 38,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1NELlGEVbuNJvwhDy7FIi9WaDYT6YRW1c?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-1  Accounting hum353 ',
                'created_at' => '2018-06-28 18:49:11',
                'updated_at' => '2018-07-06 02:30:12',


            ),
            154 =>
            array(
                'id' => 158,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 43,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1sfrbNodeGp0eJvvcoiUwVDAgZlpFvdsH?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-1  Architectural, Engineering and Planning Appreciation ce210 ',
                'created_at' => '2018-06-28 18:49:48',
                'updated_at' => '2018-07-06 02:30:48',


            ),
            155 =>
            array(
                'id' => 159,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 42,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1k3SpPrQqjomap5RyYdEISLvOOT96poyt?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 2-1  Computer Programming Sessional ce204 ',
                'created_at' => '2018-06-28 18:50:27',
                'updated_at' => '2018-07-06 02:33:00',


            ),
            156 =>
            array(
                'id' => 160,
                'name' => 'Sessional',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 42,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1HB0xZt8AiqKwUKNWzsT9HBcaEE4OKEsD?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Sessional  ce 2-1  Computer Programming Sessional ce204 ',
                'created_at' => '2018-06-28 18:50:55',
                'updated_at' => '2018-07-06 02:32:43',


            ),
            157 =>
            array(
                'id' => 161,
                'name' => 'Codes',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 42,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/18FZJVsr3Np5XELLL00W_X9sU0b7ZxVaD?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Codes  ce 2-1  Computer Programming Sessional ce204 ',
                'created_at' => '2018-06-28 18:51:22',
                'updated_at' => '2018-07-06 02:31:58',


            ),
            158 =>
            array(
                'id' => 162,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 42,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Wg51USKILkiMSfe53M9AFTOq5K8Q8M9Q?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 2-1  Computer Programming Sessional ce204 ',
                'created_at' => '2018-06-28 18:51:48',
                'updated_at' => '2018-07-06 02:32:52',


            ),
            159 =>
            array(
                'id' => 163,
                'name' => 'Microsoft Visual C++ 6.0 SE',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 42,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/file/d/1jXoPxUVUsS23OU5TOTUF1YMpDhXsBAE4/view?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Microsoft Visual C++ 6.0 SE  ce 2-1  Computer Programming Sessional ce204 ',
                'created_at' => '2018-06-28 18:52:26',
                'updated_at' => '2018-07-06 02:33:07',


            ),
            160 =>
            array(
                'id' => 164,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 42,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1loUTe4Rg94epjVMypMqoowcc4tQ2N3qg?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-1  Computer Programming Sessional ce204 ',
                'created_at' => '2018-06-28 18:54:42',
                'updated_at' => '2018-07-06 02:33:12',


            ),
            161 =>
            array(
                'id' => 165,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/16HjWRSqkq70aNCR0iqlSHMJptlTshC9b?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 2-1  ',
                'created_at' => '2018-06-28 18:55:17',
                'updated_at' => '2018-07-06 02:33:33',


            ),
            162 =>
            array(
                'id' => 166,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 40,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1hflM-I46mSjfJmrHarkUrT7YJKubJzdl?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 2-1  Details of Construction ce200 ',
                'created_at' => '2018-06-28 18:56:16',
                'updated_at' => '2018-07-06 02:33:54',


            ),
            163 =>
            array(
                'id' => 167,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 40,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1HwBp98kuOLH4TNVtJf-3rpCRL6u5aCEP?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 2-1  Details of Construction ce200 ',
                'created_at' => '2018-06-28 18:56:38',
                'updated_at' => '2018-07-06 02:34:00',


            ),
            164 =>
            array(
                'id' => 168,
                'name' => 'Presentation',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 40,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/179_4Md2W9_EsQAe352MKhXNZ9WRIEVae?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Presentation  ce 2-1  Details of Construction ce200 ',
                'created_at' => '2018-06-28 18:57:09',
                'updated_at' => '2018-07-06 02:34:10',


            ),
            165 =>
            array(
                'id' => 169,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 40,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1kmCT0e3xFR_VJrIdXtDhoruCWkovmlEz?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 2-1  Details of Construction ce200 ',
                'created_at' => '2018-06-28 18:57:33',
                'updated_at' => '2018-07-06 02:34:14',


            ),
            166 =>
            array(
                'id' => 170,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1n2L3DfRtlwBdCwpaqQvaOK201OHXyW7C?usp=sharing',
                'image' => '',
                'status' => '3',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-1  ',
                'created_at' => '2018-06-28 18:58:09',
                'updated_at' => '2018-10-30 19:49:50',


            ),
            167 =>
            array(
                'id' => 171,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 35,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1BAcYvsarVSbXiNV_WCgwmgNiZKSnfNbU?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 2-1  Engineering Materials ce201 ',
                'created_at' => '2018-06-28 18:58:39',
                'updated_at' => '2018-07-06 02:34:25',


            ),
            168 =>
            array(
                'id' => 172,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 35,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ySDDGyoUJmIfGgAZToGBkFD_yvpcZKqJ?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 2-1  Engineering Materials ce201 ',
                'created_at' => '2018-06-28 18:59:06',
                'updated_at' => '2018-07-06 02:34:35',


            ),
            169 =>
            array(
                'id' => 173,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 35,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1pRiLnFY68qdnMvXPDwhrFVtW--3VwHbz?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 2-1  Engineering Materials ce201 ',
                'created_at' => '2018-06-28 18:59:33',
                'updated_at' => '2018-07-06 02:34:59',


            ),
            170 =>
            array(
                'id' => 174,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 35,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/11_gpH0YcktDDlQzuJeEKM7xggoGvAgXL?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 2-1  Engineering Materials ce201 ',
                'created_at' => '2018-06-28 18:59:59',
                'updated_at' => '2018-07-06 02:35:52',


            ),
            171 =>
            array(
                'id' => 175,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 35,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1zwXK7R8tnPpt7qS7ZsAeNBBHValRTw3p?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-1  Engineering Materials ce201 ',
                'created_at' => '2018-06-28 19:00:32',
                'updated_at' => '2018-07-06 02:35:58',


            ),
            172 =>
            array(
                'id' => 176,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 36,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Zy5jq_0a6jPA-eIRtwdZ0B5rqpIzWOhx?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 2-1  Engineering Geology and Geomorphology ce203 ',
                'created_at' => '2018-06-28 19:01:09',
                'updated_at' => '2018-07-06 02:36:03',


            ),
            173 =>
            array(
                'id' => 177,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 36,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ljfp43Aaqsq4K15VGxAh2BI4dmgmEzbk?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 2-1  Engineering Geology and Geomorphology ce203 ',
                'created_at' => '2018-06-28 19:01:33',
                'updated_at' => '2018-07-06 02:36:08',


            ),
            174 =>
            array(
                'id' => 178,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 36,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1C9C6IHp7aYz74quEioKd6qlSuXkeyOj9?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 2-1  Engineering Geology and Geomorphology ce203 ',
                'created_at' => '2018-06-28 19:03:00',
                'updated_at' => '2018-07-06 02:36:15',


            ),
            175 =>
            array(
                'id' => 179,
                'name' => 'Videos',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 36,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ETa0OqX8yZmStDK3qUpPI-6DVNNHW3uX?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Videos  ce 2-1 ',
                'created_at' => '2018-06-28 19:03:24',
                'updated_at' => '2018-06-28 19:03:24',


            ),
            176 =>
            array(
                'id' => 180,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 36,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1aNmJGSJFu9pgHTNodmIV-BTxYUJr7UOH?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-1  Engineering Geology and Geomorphology ce203 ',
                'created_at' => '2018-06-28 19:03:46',
                'updated_at' => '2018-07-06 02:37:14',


            ),
            177 =>
            array(
                'id' => 181,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 41,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1JgiUAt9xtADpPpIIx0frcOm8cQBNPjGK?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-1  Materials Sessional ce202 ',
                'created_at' => '2018-06-28 19:04:25',
                'updated_at' => '2018-07-06 02:37:20',


            ),
            178 =>
            array(
                'id' => 182,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 39,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1QAkKSEKI47MwyOGKHqcxt-93kY1UXTY3?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 2-1  Laplace Transform and Vector Analysis math237 ',
                'created_at' => '2018-06-28 19:05:17',
                'updated_at' => '2018-07-06 02:37:26',


            ),
            179 =>
            array(
                'id' => 183,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 39,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1AoiV_1LekqrZ3XrQz6z83KoDMUlxUDWx?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 2-1  Laplace Transform and Vector Analysis math237 ',
                'created_at' => '2018-06-28 19:05:49',
                'updated_at' => '2018-07-06 02:37:32',


            ),
            180 =>
            array(
                'id' => 184,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 39,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1oD0bAH9ofM_nhq3qXrnF6QX24FcpNsZI?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 2-1  Laplace Transform and Vector Analysis math237 ',
                'created_at' => '2018-06-28 19:06:18',
                'updated_at' => '2018-07-06 02:37:38',


            ),
            181 =>
            array(
                'id' => 185,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 39,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/12trhkZqbUzqhEZ89x8smR5FxBY5e2HcD?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 2-1  Laplace Transform and Vector Analysis math237 ',
                'created_at' => '2018-06-28 19:06:40',
                'updated_at' => '2018-07-06 02:37:46',


            ),
            182 =>
            array(
                'id' => 186,
                'name' => 'Vector Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 39,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/17mmhd8tljOao_NgLZRj7WOq3BpMllN4f?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Vector Solve  ce 2-1  Laplace Transform and Vector Analysis math237 ',
                'created_at' => '2018-06-28 19:07:14',
                'updated_at' => '2018-07-06 02:37:55',


            ),
            183 =>
            array(
                'id' => 187,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 39,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1AQE5ueor6ASSADWnIA8scm4GYO8kGr3x?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-1  Laplace Transform and Vector Analysis math237 ',
                'created_at' => '2018-06-28 19:07:36',
                'updated_at' => '2018-07-06 02:38:02',


            ),
            184 =>
            array(
                'id' => 188,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1_-fCvybXs1vmzGQpN0388kOuU0_AXQ3b?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 2-1  ',
                'created_at' => '2018-06-28 19:08:04',
                'updated_at' => '2018-07-06 02:38:07',


            ),
            185 =>
            array(
                'id' => 189,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 37,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1v6BA_KKrdOuOE8ddxMSuV5WqremDz3Ui?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 2-1  Mechanics of Solids I ce211 ',
                'created_at' => '2018-06-28 19:08:28',
                'updated_at' => '2018-07-06 02:38:11',


            ),
            186 =>
            array(
                'id' => 190,
                'name' => 'Hamim Vai',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 37,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/11Rnu4S4bXgS7W6N6DhhyoQyFKl3soSAg?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Hamim Vai  ce 2-1  Mechanics of Solids I ce211 ',
                'created_at' => '2018-06-28 19:08:57',
                'updated_at' => '2018-07-06 02:38:15',


            ),
            187 =>
            array(
                'id' => 191,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 37,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1qoleBjf7gG-hw5O7z4SFPyZ4_yyaWmI9?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 2-1  Mechanics of Solids I ce211 ',
                'created_at' => '2018-06-28 19:09:29',
                'updated_at' => '2018-07-06 02:38:24',


            ),
            188 =>
            array(
                'id' => 192,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 37,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1xjWJ2aVmbVq0z9jNz1B01ZQLK1Losm1a?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 2-1  Mechanics of Solids I ce211 ',
                'created_at' => '2018-06-28 19:10:01',
                'updated_at' => '2018-07-06 02:38:27',


            ),
            189 =>
            array(
                'id' => 193,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 37,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/171aqrGFiFxlRRD4B7Yhm-VCkht43iWyt?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-1  Mechanics of Solids I ce211 ',
                'created_at' => '2018-06-28 19:10:34',
                'updated_at' => '2018-07-06 02:38:31',


            ),
            190 =>
            array(
                'id' => 194,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1lqzxD8-ixNCalbpUKdOKISAL_UluDcCe?usp=sharing',
                'image' => '',
                'status' => '3',
                'custom_message' => NULL,
                'description' => 'All in one  ce 2-1  ',
                'created_at' => '2018-06-28 19:10:58',
                'updated_at' => '2018-10-30 19:49:44',


            ),
            191 =>
            array(
                'id' => 195,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 44,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/119FzmSV2SaTQSxSKOCCN5psgrzMnrISR?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 3-1  Professional Practices and Communication ce301 ',
                'created_at' => '2018-07-01 23:36:56',
                'updated_at' => '2018-07-06 02:38:56',


            ),
            192 =>
            array(
                'id' => 196,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 44,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ok4Y6TnWtS9F1NGWJ0q586pmqcpVnA-M?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 3-1  Professional Practices and Communication ce301 ',
                'created_at' => '2018-07-01 23:37:24',
                'updated_at' => '2018-07-06 02:39:03',


            ),
            193 =>
            array(
                'id' => 197,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 44,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ajFCjV6SfaW9Wk5g9hWXjOuE9He95QPy?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 3-1  Professional Practices and Communication ce301 ',
                'created_at' => '2018-07-01 23:38:24',
                'updated_at' => '2018-07-06 02:39:12',


            ),
            194 =>
            array(
                'id' => 198,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 44,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1J39aUy9IutSCo81UqkjHO3cWLhdSZT40?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 3-1  Professional Practices and Communication ce301 ',
                'created_at' => '2018-07-01 23:38:52',
                'updated_at' => '2018-07-06 02:39:22',


            ),
            195 =>
            array(
                'id' => 199,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 44,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/11OQp5ePFP6gIW558z9iyL1LLfy4YaFtq?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-1  Professional Practices and Communication ce301 ',
                'created_at' => '2018-07-01 23:39:16',
                'updated_at' => '2018-07-06 02:39:29',


            ),
            196 =>
            array(
                'id' => 200,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 49,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1wUwxwnfWYUUzKgZdrRqYNlAupQUG7rbj?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-1  Professional Practices and Communication Sessional ce302 ',
                'created_at' => '2018-07-01 23:39:51',
                'updated_at' => '2018-07-06 02:39:35',


            ),
            197 =>
            array(
                'id' => 201,
                'name' => 'Assignment',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 45,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1i3kGIzIRyBeaC66uwSmRLQgSxXSd4_Mx?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Assignment  ce 3-1  Structural Analysis and Design I ce311 ',
                'created_at' => '2018-07-01 23:41:21',
                'updated_at' => '2018-07-06 02:39:40',


            ),
            198 =>
            array(
                'id' => 202,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 45,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1BPY54OntObj407XcaGNMIKr2zi-vDOil?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 3-1  Structural Analysis and Design I ce311 ',
                'created_at' => '2018-07-01 23:41:52',
                'updated_at' => '2018-07-06 02:39:47',


            ),
            199 =>
            array(
                'id' => 203,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 45,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1QlOgCY64AqKyQWjQF80EIm8PnN8shqlM?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 3-1  Structural Analysis and Design I ce311 ',
                'created_at' => '2018-07-01 23:42:16',
                'updated_at' => '2018-07-06 02:41:40',


            ),
            200 =>
            array(
                'id' => 204,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 45,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/17fem1fZdJoa8a60OKSwVkfPlMrSLbPmQ?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 3-1  Structural Analysis and Design I ce311 ',
                'created_at' => '2018-07-01 23:42:51',
                'updated_at' => '2018-07-06 02:41:51',


            ),
            201 =>
            array(
                'id' => 205,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 45,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/18nLjYT-tgo9_f0jSrFAGitp7QztfD_pd?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 3-1  Structural Analysis and Design I ce311 ',
                'created_at' => '2018-07-01 23:43:23',
                'updated_at' => '2018-07-06 02:41:57',


            ),
            202 =>
            array(
                'id' => 206,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 45,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1TOKtspeiOzL6zOv247i0bMstKMMejU1T?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-1  Structural Analysis and Design I ce311 ',
                'created_at' => '2018-07-01 23:43:46',
                'updated_at' => '2018-07-06 02:42:04',


            ),
            203 =>
            array(
                'id' => 207,
                'name' => 'All in one (P01)(14GB)',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/18aFSYUjyPXcpF1AqBy_jYgfGqCwHgPYw?usp=sharing',
                'image' => '',
                'status' => '3',
                'custom_message' => NULL,
                'description' => 'All in one (P01)(14GB)  ce 3-1  ',
                'created_at' => '2018-07-01 23:44:45',
                'updated_at' => '2018-10-30 19:49:21',


            ),
            204 =>
            array(
                'id' => 208,
                'name' => 'Assignment',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 46,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1l3WKkg6Tr8TqyHWr1X_nGyMn--0NPQME?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Assignment  ce 3-1  Design of Concrete Structures I ce315 ',
                'created_at' => '2018-07-01 23:45:17',
                'updated_at' => '2018-07-12 02:50:20',


            ),
            205 =>
            array(
                'id' => 209,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 46,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1VwC2JDf6CGpZo6DNKnaFrDRjyuEvDUYK?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 3-1  Design of Concrete Structures I ce315 ',
                'created_at' => '2018-07-01 23:45:36',
                'updated_at' => '2018-07-12 02:50:43',


            ),
            206 =>
            array(
                'id' => 210,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 46,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1mmx1V2zgm_0dSi0lkfdaZbQyTbXL_co6?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 3-1  Design of Concrete Structures I ce315 ',
                'created_at' => '2018-07-01 23:45:59',
                'updated_at' => '2018-07-12 02:51:07',


            ),
            207 =>
            array(
                'id' => 211,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 46,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/105ePdEB0_TMr__hWkFNSvPB6y22lBGru?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 3-1  Design of Concrete Structures I ce315 ',
                'created_at' => '2018-07-01 23:46:25',
                'updated_at' => '2018-07-12 02:51:40',


            ),
            208 =>
            array(
                'id' => 212,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 46,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1QfD4ecflhlTQ-p5tSJRozi1TAQOyI_q9?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 3-1  Design of Concrete Structures I ce315 ',
                'created_at' => '2018-07-01 23:46:49',
                'updated_at' => '2018-07-12 02:52:00',


            ),
            209 =>
            array(
                'id' => 213,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 46,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1o_HvXEp2hul0qeh7qp_VS1Go_zpYA5HF?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 3-1  Design of Concrete Structures I ce315 ',
                'created_at' => '2018-07-01 23:47:12',
                'updated_at' => '2018-07-12 02:52:25',


            ),
            210 =>
            array(
                'id' => 214,
                'name' => 'Videos',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 46,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1IZfiwokZWLTrWw-av1E0jDNTGJPsfk2c?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Videos  ce 3-1  Design of Concrete Structures I ce315 ',
                'created_at' => '2018-07-01 23:47:37',
                'updated_at' => '2018-07-12 02:52:57',


            ),
            211 =>
            array(
                'id' => 215,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 46,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1NaWgDhnZGavNWBxCqwPfrClbcayuk25_?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-1  Design of Concrete Structures I ce315 ',
                'created_at' => '2018-07-01 23:48:00',
                'updated_at' => '2018-07-12 02:53:21',


            ),
            212 =>
            array(
                'id' => 216,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 47,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1B_uect6j9fHZkUj5GN179MrguqGu-Ser?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 3-1  Environmental Engineering I ce331 ',
                'created_at' => '2018-07-01 23:48:28',
                'updated_at' => '2018-07-12 02:56:33',


            ),
            213 =>
            array(
                'id' => 217,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 47,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/15WFncyrjne8EIukK-yzrdd0hdrK3cBSc?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 3-1  Environmental Engineering I ce331 ',
                'created_at' => '2018-07-01 23:48:53',
                'updated_at' => '2018-07-12 02:57:00',


            ),
            214 =>
            array(
                'id' => 218,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 47,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1xiC9xMfhzCQGwlfmxsZapelQUpFV7ddx?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 3-1  Environmental Engineering I ce331 ',
                'created_at' => '2018-07-01 23:49:17',
                'updated_at' => '2018-07-12 02:57:52',


            ),
            215 =>
            array(
                'id' => 219,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 47,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ZtgLT35emPMK8ATPBlrgWL_VuTsKHO82?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 3-1  Environmental Engineering I ce331 ',
                'created_at' => '2018-07-01 23:49:43',
                'updated_at' => '2018-07-12 02:58:11',


            ),
            216 =>
            array(
                'id' => 220,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 47,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1-4zldrLKVPzMVH9y68REOxN9fktIbnwm?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 3-1  Environmental Engineering I ce331 ',
                'created_at' => '2018-07-01 23:50:14',
                'updated_at' => '2018-07-12 02:59:11',


            ),
            217 =>
            array(
                'id' => 221,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 47,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1PxQMTREXlWE0k1jyYLJ6tD9pJvgn2COx?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-1  Environmental Engineering I ce331 ',
                'created_at' => '2018-07-01 23:50:36',
                'updated_at' => '2018-07-12 02:59:29',


            ),
            218 =>
            array(
                'id' => 222,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 50,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1tsUUzoeAUTMD2EJBtMVwKx-UcMhRnfDg?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-1  Environmental Engineering Laboratory ce332 ',
                'created_at' => '2018-07-01 23:51:00',
                'updated_at' => '2018-07-12 03:01:22',


            ),
            219 =>
            array(
                'id' => 223,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 48,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1TuoSBqvg1h_4NAhEdiPLMYdpNlN17JWS?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 3-1  Principles of Soil Mechanics ce341 ',
                'created_at' => '2018-07-01 23:51:26',
                'updated_at' => '2018-07-12 03:04:23',


            ),
            220 =>
            array(
                'id' => 224,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 48,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1FLyYHRg6z1RgwAZQF9zHD3yezod9p2l5?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 3-1  Principles of Soil Mechanics ce341 ',
                'created_at' => '2018-07-01 23:52:00',
                'updated_at' => '2018-07-12 03:04:52',


            ),
            221 =>
            array(
                'id' => 225,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 48,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1U5_Lprq205NWQ3BwlZJOPF40jddXG3uV?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 3-1  Principles of Soil Mechanics ce341 ',
                'created_at' => '2018-07-01 23:52:28',
                'updated_at' => '2018-07-12 03:05:41',


            ),
            222 =>
            array(
                'id' => 226,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 48,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/13Yx5pNEx6PjZOLLi6yLB4NEC1FR6VmpS?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 3-1  Principles of Soil Mechanics ce341 ',
                'created_at' => '2018-07-01 23:53:12',
                'updated_at' => '2018-07-12 03:05:14',


            ),
            223 =>
            array(
                'id' => 227,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 48,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1lAbieFe2V3OcvWG01OCIMFjQsPfg9u2_?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 3-1  Principles of Soil Mechanics ce341 ',
                'created_at' => '2018-07-01 23:53:41',
                'updated_at' => '2018-07-12 03:06:08',


            ),
            224 =>
            array(
                'id' => 228,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 48,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/12OakHeBjyVrm1o-uX_T73jHekAclYOth?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-1  Principles of Soil Mechanics ce341 ',
                'created_at' => '2018-07-01 23:54:03',
                'updated_at' => '2018-07-12 03:06:38',


            ),
            225 =>
            array(
                'id' => 229,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => 51,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1qpCW8mfwn3E8aV1CQx9DXpIQBnD1SH1d?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 3-1  Geotechnical Engineering Laboratory ce342 ',
                'created_at' => '2018-07-01 23:55:35',
                'updated_at' => '2018-07-12 10:45:15',


            ),
            226 =>
            array(
                'id' => 230,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1RGxVfbN_K51mrINesOy8K7y11xfpjeUV?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 3-1  ',
                'created_at' => '2018-07-01 23:55:59',
                'updated_at' => '2018-07-12 10:46:03',


            ),
            227 =>
            array(
                'id' => 231,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1RLXvC7xEmxtIMFsRePVgqdpQYjR7qNnW?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 3-1  ',
                'created_at' => '2018-07-01 23:56:23',
                'updated_at' => '2018-07-12 10:46:33',


            ),
            228 =>
            array(
                'id' => 232,
                'name' => 'All in one (P02)(12GB)',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1t4SpehvVi41WLuW2FPjOMcvsuY6Q2SPa?usp=sharing',
                'image' => '',
                'status' => '3',
                'custom_message' => NULL,
                'description' => 'All in one (P02)(12GB)  ce 3-1  ',
                'created_at' => '2018-07-02 00:04:57',
                'updated_at' => '2018-10-30 19:49:13',


            ),
            229 =>
            array(
                'id' => 233,
                'name' => 'Jahangir Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 52,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1uaWDsiFTtGK6hvv2gM_T3bvM_1RYM2Mk?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Jahangir Sir  ce 4-1  Project planning and Construction Management ce401 Project planning and evaluation; feasibility reports; cash flows, pay
back period, internal rate of return; benefit-cost ratio; cost-benefit
analysis case studies;
Planning and scheduling, PERT, CPM; resource scheduling; linear
programming and application.90
Principles of management; construction management: principles,
project organization, methods and practices, technology,
management of materials and equipments, site management, contracts
and specifications, inspection and quality control, safety, economy.
Conflict management; psychology in administration: human factors
in management; human resource management.
Demand forecasting; inventory control; stores management;
procurement; legal issues in construction; environmental regulations.',
                'created_at' => '2018-10-22 17:31:46',
                'updated_at' => '2018-10-22 17:31:46',


            ),
            230 =>
            array(
                'id' => 234,
                'name' => 'Mazhar Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 52,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1D-3Jr27vBoJnyIkTRzLb1yBZLwOCeiE4?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Mazhar Sir  ce 4-1  Project planning and Construction Management ce401 Project planning and evaluation; feasibility reports; cash flows, pay
back period, internal rate of return; benefit-cost ratio; cost-benefit
analysis case studies;
Planning and scheduling, PERT, CPM; resource scheduling; linear
programming and application.90
Principles of management; construction management: principles,
project organization, methods and practices, technology,
management of materials and equipments, site management, contracts
and specifications, inspection and quality control, safety, economy.
Conflict management; psychology in administration: human factors
in management; human resource management.
Demand forecasting; inventory control; stores management;
procurement; legal issues in construction; environmental regulations.',
                'created_at' => '2018-10-22 17:32:34',
                'updated_at' => '2018-10-22 17:32:34',


            ),
            231 =>
            array(
                'id' => 235,
                'name' => 'Kabirul Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 52,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1wnjIo9JyE4LIHPTdk8Ge9Y7HQt-c4yyF?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Kabirul Sir  ce 4-1  Project planning and Construction Management ce401 Project planning and evaluation; feasibility reports; cash flows, pay
back period, internal rate of return; benefit-cost ratio; cost-benefit
analysis case studies;
Planning and scheduling, PERT, CPM; resource scheduling; linear
programming and application.90
Principles of management; construction management: principles,
project organization, methods and practices, technology,
management of materials and equipments, site management, contracts
and specifications, inspection and quality control, safety, economy.
Conflict management; psychology in administration: human factors
in management; human resource management.
Demand forecasting; inventory control; stores management;
procurement; legal issues in construction; environmental regulations.',
                'created_at' => '2018-10-22 17:33:12',
                'updated_at' => '2018-10-22 17:33:12',


            ),
            232 =>
            array(
                'id' => 236,
                'name' => 'Raquibul Hossain sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 52,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/18nKXYg-IOmQPzupyKCOkwdOsNzzbjHh3?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Raquibul Hossain sir  ce 4-1  Project planning and Construction Management ce401 Project planning and evaluation; feasibility reports; cash flows, pay
back period, internal rate of return; benefit-cost ratio; cost-benefit
analysis case studies;
Planning and scheduling, PERT, CPM; resource scheduling; linear
programming and application.90
Principles of management; construction management: principles,
project organization, methods and practices, technology,
management of materials and equipments, site management, contracts
and specifications, inspection and quality control, safety, economy.
Conflict management; psychology in administration: human factors
in management; human resource management.
Demand forecasting; inventory control; stores management;
procurement; legal issues in construction; environmental regulations.',
                'created_at' => '2018-10-22 17:34:31',
                'updated_at' => '2018-10-22 17:34:31',


            ),
            233 =>
            array(
                'id' => 237,
                'name' => 'Rupok Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 52,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/12KzYTJbdcYlnQgv8f6hosMshLe75YrZ3?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Rupok Sir  ce 4-1  Project planning and Construction Management ce401 Project planning and evaluation; feasibility reports; cash flows, pay
back period, internal rate of return; benefit-cost ratio; cost-benefit
analysis case studies;
Planning and scheduling, PERT, CPM; resource scheduling; linear
programming and application.90
Principles of management; construction management: principles,
project organization, methods and practices, technology,
management of materials and equipments, site management, contracts
and specifications, inspection and quality control, safety, economy.
Conflict management; psychology in administration: human factors
in management; human resource management.
Demand forecasting; inventory control; stores management;
procurement; legal issues in construction; environmental regulations.',
                'created_at' => '2018-10-22 17:35:51',
                'updated_at' => '2018-10-22 17:35:51',


            ),
            234 =>
            array(
                'id' => 238,
                'name' => 'Mizan sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 52,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Syy2bdMIM_6CX-Voxg-j_720N4d-Xm3o?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Mizan sir  ce 4-1  Project planning and Construction Management ce401 Project planning and evaluation; feasibility reports; cash flows, pay
back period, internal rate of return; benefit-cost ratio; cost-benefit
analysis case studies;
Planning and scheduling, PERT, CPM; resource scheduling; linear
programming and application.90
Principles of management; construction management: principles,
project organization, methods and practices, technology,
management of materials and equipments, site management, contracts
and specifications, inspection and quality control, safety, economy.
Conflict management; psychology in administration: human factors
in management; human resource management.
Demand forecasting; inventory control; stores management;
procurement; legal issues in construction; environmental regulations.',
                'created_at' => '2018-10-22 17:36:24',
                'updated_at' => '2018-10-22 17:36:24',


            ),
            235 =>
            array(
                'id' => 239,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 52,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1GnoH-yvdWU154G9Neg1LVLvXTJA9Xng9?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-1  Project planning and Construction Management ce401 Project planning and evaluation; feasibility reports; cash flows, pay
back period, internal rate of return; benefit-cost ratio; cost-benefit
analysis case studies;
Planning and scheduling, PERT, CPM; resource scheduling; linear
programming and application.90
Principles of management; construction management: principles,
project organization, methods and practices, technology,
management of materials and equipments, site management, contracts
and specifications, inspection and quality control, safety, economy.
Conflict management; psychology in administration: human factors
in management; human resource management.
Demand forecasting; inventory control; stores management;
procurement; legal issues in construction; environmental regulations.',
                'created_at' => '2018-10-22 17:36:47',
                'updated_at' => '2018-10-22 17:36:47',


            ),
            236 =>
            array(
                'id' => 240,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 52,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1UWLADFgzzB6XKzbnMSIJKLohlkCAPDVj?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-1  Project planning and Construction Management ce401 Project planning and evaluation; feasibility reports; cash flows, pay
back period, internal rate of return; benefit-cost ratio; cost-benefit
analysis case studies;
Planning and scheduling, PERT, CPM; resource scheduling; linear
programming and application.90
Principles of management; construction management: principles,
project organization, methods and practices, technology,
management of materials and equipments, site management, contracts
and specifications, inspection and quality control, safety, economy.
Conflict management; psychology in administration: human factors
in management; human resource management.
Demand forecasting; inventory control; stores management;
procurement; legal issues in construction; environmental regulations.',
                'created_at' => '2018-10-22 17:37:14',
                'updated_at' => '2018-10-22 17:37:14',


            ),
            237 =>
            array(
                'id' => 241,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 60,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1cK0X-88KIqHYBTZz9M5vhT_2QRMU-gDB?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-1  Concrete Structures Design Sessional II ce410 Computer applications in the analysis of buildings and PC girder
bridges; design of multistoried RCC frame residential building and
simple span PC girder bridge.',
                'created_at' => '2018-10-22 17:37:54',
                'updated_at' => '2018-10-22 17:37:54',


            ),
            238 =>
            array(
                'id' => 242,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 53,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1UMEFJxZPANOSV4V_XlRgFuOiocfrYPwT?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 4-1  Structural Analysis and Design II ce411 Analysis of statically indeterminate beams and frames by moment
distribution, consistent deformation/flexibility and stiffness methods;
algorithms for implementing direct stiffness method in computer;
influence lines of statically indeterminate beams and frames.',
                'created_at' => '2018-10-22 17:38:32',
                'updated_at' => '2018-10-22 17:38:32',


            ),
            239 =>
            array(
                'id' => 243,
                'name' => 'Flexibility Method',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 53,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1njNereMb0xuAdGYLdhYmSWSPMLpNduLn?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Flexibility Method  ce 4-1  Structural Analysis and Design II ce411 Analysis of statically indeterminate beams and frames by moment
distribution, consistent deformation/flexibility and stiffness methods;
algorithms for implementing direct stiffness method in computer;
influence lines of statically indeterminate beams and frames.',
                'created_at' => '2018-10-22 17:39:10',
                'updated_at' => '2018-10-22 17:39:10',


            ),
            240 =>
            array(
                'id' => 244,
                'name' => 'moment distribution method',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 53,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1tOPsFAAg8hWZcbUCambGc6hcrITZvJtn?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'moment distribution method  ce 4-1  Structural Analysis and Design II ce411 Analysis of statically indeterminate beams and frames by moment
distribution, consistent deformation/flexibility and stiffness methods;
algorithms for implementing direct stiffness method in computer;
influence lines of statically indeterminate beams and frames.',
                'created_at' => '2018-10-22 17:39:48',
                'updated_at' => '2018-10-22 17:39:48',


            ),
            241 =>
            array(
                'id' => 245,
                'name' => 'stifffness method',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 53,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1O0mGzK3w-JYuhsj4GIYy99IDqJMvXVd7?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'stifffness method  ce 4-1  Structural Analysis and Design II ce411 Analysis of statically indeterminate beams and frames by moment
distribution, consistent deformation/flexibility and stiffness methods;
algorithms for implementing direct stiffness method in computer;
influence lines of statically indeterminate beams and frames.',
                'created_at' => '2018-10-22 17:40:26',
                'updated_at' => '2018-10-22 17:40:26',


            ),
            242 =>
            array(
                'id' => 246,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 53,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1C1Sig0SDZ0inNgOhfVktB1cun0yWna4U?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-1  Structural Analysis and Design II ce411 Analysis of statically indeterminate beams and frames by moment
distribution, consistent deformation/flexibility and stiffness methods;
algorithms for implementing direct stiffness method in computer;
influence lines of statically indeterminate beams and frames.',
                'created_at' => '2018-10-22 17:40:49',
                'updated_at' => '2018-10-22 17:40:49',


            ),
            243 =>
            array(
                'id' => 247,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 53,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1kLSP-3Q07zDSK--zQitdCSC-YlUGExIY?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-1  Structural Analysis and Design II ce411 Analysis of statically indeterminate beams and frames by moment
distribution, consistent deformation/flexibility and stiffness methods;
algorithms for implementing direct stiffness method in computer;
influence lines of statically indeterminate beams and frames.',
                'created_at' => '2018-10-22 17:41:22',
                'updated_at' => '2018-10-22 17:41:22',


            ),
            244 =>
            array(
                'id' => 248,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 54,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1yipfM9Erg3nomknLRfBxgxE2gQg8doCc?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 4-1  Foundation Engineering ce441 Soil investigation techniques; types of foundations; bearing capacity
of shallow and deep foundations; settlement and distortion of
foundations; design and construction of footings, rafts and piles;
slope stability analyses.',
                'created_at' => '2018-10-22 17:42:19',
                'updated_at' => '2018-10-22 17:42:19',


            ),
            245 =>
            array(
                'id' => 249,
                'name' => 'Yasin Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 54,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1CWocTK8yD2qThriE9dJLcMLrX6nDmbjH?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Yasin Sir  ce 4-1  Foundation Engineering ce441 Soil investigation techniques; types of foundations; bearing capacity
of shallow and deep foundations; settlement and distortion of
foundations; design and construction of footings, rafts and piles;
slope stability analyses.',
                'created_at' => '2018-10-22 17:43:55',
                'updated_at' => '2018-10-22 17:43:55',


            ),
            246 =>
            array(
                'id' => 250,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 54,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1hbaBMhrWgUhvRyqsTaXohan6aJO00av-?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-1  Foundation Engineering ce441 Soil investigation techniques; types of foundations; bearing capacity
of shallow and deep foundations; settlement and distortion of
foundations; design and construction of footings, rafts and piles;
slope stability analyses.',
                'created_at' => '2018-10-22 17:44:15',
                'updated_at' => '2018-10-22 17:44:15',


            ),
            247 =>
            array(
                'id' => 251,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 54,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1JsH7xTu5X_S0AOGoQ7U5y5jj0WG4ggk4?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-1  Foundation Engineering ce441 Soil investigation techniques; types of foundations; bearing capacity
of shallow and deep foundations; settlement and distortion of
foundations; design and construction of footings, rafts and piles;
slope stability analyses.',
                'created_at' => '2018-10-22 17:44:38',
                'updated_at' => '2018-10-22 17:44:38',


            ),
            248 =>
            array(
                'id' => 252,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 55,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/175TntTeLv84La10IKa5fpME5t4LwJUI3?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 4-1  Transportation Engineering II: Pavement Design and Railway Engineering ce451 Pavement materials: bituminous binders, cement, aggregates,
embankment material, soil stabilization; mix design methods; low
cost roads; flexible and rigid pavement: pavement components and
functions, pavement design and construction, road maintenance;
railway engineering: general requirements, rolling stock and tracks,
stations and yards, points and crossings, signaling, maintenance
operations.',
                'created_at' => '2018-10-22 17:45:53',
                'updated_at' => '2018-10-22 17:45:53',


            ),
            249 =>
            array(
                'id' => 253,
                'name' => 'Hasib M. Ahsan sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 55,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/10B22Z19ME7fQLJUDgEoXp_O40p_Bufhb?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Hasib M. Ahsan sir  ce 4-1  Transportation Engineering II: Pavement Design and Railway Engineering ce451 Pavement materials: bituminous binders, cement, aggregates,
embankment material, soil stabilization; mix design methods; low
cost roads; flexible and rigid pavement: pavement components and
functions, pavement design and construction, road maintenance;
railway engineering: general requirements, rolling stock and tracks,
stations and yards, points and crossings, signaling, maintenance
operations.',
                'created_at' => '2018-10-22 17:46:21',
                'updated_at' => '2018-10-22 17:46:21',


            ),
            250 =>
            array(
                'id' => 254,
                'name' => 'Mizan Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 55,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1IX2CuNtQld9N1xGjx1o6ogIhurXMuNms?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Mizan Sir  ce 4-1  Transportation Engineering II: Pavement Design and Railway Engineering ce451 Pavement materials: bituminous binders, cement, aggregates,
embankment material, soil stabilization; mix design methods; low
cost roads; flexible and rigid pavement: pavement components and
functions, pavement design and construction, road maintenance;
railway engineering: general requirements, rolling stock and tracks,
stations and yards, points and crossings, signaling, maintenance
operations.',
                'created_at' => '2018-10-22 17:46:57',
                'updated_at' => '2018-10-22 17:46:57',


            ),
            251 =>
            array(
                'id' => 255,
                'name' => 'Moazzem Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 55,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1516MJSlFnoBMnw9VAe5gwgZCrHfFRc1i?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Moazzem Sir  ce 4-1  Transportation Engineering II: Pavement Design and Railway Engineering ce451 Pavement materials: bituminous binders, cement, aggregates,
embankment material, soil stabilization; mix design methods; low
cost roads; flexible and rigid pavement: pavement components and
functions, pavement design and construction, road maintenance;
railway engineering: general requirements, rolling stock and tracks,
stations and yards, points and crossings, signaling, maintenance
operations.',
                'created_at' => '2018-10-22 17:47:17',
                'updated_at' => '2018-10-22 17:47:17',


            ),
            252 =>
            array(
                'id' => 256,
                'name' => 'Shamsul Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 55,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/15UgeoSLpqfn3kNydGy5ghuicZBLOrXnK?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Shamsul Sir  ce 4-1  Transportation Engineering II: Pavement Design and Railway Engineering ce451 Pavement materials: bituminous binders, cement, aggregates,
embankment material, soil stabilization; mix design methods; low
cost roads; flexible and rigid pavement: pavement components and
functions, pavement design and construction, road maintenance;
railway engineering: general requirements, rolling stock and tracks,
stations and yards, points and crossings, signaling, maintenance
operations.',
                'created_at' => '2018-10-22 17:47:45',
                'updated_at' => '2018-10-22 17:47:45',


            ),
            253 =>
            array(
                'id' => 257,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 55,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ccHP7MHUPCnXoxbzYZxeNEqgbY5mxw8z?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-1  Transportation Engineering II: Pavement Design and Railway Engineering ce451 Pavement materials: bituminous binders, cement, aggregates,
embankment material, soil stabilization; mix design methods; low
cost roads; flexible and rigid pavement: pavement components and
functions, pavement design and construction, road maintenance;
railway engineering: general requirements, rolling stock and tracks,
stations and yards, points and crossings, signaling, maintenance
operations.',
                'created_at' => '2018-10-22 17:48:19',
                'updated_at' => '2018-10-22 17:48:19',


            ),
            254 =>
            array(
                'id' => 258,
                'name' => 'Extra',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 55,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1wqRyphF8WLF5kZeayIseIurbQBQ8KJf2?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Extra  ce 4-1  Transportation Engineering II: Pavement Design and Railway Engineering ce451 Pavement materials: bituminous binders, cement, aggregates,
embankment material, soil stabilization; mix design methods; low
cost roads; flexible and rigid pavement: pavement components and
functions, pavement design and construction, road maintenance;
railway engineering: general requirements, rolling stock and tracks,
stations and yards, points and crossings, signaling, maintenance
operations.',
                'created_at' => '2018-10-22 17:48:42',
                'updated_at' => '2018-10-22 17:49:05',


            ),
            255 =>
            array(
                'id' => 259,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 55,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/13jlLsAtDfKRkmbjnx5PyHt22h2f1pkOg?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-1  Transportation Engineering II: Pavement Design and Railway Engineering ce451 Pavement materials: bituminous binders, cement, aggregates,
embankment material, soil stabilization; mix design methods; low
cost roads; flexible and rigid pavement: pavement components and
functions, pavement design and construction, road maintenance;
railway engineering: general requirements, rolling stock and tracks,
stations and yards, points and crossings, signaling, maintenance
operations.',
                'created_at' => '2018-10-22 17:49:29',
                'updated_at' => '2018-10-22 17:49:29',


            ),
            256 =>
            array(
                'id' => 260,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 57,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1REhF5CRDBVanzw-oNcicvjtLhvlZWH41?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-1  Transportation Engineering Sessional I: Highway Materials and Traffic Engineering Design ce452 Testing and quality control of highway materials; bituminous mix
design; roadway traffic and capacity analysis; computer models and
application packages.',
                'created_at' => '2018-10-22 17:49:55',
                'updated_at' => '2018-10-22 17:49:55',


            ),
            257 =>
            array(
                'id' => 261,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1a0YxS3uq_H5Xf-MC_DROHhkwEWwO3tKf?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-1  ',
                'created_at' => '2018-10-22 17:50:22',
                'updated_at' => '2018-10-22 17:50:22',


            ),
            258 =>
            array(
                'id' => 262,
                'name' => 'Hamim\'s Note',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/15q6g3agG0aDTXt9eiZTRb9lUg9cJ3lf4?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Hamim\'s Note  ce 4-1  ',
                'created_at' => '2018-10-22 17:50:48',
                'updated_at' => '2018-10-22 17:50:48',


            ),
            259 =>
            array(
                'id' => 263,
                'name' => 'Questions',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1UpHwBqnmn1va4LWGHRSTsIOX6nOWJ_EI?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Questions  ce 4-1  ',
                'created_at' => '2018-10-22 17:51:10',
                'updated_at' => '2018-10-22 17:51:10',


            ),
            260 =>
            array(
                'id' => 264,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 56,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/14JzP6WKu4qP3hWSnRm3MDMIbq6_b4tz6?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 4-1  Hydrology, Irrigation and Flood Management wre451 Hydrologic cycle; hydrologic measurement: precipitation, evaporation
and stream flow; hydrographs; plant-soil-water relationship;
consumptive use and estimation of irrigation water requirements;
methods of irrigation; quality of irrigation water; problems of
irrigated land; flood and its management.',
                'created_at' => '2018-10-22 17:51:34',
                'updated_at' => '2018-10-22 17:51:34',


            ),
            261 =>
            array(
                'id' => 265,
                'name' => 'Sabbir Sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 56,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/18wHQ2rn9JsaCWf87z8EPADKAzoTDqlrN?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Sabbir Sir  ce 4-1  Hydrology, Irrigation and Flood Management wre451 Hydrologic cycle; hydrologic measurement: precipitation, evaporation
and stream flow; hydrographs; plant-soil-water relationship;
consumptive use and estimation of irrigation water requirements;
methods of irrigation; quality of irrigation water; problems of
irrigated land; flood and its management.',
                'created_at' => '2018-10-22 17:51:58',
                'updated_at' => '2018-10-22 17:51:58',


            ),
            262 =>
            array(
                'id' => 266,
                'name' => 'Silwati Al Womera ma\'am',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 56,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1XHkVAfH-y4W3aPCtYL6ZLSse9RDxPgjz?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Silwati Al Womera ma\'am  ce 4-1  Hydrology, Irrigation and Flood Management wre451 Hydrologic cycle; hydrologic measurement: precipitation, evaporation
and stream flow; hydrographs; plant-soil-water relationship;
consumptive use and estimation of irrigation water requirements;
methods of irrigation; quality of irrigation water; problems of
irrigated land; flood and its management.',
                'created_at' => '2018-10-22 17:52:42',
                'updated_at' => '2018-10-22 17:52:42',


            ),
            263 =>
            array(
                'id' => 267,
                'name' => 'Extra',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 56,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1jDgn17O_d68d4GPz4OM9k1dlem3XZakN?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Extra  ce 4-1  Hydrology, Irrigation and Flood Management wre451 Hydrologic cycle; hydrologic measurement: precipitation, evaporation
and stream flow; hydrographs; plant-soil-water relationship;
consumptive use and estimation of irrigation water requirements;
methods of irrigation; quality of irrigation water; problems of
irrigated land; flood and its management.',
                'created_at' => '2018-10-22 17:53:34',
                'updated_at' => '2018-10-22 17:53:34',


            ),
            264 =>
            array(
                'id' => 268,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 56,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1jh-wwZ9L6DvXLAYjW-R88hknr4-V22Re?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-1  Hydrology, Irrigation and Flood Management wre451 Hydrologic cycle; hydrologic measurement: precipitation, evaporation
and stream flow; hydrographs; plant-soil-water relationship;
consumptive use and estimation of irrigation water requirements;
methods of irrigation; quality of irrigation water; problems of
irrigated land; flood and its management.',
                'created_at' => '2018-10-22 17:53:52',
                'updated_at' => '2018-10-22 17:53:52',


            ),
            265 =>
            array(
                'id' => 269,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 56,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1hpBQenOUfjeLxDYh7yMWjv6RgQl_baUj?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-1  Hydrology, Irrigation and Flood Management wre451 Hydrologic cycle; hydrologic measurement: precipitation, evaporation
and stream flow; hydrographs; plant-soil-water relationship;
consumptive use and estimation of irrigation water requirements;
methods of irrigation; quality of irrigation water; problems of
irrigated land; flood and its management.',
                'created_at' => '2018-10-22 17:54:09',
                'updated_at' => '2018-10-22 17:54:09',


            ),
            266 =>
            array(
                'id' => 270,
                'name' => 'All in one (P01)(6.55GB)',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ilS6FnKQQt1jjYmQE4U4vrLF0S10f8-k?usp=sharing',
                'image' => '',
                'status' => '3',
                'custom_message' => NULL,
                'description' => 'All in one (P01)(6.55GB)  ce 4-1  ',
                'created_at' => '2018-10-22 17:55:43',
                'updated_at' => '2018-10-30 19:48:48',


            ),
            267 =>
            array(
                'id' => 271,
                'name' => 'All in one (P02)(8GB)',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1uWSDvlht6f74Tzcs5g_SPl55HpTh991G?usp=sharing',
                'image' => '',
                'status' => '5',
                'custom_message' => NULL,
                'description' => 'All in one (P02)(8GB)  ce 4-1  ',
                'created_at' => '2018-10-22 17:56:18',
                'updated_at' => '2018-10-30 19:55:35',


            ),
            268 =>
            array(
                'id' => 272,
                'name' => 'All Lab Report',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 41,
                'user_id' => 10,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/u/0/folders/1zY29y8xzx4POReGJdXNYulc8SMYbnRuv?fbclid=IwAR1fnGKQI9VavUXJOaLB1qgClVxP93S1qnz5HBGFx-QtEURMK7Ty9VRtw80',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All Lab Report  ce 2-1  Materials Sessional ce202 ',
                'created_at' => '2018-10-28 05:57:07',
                'updated_at' => '2018-10-28 05:57:07',


            ),
            269 =>
            array(
                'id' => 273,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 61,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1dkIKe1seLeODi-mfEePUOgV6zCSfZhYM?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Project and Thesis ce400 ',
                'created_at' => '2019-06-08 20:15:22',
                'updated_at' => '2019-06-08 20:15:22',


            ),
            270 =>
            array(
                'id' => 274,
                'name' => 'Case',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 62,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1rpu1a1etrf_b7ISGcQ0Imgw6dyqsgSJY?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Case  ce 4-2  Socio-economic Aspects of Development Projects ce403 ',
                'created_at' => '2019-06-08 20:16:55',
                'updated_at' => '2019-06-08 20:16:55',


            ),
            271 =>
            array(
                'id' => 275,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 62,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1-cP5DFX1KWLzoiEy8wuSJAffUO_o0QcI?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-2  Socio-economic Aspects of Development Projects ce403 ',
                'created_at' => '2019-06-08 20:17:27',
                'updated_at' => '2019-06-08 20:17:27',


            ),
            272 =>
            array(
                'id' => 276,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 62,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1yptC58c21Wg4VQbrvyo08vgp8SSOO0o5?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-2  Socio-economic Aspects of Development Projects ce403 ',
                'created_at' => '2019-06-08 20:17:56',
                'updated_at' => '2019-06-08 20:17:56',


            ),
            273 =>
            array(
                'id' => 277,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 62,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/12GJW2inG8leo5PFq8-enmeSV3oKTzPY7?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Socio-economic Aspects of Development Projects ce403 ',
                'created_at' => '2019-06-08 20:18:16',
                'updated_at' => '2019-06-08 20:18:16',


            ),
            274 =>
            array(
                'id' => 278,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 62,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1kTAcqPCwiqaNAVAf2pZEumwFp-Y7NtTA?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Socio-economic Aspects of Development Projects ce403 ',
                'created_at' => '2019-06-08 20:18:40',
                'updated_at' => '2019-06-08 20:18:40',


            ),
            275 =>
            array(
                'id' => 279,
                'name' => 'Case',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 63,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1iDCpf79eSitfBv1XpMpxl-W8shTsUGbH?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Case  ce 4-2  Business and Career Development ce405 ',
                'created_at' => '2019-06-08 20:19:11',
                'updated_at' => '2019-06-08 20:19:11',


            ),
            276 =>
            array(
                'id' => 280,
                'name' => 'Extra',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 63,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1957Yt2RaDfrnSEBG5d0digw88avtXDZR?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Extra  ce 4-2  Business and Career Development ce405 ',
                'created_at' => '2019-06-08 20:19:37',
                'updated_at' => '2019-06-08 20:19:37',


            ),
            277 =>
            array(
                'id' => 281,
                'name' => 'Question',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 63,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1SZ6rPIaWNdDEhPOKzlQ899bJtI40shXh?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question  ce 4-2  Business and Career Development ce405 ',
                'created_at' => '2019-06-08 20:20:02',
                'updated_at' => '2019-06-08 20:20:02',


            ),
            278 =>
            array(
                'id' => 282,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 63,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1V1m4HNy6ScTpJaH_a8XmQUaWKDjfM9S6?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-2  Business and Career Development ce405 ',
                'created_at' => '2019-06-08 20:20:29',
                'updated_at' => '2019-06-08 20:20:29',


            ),
            279 =>
            array(
                'id' => 283,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 63,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/10bjCqeYF6yHuHViDkkyC5RsfIm3b-Lmg?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Business and Career Development ce405 ',
                'created_at' => '2019-06-08 20:20:48',
                'updated_at' => '2019-06-08 20:20:48',


            ),
            280 =>
            array(
                'id' => 284,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 63,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1wGB7piZH1OEJtUHtie_H8vHhskdXCzo2?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Business and Career Development ce405 ',
                'created_at' => '2019-06-08 20:21:07',
                'updated_at' => '2019-06-08 20:21:07',


            ),
            281 =>
            array(
                'id' => 285,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 68,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/16xetKyqGbmJ7XP90L2S2sXL44SGlRkou?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Computer Aided Analysis and Design of Structures Sessional ce412 ',
                'created_at' => '2019-06-08 20:21:46',
                'updated_at' => '2019-06-08 20:21:46',


            ),
            282 =>
            array(
                'id' => 286,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 64,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1VBQm187SFG2Tx0ooj0c5Vwa-jLQuOZkS?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 4-2  Introduction to Steel-Concrete Composite Structures ce413 ',
                'created_at' => '2019-06-08 20:22:43',
                'updated_at' => '2019-06-08 20:22:43',


            ),
            283 =>
            array(
                'id' => 287,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 64,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ooyP12TOwQ-wnmj3U6ZBIYeS78BXjSaZ?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-2  Introduction to Steel-Concrete Composite Structures ce413 ',
                'created_at' => '2019-06-08 20:23:07',
                'updated_at' => '2019-06-08 20:23:07',


            ),
            284 =>
            array(
                'id' => 288,
                'name' => 'Extra',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 64,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1LYU0E5XDirXoyPtUIsoI0B_zBy7P12z8?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Extra  ce 4-2  Introduction to Steel-Concrete Composite Structures ce413 ',
                'created_at' => '2019-06-08 20:24:18',
                'updated_at' => '2019-06-08 20:24:18',


            ),
            285 =>
            array(
                'id' => 289,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 64,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/12j7L2I8PJ-bqcIkEGx7yfiMHTNyn8lz_?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-2  Introduction to Steel-Concrete Composite Structures ce413 ',
                'created_at' => '2019-06-08 20:24:36',
                'updated_at' => '2019-06-08 20:24:36',


            ),
            286 =>
            array(
                'id' => 290,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 64,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1rt4g66SQAelbCWDVr5HIKHw7o_2T1btr?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Introduction to Steel-Concrete Composite Structures ce413 ',
                'created_at' => '2019-06-08 20:25:14',
                'updated_at' => '2019-06-08 20:25:14',


            ),
            287 =>
            array(
                'id' => 291,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 64,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1W0xFdTmnvrQAMaLTQpHOyEhBISdu75mo?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Introduction to Steel-Concrete Composite Structures ce413 ',
                'created_at' => '2019-06-08 20:25:36',
                'updated_at' => '2019-06-08 20:25:36',


            ),
            288 =>
            array(
                'id' => 292,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 64,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1W0xFdTmnvrQAMaLTQpHOyEhBISdu75mo?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Introduction to Steel-Concrete Composite Structures ce413 ',
                'created_at' => '2019-06-08 20:26:13',
                'updated_at' => '2019-06-08 20:26:13',


            ),
            289 =>
            array(
                'id' => 293,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 65,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1RGPxFzOPqYLeuvq42027feIW3hm-XJBX?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 4-2  Prestressed Concrete ce415 ',
                'created_at' => '2019-06-08 20:27:12',
                'updated_at' => '2019-06-08 20:27:12',


            ),
            290 =>
            array(
                'id' => 294,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 65,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1PuMQNxWbwd6tFT_xcZzQxvQF8zMe3Siv?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-2  Prestressed Concrete ce415 ',
                'created_at' => '2019-06-08 20:27:35',
                'updated_at' => '2019-06-08 20:27:35',


            ),
            291 =>
            array(
                'id' => 295,
                'name' => 'Extra',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 65,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1P1adWh_QtZSfWqLgjDstyOaXuFQpvhHM?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Extra  ce 4-2  Prestressed Concrete ce415 ',
                'created_at' => '2019-06-08 20:27:54',
                'updated_at' => '2019-06-08 20:27:54',


            ),
            292 =>
            array(
                'id' => 296,
                'name' => 'Question',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 65,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1LLP219Zmj6JgSeM83o7A3hBM4Pho7t06?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question  ce 4-2  Prestressed Concrete ce415 ',
                'created_at' => '2019-06-08 20:28:18',
                'updated_at' => '2019-06-08 20:28:18',


            ),
            293 =>
            array(
                'id' => 297,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 65,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Dd7QgnREQbmlspfGZ_yiJTlRrDQ8-g7Z?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-2  Prestressed Concrete ce415 ',
                'created_at' => '2019-06-08 20:28:41',
                'updated_at' => '2019-06-08 20:28:41',


            ),
            294 =>
            array(
                'id' => 298,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 65,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1onKSAD4QKR3LaanU4Fs7C2iiaZUFOfRV?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Prestressed Concrete ce415 ',
                'created_at' => '2019-06-08 20:28:58',
                'updated_at' => '2019-06-08 20:28:58',


            ),
            295 =>
            array(
                'id' => 299,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 65,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1y2b6kFkEXOiqeMH50m06ggNL8MFPpoho?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Prestressed Concrete ce415 ',
                'created_at' => '2019-06-08 20:29:18',
                'updated_at' => '2019-06-08 20:29:18',


            ),
            296 =>
            array(
                'id' => 300,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 66,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/150FgLopaqSoGnriXrbuXy0vAf5mdm2ow?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 4-2  Introduction to Finite Element Method ce419 ',
                'created_at' => '2019-06-08 20:30:08',
                'updated_at' => '2019-06-08 20:30:08',


            ),
            297 =>
            array(
                'id' => 301,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 66,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Jcz-gMXLOGPjyadvrOxUoAP4HzCq526s?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-2  Introduction to Finite Element Method ce419 ',
                'created_at' => '2019-06-08 20:30:25',
                'updated_at' => '2019-06-08 20:30:25',


            ),
            298 =>
            array(
                'id' => 302,
                'name' => 'Extra',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 66,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Mb8VJxiR131v7BHzMaa_bZCfH8j83egu?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Extra  ce 4-2  Introduction to Finite Element Method ce419 ',
                'created_at' => '2019-06-08 20:30:45',
                'updated_at' => '2019-06-08 20:30:45',


            ),
            299 =>
            array(
                'id' => 303,
                'name' => 'Question',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 66,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/15LhYsB4iko_yvChudJ-icm3wReX4J4A-?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question  ce 4-2  Introduction to Finite Element Method ce419 ',
                'created_at' => '2019-06-08 20:31:06',
                'updated_at' => '2019-06-08 20:31:06',


            ),
            300 =>
            array(
                'id' => 304,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 66,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1R8WAbhJr5fo_FHJn5XEKEMUpV4kltvEb?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-2  Introduction to Finite Element Method ce419 ',
                'created_at' => '2019-06-08 20:31:24',
                'updated_at' => '2019-06-08 20:31:24',


            ),
            301 =>
            array(
                'id' => 305,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 66,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1KOrY9USxOCDkRtJeZohot-gImSqZkYGC?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Introduction to Finite Element Method ce419 ',
                'created_at' => '2019-06-08 20:31:55',
                'updated_at' => '2019-06-08 20:31:55',


            ),
            302 =>
            array(
                'id' => 306,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 66,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/17I9H7pApUofHJzU0ohxFSVq1auQgFbXN?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Introduction to Finite Element Method ce419 ',
                'created_at' => '2019-06-08 20:32:15',
                'updated_at' => '2019-06-08 20:32:15',


            ),
            303 =>
            array(
                'id' => 307,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 67,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1dx8ZcKbNRbkoHwgCvV3H-fgdMwapDRNQ?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 4-2  Dynamics of Structures ce421 ',
                'created_at' => '2019-06-08 20:33:07',
                'updated_at' => '2019-06-08 20:33:07',


            ),
            304 =>
            array(
                'id' => 308,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 67,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1b9sxNiINYv4zDZUfcHlAhN0k3qatIdXU?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-2  Dynamics of Structures ce421 ',
                'created_at' => '2019-06-08 20:33:27',
                'updated_at' => '2019-06-08 20:33:27',


            ),
            305 =>
            array(
                'id' => 309,
                'name' => 'Extra',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 67,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Y-TP3-7osm2gKV4Y3Nf7j3CbDVYTctjb?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Extra  ce 4-2  Dynamics of Structures ce421 ',
                'created_at' => '2019-06-08 20:33:45',
                'updated_at' => '2019-06-08 20:33:45',


            ),
            306 =>
            array(
                'id' => 310,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 67,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1VnC9dABeatmBZxjfGykerLeGS7Bgm93e?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-2  Dynamics of Structures ce421 ',
                'created_at' => '2019-06-08 20:34:03',
                'updated_at' => '2019-06-08 20:34:03',


            ),
            307 =>
            array(
                'id' => 311,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 67,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1H0ewtTCOkbZJ-0NHA4ewj3TnLfmzsnfP?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Dynamics of Structures ce421 ',
                'created_at' => '2019-06-08 20:34:36',
                'updated_at' => '2019-06-08 20:34:36',


            ),
            308 =>
            array(
                'id' => 312,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 67,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/18tkPejXvsBTEzAMLfqLYMZ-49eRs_LzY?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Dynamics of Structures ce421 ',
                'created_at' => '2019-06-08 20:34:52',
                'updated_at' => '2019-06-08 20:34:52',


            ),
            309 =>
            array(
                'id' => 313,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 72,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1JaFO-iqNKHUwBiBsXn1b4SLR8AQNVxmR?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Design of Water Supply, Sanitation and Sewerage Systems ce432 ',
                'created_at' => '2019-06-08 20:35:57',
                'updated_at' => '2019-06-08 20:35:57',


            ),
            310 =>
            array(
                'id' => 314,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 69,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1I4pNd_Nau085uZyEr9bq756e8tNpoe18?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-2  Solid and Hazardous Waste Management ce433 ',
                'created_at' => '2019-06-08 20:42:05',
                'updated_at' => '2019-06-08 20:42:05',


            ),
            311 =>
            array(
                'id' => 315,
                'name' => 'Extra',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 69,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1dlftKApkSp3BF5XD3xqx1Hv2mNTp0LG4?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Extra  ce 4-2  Solid and Hazardous Waste Management ce433 ',
                'created_at' => '2019-06-08 20:42:23',
                'updated_at' => '2019-06-08 20:42:23',


            ),
            312 =>
            array(
                'id' => 316,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 69,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1k1UKUnufu9VEi_R3IonYWjZ7Tlxgqr_Z?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-2  Solid and Hazardous Waste Management ce433 ',
                'created_at' => '2019-06-08 20:42:40',
                'updated_at' => '2019-06-08 20:42:40',


            ),
            313 =>
            array(
                'id' => 317,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 69,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1kMxPoJQMxnHbyHK3ewGot5QA2Uo9wnCw?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Solid and Hazardous Waste Management ce433 ',
                'created_at' => '2019-06-08 20:43:01',
                'updated_at' => '2019-06-08 20:43:01',


            ),
            314 =>
            array(
                'id' => 318,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 69,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1abB3KehRJlaTT-O1H6EZmnq4PFTWuUEl?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Solid and Hazardous Waste Management ce433 ',
                'created_at' => '2019-06-08 20:43:17',
                'updated_at' => '2019-06-08 20:43:17',


            ),
            315 =>
            array(
                'id' => 319,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 70,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1hQvrZYGfkrrXAAI9_Ws0ozTzDTNfJ9fN?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 4-2  Environmental Pollution Management ce435 ',
                'created_at' => '2019-06-08 20:44:00',
                'updated_at' => '2019-06-08 20:44:00',


            ),
            316 =>
            array(
                'id' => 320,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 70,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/12bn0rGRSSvvt9X_L1UyROLrZFADykMS6?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-2  Environmental Pollution Management ce435 ',
                'created_at' => '2019-06-08 20:44:17',
                'updated_at' => '2019-06-08 20:44:17',


            ),
            317 =>
            array(
                'id' => 321,
                'name' => 'Extra',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 70,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1raoD5JvQM4If3_MKcTnuqn2C2lUsfNqa?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Extra  ce 4-2  Environmental Pollution Management ce435 ',
                'created_at' => '2019-06-08 20:44:39',
                'updated_at' => '2019-06-08 20:44:39',


            ),
            318 =>
            array(
                'id' => 322,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 70,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1s-ob6ekgYiRoypgxXf_sxzRDYqwsigIe?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-2  Environmental Pollution Management ce435 ',
                'created_at' => '2019-06-08 20:44:58',
                'updated_at' => '2019-06-08 20:44:58',


            ),
            319 =>
            array(
                'id' => 323,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 70,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/12m5w1YSNfZyeKLkoK4iOjAY6rJHkimLM?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Environmental Pollution Management ce435 ',
                'created_at' => '2019-06-08 20:45:17',
                'updated_at' => '2019-06-08 20:45:17',


            ),
            320 =>
            array(
                'id' => 324,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 70,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/16s3BS0piykoCVCzBLvB2l4CnkQX2xtHB?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Environmental Pollution Management ce435 ',
                'created_at' => '2019-06-08 20:46:10',
                'updated_at' => '2019-06-08 20:46:10',


            ),
            321 =>
            array(
                'id' => 325,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 71,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1gLkVAnmR2nomtgOQXlvlWDReVAFSYmek?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-2  Environmental and Sustainable Management ce437 ',
                'created_at' => '2019-06-08 20:47:04',
                'updated_at' => '2019-06-08 20:47:04',


            ),
            322 =>
            array(
                'id' => 326,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 71,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ECbJN2-F1XcGPvHqJ8NQ_xj4xxx1Mqnd?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Environmental and Sustainable Management ce437 ',
                'created_at' => '2019-06-08 20:47:22',
                'updated_at' => '2019-06-08 20:47:22',


            ),
            323 =>
            array(
                'id' => 327,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 71,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1bj112xf95Mxfg_xNBVnLRblv0BrHJ9dh?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Environmental and Sustainable Management ce437 ',
                'created_at' => '2019-06-08 20:47:40',
                'updated_at' => '2019-06-08 20:47:40',


            ),
            324 =>
            array(
                'id' => 328,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 76,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/16zSNoc_dNS1t2FbUQ_yFYKyu5VXfnRXm?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Geotechnical Engineering Design Sessional ce442 ',
                'created_at' => '2019-06-08 20:49:23',
                'updated_at' => '2019-06-08 20:49:23',


            ),
            325 =>
            array(
                'id' => 329,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 73,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1CLmauc2Com-PSp32IRHnoooi05AsIHR6?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 4-2  Earth Retaining Structures ce443 ',
                'created_at' => '2019-06-08 20:51:33',
                'updated_at' => '2019-06-08 20:51:33',


            ),
            326 =>
            array(
                'id' => 330,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 73,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1tRHV-7tl5_z0euEzuEL-wAjY-OTRz1hH?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-2  Earth Retaining Structures ce443 ',
                'created_at' => '2019-06-08 20:52:02',
                'updated_at' => '2019-06-08 20:52:02',


            ),
            327 =>
            array(
                'id' => 331,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 73,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1C4OjwPupCWHUkyRJwVP1oUhBe0zHDmJl?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-2  Earth Retaining Structures ce443 ',
                'created_at' => '2019-06-08 20:52:20',
                'updated_at' => '2019-06-08 20:52:20',


            ),
            328 =>
            array(
                'id' => 332,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 73,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1AZkyjhr0UlzMMDBregTJZVjs_6EONE9F?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Earth Retaining Structures ce443 ',
                'created_at' => '2019-06-08 20:52:37',
                'updated_at' => '2019-06-08 20:52:37',


            ),
            329 =>
            array(
                'id' => 333,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 73,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1mcTQLuiMe5yv8-zOFpnBFS_uDN4r9Q7N?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Earth Retaining Structures ce443 ',
                'created_at' => '2019-06-08 20:52:54',
                'updated_at' => '2019-06-08 20:52:54',


            ),
            330 =>
            array(
                'id' => 334,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 74,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1OEOvKTknd896TWvh9P9nsAL2bLXaecEk?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-2  Elementary Soil Dynamics ce445 ',
                'created_at' => '2019-06-08 20:53:45',
                'updated_at' => '2019-06-08 20:53:45',


            ),
            331 =>
            array(
                'id' => 335,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 74,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1cqx8cHFHkEDJi03bgE464AVsZVd1rLAv?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-2  Elementary Soil Dynamics ce445 ',
                'created_at' => '2019-06-08 20:54:10',
                'updated_at' => '2019-06-08 20:54:10',


            ),
            332 =>
            array(
                'id' => 336,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 74,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/19fzTQFsRSPw0JHkEmXtaEZ8wU3Sl-612?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Elementary Soil Dynamics ce445 ',
                'created_at' => '2019-06-08 20:54:40',
                'updated_at' => '2019-06-08 20:54:40',


            ),
            333 =>
            array(
                'id' => 337,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 74,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1qCMIc0pgEEIFCxjnld-XRut1B99lsdfx?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Elementary Soil Dynamics ce445 ',
                'created_at' => '2019-06-08 20:54:57',
                'updated_at' => '2019-06-08 20:54:57',


            ),
            334 =>
            array(
                'id' => 338,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 75,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1YvG-rzqXukcGhugQmYsj8i3udpoEXX4p?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 4-2  Soil-water Interaction ce447 ',
                'created_at' => '2019-06-08 20:55:40',
                'updated_at' => '2019-06-08 20:55:40',


            ),
            335 =>
            array(
                'id' => 339,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 75,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1vnfZMvWyHlQRKFF31Fl_rrrnbFmMuErN?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-2  Soil-water Interaction ce447 ',
                'created_at' => '2019-06-08 20:56:02',
                'updated_at' => '2019-06-08 20:56:02',


            ),
            336 =>
            array(
                'id' => 340,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 75,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1b0UZeA6Bf8UFRetv1qvsuBol4CKHcxMH?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-2  Soil-water Interaction ce447 ',
                'created_at' => '2019-06-08 20:56:19',
                'updated_at' => '2019-06-08 20:56:19',


            ),
            337 =>
            array(
                'id' => 341,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 75,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1mGjki9srT_xFioAaaCnR7BuW9HsuG51b?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Soil-water Interaction ce447 ',
                'created_at' => '2019-06-08 20:56:45',
                'updated_at' => '2019-06-08 20:56:45',


            ),
            338 =>
            array(
                'id' => 342,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 75,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1eNq9QPy2KACJwtAaQB_gCYp9t-oeUFCj?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Soil-water Interaction ce447 ',
                'created_at' => '2019-06-08 20:57:03',
                'updated_at' => '2019-06-08 20:57:03',


            ),
            339 =>
            array(
                'id' => 343,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 77,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1XrEPumYLrzNT1SvHMNEJoEyUiRtmon21?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Transportation Engineering III: Traffic Engineering Design and Management ce453 ',
                'created_at' => '2019-06-08 20:58:11',
                'updated_at' => '2019-06-08 20:58:11',


            ),
            340 =>
            array(
                'id' => 344,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 80,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Zuk2lRLPH-xcgCWs9qovcJ763lVuBl0z?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Transportation Engineering Sessional II: Pavement Design and Traffic Studies ce454 ',
                'created_at' => '2019-06-08 20:58:44',
                'updated_at' => '2019-06-08 20:58:44',


            ),
            341 =>
            array(
                'id' => 345,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 78,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1s4m4SfwpsRX7Pt3HHfO6j87O-dLKhUr6?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 4-2  Transportation Engineering IV: Pavement Management, Drainage and Airport ce455 ',
                'created_at' => '2019-06-08 20:59:46',
                'updated_at' => '2019-06-08 20:59:46',


            ),
            342 =>
            array(
                'id' => 346,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 78,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1MV-eIpUt4W0LFZRQkuwhw7f63md01qQg?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-2  Transportation Engineering IV: Pavement Management, Drainage and Airport ce455 ',
                'created_at' => '2019-06-08 21:00:13',
                'updated_at' => '2019-06-08 21:00:13',


            ),
            343 =>
            array(
                'id' => 347,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 78,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1PgzFwB5zuMhFkumYf8qFZ3my50s4WJV9?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-2  Transportation Engineering IV: Pavement Management, Drainage and Airport ce455 ',
                'created_at' => '2019-06-08 21:00:36',
                'updated_at' => '2019-06-08 21:00:36',


            ),
            344 =>
            array(
                'id' => 348,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 78,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1NbGm02tGtnxOwffYGz8gI4DKoPR4UVdq?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Transportation Engineering IV: Pavement Management, Drainage and Airport ce455 ',
                'created_at' => '2019-06-08 21:00:56',
                'updated_at' => '2019-06-08 21:00:56',


            ),
            345 =>
            array(
                'id' => 349,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 78,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1bq9Ic9SCF6Od44PoIYpJTXNbzAQqPXbV?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Transportation Engineering IV: Pavement Management, Drainage and Airport ce455 ',
                'created_at' => '2019-06-08 21:01:14',
                'updated_at' => '2019-06-08 21:01:14',


            ),
            346 =>
            array(
                'id' => 350,
                'name' => 'Books',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 79,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1-fTzUISWTRokXbbvJhXxNwAQkfHKwisE?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Books  ce 4-2  Transportation Engineering V: Urban Transportation Planning and Management ce457 ',
                'created_at' => '2019-06-08 21:01:58',
                'updated_at' => '2019-06-08 21:01:58',


            ),
            347 =>
            array(
                'id' => 351,
                'name' => 'Class Lecture',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 79,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1AsSEQc5NET_QaEmx3cOA5-z1Exq-o6w0?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Class Lecture  ce 4-2  Transportation Engineering V: Urban Transportation Planning and Management ce457 ',
                'created_at' => '2019-06-08 21:02:16',
                'updated_at' => '2019-06-08 21:02:16',


            ),
            348 =>
            array(
                'id' => 352,
                'name' => 'Question Solve',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 79,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1akdzrhXD2FLDbZNYq5XI9O8nNWjdrkGB?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question Solve  ce 4-2  Transportation Engineering V: Urban Transportation Planning and Management ce457 ',
                'created_at' => '2019-06-08 21:02:36',
                'updated_at' => '2019-06-08 21:02:36',


            ),
            349 =>
            array(
                'id' => 353,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 79,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1rnHEYK5VWGQq64c138YsJK5FIS3wspIt?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  Transportation Engineering V: Urban Transportation Planning and Management ce457 ',
                'created_at' => '2019-06-08 21:03:03',
                'updated_at' => '2019-06-08 21:03:03',


            ),
            350 =>
            array(
                'id' => 354,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 79,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1wImmLWIH9Wfwd7JNbWw3muh9mP_8R851?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Transportation Engineering V: Urban Transportation Planning and Management ce457 ',
                'created_at' => '2019-06-08 21:03:23',
                'updated_at' => '2019-06-08 21:03:23',


            ),
            351 =>
            array(
                'id' => 355,
                'name' => 'Extra',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1pXwC4-vWGMXMfR8ZCG0kjy44igsC2mRt?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Extra  ce 4-2  ',
                'created_at' => '2019-06-08 21:03:57',
                'updated_at' => '2019-06-08 21:03:57',


            ),
            352 =>
            array(
                'id' => 356,
                'name' => 'Question',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1OcvsR8ofO55TeqVp9Vb6Pl2I-xCmm8Pf?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Question  ce 4-2  ',
                'created_at' => '2019-06-08 21:04:13',
                'updated_at' => '2019-06-08 21:04:13',


            ),
            353 =>
            array(
                'id' => 357,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 83,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1RWCHkK62vyMoXOya81yzKTQC128GaywT?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-2  River Engineering wre409 ',
                'created_at' => '2019-06-08 21:04:58',
                'updated_at' => '2019-06-08 21:04:58',


            ),
            354 =>
            array(
                'id' => 358,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/17apaguC6n8_hOhXmbHEto2lJF-eIchNy?usp=sharing',
                'image' => '',
                'status' => '3',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  ',
                'created_at' => '2019-06-08 21:05:28',
                'updated_at' => '2019-06-08 21:05:28',


            ),
            355 =>
            array(
                'id' => 359,
                'name' => 'All in one',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 61,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1dkIKe1seLeODi-mfEePUOgV6zCSfZhYM?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in one  ce 4-2  Project and Thesis ce400 ',
                'created_at' => '2019-06-08 21:08:49',
                'updated_at' => '2019-06-08 21:08:49',


            ),
            356 =>
            array(
                'id' => 361,
                'name' => 'Snigdha Miss',
                'author' => 'Tajrin Alom Nizhum',
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 11,
                'user_id' => 6,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1b7XPTCgzMxAjH2U2SO9wSWl--6PJpjss',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Snigdha Miss Tajrin Alom Nizhum ce 3-2  Environmental Engineering II ce333 4 credit',
                'created_at' => '2020-05-16 21:53:59',
                'updated_at' => '2020-05-16 21:53:59',


            ),
            357 =>
            array(
                'id' => 362,
                'name' => 'Hamim Sir Notes',
                'author' => 'Tajrin Alom Nizhum',
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => NULL,
                'user_id' => 6,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/16mZoGawuRVAfPq8qNGGDWhYqoN9qd7CV',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Hamim Sir Notes Tajrin Alom Nizhum ce 3-2  ',
                'created_at' => '2020-05-16 22:11:00',
                'updated_at' => '2020-05-16 22:11:00',


            ),
            358 =>
            array(
                'id' => 363,
                'name' => 'Q. Solve CE\'16',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1dOjLtQJq-jFk1MFAeGGwSLBZTfPH-Q6s',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Q. Solve CE\'16  ce 3-1  ',
                'created_at' => '2020-05-22 18:31:55',
                'updated_at' => '2020-05-22 18:31:55',


            ),
            359 =>
            array(
                'id' => 364,
                'name' => 'Cotha New',
                'author' => 'Amanta',
                'department_slug' => 'ce',
                'level_term_slug' => '1-1',
                'course_id' => 28,
                'user_id' => 11,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ulT2uaOU2k1wQnSZUIHnpOTq01nV7wHo',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Cotha New Amanta ce 1-1  Differential and Integral Calculus, Matrices math137 3 credit',
                'created_at' => '2020-11-15 17:18:33',
                'updated_at' => '2020-11-15 17:20:17',


            ),
            360 =>
            array(
                'id' => 365,
                'name' => 'Tahsina Apu \'15',
                'author' => 'Tajrin Alom Nizhum',
                'department_slug' => 'ce',
                'level_term_slug' => '3-1',
                'course_id' => NULL,
                'user_id' => 6,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1N_X3mBM_g8tSHTaCsktYBlB8zWLxpotX',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Tahsina Apu \'15 Tajrin Alom Nizhum ce 3-1  ',
                'created_at' => '2021-02-03 19:55:14',
                'updated_at' => '2021-02-03 19:55:14',


            ),
            361 =>
            array(
                'id' => 366,
                'name' => '16 Batch Notes',
                'author' => 'Tajrin Alom Nizhum',
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 9,
                'user_id' => 6,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Sbapry4qdXV5B8DlH4HcnGb0MYRkZfon',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => '16 Batch Notes Tajrin Alom Nizhum ce 3-2  Design of Concrete Structures II ce317 3 credit',
                'created_at' => '2021-02-03 23:40:28',
                'updated_at' => '2021-02-03 23:40:28',


            ),
            362 =>
            array(
                'id' => 367,
                'name' => 'Syed Ishtiaq Sir',
                'author' => 'Tajrin Alom Nizhum',
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 9,
                'user_id' => 6,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1gf00ujmvF-oduxr4wXodOy4XjxAuCwl9',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Syed Ishtiaq Sir Tajrin Alom Nizhum ce 3-2  Design of Concrete Structures II ce317 3 credit',
                'created_at' => '2021-02-04 00:03:04',
                'updated_at' => '2021-02-04 00:03:04',


            ),
            363 =>
            array(
                'id' => 368,
                'name' => 'Q. Solve & Assignments CE\'16',
                'author' => 'Tajrin Alom Nizhum',
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => NULL,
                'user_id' => 6,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1xkjCwi0JUdWa9R0PkXci28deMbDcrYcs',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Q. Solve & Assignments CE\'16 Tajrin Alom Nizhum ce 3-2  ',
                'created_at' => '2021-02-04 01:26:35',
                'updated_at' => '2021-02-04 01:26:35',


            ),
            364 =>
            array(
                'id' => 369,
                'name' => 'Tahsina Apu \'15',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => NULL,
                'user_id' => 6,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1hyWZFjTCvN9Ii8LNK9g7lcgG25hHlEgm',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Tahsina Apu \'15  ce 3-2  ',
                'created_at' => '2021-02-04 01:55:19',
                'updated_at' => '2021-02-04 01:55:19',


            ),
            365 =>
            array(
                'id' => 370,
                'name' => 'Tahsina Apu \'15',
                'author' => 'Tajrin Alom Nizhum',
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => NULL,
                'user_id' => 6,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1mFIGcSN5woIBGdBeJzmOBDdCbDhrprvT',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Tahsina Apu \'15 Tajrin Alom Nizhum ce 4-1  ',
                'created_at' => '2021-02-04 02:24:04',
                'updated_at' => '2021-02-04 02:24:04',


            ),
            366 =>
            array(
                'id' => 371,
                'name' => 'Hadi Sir',
                'author' => 'Tajrin Alom Nizhum',
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 55,
                'user_id' => 6,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1qPYs1RSQ3Gs7_w-hKvwilWTmOi-ixeeN',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Hadi Sir Tajrin Alom Nizhum ce 4-1  Transportation Engineering II: Pavement Design and Railway Engineering ce451 Pavement materials: bituminous binders, cement, aggregates,
embankment material, soil stabilization; mix design methods; low
cost roads; flexible and rigid pavement: pavement components and
functions, pavement design and construction, road maintenance;
railway engineering: general requirements, rolling stock and tracks,
stations and yards, points and crossings, signaling, maintenance
operations.',
                'created_at' => '2021-02-06 03:20:53',
                'updated_at' => '2021-02-06 03:20:53',


            ),
            367 =>
            array(
                'id' => 377,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '1-1',
                'course_id' => 91,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1UCUSt9Zwl1YwjoquYJnp3U8yucd3hUaq?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 1-1  Human Settlements Development plan111 3.0',
                'created_at' => '2022-04-25 01:38:41',
                'updated_at' => '2022-04-25 01:38:41',


            ),
            368 =>
            array(
                'id' => 378,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '1-1',
                'course_id' => 90,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1LMWG2uRWn0Pu7nOnV85qYlqQT9NMm703?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 1-1  Mathematics I math101 2.0',
                'created_at' => '2022-04-25 01:40:15',
                'updated_at' => '2022-04-25 01:40:15',


            ),
            369 =>
            array(
                'id' => 379,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '1-1',
                'course_id' => 87,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1ZRqW5AvNPmZ4cSjLULm2OWaU086vbTwf?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 1-1  Micro-Economics hum171 3.0',
                'created_at' => '2022-04-25 01:41:05',
                'updated_at' => '2022-04-25 01:41:05',


            ),
            370 =>
            array(
                'id' => 380,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '1-1',
                'course_id' => 88,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1vcrwmTCzDtaCKAxu6zGZxjn3voce0_fL?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 1-1  English hum125 2.0',
                'created_at' => '2022-04-25 01:41:33',
                'updated_at' => '2022-04-25 01:41:33',


            ),
            371 =>
            array(
                'id' => 381,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '1-1',
                'course_id' => 89,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/16Sg92oyQTDRS_MTqLgkeRpxyl6s0WXAZ?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 1-1  Basic Environmental Chemistry chem207 3.0',
                'created_at' => '2022-04-25 01:42:04',
                'updated_at' => '2022-04-25 01:42:04',


            ),
            372 =>
            array(
                'id' => 382,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '1-2',
                'course_id' => 94,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1LQA9Aex2pht3-B4DFUDUSNxlLazhYZFk?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 1-2  Elements of Architecture arch145 2.0',
                'created_at' => '2022-04-25 01:49:42',
                'updated_at' => '2022-04-25 01:49:42',


            ),
            373 =>
            array(
                'id' => 383,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '1-2',
                'course_id' => 95,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1LsjD9qWlcub6jTg9fLtBWpJp6fCW8odd?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 1-2  Macro-Economics hum177 3.0',
                'created_at' => '2022-04-25 01:50:13',
                'updated_at' => '2022-04-25 01:50:13',


            ),
            374 =>
            array(
                'id' => 384,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '1-2',
                'course_id' => 97,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/17vyI8wM8bQSvcBYZJYZ-0TcRb_QgzKt1?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 1-2  Mathematics II math103 2.0',
                'created_at' => '2022-04-25 01:50:43',
                'updated_at' => '2022-04-25 01:50:43',


            ),
            375 =>
            array(
                'id' => 385,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '1-2',
                'course_id' => 96,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1XeCnHLukNjXuxsvtCvOxC53yK5WcA7Cd?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 1-2  Fundamentals of Planning plan113 2.0',
                'created_at' => '2022-04-25 01:51:13',
                'updated_at' => '2022-04-25 01:51:13',


            ),
            376 =>
            array(
                'id' => 386,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '1-2',
                'course_id' => 98,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/18XzLy_8zihTSY-apsFcCUkHfZrt854Lh?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 1-2  Surveying and Cartography plan161 3.0',
                'created_at' => '2022-04-25 01:53:19',
                'updated_at' => '2022-04-25 01:53:19',


            ),
            377 =>
            array(
                'id' => 387,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '1-2',
                'course_id' => 99,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1GLl8jQEinTAoDW9eGVKKlNwb__nUqYyB?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 1-2  Surveying and Cartography Workshop plan162 3.0',
                'created_at' => '2022-04-25 01:53:44',
                'updated_at' => '2022-04-25 01:53:44',


            ),
            378 =>
            array(
                'id' => 388,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '1-2',
                'course_id' => 100,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1GQ5QMi5NoL9QRPsl3Q2AqACW4yAUU7EN?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 1-2  Introduction to Computer Applications plan196 1.5',
                'created_at' => '2022-04-25 01:54:46',
                'updated_at' => '2022-04-25 01:54:46',


            ),
            379 =>
            array(
                'id' => 389,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-1',
                'course_id' => 102,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1MRX0VEB6oJevYdov3gH0BBlZkudGdk0t?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 2-1  Construction Materials ce209 2.0',
                'created_at' => '2022-04-25 01:55:41',
                'updated_at' => '2022-04-25 01:55:41',


            ),
            380 =>
            array(
                'id' => 390,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-1',
                'course_id' => 106,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1IhjKhPBlZhOxpw2GAfEDIbFWeycPPgKz?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 2-1  Sociology hum179 3.0',
                'created_at' => '2022-04-25 01:56:09',
                'updated_at' => '2022-04-25 01:56:09',


            ),
            381 =>
            array(
                'id' => 391,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-1',
                'course_id' => 103,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1tU7s74pKIpn_5FIqw8HwPtr0M4KxdcPT?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 2-1  Urban Planning Principles plan211 3.0',
                'created_at' => '2022-04-25 01:56:47',
                'updated_at' => '2022-04-25 01:56:47',


            ),
            382 =>
            array(
                'id' => 392,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-1',
                'course_id' => 104,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1xanXAkryx7WLyg8p0oa1TSP7MWqRolFf?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 2-1  Site and Area Planning plan217 3.0',
                'created_at' => '2022-04-25 01:57:20',
                'updated_at' => '2022-04-25 01:57:20',


            ),
            383 =>
            array(
                'id' => 393,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-1',
                'course_id' => 105,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/14xzdbDbCwuZqPnKhYAEg3P9n6NMcv3pi?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 2-1  Statistics for Planners I plan291 3.0',
                'created_at' => '2022-04-25 01:57:50',
                'updated_at' => '2022-04-25 01:57:50',


            ),
            384 =>
            array(
                'id' => 394,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-2',
                'course_id' => 110,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1pwAxi1L92yiHR6T3-dt3TA4EGghFuh-h?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 2-2  Landscape Planning and Design arch233 2.0',
                'created_at' => '2022-04-25 02:01:05',
                'updated_at' => '2022-04-25 02:01:05',


            ),
            385 =>
            array(
                'id' => 395,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-2',
                'course_id' => 117,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1e27uNab6wOJSdpM375F10DhBLjvOuCU-?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 2-2  Landscape Planning Studio arch226 3.0',
                'created_at' => '2022-04-25 02:01:55',
                'updated_at' => '2022-04-25 02:01:55',


            ),
            386 =>
            array(
                'id' => 396,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-2',
                'course_id' => 115,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1WQ8xzmbZeX78ZhKiemayQUVkDdbs0O-f?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 2-2  Public Finance hum221 3.0',
                'created_at' => '2022-04-25 02:05:15',
                'updated_at' => '2022-04-25 02:05:15',


            ),
            387 =>
            array(
                'id' => 397,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-2',
                'course_id' => 111,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Qz-RREh6MjYD7pKsOT2AKB7o1p7dWloQ?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 2-2  Urban Planning Techniques plan215 3.0',
                'created_at' => '2022-04-25 02:06:03',
                'updated_at' => '2022-04-25 02:06:03',


            ),
            388 =>
            array(
                'id' => 398,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-2',
                'course_id' => 112,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1j2YQZZwaXEKV1mpLMs3-mLwrbcrSL9yW?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 2-2  GIS and Remote Sensing plan261 3.0',
                'created_at' => '2022-04-25 02:07:11',
                'updated_at' => '2022-04-25 02:07:11',


            ),
            389 =>
            array(
                'id' => 399,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-2',
                'course_id' => 113,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1pcbLy5JAY9ggm414gQLpz4LPrFOMLdjI?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 2-2  Statistics for Planners II plan293 Prerequisite
Plan 291 3.0',
                'created_at' => '2022-04-25 02:08:13',
                'updated_at' => '2022-04-25 02:08:13',


            ),
            390 =>
            array(
                'id' => 400,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-2',
                'course_id' => 116,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/14odCRT66yR33G1W_k817Ea8vqZjsmhGl?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 2-2  Computer Applications in Planning plan296 3.0',
                'created_at' => '2022-04-25 02:08:39',
                'updated_at' => '2022-04-25 02:08:39',


            ),
            391 =>
            array(
                'id' => 401,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '3-1',
                'course_id' => 118,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Dx43EyuAGMvFedTwyVcASBYPJ72xcNlV?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 3-1  Elements of Solid Mechanics ce327 3.0',
                'created_at' => '2022-04-25 02:09:25',
                'updated_at' => '2022-04-25 02:09:25',


            ),
            392 =>
            array(
                'id' => 402,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '3-1',
                'course_id' => 122,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1lKBcysH7x23LtBC0B-wuq7mWco2aYWdN?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 3-1  Accounting hum225 2.0',
                'created_at' => '2022-04-25 02:09:59',
                'updated_at' => '2022-04-25 02:09:59',


            ),
            393 =>
            array(
                'id' => 403,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '3-1',
                'course_id' => 120,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1S_Hulf1YRHZ9L190Vf5jwmhMMMrOk_yn?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 3-1  Housing and Real Estate Development plan321 3.0',
                'created_at' => '2022-04-25 02:10:28',
                'updated_at' => '2022-04-25 02:10:28',


            ),
            394 =>
            array(
                'id' => 404,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '3-1',
                'course_id' => 121,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/18-RNIGwVgPW6On6-Kk1PJLwXV1XmqoVT?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 3-1  Traffic and Transportation Study plan343 3.0',
                'created_at' => '2022-04-25 02:11:05',
                'updated_at' => '2022-04-25 02:11:05',


            ),
            395 =>
            array(
                'id' => 405,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '3-1',
                'course_id' => 119,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/18g6hadzliNO5dgETbYyQ1h08PDZUNeT3?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 3-1  Introduction to Water Resources Planning wre309 3.0',
                'created_at' => '2022-04-25 02:11:29',
                'updated_at' => '2022-04-25 02:11:29',


            ),
            396 =>
            array(
                'id' => 406,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '3-2',
                'course_id' => 127,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1YkBWpHCjM17BCN0muxgKjFrXhJxTOCos?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 3-2  Elements of Civil Engineering Structures plan329 3.0',
                'created_at' => '2022-04-25 02:13:27',
                'updated_at' => '2022-04-25 02:13:27',


            ),
            397 =>
            array(
                'id' => 407,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '3-2',
                'course_id' => 128,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1OXR6lJhktxKbuIC9W0OhcMQ9VE1z4hTe?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 3-2  Rural Development Planning I plan331 3.0',
                'created_at' => '2022-04-25 02:14:46',
                'updated_at' => '2022-04-25 02:14:46',


            ),
            398 =>
            array(
                'id' => 408,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '3-2',
                'course_id' => 135,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/10WDSd4e5YTNgDu-OjxH8GZbOnQcdqIaL?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 3-2  Rural Planning Studio plan332 3.0',
                'created_at' => '2022-04-25 02:15:28',
                'updated_at' => '2022-04-25 02:15:28',


            ),
            399 =>
            array(
                'id' => 409,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '3-2',
                'course_id' => 130,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1BmexHMy9FMgGA_WCeI5Lh3-9fz8hoUQ5?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 3-2  Regional Development Planning plan333 3.0',
                'created_at' => '2022-04-25 02:15:59',
                'updated_at' => '2022-04-25 02:15:59',


            ),
            400 =>
            array(
                'id' => 410,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '3-2',
                'course_id' => 129,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1sUwX_aUpa8Sm2FsURuWKTsd_HsSWl44t?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 3-2  Transportation Policy and Planning plan345 3.0',
                'created_at' => '2022-04-25 02:16:31',
                'updated_at' => '2022-04-25 02:16:31',


            ),
            401 =>
            array(
                'id' => 411,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '3-2',
                'course_id' => 133,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/10Zx2C4ypXGiaxZt0CpNqjHSz4KjROpLj?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 3-2  Operations Research and Systems Analysis plan393 3.0',
                'created_at' => '2022-04-25 02:17:05',
                'updated_at' => '2022-04-25 02:17:05',


            ),
            402 =>
            array(
                'id' => 412,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '3-2',
                'course_id' => 134,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Ojgs081n4xs2NdoG-DZeCZo4ylAR6Ry3?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 3-2  Programming Techniques plan396 2.0',
                'created_at' => '2022-04-25 02:17:35',
                'updated_at' => '2022-04-25 02:17:35',


            ),
            403 =>
            array(
                'id' => 413,
                'name' => 'All in One',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-2',
                'course_id' => 114,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1N4C2lMXSe2FfyfPZuu5sgx5fxBv2m5-r?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'All in One  urp 2-2  Political Science and Local Government hum281 3.0',
                'created_at' => '2022-04-25 21:05:07',
                'updated_at' => '2022-04-25 21:05:07',


            ),
            404 =>
            array(
                'id' => 414,
                'name' => 'Annesha Mam',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 52,
                'user_id' => 6,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1OLj9VFPMGS8y3N34y8TePpoRnwDrPAww',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Annesha Mam  ce 4-1  Project planning and Construction Management ce401 Project planning and evaluation; feasibility reports; cash flows, pay
back period, internal rate of return; benefit-cost ratio; cost-benefit
analysis case studies;
Planning and scheduling, PERT, CPM; resource scheduling; linear
programming and application.90
Principles of management; construction management: principles,
project organization, methods and practices, technology,
management of materials and equipments, site management, contracts
and specifications, inspection and quality control, safety, economy.
Conflict management; psychology in administration: human factors
in management; human resource management.
Demand forecasting; inventory control; stores management;
procurement; legal issues in construction; environmental regulations.',
                'created_at' => '2022-05-18 00:24:06',
                'updated_at' => '2022-05-18 00:24:06',


            ),
            405 =>
            array(
                'id' => 415,
                'name' => 'Jalil sir',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 52,
                'user_id' => 6,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1JiQuYjHfSTMNp7BpG83bjR-sUDGFsJgB',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Jalil sir  ce 4-1  Project planning and Construction Management ce401 Project planning and evaluation; feasibility reports; cash flows, pay
back period, internal rate of return; benefit-cost ratio; cost-benefit
analysis case studies;
Planning and scheduling, PERT, CPM; resource scheduling; linear
programming and application.90
Principles of management; construction management: principles,
project organization, methods and practices, technology,
management of materials and equipments, site management, contracts
and specifications, inspection and quality control, safety, economy.
Conflict management; psychology in administration: human factors
in management; human resource management.
Demand forecasting; inventory control; stores management;
procurement; legal issues in construction; environmental regulations.',
                'created_at' => '2022-05-18 00:37:31',
                'updated_at' => '2022-05-18 00:37:31',


            ),
            406 =>
            array(
                'id' => 416,
                'name' => 'Slides',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 54,
                'user_id' => 6,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Egc2rrw-4lWDhYqrlMaUQDpBbI_MFGas',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Slides  ce 4-1  Foundation Engineering ce441 Soil investigation techniques; types of foundations; bearing capacity
of shallow and deep foundations; settlement and distortion of
foundations; design and construction of footings, rafts and piles;
slope stability analyses.',
                'created_at' => '2022-05-18 00:47:55',
                'updated_at' => '2022-05-18 00:47:55',


            ),
            407 =>
            array(
                'id' => 417,
                'name' => 'ALL NOTES OF MMR 1604166',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1u42-zYt_p2szCS0N5h0obUOKWcwFOuNf?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'ALL NOTES OF MMR 1604166  ce 4-2  ',
                'created_at' => '2022-07-02 03:00:22',
                'updated_at' => '2022-07-02 03:00:22',


            ),
            408 =>
            array(
                'id' => 418,
                'name' => 'Material from MMR',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 62,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1FKqooCSmF7pcrRpR1LvYrUpZ3poyBhUu?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'Material from MMR  ce 4-2  Socio-economic Aspects of Development Projects ce403 ',
                'created_at' => '2022-07-02 03:01:38',
                'updated_at' => '2022-07-02 03:01:38',


            ),
            409 =>
            array(
                'id' => 419,
                'name' => 'MMR 1604166',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 68,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1P32iEb2x2SBbmSHCNJx8Mqzf6yqaBkPS?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'MMR 1604166  ce 4-2  Computer Aided Analysis and Design of Structures Sessional ce412 ',
                'created_at' => '2022-07-02 03:12:23',
                'updated_at' => '2022-07-02 03:12:23',


            ),
            410 =>
            array(
                'id' => 420,
                'name' => 'MMR 1604166',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 67,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/10VkCk5-rauhRdDUw_J14mqMU4UWKAofK?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'MMR 1604166  ce 4-2  Dynamics of Structures ce421 ',
                'created_at' => '2022-07-02 03:18:54',
                'updated_at' => '2022-07-02 03:18:54',


            ),
            411 =>
            array(
                'id' => 421,
                'name' => 'MMR 1604166',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 69,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1bre8vaLLL631KgBVQm1EYhC9jQh8RxQ5?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'MMR 1604166  ce 4-2  Solid and Hazardous Waste Management ce433 ',
                'created_at' => '2022-07-02 03:21:47',
                'updated_at' => '2022-07-02 03:21:47',


            ),
            412 =>
            array(
                'id' => 422,
                'name' => 'MMR 1604166',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 76,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1Kujidh5dVPGd6r9PUmTezt5LvinRgEpO?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'MMR 1604166  ce 4-2  Geotechnical Engineering Design Sessional ce442 ',
                'created_at' => '2022-07-02 03:23:35',
                'updated_at' => '2022-07-02 03:23:35',


            ),
            413 =>
            array(
                'id' => 423,
                'name' => 'MMR 1604166',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '4-2',
                'course_id' => 74,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'post',
                'link' => 'https://drive.google.com/drive/folders/1x26EGC2XlHOqhH5CjL_e7fIxpuAzBAM5?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'MMR 1604166  ce 4-2  Elementary Soil Dynamics ce445 ',
                'created_at' => '2022-07-02 03:25:00',
                'updated_at' => '2022-07-02 03:25:00',


            ),
        ));
    }
}