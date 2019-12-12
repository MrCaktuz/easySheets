<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model 
{

    protected $table = 'character';
    public $timestamps = true;

    // public function getClasses()
    // {
    //     return $this->belongsToMany('CharacterClass', 'character_class');
    // }

    // public function getDomaines()
    // {
    //     return $this->belongsToMany('Domain', 'character_domain');
    // }

    // public function getSchools()
    // {
    //     return $this->belongsToMany('School', 'character_school');
    // }

    // public function getExploration()
    // {
    //     return $this->hasOne('Exploration', 'exploration_id');
    // }

    // public function getProgression()
    // {
    //     return $this->hasOne('Progression', 'progression_id');
    // }

    // public function getBloodline()
    // {
    //     return $this->belongsToMany('Bloodline', 'character_bloodline');
    // }

    // public function getAlignment()
    // {
    //     return $this->hasOne('Alignment', 'alignment_id');
    // }

    // public function getPredilectionClass()
    // {
    //     return $this->hasOne('CharacterClass', 'predilection_class_id');
    // }

    // public function getGround()
    // {
    //     return $this->belongsToMany('Ground', 'character_id');
    // }

    // public function getLanguages()
    // {
    //     return $this->belongsToMany('Language', 'character_language');
    // }

    // public function getSkills()
    // {
    //     return $this->hasMany('Skill', 'character_id');
    // }

    // public function getItems()
    // {
    //     return $this->hasMany('Item', 'character_id');
    // }

    // public function getCombat()
    // {
    //     return $this->hasOne('Combat', 'character_id');
    // }

    // public function getWeapons()
    // {
    //     return $this->hasMany('Weapon', 'character_id');
    // }

    // public function getSpells()
    // {
    //     return $this->hasMany('Spell', 'character_id');
    // }

    // public function getMagicStats()
    // {
    //     return $this->hasMany('MagicStat', 'character_id');
    // }

    // public function getAbilities()
    // {
    //     return $this->hasMany('Ability', 'character_id');
    // }

    // public function getResistance()
    // {
    //     return $this->hasMany('Resistance', 'character_id');
    // }

    // public function getAttribute()
    // {
    //     return $this->hasMany('Attribute', 'character_id');
    // }

    // public function getWeilth()
    // {
    //     return $this->hasOne('Weilth', 'character_id');
    // }

    // public function getMartialSkill()
    // {
    //     return $this->hasOne('MartialSkill', 'character_id');
    // }

}