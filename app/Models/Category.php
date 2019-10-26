<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 15:10:16 +0000.
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
 * @property \Illuminate\Database\Eloquent\Collection $category_pictures
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

	public function category_pictures()
	{
		return $this->hasMany(\App\Models\CategoryPicture::class);
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
