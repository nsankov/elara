<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Sep 2018 17:04:46 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 *
 * @property int $id
 * @property int $client_id
 * @property string $city
 * @property string $street
 * @property string $house_no
 * @property int $entrance
 * @property string $doorphone
 * @property int $floor
 * @property bool $is_default
 * @property string $extra
 *
 * @property \App\Models\Client $client
 *
 * @package App\Models
 */
class Address extends Model
{
	public $timestamps = false;

	protected $casts = [
		'client_id' => 'int',
		'entrance' => 'int',
		'floor' => 'int',
		'is_default' => 'bool'
	];

	protected $fillable = [
		'client_id',
		'city',
		'street',
		'house_no',
		'entrance',
		'doorphone',
		'floor',
		'is_default',
		'extra'
	];

	public function client()
	{
		return $this->belongsTo(\App\Models\Client::class);
	}
}
