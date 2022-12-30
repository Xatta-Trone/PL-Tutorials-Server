<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('books:scrapp')->daily();user:unban
        $schedule->command('quote:daily')->daily()->withoutOverlapping()->runInBackground();
        $schedule->command('backup:run --only-db')->daily()->withoutOverlapping()->runInBackground();
        $schedule->command('backup:clean')->dailyAt("03:00")->withoutOverlapping()->runInBackground();
        // $schedule->command('user:unban')->hourly()->withoutOverlapping()->runInBackground();

        $schedule->command('user:unban')->dailyAt("00:15")->withoutOverlapping()->runInBackground();
        $schedule->command('user:activityCheck')->hourly()->withoutOverlapping()->runInBackground();
        $schedule->command('cleanup:tokens')->daily()->withoutOverlapping()->runInBackground();


    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
