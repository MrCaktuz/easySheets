<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResistanceTypeTable extends Migration {

	public function up()
	{
		Schema::create('resistance_type', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
		});
	}

	public function down()
	{
		Schema::drop('resistance_type');
	}
}