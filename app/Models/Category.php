<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $tree_path
 *
 * @property \Illuminate\Database\Eloquent\Collection $catalogs
 * @property \Illuminate\Database\Eloquent\Collection $images
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property \Illuminate\Database\Eloquent\Collection $routes
 *
 * @package App\Models
 */
class Category extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'title',
		'description',
		'tree_path'
	];

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

	public function routes()
	{
		return $this->hasMany(\App\Models\Route::class);
	}
}
