<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 15 Oct 2019 15:10:17 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryPicture
 *
 * @property int $id
 * @property int $category_id
 * @property string $file_name
 * @property int $width
 * @property int $height
 * @property int $sort
 *
 * @property \App\Models\Category $category
 *
 * @package App\Models
 */
class CategoryPicture extends Model
{
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'width' => 'int',
		'height' => 'int',
		'sort' => 'int'
	];

	protected $fillable = [
		'category_id',
		'file_name',
		'width',
		'height',
		'sort'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}
}
