<?php

namespace App\Http\Controllers;

use App\Contracts\ProductContract;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
//    public function list($filter){
//
//    }

    public function  show(ProductContract $product){
        dd($product->getBuilder()->first());
    }
    //

}
