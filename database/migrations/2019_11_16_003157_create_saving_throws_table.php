<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSavingThrowsTable extends Migration {

	public function up()
	{
		Schema::create('saving_throws', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('saving_throws_type_id')->unsigned();
			$table->integer('combat_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('saving_throws');
	}
}