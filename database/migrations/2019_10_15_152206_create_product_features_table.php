<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductFeaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_features', function(Blueprint $table)
		{
			$table->integer('product_id')->nullable()->index('product_features_products_id_fk');
			$table->integer('feature_id')->nullable()->index('product_features_features_id_fk');
			$table->string('value')->comment('Todo value type int string collor or not?');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_features');
	}

}
