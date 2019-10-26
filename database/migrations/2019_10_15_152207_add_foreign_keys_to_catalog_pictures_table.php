<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCatalogPicturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('catalog_pictures', function(Blueprint $table)
		{
			$table->foreign('catalog_id', 'catalog_pictures_catalogs_id_fk')->references('id')->on('catalogs')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('catalog_pictures', function(Blueprint $table)
		{
			$table->dropForeign('catalog_pictures_catalogs_id_fk');
		});
	}

}
