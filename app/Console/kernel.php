<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        // Register your commands here
        \App\Console\Commands\GenerateWeeklyUserReport::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        // Schedule your commands here
        $schedule->command('report:weekly-users')->weeklyOn(1, '8:00');
    }

    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
