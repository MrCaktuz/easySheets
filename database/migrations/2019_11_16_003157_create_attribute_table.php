<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeTable extends Migration {

	public function up()
	{
		Schema::create('attribute', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('character_id')->unsigned();
			$table->integer('attribute_type_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('attribute');
	}
}