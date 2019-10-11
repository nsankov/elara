<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Builder;

interface ProductFilterContract
{
    public function getBuilder(): Builder;
    public function getForm(): FilterFormContract; //->getCategories()[0]->getFeatures()[0]->getQty():int
}

