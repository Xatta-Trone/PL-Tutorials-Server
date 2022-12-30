<?php

namespace App\Console\Commands;

use App\Models\Admin\Admin;
use App\Models\User\User;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CleanupAccessToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cleanup:tokens';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cleans the personal access token which is expired.';

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
        DB::table('personal_access_tokens')->where('tokenable_type', get_class(new Admin()))->where('last_used_at', '<', Carbon::now()->subDays())->delete();
        DB::table('personal_access_tokens')->where('tokenable_type', get_class(new User()))->where('last_used_at', '<', Carbon::now()->subYear())->delete();
    }
}
