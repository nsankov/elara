<?php

namespace App\Http\Controllers;

use App\Contracts\ProductCollectionContract;
use App\Contracts\ProductFilterContract;
use App\Models\Route;


class CategoryController extends Controller
{
    public function  show(Route $route, ProductCollectionContract $category, ProductFilterContract $filter){
        $formData = $filter->getForm();
        $products = $category->getBuilder()->get();
dd($products);
     // dd($formData);
       /**Bug no id and title array:3 [▼
        "id" => null
        "title" => null
        "count" => 1
        ] */
        return view('catalog', compact('formData', 'products', 'route'));
    }
    //
}
