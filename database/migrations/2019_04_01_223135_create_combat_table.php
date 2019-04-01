<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCombatTable extends Migration {

	public function up()
	{
		Schema::create('combat', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('character_id')->unique()->unsigned();
			$table->integer('strength_id')->unsigned();
			$table->integer('dexterity_id')->unsigned();
			$table->integer('intelligence_id')->unsigned();
			$table->integer('wisdom_id')->unsigned();
			$table->integer('luck_id')->unsigned();
			$table->integer('constitution_id')->unsigned();
			$table->integer('health_id')->unsigned();
			$table->integer('initiative_id')->unsigned();
			$table->integer('reflexe_id')->unsigned();
			$table->integer('fortitude_id')->unsigned();
			$table->integer('will_id')->unsigned();
			$table->integer('resist_damage_id')->unsigned();
			$table->integer('resist_acid_id')->unsigned();
			$table->integer('resist_fire_id')->unsigned();
			$table->integer('resist_thunder_id')->unsigned();
			$table->integer('resist_cold_id')->unsigned();
			$table->integer('resist_sound_id')->unsigned();
			$table->integer('resist_magic_id')->unsigned();
			$table->float('bba_1');
			$table->float('bba_2');
			$table->float('bba_3');
			$table->float('bba_4');
			$table->integer('melee_touch_id')->unsigned();
			$table->integer('range_touch_id')->unsigned();
			$table->integer('cmb_id')->unsigned();
			$table->integer('cmd_id')->unsigned();
			$table->integer('armor_class_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('combat');
	}
}