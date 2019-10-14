<?php

namespace App\Http\Controllers;

use App\Contracts\StaticPageContract;

class StaticPageController extends Controller
{
    public function  show(StaticPageContract $staticPage){
        return view($staticPage->getTemplateName());
    }
}
