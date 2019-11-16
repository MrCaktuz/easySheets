<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressionTable extends Migration {

	public function up()
	{
		Schema::create('progression', function(Blueprint $table) {
			$table->increments('id');
			$table->float('level');
			$table->float('experience');
			$table->enum('experience_curve', array('slow', 'medium', 'fast'));
			$table->integer('caster_level');
		});
	}

	public function down()
	{
		Schema::drop('progression');
	}
}