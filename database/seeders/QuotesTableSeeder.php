<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('quotes')->delete();

        \DB::table('quotes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'quote' => 'While you are proclaiming peace with your lips, be careful to have it even more fully in your heart.',
                'author' => 'St. Francis of Assisi',
                'created_at' => '2021-09-14 17:24:48',
                'updated_at' => '2021-09-14 17:24:48',
            ),
            1 =>
            array (
                'id' => 2,
                'quote' => 'While you are proclaiming peace with your lips, be careful to have it even more fully in your heart.',
                'author' => 'St. Francis of Assisi',
                'created_at' => '2021-09-14 17:25:24',
                'updated_at' => '2021-09-14 17:25:24',
            ),
            2 =>
            array (
                'id' => 3,
                'quote' => 'If you don\'t have confidence, you\'ll always find a way not to win',
                'author' => 'Carl Lewis',
                'created_at' => '2021-09-17 15:24:18',
                'updated_at' => '2021-09-17 15:24:18',
            ),
            3 =>
            array (
                'id' => 4,
                'quote' => 'The real opportunity for success lies within the person and not in the job.',
                'author' => 'Zig Ziglar',
                'created_at' => '2021-10-15 14:29:20',
                'updated_at' => '2021-10-15 14:29:20',
            ),
        ));


    }
}

