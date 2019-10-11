<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Feature
 *
 * @property int $id
 * @property string $title
 * @property string $type
 * @property string $unit
 *
 * @property \Illuminate\Database\Eloquent\Collection $catalogs
 * @property \Illuminate\Database\Eloquent\Collection $products
 *
 * @package App\Models
 */
class Feature extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'title',
		'type',
		'unit'
	];

	public function catalogs()
	{
		return $this->hasMany(\App\Models\Catalog::class);
	}

	public function products()
	{
		return $this->belongsToMany(\App\Models\Product::class, 'product_features')
					->withPivot('value');
	}
}
