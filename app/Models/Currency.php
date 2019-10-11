<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 *
 * @property int $id
 * @property string $code_name
 * @property float $convert_koef
 * @property bool $is_ouput
 *
 * @property \Illuminate\Database\Eloquent\Collection $prices
 * @property \Illuminate\Database\Eloquent\Collection $shippings
 *
 * @package App\Models
 */
class Currency extends Model
{
	public $timestamps = false;

	protected $casts = [
		'convert_koef' => 'float',
		'is_ouput' => 'bool'
	];

	protected $fillable = [
		'code_name',
		'convert_koef',
		'is_ouput'
	];

	public function prices()
	{
		return $this->hasMany(\App\Models\Price::class);
	}

	public function shippings()
	{
		return $this->hasMany(\App\Models\Shipping::class);
	}
}
