<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgressionTable extends Migration {

	public function up()
	{
		Schema::create('progression', function(Blueprint $table) {
			$table->increments('id');
			$table->float('level');
			$table->float('experience');
			$table->enum('experience_curve', array('0', '1', '2'));
		});
	}

	public function down()
	{
		Schema::drop('progression');
	}
}