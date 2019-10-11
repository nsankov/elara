<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CatalogItem
 *
 * @property int $catalog_id
 * @property int $product_id
 *
 * @property \App\Models\Catalog $catalog
 * @property \App\Models\Product $product
 *
 * @package App\Models
 */
class CatalogItem extends Model
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'catalog_id' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
		'catalog_id',
		'product_id'
	];

	public function catalog()
	{
		return $this->belongsTo(\App\Models\Catalog::class);
	}

	public function product()
	{
		return $this->belongsTo(\App\Models\Product::class);
	}
}
