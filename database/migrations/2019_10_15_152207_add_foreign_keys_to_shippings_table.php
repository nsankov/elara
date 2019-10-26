<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToShippingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('shippings', function(Blueprint $table)
		{
			$table->foreign('currency_id', 'shippings_currencies_id_fk')->references('id')->on('currencies')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('shippings', function(Blueprint $table)
		{
			$table->dropForeign('shippings_currencies_id_fk');
		});
	}

}
