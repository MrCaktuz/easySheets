<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterSkillTable extends Migration {

	public function up()
	{
		Schema::create('character_skill', function(Blueprint $table) {
			$table->integer('skill_id')->unique()->unsigned();
			$table->integer('character_id')->unique()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('character_skill');
	}
}