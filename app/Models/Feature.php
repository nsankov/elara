<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 15:10:18 +0000.
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

	public function products()
	{
		return $this->belongsToMany(\App\Models\Product::class, 'product_features')
					->withPivot('value');
	}
}
