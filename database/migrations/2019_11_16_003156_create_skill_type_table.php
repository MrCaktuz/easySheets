<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillTypeTable extends Migration {

	public function up()
	{
		Schema::create('skill_type', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->boolean('armor_penalty');
			$table->integer('attribute_type_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('skill_type');
	}
}