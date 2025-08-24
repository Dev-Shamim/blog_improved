<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FrontendServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Bind interfaces, register services
    }

    public function boot(): void
    {
        // Load routes, views, migrations
        $this->loadRoutesFrom(base_path('routes/{{ route_file }}.php'));
        $this->loadViewsFrom(resource_path('views/app/providers/frontendserviceprovider.php'), '{{ view_namespace }}');
        $this->loadMigrationsFrom(database_path('migrations/{{ migration_path }}'));
    }

}

