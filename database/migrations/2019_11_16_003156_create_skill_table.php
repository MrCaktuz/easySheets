<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillTable extends Migration {

	public function up()
	{
		Schema::create('skill', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('character_id')->unsigned();
			$table->integer('level')->unsigned();
			$table->integer('skill_type_id')->unsigned();
			$table->binary('class_skill');
		});
	}

	public function down()
	{
		Schema::drop('skill');
	}
}