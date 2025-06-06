<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // 載入共用的 migrations
        if (is_dir(base_path('shared/database/migrations'))) {
            $this->loadMigrationsFrom(base_path('shared/database/migrations'));
        }
    }
}
