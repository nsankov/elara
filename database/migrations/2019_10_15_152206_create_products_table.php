<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('category_id')->nullable()->index('products_categories_id_fk');
			$table->integer('manufacturer_id')->nullable()->index('products_manufacturers_id_fk');
			$table->string('name')->nullable();
			$table->text('description', 65535)->nullable();
			$table->integer('sku')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
