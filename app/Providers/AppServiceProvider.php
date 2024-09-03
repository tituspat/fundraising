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
        $logoPath = Content::first(); // Ambil setting pertama atau sesuaikan query

        view()->share('logoPath', $logoPath->logo); // Share data ke semua view
    }
}
