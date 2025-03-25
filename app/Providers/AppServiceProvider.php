<?php

namespace App\Providers;

use App\Interfaces\TechGadgetInterface;
use App\Repositories\TechGadgetRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TechGadgetInterface::class,TechGadgetRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
