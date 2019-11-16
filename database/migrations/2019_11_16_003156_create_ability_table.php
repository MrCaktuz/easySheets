<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbilityTable extends Migration {

	public function up()
	{
		Schema::create('ability', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('character_id')->unsigned();
			$table->string('name');
			$table->mediumText('description');
			$table->integer('ability_type_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('ability');
	}
}