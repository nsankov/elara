<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 15:10:15 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CatalogPicture
 *
 * @property int $id
 * @property int $catalog_id
 * @property string $file_name
 * @property int $width
 * @property int $height
 * @property int $sort
 *
 * @property \App\Models\Catalog $catalog
 *
 * @package App\Models
 */
class CatalogPicture extends Model
{
	public $timestamps = false;

	protected $casts = [
		'catalog_id' => 'int',
		'width' => 'int',
		'height' => 'int',
		'sort' => 'int'
	];

	protected $fillable = [
		'catalog_id',
		'file_name',
		'width',
		'height',
		'sort'
	];

	public function catalog()
	{
		return $this->belongsTo(\App\Models\Catalog::class);
	}
}
