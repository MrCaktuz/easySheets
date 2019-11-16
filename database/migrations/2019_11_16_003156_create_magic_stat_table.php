<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagicStatTable extends Migration {

	public function up()
	{
		Schema::create('magic_stat', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('character_id')->unsigned();
			$table->integer('level')->unsigned();
			$table->integer('main_attribute_type_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('magic_stat');
	}
}