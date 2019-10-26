<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 15:10:19 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderStatus
 *
 * @property int $id
 * @property string $title
 * @property int $is_complete
 *
 * @package App\Models
 */
class OrderStatus extends Model
{
	public $timestamps = false;

	protected $casts = [
		'is_complete' => 'int'
	];

	protected $fillable = [
		'title',
		'is_complete'
	];
}
