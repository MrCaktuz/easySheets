<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillTable extends Migration {

	public function up()
	{
		Schema::create('skill', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->text('description');
			$table->integer('level')->unsigned();
			$table->integer('type_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('skill');
	}
}