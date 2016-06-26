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
<<<<<<< HEAD
        // Commands\Inspire::class,
=======
        \App\Console\Commands\Inspire::class,
        \App\Console\Commands\CreatePost::class,
        \App\Console\Commands\CreateMeetup::class,
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
<<<<<<< HEAD
        // $schedule->command('inspire')
        //          ->hourly();
=======
        $schedule->command('inspire')
                 ->hourly();
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
    }
}
