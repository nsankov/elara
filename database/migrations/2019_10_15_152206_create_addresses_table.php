<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('client_id')->nullable()->index('addresses_clients_id_fk');
			$table->string('city')->nullable();
			$table->string('street')->nullable();
			$table->string('house_no')->nullable();
			$table->integer('entrance');
			$table->string('doorphone')->nullable();
			$table->integer('floor')->nullable();
			$table->boolean('is_default')->nullable();
			$table->string('extra')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('addresses');
	}

}
