<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Catalog
 *
 * @property int $id
 * @property int $category_id
 * @property float $price_from
 * @property float $price_to
 * @property int $manufacturer_id
 * @property int $feature_id
 *
 * @property \App\Models\Category $category
 * @property \App\Models\Feature $feature
 * @property \App\Models\Manufacturer $manufacturer
 * @property \App\Models\CatalogItem $catalog_item
 * @property \Illuminate\Database\Eloquent\Collection $images
 * @property \Illuminate\Database\Eloquent\Collection $routes
 *
 * @package App\Models
 */
class Catalog extends Model
{
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'price_from' => 'float',
		'price_to' => 'float',
		'manufacturer_id' => 'int',
		'feature_id' => 'int'
	];

	protected $fillable = [
		'category_id',
		'price_from',
		'price_to',
		'manufacturer_id',
		'feature_id'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function feature()
	{
		return $this->belongsTo(\App\Models\Feature::class);
	}

	public function manufacturer()
	{
		return $this->hasOne(\App\Models\Manufacturer::class, 'id', 'manufacturer_id');
	}

	public function catalog_item()
	{
		return $this->hasOne(\App\Models\CatalogItem::class);
	}

	public function images()
	{
		return $this->hasMany(\App\Models\Image::class);
	}

	public function routes()
	{
		return $this->hasMany(\App\Models\Route::class);
	}
}
