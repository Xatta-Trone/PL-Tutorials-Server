<?php

namespace App\Console\Commands;

use App\Models\Admin\Quote;
use Illuminate\Support\Arr;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class DailyQuote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quote:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'gets a daily quote and saves in db';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {


        $type = Arr::random(['inspire', 'life']);

        $response = Http::get('http://quotes.rest/qod.json?category=' . $type);


        // dd((array) json_decode($response->body()));

        if ($response->status() == 200) {
            $response_data = (array) json_decode($response->body());
            $data = [
                'quote' => $response_data['contents']->quotes[0]->quote,
                'author' => $response_data['contents']->quotes[0]->author,
                // 'rawdata' => json_encode($response_data)
            ];
            // dd($data);
            Quote::create($data);
        } else {
            // print_r($response);
        }
    }
}