<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellTable extends Migration {

	public function up()
	{
		Schema::create('spell', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('character_id')->unsigned();
			$table->string('name');
			$table->mediumText('description');
			$table->integer('level');
			$table->string('school');
			$table->string('casting_time');
			$table->decimal('range');
			$table->string('saving_throw');
			$table->string('compound');
			$table->boolean('magic_resist');
			$table->string('duration');
			$table->string('zone');
		});
	}

	public function down()
	{
		Schema::drop('spell');
	}
}