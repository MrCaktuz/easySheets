<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainTable extends Migration {

	public function up()
	{
		Schema::create('domain', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
		});
	}

	public function down()
	{
		Schema::drop('domain');
	}
}