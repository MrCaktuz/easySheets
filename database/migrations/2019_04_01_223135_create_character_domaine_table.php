<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterDomaineTable extends Migration {

	public function up()
	{
		Schema::create('character_domaine', function(Blueprint $table) {
			$table->integer('domain_id')->unique()->unsigned();
			$table->integer('character_id')->unique()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('character_domaine');
	}
}