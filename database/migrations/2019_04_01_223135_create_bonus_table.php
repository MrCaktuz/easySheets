<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBonusTable extends Migration {

	public function up()
	{
		Schema::create('bonus', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('stat_id')->unique()->unsigned();
			$table->float('value');
			$table->mediumText('description');
			$table->boolean('situationnal');
		});
	}

	public function down()
	{
		Schema::drop('bonus');
	}
}