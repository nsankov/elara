<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 15:10:18 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Manufacturer
 *
 * @property int $id
 * @property string $title
 * @property string $description
 *
 * @property \Illuminate\Database\Eloquent\Collection $products
 *
 * @package App\Models
 */
class Manufacturer extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'title',
		'description'
	];

	public function products()
	{
		return $this->hasMany(\App\Models\Product::class);
	}
}
