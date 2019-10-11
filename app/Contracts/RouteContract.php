<?php

namespace App\Contracts;

interface RouteContract
{

    public function getEntityName() :string;
    public function getController() :string;
    public function getAction() :string;

}