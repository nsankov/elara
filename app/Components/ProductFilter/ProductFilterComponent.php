<?php

namespace App\Components\ProductFilter;


use App\Components\RouteComponent;
use App\Contracts\ProductFilterContract;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;

class ProductFilterComponent implements ProductFilterContract
{
    /** @var \App\Models\Catalog $catalog */
    public $catalog;
    /** @var \App\Models\Route $route */
    public $route;
    /** @var Builder $product */
    public $product;

    /** @var Builder $product */
    public $productFilter;
    /** @var Builder $product */
    public $formData;

    /** @var UserFilter */
    public $userFilter;

    public function __construct(RouteComponent $route, Product $product)
    {
        $this->route = $route;
        $this->product = $product->select();
        $this->build();
    }

    private function build()
    {
        $namespace = "\\App\\Components\\ProductFilter\\Entity\\";

        foreach (['Category', 'Manufacturer', 'Feature', ] as $name) {
            $className = $namespace . $name;
            $this->product = (new $className($this->route->getRoute(), $this->product))->process();
        }
    }

    public function getForm()
    {
        return $this->formData;
    }

    /**
     * @return Product|Builder
     */
    public function getBuilder()
    {
        return $this->product;
    }
}
