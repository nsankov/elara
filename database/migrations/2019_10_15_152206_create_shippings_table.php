<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShippingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shippings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('currency_id')->nullable()->index('shippings_currencies_id_fk');
			$table->integer('price')->nullable();
			$table->string('title')->nullable();
			$table->integer('period_from')->nullable();
			$table->integer('period_to')->nullable();
			$table->enum('period_unit', array('hours','days','months'))->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shippings');
	}

}
