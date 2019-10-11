<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Shipping
 *
 * @property int $id
 * @property int $currency_id
 * @property int $price
 * @property string $title
 * @property int $period_from
 * @property int $period_to
 * @property string $period_unit
 *
 * @property \App\Models\Currency $currency
 *
 * @package App\Models
 */
class Shipping extends Model
{
	public $timestamps = false;

	protected $casts = [
		'currency_id' => 'int',
		'price' => 'int',
		'period_from' => 'int',
		'period_to' => 'int'
	];

	protected $fillable = [
		'currency_id',
		'price',
		'title',
		'period_from',
		'period_to',
		'period_unit'
	];

	public function currency()
	{
		return $this->belongsTo(\App\Models\Currency::class);
	}
}
