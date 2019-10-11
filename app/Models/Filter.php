<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 12 May 2018 06:27:07 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//ToDo Rename model or delete

/**
 * Class Filter
 *
 * @property int $id
 *
 * @property \Illuminate\Database\Eloquent\Collection $routes
 *
 * @package App\Models
 */
class Filter extends Model
{
	public $timestamps = false;

	public function routes()
	{
		return $this->hasMany(\App\Models\Route::class);
	}
}
