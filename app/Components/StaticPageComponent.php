<?php

namespace App\Components;

use App\Contracts\StaticPageContract;
use App\Models\StaticPage;


class StaticPageComponent implements StaticPageContract
{

    /** @var \App\Models\Route $route */
    public $route;
    /** @var StaticPage page */
    public $page;
    public $tpl_path;

    public function __construct(RouteComponent $route, StaticPage $page)
    {
        $this->route = $route->getRoute();
        $this->page = $page;
        $this->build();
    }

    public function getTemplateName(): string
    {
        return $this->tpl_path;
    }

    /**
     * @throws \Exception
     */
    private function build()
    {
        if (is_null($this->route->static_page_id)) throw new \Exception("No page id");
        $this->page = $this->page->find($this->route->static_page_id);
        $dir = config('app.static_page_dir');

        if (is_null($this->page)) throw new \Exception("No page data");

        $this->tpl_path ="$dir/{$this->page->tpl_name}";
    }


}
