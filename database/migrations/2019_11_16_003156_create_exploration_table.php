<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExplorationTable extends Migration {

	public function up()
	{
		Schema::create('exploration', function(Blueprint $table) {
			$table->increments('id');
			$table->string('walking');
			$table->string('swimming');
			$table->string('flying');
			$table->string('night_vision');
			$table->string('dark-vision');
		});
	}

	public function down()
	{
		Schema::drop('exploration');
	}
}