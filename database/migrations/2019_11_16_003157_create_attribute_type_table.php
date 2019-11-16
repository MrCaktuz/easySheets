<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeTypeTable extends Migration {

	public function up()
	{
		Schema::create('attribute_type', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
		});
	}

	public function down()
	{
		Schema::drop('attribute_type');
	}
}