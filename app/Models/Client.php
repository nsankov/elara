<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 15:10:17 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $surname
 * @property string $email
 * @property string $phone
 *
 * @property \Illuminate\Database\Eloquent\Collection $addresses
 *
 * @package App\Models
 */
class Client extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'firstname',
		'lastname',
		'surname',
		'email',
		'phone'
	];

	public function addresses()
	{
		return $this->hasMany(\App\Models\Address::class);
	}
}
