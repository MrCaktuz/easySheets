<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWealthTable extends Migration {

	public function up()
	{
		Schema::create('wealth', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('character_id')->unsigned();
			$table->integer('copper');
			$table->integer('silver');
			$table->integer('gold');
			$table->integer('platinum');
		});
	}

	public function down()
	{
		Schema::drop('wealth');
	}
}