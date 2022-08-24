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
                'rawdata' => '{"baseurl": "https://theysaidso.com", "success": {"total": 1}, "contents": {"quotes": [{"id": "4AUn8YQ5SgMqGS85HF_HYAeF", "date": "2021-09-14", "tags": ["life", "peace", "religious", "spiritual"], "quote": "While you are proclaiming peace with your lips, be careful to have it even more fully in your heart.", "title": "Quote of the day about life", "author": "St. Francis of Assisi", "length": "100", "category": "life", "language": "en", "permalink": "https://theysaidso.com/quote/st-francis-of-assisi-while-you-are-proclaiming-peace-with-your-lips-be-careful-t", "background": "https://theysaidso.com/img/qod/qod-life.jpg"}]}, "copyright": {"url": "https://theysaidso.com", "year": 2023}}',
                'created_at' => '2021-09-14 17:24:48',
                'updated_at' => '2021-09-14 17:24:48',
            ),
            1 => 
            array (
                'id' => 2,
                'quote' => 'While you are proclaiming peace with your lips, be careful to have it even more fully in your heart.',
                'author' => 'St. Francis of Assisi',
                'rawdata' => '{"baseurl": "https://theysaidso.com", "success": {"total": 1}, "contents": {"quotes": [{"id": "4AUn8YQ5SgMqGS85HF_HYAeF", "date": "2021-09-14", "tags": ["life", "peace", "religious", "spiritual"], "quote": "While you are proclaiming peace with your lips, be careful to have it even more fully in your heart.", "title": "Quote of the day about life", "author": "St. Francis of Assisi", "length": "100", "category": "life", "language": "en", "permalink": "https://theysaidso.com/quote/st-francis-of-assisi-while-you-are-proclaiming-peace-with-your-lips-be-careful-t", "background": "https://theysaidso.com/img/qod/qod-life.jpg"}]}, "copyright": {"url": "https://theysaidso.com", "year": 2023}}',
                'created_at' => '2021-09-14 17:25:24',
                'updated_at' => '2021-09-14 17:25:24',
            ),
            2 => 
            array (
                'id' => 3,
                'quote' => 'If you don\'t have confidence, you\'ll always find a way not to win',
                'author' => 'Carl Lewis',
                'rawdata' => '{"baseurl": "https://theysaidso.com", "success": {"total": 1}, "contents": {"quotes": [{"id": "4sjGQiAAZhY6jCxr6XcV1QeF", "date": "2021-09-17", "tags": {"0": "confidence", "1": "inspire", "3": "trust", "4": "winning"}, "quote": "If you don\'t have confidence, you\'ll always find a way not to win", "title": "Inspiring Quote of the day", "author": "Carl Lewis", "length": "65", "category": "inspire", "language": "en", "permalink": "https://theysaidso.com/quote/carl-lewis-if-you-dont-have-confidence-youll-always-find-a-way-not-to-win", "background": "https://theysaidso.com/img/qod/qod-inspire.jpg"}]}, "copyright": {"url": "https://theysaidso.com", "year": 2023}}',
                'created_at' => '2021-09-17 15:24:18',
                'updated_at' => '2021-09-17 15:24:18',
            ),
            3 => 
            array (
                'id' => 4,
                'quote' => 'The real opportunity for success lies within the person and not in the job.',
                'author' => 'Zig Ziglar',
                'rawdata' => '{"baseurl": "https://theysaidso.com", "success": {"total": 1}, "contents": {"quotes": [{"id": "cG742g_g_dI81QSvneS9rweF", "date": "2021-10-15", "tags": ["inspire", "opportunity", "success"], "quote": "The real opportunity for success lies within the person and not in the job.", "title": "Inspiring Quote of the day", "author": "Zig Ziglar", "length": "75", "category": "inspire", "language": "en", "permalink": "https://theysaidso.com/quote/zig-ziglar-the-real-opportunity-for-success-lies-within-the-person-and-not-in-th", "background": "https://theysaidso.com/img/qod/qod-inspire.jpg"}]}, "copyright": {"url": "https://theysaidso.com", "year": 2023}}',
                'created_at' => '2021-10-15 14:29:20',
                'updated_at' => '2021-10-15 14:29:20',
            ),
        ));
        
        
    }
}