<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 15:10:18 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Migration
 *
 * @property int $id
 * @property string $migration
 * @property int $batch
 *
 * @package App\Models
 */
class Migration extends Model
{
	public $timestamps = false;

	protected $casts = [
		'batch' => 'int'
	];

	protected $fillable = [
		'migration',
		'batch'
	];
}
