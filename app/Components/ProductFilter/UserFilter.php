<?php

namespace App\Components\ProductFilter;

use Illuminate\Http\Request;

/**
 *
 * Class UserFilter
 * @package App\Components\Yosya
 */
class UserFilter
{
    const FILTER_KEY = 'filter';
    const IS_SEARCH_KEY = 'search';
    const CATEGORIES_KEY = 'categories';
    const FEATURES_KEY = 'features';
    const MANUFACTURERS_KEY = 'manufacturers';
    /** @var array @var */
    private $filerData;


    public function __construct(Request $request)
    {
        $this->filerData = $request->get(self::FILTER_KEY);
    }

    /**
     * @return array
     */
    public function getFilerData()    {
        return $this->filerData;
    }

    /**
     * @return array
     */
    public function getCategories(): array
    {
        return $this->filerData[self::CATEGORIES_KEY] ?: [];
    }

    /**
     * @return array
     */
    public function getFeatures(): array
    {
        return $this->filerData[self::FEATURES_KEY] ?: [];
    }

    /**
     * @return array
     */
    public function getManufacturers(): array
    {
        return $this->filerData[self::MANUFACTURERS_KEY] ?: [];
    }

    /**
     * @return bool
     */
    public function isSearch(): bool
    {
        return $this->filerData[self::FILTER_KEY] ? $this->filerData[self::FILTER_KEY][self::IS_SEARCH_KEY]: false;
    }










}
