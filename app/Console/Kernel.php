<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * ✅ Custom Artisan commands
     * 🔁 কাস্টম কমান্ডগুলো এখানে রেজিস্টার করুন
     */
    protected $commands = [
        \App\Console\Commands\SuperScaffold::class,
    ];

    /**
     * 🕒 Schedule commands
     * 🔁 কোন কমান্ড কখন রান হবে তা এখানে সেট করুন
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('make:many-scaffold')->dailyAt('02:00');
    }

    /**
     * 📦 Load command files
     * 🔁 কমান্ড ফাইলগুলো লোড করার জন্য
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
