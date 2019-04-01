<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterClassTable extends Migration {

	public function up()
	{
		Schema::create('character_class', function(Blueprint $table) {
			$table->integer('class_id')->unique()->unsigned();
			$table->integer('character_id')->unique()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('character_class');
	}
}