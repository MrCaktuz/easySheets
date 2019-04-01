<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbilityTable extends Migration {

	public function up()
	{
		Schema::create('ability', function(Blueprint $table) {
			$table->increments('id');
		});
	}

	public function down()
	{
		Schema::drop('ability');
	}
}