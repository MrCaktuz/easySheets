<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMartialSkillTable extends Migration {

	public function up()
	{
		Schema::create('martial_skill', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->integer('type')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('martial_skill');
	}
}