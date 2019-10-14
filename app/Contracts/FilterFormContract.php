<?php

namespace App\Contracts;

interface FilterFormContract
{
    //ToDo make FilterFormClass

    public function getCategories() : CategoryFilterContract;//->getFeatures():arrayObj->getQty():int
}
