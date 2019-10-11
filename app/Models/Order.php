<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property int $id
 * @property int $client_id
 * @property int $shipping_id
 * @property int $address_id
 * @property array $products
 * @property int $status_id
 *
 * @package App\Models
 */
class Order extends Model
{
	public $timestamps = false;

	protected $casts = [
		'client_id' => 'int',
		'shipping_id' => 'int',
		'address_id' => 'int',
		'products' => 'json',
		'status_id' => 'int'
	];

	protected $fillable = [
		'client_id',
		'shipping_id',
		'address_id',
		'products',
		'status_id'
	];
}
