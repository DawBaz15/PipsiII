<?php

namespace App\Console;

<<<<<<< HEAD
use App\Http\Controllers\GameController;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            Log::info('Log test');
        })->dailyAt('18:22')->timezone('Europe/Warsaw');
    }

    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
=======
Artisan::command('reset', function () {
    GameController::reset();
})->purpose('Get a new puzzle for all users')->hourly();
>>>>>>> e0e3a42912689183e618086fb89ad648faedfd9c
