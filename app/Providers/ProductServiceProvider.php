<?php

namespace App\Providers;

use App\Components\ProductComponent;
use App\Contracts\ProductContract;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ProductContract::class, function()  {
            $DatabaseRoute= app('DatabaseRoute');

            return new ProductComponent($DatabaseRoute, new Product());
        });

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {


    }
}
