<?php

namespace App\Components;

use App\Contracts\RouteContract;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteComponent implements RouteContract
{

    const DEFAULT_ACTION = 'show';
    const CONTROLLER_POSTFIX = 'Controller';

    /** @var \App\Models\Route $route */
    public $route;



    public function __construct(Request $request)
    {
        //ToDo Redis cache
        $this->route = \App\Models\Route::where(['path' => $request->path()])->first();

    }

    public function getEntityName() :string{
        return $this->route->page_type;
    }
    public function getController() :string{
        //ToDo camel_case
        return ucfirst(($this->route->page_type)) .  self::CONTROLLER_POSTFIX;
    }
    public function getAction() :string{
        return self::DEFAULT_ACTION;
    }


}
