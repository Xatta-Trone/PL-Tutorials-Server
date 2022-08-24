<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'Sanjida Afrin',
                'user_letter' => 'S',
                'dept_batch' => 'CE\'17',
                'message' => 'It\'s actually a great help for the students . We have some topics about which we don\'t have any idea before then pl tutorials really helps us . We find notes class lecture lab reports drawing methods etc etc that is greatly helpful for all of us .',
                'status' => 1,
                'created_at' => '2018-06-11 01:21:29',
                'updated_at' => '2018-06-11 01:21:29',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Ahmed Salman',
                'user_letter' => 'A',
                'dept_batch' => 'CE\'15',
                'message' => 'It\'s great. literally it\'s great. and it\'s the reason of many of us\'s success.',
                'status' => 1,
                'created_at' => '2018-06-11 01:22:00',
                'updated_at' => '2018-06-11 01:22:00',
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Ragib noor',
                'user_letter' => 'R',
                'dept_batch' => 'CE\'17',
                'message' => 'Helpful though but some articles may be full with virus or for other causes they can\' t be run over all it is a good site to get prepared for the exam in a short time?',
                'status' => 1,
                'created_at' => '2018-06-11 01:22:48',
                'updated_at' => '2018-06-11 01:22:48',
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'Maiesha Tabassum',
                'user_letter' => 'M',
                'dept_batch' => 'CE\'15',
                'message' => 'this website has really been very useful. all the contents are worthy of visitng the site and downloading them.',
                'status' => 1,
                'created_at' => '2018-06-11 01:23:26',
                'updated_at' => '2018-06-11 01:23:26',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'Atiya Anika',
                'user_letter' => 'A',
                'dept_batch' => 'CE\'15',
                'message' => 'Whenever I am tired of finding any type of study material provided by the teachers, PL tutorial works there as a bliss. It undoubtedly saves time.',
                'status' => 1,
                'created_at' => '2018-06-11 01:24:03',
                'updated_at' => '2018-06-11 01:24:03',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'Md.Mehedi Hasan',
                'user_letter' => 'M',
                'dept_batch' => 'CE\'15',
                'message' => 'I think it\'s  an awesome website for every civil engineering student.I get all the necessary  notes, books, data, lectures from it.',
                'status' => 1,
                'created_at' => '2018-06-21 03:04:13',
                'updated_at' => '2018-06-21 03:04:13',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Md Rasel Hossain',
                'user_letter' => 'R',
                'dept_batch' => 'CE\'16',
                'message' => 'Actually, who create this site gratitude and deep respect from the core of the heart. You are doing a great job for buet student of CE dept. Without this site  buet civil life would be partial, unfilled.',
                'status' => 1,
                'created_at' => '2018-06-21 03:07:58',
                'updated_at' => '2018-06-21 03:07:58',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'Mehedi Hasan Shakil',
                'user_letter' => 'M',
                'dept_batch' => 'CE\'16',
                'message' => 'It\'s a great website where we can find our course materials.The difficulty we mainly face is to collect our study materials.We don\'t know where to look at.But for pl tutorials,we can have the data in a single place without wasting our time.
Thanks for the good work and Eid Mubarak :)',
            'status' => 1,
            'created_at' => '2018-06-21 03:09:28',
            'updated_at' => '2018-06-21 03:09:28',
        ),
        8 => 
        array (
            'id' => 13,
            'name' => 'Mir Tanvir Al Biruni',
            'user_letter' => 'T',
            'dept_batch' => 'CE\'15',
        'message' => 'You won\'t get 100% accuracy in course materials as there may be changes in course teacher but you\'ll get a complete idea of any CE undergrad (BUET) course here. Hats off to you guys for your wonderful and selfless work and may the Almighty bless you.',
            'status' => 1,
            'created_at' => '2018-06-21 03:10:24',
            'updated_at' => '2018-06-21 03:10:24',
        ),
        9 => 
        array (
            'id' => 14,
            'name' => 'Hasibur Hridoy',
            'user_letter' => 'H',
            'dept_batch' => 'CE\'15',
            'message' => 'PL_tutorial is playing a vital role for students like us who look for previous lectures, notes and other accessory materials.
#LOVE_THIS_SITE',
            'status' => 1,
            'created_at' => '2018-06-21 03:12:47',
            'updated_at' => '2018-06-21 03:12:47',
        ),
        10 => 
        array (
            'id' => 15,
            'name' => 'Nishat Tasnim',
            'user_letter' => 'N',
            'dept_batch' => 'CE\'15',
            'message' => 'Can\'t imagine what would happen without pl tutorials <3 Wishing for the best for this lifesaver ^_^',
            'status' => 1,
            'created_at' => '2018-09-29 23:28:27',
            'updated_at' => '2021-09-14 17:12:21',
        ),
    ));
        
        
    }
}