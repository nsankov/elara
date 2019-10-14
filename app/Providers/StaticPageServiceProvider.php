<?php

namespace App\Providers;

use App\Components\StaticPageComponent;
use App\Contracts\StaticPageContract;
use App\Models\StaticPage;
use Illuminate\Support\ServiceProvider;

class StaticPageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(StaticPageContract::class, function()  {
            $DatabaseRoute = app('DatabaseRoute');
            return new StaticPageComponent($DatabaseRoute, new StaticPage());
        });
    }
}
