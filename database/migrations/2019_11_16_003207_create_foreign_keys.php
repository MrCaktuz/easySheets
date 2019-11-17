<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('character', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->foreign('race_id')->references('id')->on('race')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->foreign('predilection_class_id')->references('id')->on('character_class')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->foreign('alignment_id')->references('id')->on('alignment')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->foreign('exploration_id')->references('id')->on('exploration')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->foreign('progression_id')->references('id')->on('progression')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->foreign('wealth_id')->references('id')->on('wealth')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('character_character_class', function(Blueprint $table) {
			$table->foreign('class_id')->references('id')->on('character_class')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character_character_class', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('character_bloodline', function(Blueprint $table) {
			$table->foreign('bloodline_id')->references('id')->on('bloodline')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('character_bloodline', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('character_domaine', function(Blueprint $table) {
			$table->foreign('domain_id')->references('id')->on('domain')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character_domaine', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('character_school', function(Blueprint $table) {
			$table->foreign('school_id')->references('id')->on('school')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character_school', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('character_ground', function(Blueprint $table) {
			$table->foreign('ground_id')->references('id')->on('ground')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character_ground', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('character_language', function(Blueprint $table) {
			$table->foreign('language_id')->references('id')->on('language')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character_language', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('skill', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('skill', function(Blueprint $table) {
			$table->foreign('skill_type_id')->references('id')->on('skill_type')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('item', function(Blueprint $table) {
			$table->foreign('item_type_id')->references('id')->on('item_type')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('item', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('armor_class_id')->references('id')->on('armor_class')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('weapon', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('weapon', function(Blueprint $table) {
			$table->foreign('attribute_type_id')->references('id')->on('attribute_type')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('spell', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('magic_stat', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('skill_type', function(Blueprint $table) {
			$table->foreign('attribute_type_id')->references('id')->on('attribute_type')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('ability', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('ability', function(Blueprint $table) {
			$table->foreign('ability_type_id')->references('id')->on('ability_type')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('resistance', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('resistance', function(Blueprint $table) {
			$table->foreign('resistance_type_id')->references('id')->on('resistance_type')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('attribute', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('wealth', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('saving_throws', function(Blueprint $table) {
			$table->foreign('combat_id')->references('id')->on('combat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('bonus', function(Blueprint $table) {
			$table->foreign('bonus_type_id')->references('id')->on('bonus_type')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('basic_combat_stat', function(Blueprint $table) {
			$table->foreign('combat_id')->references('id')->on('combat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('basic_combat_stat', function(Blueprint $table) {
			$table->foreign('basic_combat_stat_type_id')->references('id')->on('basic_combat_stat_type')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('martial_skill', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('character', function(Blueprint $table) {
			$table->dropForeign('character_user_id_foreign');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->dropForeign('character_race_id_foreign');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->dropForeign('character_predilection_class_id_foreign');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->dropForeign('character_alignment_id_foreign');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->dropForeign('character_exploration_id_foreign');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->dropForeign('character_progression_id_foreign');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->dropForeign('character_wealth_id_foreign');
		});
		Schema::table('character_character_class', function(Blueprint $table) {
			$table->dropForeign('character_character_class_class_id_foreign');
		});
		Schema::table('character_character_class', function(Blueprint $table) {
			$table->dropForeign('character_character_class_character_id_foreign');
		});
		Schema::table('character_bloodline', function(Blueprint $table) {
			$table->dropForeign('character_bloodline_bloodline_id_foreign');
		});
		Schema::table('character_bloodline', function(Blueprint $table) {
			$table->dropForeign('character_bloodline_character_id_foreign');
		});
		Schema::table('character_domaine', function(Blueprint $table) {
			$table->dropForeign('character_domaine_domain_id_foreign');
		});
		Schema::table('character_domaine', function(Blueprint $table) {
			$table->dropForeign('character_domaine_character_id_foreign');
		});
		Schema::table('character_school', function(Blueprint $table) {
			$table->dropForeign('character_school_school_id_foreign');
		});
		Schema::table('character_school', function(Blueprint $table) {
			$table->dropForeign('character_school_character_id_foreign');
		});
		Schema::table('character_ground', function(Blueprint $table) {
			$table->dropForeign('character_ground_ground_id_foreign');
		});
		Schema::table('character_ground', function(Blueprint $table) {
			$table->dropForeign('character_ground_character_id_foreign');
		});
		Schema::table('character_language', function(Blueprint $table) {
			$table->dropForeign('character_language_language_id_foreign');
		});
		Schema::table('character_language', function(Blueprint $table) {
			$table->dropForeign('character_language_character_id_foreign');
		});
		Schema::table('skill', function(Blueprint $table) {
			$table->dropForeign('skill_character_id_foreign');
		});
		Schema::table('skill', function(Blueprint $table) {
			$table->dropForeign('skill_skill_type_id_foreign');
		});
		Schema::table('item', function(Blueprint $table) {
			$table->dropForeign('item_item_type_id_foreign');
		});
		Schema::table('item', function(Blueprint $table) {
			$table->dropForeign('item_character_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_character_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_armor_class_id_foreign');
		});
		Schema::table('weapon', function(Blueprint $table) {
			$table->dropForeign('weapon_character_id_foreign');
		});
		Schema::table('weapon', function(Blueprint $table) {
			$table->dropForeign('weapon_attribute_type_id_foreign');
		});
		Schema::table('spell', function(Blueprint $table) {
			$table->dropForeign('spell_character_id_foreign');
		});
		Schema::table('magic_stat', function(Blueprint $table) {
			$table->dropForeign('magic_stat_character_id_foreign');
		});
		Schema::table('magic_stat', function(Blueprint $table) {
			$table->dropForeign('magic_stat_main_attribute_type_id_foreign');
		});
		Schema::table('skill_type', function(Blueprint $table) {
			$table->dropForeign('skill_type_attribute_type_id_foreign');
		});
		Schema::table('ability', function(Blueprint $table) {
			$table->dropForeign('ability_character_id_foreign');
		});
		Schema::table('ability', function(Blueprint $table) {
			$table->dropForeign('ability_ability_type_id_foreign');
		});
		Schema::table('resistance', function(Blueprint $table) {
			$table->dropForeign('resistance_character_id_foreign');
		});
		Schema::table('resistance', function(Blueprint $table) {
			$table->dropForeign('resistance_resistance_type_id_foreign');
		});
		Schema::table('attribute', function(Blueprint $table) {
			$table->dropForeign('attribute_character_id_foreign');
		});
		Schema::table('wealth', function(Blueprint $table) {
			$table->dropForeign('wealth_character_id_foreign');
		});
		Schema::table('saving_throws', function(Blueprint $table) {
			$table->dropForeign('saving_throws_combat_id_foreign');
		});
		Schema::table('bonus', function(Blueprint $table) {
			$table->dropForeign('bonus_bonus_type_id_foreign');
		});
		Schema::table('basic_combat_stat', function(Blueprint $table) {
			$table->dropForeign('basic_combat_stat_combat_id_foreign');
		});
		Schema::table('basic_combat_stat', function(Blueprint $table) {
			$table->dropForeign('basic_combat_stat_basic_combat_stat_type_id_foreign');
		});
		Schema::table('martial_skill', function(Blueprint $table) {
			$table->dropForeign('martial_skill_character_id_foreign');
		});
	}
}