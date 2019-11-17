<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterCharacterClassTable extends Migration {

	public function up()
	{
		Schema::create('character_character_class', function(Blueprint $table) {
			$table->integer('character_class_id')->unique()->unsigned();
			$table->integer('character_id')->unique()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('character_character_class');
	}
}