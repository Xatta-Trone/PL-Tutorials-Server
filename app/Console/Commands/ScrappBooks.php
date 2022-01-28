<?php

namespace App\Console\Commands;

use Goutte\Client;
use App\Models\Admin\Book;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;

class ScrappBooks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'books:scrapp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.engineeringbooks.me/search/label/civil?max-results=20');

        $crawler->filter('a.timestamp-link')->each(function ($node) {
            // dd($node->text . "\n");
            $href  = $node->attr('href');
            $title = $node->attr('title');
            $date = $node->filter('abbr.published')->attr('title');
            $datefomatted = Carbon::createFromDate($date);
            // $c = Carbon::yesterday();
            if ($datefomatted->isYesterday()) {
                $this->getinfo($href);
            }
            // $this->getinfo($href);
        });
    }


    private function getinfo($link)
    {
        $client = new Client();
        $crawler = $client->request('GET', $link);

        // get title
        $title = $crawler->filter('.post-body h2')->first()->text();
        // get author
        $author = $crawler->filter('.post-body div')->eq(1)->filter('span')->eq(1)->text();
        //get link
        $crawler->filter('.post-body a')->each(function ($node) use ($title, $author) {
            // dd($node->text() . "\n");
            if ($node->text() == 'LINK') {
                $href  = $node->attr('href');
                // dd(compact('href', 'title', 'author'));

                $book = [
                    'name'   => $title,
                    'author' => $author,
                    'user_id' => 1,
                    'user_type' => 'admin',
                    'link'           =>  $href,
                    'status'         => 1,
                    'post_type'         => 'book',
                    'description'      => 'uploaded by system',
                    'custom_message'      => 'uploaded by system',
                ];
                Book::create($book);
            } else {
                echo 'none';
            }
        });
        // dd($crawler->filter('a')->link());
    }
}
