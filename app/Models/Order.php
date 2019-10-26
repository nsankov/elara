<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 15:10:19 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property int $id
 * @property int $client_id
 * @property array $data
 * @property int $status_id
 *
 * @package App\Models
 */
class Order extends Model
{
	public $timestamps = false;

	protected $casts = [
		'client_id' => 'int',
		'data' => 'json',
		'status_id' => 'int'
	];

	protected $fillable = [
		'client_id',
		'data',
		'status_id'
	];
}
