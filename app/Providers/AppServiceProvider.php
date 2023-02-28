<?php

namespace App\Providers;

use App\Models\Retorno;
use App\Observers\RetornoObserver;
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
        Retorno::observe(RetornoObserver::class);
    }
}
