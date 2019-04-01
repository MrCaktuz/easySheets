<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMagicStatTable extends Migration {

	public function up()
	{
		Schema::create('magic_stat', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('character_id')->unsigned();
			$table->integer('level')->unsigned();
			$table->integer('known_id')->unsigned();
			$table->integer('daily_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('magic_stat');
	}
}