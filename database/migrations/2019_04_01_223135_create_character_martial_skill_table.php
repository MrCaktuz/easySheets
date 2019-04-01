<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterMartialSkillTable extends Migration {

	public function up()
	{
		Schema::create('character_martial_skill', function(Blueprint $table) {
			$table->integer('martial_skill_id')->unique()->unsigned();
			$table->integer('character_id')->unique()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('character_martial_skill');
	}
}