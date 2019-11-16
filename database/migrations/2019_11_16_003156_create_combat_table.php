<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCombatTable extends Migration {

	public function up()
	{
		Schema::create('combat', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('character_id')->unique()->unsigned();
			$table->float('bba_1');
			$table->float('bba_2');
			$table->float('bba_3');
			$table->float('bba_4');
			$table->integer('armor_class_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('combat');
	}
}