<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Route
 *
 * @property int $id
 * @property string $page_type
 * @property int $category_id
 * @property int $product_id
 * @property int $static_page_id
 * @property int $catalog_id
 * @property string $path
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property int $manufacturer_id
 *
 * @property \App\Models\Catalog $catalog
 * @property \App\Models\Category $category
 * @property \App\Models\Product $product
 * @property \App\Models\StaticPage $static_page
 * @property \App\Models\Manufacturer $manufacturer
 *
 * @package App\Models
 */
class Route extends Model
{
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'product_id' => 'int',
		'static_page_id' => 'int',
		'catalog_id' => 'int',
		'manufacturer_id' => 'int'
	];

	protected $fillable = [
		'page_type',
		'category_id',
		'product_id',
		'static_page_id',
		'catalog_id',
		'path',
		'title',
		'keywords',
		'description',
		'manufacturer_id'
	];

	public function catalog()
	{
		return $this->belongsTo(\App\Models\Catalog::class);
	}

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function product()
	{
		return $this->belongsTo(\App\Models\Product::class, 'manufacturer_id', 'manufacturer_id');
	}

	public function static_page()
	{
		return $this->belongsTo(\App\Models\StaticPage::class);
	}

	public function manufacturer()
	{
		return $this->hasOne(\App\Models\Manufacturer::class, 'id', 'manufacturer_id');
	}
}
