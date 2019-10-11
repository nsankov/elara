<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
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
 * @property \App\Models\Catalog $catalog
 * @property \App\Models\Route $route
 * @property \Illuminate\Database\Eloquent\Collection $catalogs
 * @property \Illuminate\Database\Eloquent\Collection $images
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

	public function catalog()
	{
		return $this->belongsTo(\App\Models\Catalog::class, 'id', 'manufacturer_id');
	}

	public function route()
	{
		return $this->belongsTo(\App\Models\Route::class, 'id', 'manufacturer_id');
	}

	public function catalogs()
	{
		return $this->hasMany(\App\Models\Catalog::class);
	}

	public function images()
	{
		return $this->hasMany(\App\Models\Image::class);
	}

	public function products()
	{
		return $this->hasMany(\App\Models\Product::class);
	}
}
