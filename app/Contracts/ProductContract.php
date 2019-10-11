<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Builder;

interface ProductContract
{
    public function getBuilder() :Builder;
}
