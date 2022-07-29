<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Abstraction\{ InstitutionRepositoryInterface };
use App\Repositories\Concrete\{ InstitutionRepository };

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(InstitutionRepositoryInterface::class, InstitutionRepository::class);
    }
}
