<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 15:10:20 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductPicture
 *
 * @property int $id
 * @property int $product_id
 * @property string $file_name
 * @property int $width
 * @property int $height
 * @property int $sort
 *
 * @property \App\Models\Product $product
 *
 * @package App\Models
 */
class ProductPicture extends Model
{
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'width' => 'int',
		'height' => 'int',
		'sort' => 'int'
	];

	protected $fillable = [
		'product_id',
		'file_name',
		'width',
		'height',
		'sort'
	];

	public function product()
	{
		return $this->belongsTo(\App\Models\Product::class);
	}
}
