<?php

namespace App\Console\Commands;

use App\Mail\TestMail as MailTestMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class testmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'testmail';

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
        Mail::to('monzurul.ce.buet@gmail.com')->send(new MailTestMail());
    }
}