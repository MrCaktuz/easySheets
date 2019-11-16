<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterBloodlineTable extends Migration {

	public function up()
	{
		Schema::create('character_bloodline', function(Blueprint $table) {
			$table->integer('bloodline_id')->unique()->unsigned();
			$table->integer('character_id')->unique()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('character_bloodline');
	}
}