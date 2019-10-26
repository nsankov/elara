<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCategoryPicturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('category_pictures', function(Blueprint $table)
		{
			$table->foreign('category_id', 'category_pictures_categories_id_fk')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('category_pictures', function(Blueprint $table)
		{
			$table->dropForeign('category_pictures_categories_id_fk');
		});
	}

}
