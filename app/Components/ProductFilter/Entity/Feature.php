<?php

namespace App\Components\ProductFilter\Entity;

use \Illuminate\Database\Eloquent\Builder;
use App\Models\Route;

class Feature
{

    /** @var Builder $product
     */
    public $product;

    public function __construct(Route $route, Builder $product)
    {
        $this->route = $route;
        $this->product = $product;
    }

    public function process()
    {
        if ($ids = $this->getIds()) {
            $this->product = $this->product->leftJoin('product_features', function ($join) {
                $join->on('product_features.product_id', '=', 'products.id');
            })->whereIn('feature_id', $ids);
        }
        return $this->product;
    }

    private function getIds()
    {
        return [1,2,3];
    }
}
