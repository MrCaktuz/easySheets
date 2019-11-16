<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicCombatStatTable extends Migration {

	public function up()
	{
		Schema::create('basic_combat_stat', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('combat_id')->unsigned();
			$table->integer('basic_combat_stat_type_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('basic_combat_stat');
	}
}