<?php

namespace App\Contracts;

interface ProductFilterContract
{
    public function getBuilder();
    public function getForm(); //->getCategories()[0]->getFeatures()[0]->getQty():int
}

