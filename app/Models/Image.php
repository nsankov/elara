<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 *
 * @property int $id
 * @property string $name
 * @property int $product_id
 * @property int $manufacturer_id
 * @property int $category_id
 * @property int $catalog_id
 *
 * @property \App\Models\Catalog $catalog
 * @property \App\Models\Category $category
 * @property \App\Models\Manufacturer $manufacturer
 * @property \App\Models\Product $product
 *
 * @package App\Models
 */
class Image extends Model
{
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'manufacturer_id' => 'int',
		'category_id' => 'int',
		'catalog_id' => 'int'
	];

	protected $fillable = [
		'name',
		'product_id',
		'manufacturer_id',
		'category_id',
		'catalog_id'
	];

	public function catalog()
	{
		return $this->belongsTo(\App\Models\Catalog::class);
	}

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function manufacturer()
	{
		return $this->belongsTo(\App\Models\Manufacturer::class);
	}

	public function product()
	{
		return $this->belongsTo(\App\Models\Product::class);
	}
}
