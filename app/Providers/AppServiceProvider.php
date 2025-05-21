<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\CurrencyConverterInterface;
use App\Services\BasicCurrencyConverter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CurrencyConverterInterface::class, BasicCurrencyConverter::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
