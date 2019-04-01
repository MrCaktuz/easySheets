<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('character', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('user')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->foreign('race_id')->references('id')->on('race')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character', function(Blueprint $table) {
			$table->foreign('predilection_class_id')->references('id')->on('class')
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
		Schema::table('character_class', function(Blueprint $table) {
			$table->foreign('class_id')->references('id')->on('class')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character_class', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('character_lineage', function(Blueprint $table) {
			$table->foreign('lineage_id')->references('id')->on('lineage')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('character_lineage', function(Blueprint $table) {
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
		Schema::table('character_terrain', function(Blueprint $table) {
			$table->foreign('terrain_id')->references('id')->on('terrain')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character_terrain', function(Blueprint $table) {
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
		Schema::table('character_martial_skill', function(Blueprint $table) {
			$table->foreign('martial_skill_id')->references('id')->on('martial_skill')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('character_martial_skill', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('character_skill', function(Blueprint $table) {
			$table->foreign('skill_id')->references('id')->on('skill')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('character_skill', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('restrict')
						->onUpdate('restrict');
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
			$table->foreign('dexterity_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('intelligence_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('wisdom_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('luck_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('constitution_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('health_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('initiative_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('reflexe_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('fortitude_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('will_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('resist_damage_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('resist_acid_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('resist_fire_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('resist_thunder_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('resist_cold_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('resist_sound_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('resist_magic_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('melee_touch_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('range_touch_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('cmb_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('cmd_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->foreign('armor_class_id')->references('id')->on('armor_class')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('stat', function(Blueprint $table) {
			$table->foreign('linked_stat_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('bonus', function(Blueprint $table) {
			$table->foreign('stat_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('weapon', function(Blueprint $table) {
			$table->foreign('character_id')->references('id')->on('character')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('weapon', function(Blueprint $table) {
			$table->foreign('touch_bonus_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('weapon', function(Blueprint $table) {
			$table->foreign('damage_bonus_id')->references('id')->on('stat')
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
		Schema::table('magic_stat', function(Blueprint $table) {
			$table->foreign('known_id')->references('id')->on('stat')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('magic_stat', function(Blueprint $table) {
			$table->foreign('daily_id')->references('id')->on('stat')
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
		Schema::table('character_class', function(Blueprint $table) {
			$table->dropForeign('character_class_class_id_foreign');
		});
		Schema::table('character_class', function(Blueprint $table) {
			$table->dropForeign('character_class_character_id_foreign');
		});
		Schema::table('character_lineage', function(Blueprint $table) {
			$table->dropForeign('character_lineage_lineage_id_foreign');
		});
		Schema::table('character_lineage', function(Blueprint $table) {
			$table->dropForeign('character_lineage_character_id_foreign');
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
		Schema::table('character_terrain', function(Blueprint $table) {
			$table->dropForeign('character_terrain_terrain_id_foreign');
		});
		Schema::table('character_terrain', function(Blueprint $table) {
			$table->dropForeign('character_terrain_character_id_foreign');
		});
		Schema::table('character_language', function(Blueprint $table) {
			$table->dropForeign('character_language_language_id_foreign');
		});
		Schema::table('character_language', function(Blueprint $table) {
			$table->dropForeign('character_language_character_id_foreign');
		});
		Schema::table('character_martial_skill', function(Blueprint $table) {
			$table->dropForeign('character_martial_skill_martial_skill_id_foreign');
		});
		Schema::table('character_martial_skill', function(Blueprint $table) {
			$table->dropForeign('character_martial_skill_character_id_foreign');
		});
		Schema::table('character_skill', function(Blueprint $table) {
			$table->dropForeign('character_skill_skill_id_foreign');
		});
		Schema::table('character_skill', function(Blueprint $table) {
			$table->dropForeign('character_skill_character_id_foreign');
		});
		Schema::table('item', function(Blueprint $table) {
			$table->dropForeign('item_character_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_character_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_dexterity_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_intelligence_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_wisdom_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_luck_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_constitution_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_health_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_initiative_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_reflexe_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_fortitude_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_will_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_resist_damage_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_resist_acid_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_resist_fire_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_resist_thunder_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_resist_cold_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_resist_sound_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_resist_magic_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_melee_touch_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_range_touch_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_cmb_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_cmd_id_foreign');
		});
		Schema::table('combat', function(Blueprint $table) {
			$table->dropForeign('combat_armor_class_id_foreign');
		});
		Schema::table('stat', function(Blueprint $table) {
			$table->dropForeign('stat_linked_stat_id_foreign');
		});
		Schema::table('bonus', function(Blueprint $table) {
			$table->dropForeign('bonus_stat_id_foreign');
		});
		Schema::table('weapon', function(Blueprint $table) {
			$table->dropForeign('weapon_character_id_foreign');
		});
		Schema::table('weapon', function(Blueprint $table) {
			$table->dropForeign('weapon_touch_bonus_id_foreign');
		});
		Schema::table('weapon', function(Blueprint $table) {
			$table->dropForeign('weapon_damage_bonus_id_foreign');
		});
		Schema::table('spell', function(Blueprint $table) {
			$table->dropForeign('spell_character_id_foreign');
		});
		Schema::table('magic_stat', function(Blueprint $table) {
			$table->dropForeign('magic_stat_character_id_foreign');
		});
		Schema::table('magic_stat', function(Blueprint $table) {
			$table->dropForeign('magic_stat_known_id_foreign');
		});
		Schema::table('magic_stat', function(Blueprint $table) {
			$table->dropForeign('magic_stat_daily_id_foreign');
		});
	}
}