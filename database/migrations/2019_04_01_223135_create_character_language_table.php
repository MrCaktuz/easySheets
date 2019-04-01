<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterLanguageTable extends Migration {

	public function up()
	{
		Schema::create('character_language', function(Blueprint $table) {
			$table->integer('language_id')->unique()->unsigned();
			$table->integer('character_id')->unique()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('character_language');
	}
}