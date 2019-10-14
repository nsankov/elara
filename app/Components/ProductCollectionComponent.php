<?php

namespace App\Components;

use App\Contracts\ProductCollectionContract;
use App\Contracts\ProductFilterContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\JoinClause;

class ProductCollectionComponent implements ProductCollectionContract
{

    /** @var \App\Models\Catalog $catalog */
    public $catalog;
    /** @var \App\Models\Route $route */
    public $route;
    /** @var Builder $product */
    public $product;

    public function __construct(ProductFilterContract $productFilter)
    {
        /**
         * из фильтра нужно:
         * - список всех характеристик(для формы) с колличеством товаров
         * - Текущий фильтр для фильтрации товаров
         *
         * их перемножение и есть форма с отмеченными значениями
         * а применение фильтра для коллекции товаров - вывод товаров
         *
         * по факту Route $route, Catalog $catalog, в данном классе не нужны
         * тк их замещает продукт филтр который
         */

        $this->productFilter = $productFilter;
//        dd($this->product->get());
    }

    public function getBuilder()
    {
        $this->build();
        return $this->productFilter->getBuilder();
    }

    private function build() {
        $this->productFilter->getBuilder()
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

    function getCallsFromUserById(){

    }

}
