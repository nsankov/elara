<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductFeature
 *
 * @property int $product_id
 * @property int $feature_id
 * @property string $value
 *
 * @property \App\Models\Feature $feature
 * @property \App\Models\Product $product
 *
 * @package App\Models
 */
class ProductFeature extends Model
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'feature_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'feature_id',
		'value'
	];

	public function feature()
	{
		return $this->belongsTo(\App\Models\Feature::class);
	}

	public function product()
	{
		return $this->belongsTo(\App\Models\Product::class);
	}
}
