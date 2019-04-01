<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatTable extends Migration {

	public function up()
	{
		Schema::create('stat', function(Blueprint $table) {
			$table->increments('id');
			$table->float('base');
			$table->integer('linked_stat_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('stat');
	}
}