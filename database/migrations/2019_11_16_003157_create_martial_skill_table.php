<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMartialSkillTable extends Migration {

	public function up()
	{
		Schema::create('martial_skill', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('character_id')->unsigned();
			$table->boolean('common');
			$table->boolean('war');
			$table->boolean('exotic');
			$table->boolean('light');
			$table->boolean('heavy');
			$table->boolean('midweight');
			$table->boolean('shield');
			$table->boolean('pavois');
		});
	}

	public function down()
	{
		Schema::drop('martial_skill');
	}
}