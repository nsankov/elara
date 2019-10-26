<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 15:10:34 +0000.
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
