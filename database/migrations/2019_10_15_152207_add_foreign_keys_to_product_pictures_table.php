<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductPicturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_pictures', function(Blueprint $table)
		{
			$table->foreign('product_id', 'product_pictures_products_id_fk')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_pictures', function(Blueprint $table)
		{
			$table->dropForeign('product_pictures_products_id_fk');
		});
	}

}
