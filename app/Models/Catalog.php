<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 15:10:16 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Catalog
 *
 * @property int $id
 * @property array $filter_data
 *
 * @property \App\Models\CatalogItem $catalog_item
 * @property \Illuminate\Database\Eloquent\Collection $catalog_pictures
 * @property \Illuminate\Database\Eloquent\Collection $routes
 *
 * @package App\Models
 */
class Catalog extends Model
{
	public $timestamps = false;

	protected $casts = [
		'filter_data' => 'json'
	];

	protected $fillable = [
		'filter_data'
	];

	public function catalog_item()
	{
		return $this->hasOne(\App\Models\CatalogItem::class);
	}

	public function catalog_pictures()
	{
		return $this->hasMany(\App\Models\CatalogPicture::class);
	}

	public function routes()
	{
		return $this->hasMany(\App\Models\Route::class);
	}
}
