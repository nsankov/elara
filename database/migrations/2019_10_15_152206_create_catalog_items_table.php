<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatalogItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('catalog_items', function(Blueprint $table)
		{
			$table->integer('catalog_id')->nullable()->index('catalog_items_catalogs_id_fk');
			$table->integer('product_id')->nullable()->index('catalog_items_products_id_fk');
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
		Schema::drop('catalog_items');
	}

}
