<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryPicturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category_pictures', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('category_id')->nullable()->index();
			$table->char('file_name', 64)->nullable();
			$table->integer('width')->nullable();
			$table->integer('height')->nullable();
			$table->integer('sort')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category_pictures');
	}

}
