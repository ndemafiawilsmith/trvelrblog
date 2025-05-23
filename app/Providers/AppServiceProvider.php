<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\HttpClientService;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->singleton(HttpClientService::class, function ($app) {
            return new HttpClientService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Blade::component('livewire.layouts.app', 'layouts.app');
    }
}
