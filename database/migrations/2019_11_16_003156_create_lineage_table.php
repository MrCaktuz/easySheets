<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineageTable extends Migration {

	public function up()
	{
		Schema::create('lineage', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
		});
	}

	public function down()
	{
		Schema::drop('lineage');
	}
}