<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterSchoolTable extends Migration {

	public function up()
	{
		Schema::create('character_school', function(Blueprint $table) {
			$table->integer('school_id')->unique()->unsigned();
			$table->integer('character_id')->unique()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('character_school');
	}
}