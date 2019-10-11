<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Price
 *
 * @property int $id
 * @property int $product_id
 * @property int $currency_id
 * @property float $price_value
 * @property bool $is_default
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Currency $currency
 * @property \App\Models\Product $product
 *
 * @package App\Models
 */
class Price extends Model
{
	protected $casts = [
		'product_id' => 'int',
		'currency_id' => 'int',
		'price_value' => 'float',
		'is_default' => 'bool'
	];

	protected $fillable = [
		'product_id',
		'currency_id',
		'price_value',
		'is_default'
	];

	public function currency()
	{
		return $this->belongsTo(\App\Models\Currency::class);
	}

	public function product()
	{
		return $this->belongsTo(\App\Models\Product::class);
	}
}
