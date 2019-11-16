<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBonusTable extends Migration {

	public function up()
	{
		Schema::create('bonus', function(Blueprint $table) {
			$table->increments('id');
			$table->float('value');
			$table->mediumText('description');
			$table->boolean('situationnal');
			$table->integer('bonus_type_id')->unsigned();
			$table->integer('source_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('bonus');
	}
}