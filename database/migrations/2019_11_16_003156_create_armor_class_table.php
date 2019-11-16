<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmorClassTable extends Migration {

	public function up()
	{
		Schema::create('armor_class', function(Blueprint $table) {
			$table->increments('id');
			$table->float('natural');
			$table->float('parade');
			$table->float('dodge');
			$table->float('size');
		});
	}

	public function down()
	{
		Schema::drop('armor_class');
	}
}