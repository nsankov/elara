<?php

namespace App\Providers;

use App\Components\ProductFilter\ProductFilterComponent;
use App\Contracts\ProductFilterContract;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;

class ProductFilterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->app->bind(ProductFilterContract::class, function() {

            $DatabaseRoute= app('DatabaseRoute');
            return new ProductFilterComponent($DatabaseRoute,new Product());

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
