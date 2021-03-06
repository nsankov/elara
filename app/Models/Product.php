<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 15:10:21 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property int $id
 * @property int $category_id
 * @property int $manufacturer_id
 * @property string $name
 * @property string $description
 * @property int $sku
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Category $category
 * @property \App\Models\Manufacturer $manufacturer
 * @property \App\Models\CatalogItem $catalog_item
 * @property \Illuminate\Database\Eloquent\Collection $prices
 * @property \Illuminate\Database\Eloquent\Collection $features
 * @property \Illuminate\Database\Eloquent\Collection $product_pictures
 * @property \Illuminate\Database\Eloquent\Collection $routes
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $casts = [
		'category_id' => 'int',
		'manufacturer_id' => 'int',
		'sku' => 'int'
	];

	protected $fillable = [
		'category_id',
		'manufacturer_id',
		'name',
		'description',
		'sku'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function manufacturer()
	{
		return $this->belongsTo(\App\Models\Manufacturer::class);
	}

	public function catalog_item()
	{
		return $this->hasOne(\App\Models\CatalogItem::class);
	}

	public function prices()
	{
		return $this->hasMany(\App\Models\Price::class);
	}

	public function features()
	{
		return $this->belongsToMany(\App\Models\Feature::class, 'product_features')
					->withPivot('value');
	}

	public function product_pictures()
	{
		return $this->hasMany(\App\Models\ProductPicture::class);
	}

	public function routes()
	{
		return $this->hasMany(\App\Models\Route::class);
	}
}
