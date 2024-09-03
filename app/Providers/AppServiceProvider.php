<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Content;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            $logoPath = Content::first();
            if ($logoPath) {
                view()->share('logoPath', $logoPath->logo);
            } else {
                view()->share('logoPath', null);
            }
        } catch (\Exception $e) {
            // Log error atau tangani sesuai kebutuhan
            view()->share('logoPath', null);
        }
    }
}
