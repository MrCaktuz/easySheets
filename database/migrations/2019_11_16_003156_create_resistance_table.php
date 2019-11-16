<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResistanceTable extends Migration {

	public function up()
	{
		Schema::create('resistance', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('character_id')->unsigned();
			$table->integer('resistance_type_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('resistance');
	}
}