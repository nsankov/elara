<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Builder;

interface ProductCollectionContract
{
    public function getBuilder() :Builder;
}
