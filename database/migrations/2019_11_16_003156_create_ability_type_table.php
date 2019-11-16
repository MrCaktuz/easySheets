<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbilityTypeTable extends Migration {

	public function up()
	{
		Schema::create('ability_type', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
		});
	}

	public function down()
	{
		Schema::drop('ability_type');
	}
}