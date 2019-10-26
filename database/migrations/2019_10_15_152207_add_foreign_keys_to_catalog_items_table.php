<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCatalogItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('catalog_items', function(Blueprint $table)
		{
			$table->foreign('catalog_id', 'catalog_items_catalogs_id_fk')->references('id')->on('catalogs')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('product_id', 'catalog_items_products_id_fk')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('catalog_items', function(Blueprint $table)
		{
			$table->dropForeign('catalog_items_catalogs_id_fk');
			$table->dropForeign('catalog_items_products_id_fk');
		});
	}

}
