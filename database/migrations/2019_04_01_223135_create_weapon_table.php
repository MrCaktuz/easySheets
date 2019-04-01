<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWeaponTable extends Migration {

	public function up()
	{
		Schema::create('weapon', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('character_id')->unsigned();
			$table->string('name');
			$table->float('alteration_bonus');
			$table->string('critical');
			$table->float('range');
			$table->integer('type');
			$table->text('description');
			$table->integer('touch_bonus_id')->unsigned();
			$table->integer('damage_bonus_id')->unsigned();
			$table->string('damage_dice');
			$table->boolean('equiped');
		});
	}

	public function down()
	{
		Schema::drop('weapon');
	}
}