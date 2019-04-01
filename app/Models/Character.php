<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model 
{

    protected $table = 'character';
    public $timestamps = true;

    public function getClasses()
    {
        return $this->belongsToMany('Class', 'character_class');
    }

    public function getDomaines()
    {
        return $this->belongsToMany('Domain', 'character_domain');
    }

    public function getSchools()
    {
        return $this->belongsToMany('School', 'character_school');
    }

    public function getExploration()
    {
        return $this->hasOne('Exploration', 'exploration_id');
    }

    public function getProgression()
    {
        return $this->hasOne('Progression', 'progression_id');
    }

    public function getLineages()
    {
        return $this->belongsToMany('Lineage', 'character_linage');
    }

    public function getRace()
    {
        return $this->hasOne('Race', 'race_id');
    }

    public function getAlignment()
    {
        return $this->hasOne('Alignment', 'alignment_id');
    }

    public function getPredilectionClass()
    {
        return $this->hasOne('Class', 'predilection_class_id');
    }

    public function getTerrains()
    {
        return $this->belongsToMany('Terrain', 'character_terrain');
    }

    public function getLanguages()
    {
        return $this->belongsToMany('Language', 'character_language');
    }

    public function getSkills()
    {
        return $this->belongsToMany('Skill', 'character_skill');
    }

    public function getMartialSkill()
    {
        return $this->belongsToMany('MartialSkill', 'character_martial_skill');
    }

    public function getItems()
    {
        return $this->hasMany('Item', 'character_id');
    }

    public function getCombat()
    {
        return $this->hasOne('Combat', 'character_id');
    }

    public function getWeapons()
    {
        return $this->hasMany('Weapon', 'character_id');
    }

    public function getSpells()
    {
        return $this->hasMany('Spell', 'character_id');
    }

    public function getMagicStats()
    {
        return $this->hasMany('MagicStat', 'character_id');
    }

}