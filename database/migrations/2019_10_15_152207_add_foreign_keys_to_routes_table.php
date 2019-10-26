<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('routes', function(Blueprint $table)
		{
			$table->foreign('catalog_id', 'routes_catalogs_id_fk')->references('id')->on('catalogs')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('category_id', 'routes_categories_id_fk')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('product_id', 'routes_products_id_fk')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('static_page_id', 'routes_static_pages_id_fk')->references('id')->on('static_pages')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('routes', function(Blueprint $table)
		{
			$table->dropForeign('routes_catalogs_id_fk');
			$table->dropForeign('routes_categories_id_fk');
			$table->dropForeign('routes_products_id_fk');
			$table->dropForeign('routes_static_pages_id_fk');
		});
	}

}
