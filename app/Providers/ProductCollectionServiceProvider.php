<?php

namespace App\Providers;

use App\Components\ProductCollectionComponent;
use App\Contracts\ProductCollectionContract;
use App\Contracts\ProductFilterContract;
use Illuminate\Support\ServiceProvider;

class ProductCollectionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ProductCollectionContract::class, function()  {
            $filter =$this->app->make(ProductFilterContract::class);// check
            return new ProductCollectionComponent($filter);
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
