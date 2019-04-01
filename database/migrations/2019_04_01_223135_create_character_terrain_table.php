<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterTerrainTable extends Migration {

	public function up()
	{
		Schema::create('character_terrain', function(Blueprint $table) {
			$table->integer('terrain_id')->unique()->unsigned();
			$table->integer('character_id')->unique()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('character_terrain');
	}
}