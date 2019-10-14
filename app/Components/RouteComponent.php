<?php

namespace App\Components;

use App\Contracts\RouteContract;
use App\Models\Route;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RouteComponent implements RouteContract
{

    const DEFAULT_ACTION = 'show';
    const CONTROLLER_POSTFIX = 'Controller';

    /** @var \App\Models\Route $route */
    public $route;


    /**
     * RouteComponent constructor.
     * @param Request $request
     * @throws \Exception
     */
    public function __construct(Request $request)
    {
        //ToDo Redis cache
        $this->route = Route::where(['path' => $request->path()])->leftJoin('catalogs', function (JoinClause $join) {
            $join->on('routes.catalog_id', '=', 'catalogs.id');
        })->first();
        if (is_null($this->route)) {
            throw new \Exception("Not Found route");
        }

    }

    public function getEntityName() :string{
        return $this->route->page_type;
    }
    public function getController() :string{
        return ucfirst(Str::camel($this->route->page_type)) .  self::CONTROLLER_POSTFIX;
    }
    public function getAction() :string{
        return self::DEFAULT_ACTION;
    }

    public function getRoute() :Route{
        return $this->route;
    }


}
