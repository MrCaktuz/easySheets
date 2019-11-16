<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration {

	public function up()
	{
		Schema::create('item', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('description');
			$table->integer('item_type_id')->unsigned()->nullable();
			$table->integer('character_id')->unsigned();
			$table->decimal('weight');
			$table->decimal('price');
			$table->float('armor_class');
			$table->float('skill_penalty');
			$table->float('max_dexterity');
			$table->float('spell_penalty');
			$table->boolean('equiped');
			$table->decimal('count');
		});
	}

	public function down()
	{
		Schema::drop('item');
	}
}