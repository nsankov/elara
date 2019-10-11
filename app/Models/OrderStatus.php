<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderStatus
 *
 * @property int $id
 * @property string $title
 *
 * @package App\Models
 */
class OrderStatus extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'title'
	];
}
