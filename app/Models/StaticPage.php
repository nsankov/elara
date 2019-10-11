<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StaticPage
 *
 * @property int $id
 * @property string $tpl_name
 *
 * @property \Illuminate\Database\Eloquent\Collection $routes
 *
 * @package App\Models
 */
class StaticPage extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'tpl_name'
	];

	public function routes()
	{
		return $this->hasMany(\App\Models\Route::class);
	}
}
