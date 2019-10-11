<?php

namespace App\Http\Controllers;


use App\Contracts\ProductCollectionContract;


class CatalogController extends Controller
{
    public function show(ProductCollectionContract $catalog){
        dd($catalog->getBuilder()->get());
        //add build featuresComponent
    }
    //
}
