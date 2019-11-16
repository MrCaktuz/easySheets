<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterLineageTable extends Migration {

	public function up()
	{
		Schema::create('character_lineage', function(Blueprint $table) {
			$table->integer('lineage_id')->unique()->unsigned();
			$table->integer('character_id')->unique()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('character_lineage');
	}
}