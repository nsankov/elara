<?php

namespace App\Http\Controllers;

use App\Contracts\StaticPageContract;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function  show(StaticPageContract $staticPage){
        dd(__METHOD__.$staticPage->getTemplateName());
    }
}
