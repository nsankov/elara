<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductFeaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_features', function(Blueprint $table)
		{
			$table->foreign('feature_id', 'product_features_features_id_fk')->references('id')->on('features')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('product_id', 'product_features_products_id_fk')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_features', function(Blueprint $table)
		{
			$table->dropForeign('product_features_features_id_fk');
			$table->dropForeign('product_features_products_id_fk');
		});
	}

}
