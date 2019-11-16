<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSavingThrowsTypeTable extends Migration {

	public function up()
	{
		Schema::create('saving_throws_type', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
		});
	}

	public function down()
	{
		Schema::drop('saving_throws_type');
	}
}