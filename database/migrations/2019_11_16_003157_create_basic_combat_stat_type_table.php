<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicCombatStatTypeTable extends Migration {

	public function up()
	{
		Schema::create('basic_combat_stat_type', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
		});
	}

	public function down()
	{
		Schema::drop('basic_combat_stat_type');
	}
}