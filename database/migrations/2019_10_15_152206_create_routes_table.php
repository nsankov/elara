<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('routes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->enum('page_type', array('category','product','catalog','static_page','static'))->nullable()->index();
			$table->integer('category_id')->nullable()->index('routes_categories_id_fk');
			$table->integer('product_id')->nullable()->index('routes_products_id_fk');
			$table->integer('static_page_id')->nullable()->index('routes_static_pages_id_fk');
			$table->integer('catalog_id')->nullable()->index('routes_catalogs_id_fk');
			$table->char('path')->nullable()->index();
			$table->string('title')->nullable();
			$table->string('keywords')->nullable();
			$table->string('description', 1000)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('routes');
	}

}
