<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterTable extends Migration {

	public function up()
	{
		Schema::create('character', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('name');
			$table->integer('race_id')->unsigned();
			$table->integer('predilection_class_id')->unsigned();
			$table->integer('alignment_id')->unsigned();
			$table->string('religion');
			$table->float('age');
			$table->decimal('height');
			$table->decimal('weight');
			$table->string('gender');
			$table->string('origin_location');
			$table->string('hair');
			$table->string('eyes');
			$table->string('skin');
			$table->string('strong_hand');
			$table->mediumText('personality');
			$table->mediumText('goal');
			$table->longText('background');
			$table->integer('exploration_id')->unsigned();
			$table->integer('progression_id')->unsigned();
			$table->integer('combat_id')->unsigned();
			$table->decimal('middle_load');
			$table->decimal('havy_load');
			$table->decimal('max_load');
			$table->integer('wealth_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('character');
	}
}