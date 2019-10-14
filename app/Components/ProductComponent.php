<?php

namespace App\Components;


use App\Contracts\ProductContract;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\JoinClause;

class ProductComponent implements ProductContract
{

    /** @var \App\Models\Route $route */
    public $route;
    /** @var Builder $product */
    public $product;

    public function __construct(RouteComponent $route, Product $product)
    {
        $this->route = $route;
        $this->product = $product;

        $this->defaultBuild()->build();
    }

    public function getBuilder(): Builder
    {
        return $this->product;
    }

    private function build()
    {
        $this->product = $this->product->where('products.id', '=', $this->route->getRoute()->product_id);
        return $this;
    }

    private function defaultBuild()
    {
        $this->product = $this->product
            ->leftJoin('manufacturers', function ($join) {
                $join->on('manufacturers.id', '=', 'products.manufacturer_id');
            })
            ->leftJoin('prices', function (JoinClause $join) {

                $join->on('prices.product_id', '=', 'products.id');
                $join->where('prices.is_default', '=', '1');
            })
            ->leftJoin('categories', function (JoinClause $join) {
                $join->on('categories.id', '=', 'products.category_id');

            })
            ->leftJoin('currencies', function (JoinClause $join) {
                $join->on('currencies.id', '=', 'prices.currency_id');

            });
        return $this;
    }

}
