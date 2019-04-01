<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Combat extends Model 
{

    protected $table = 'combat';
    public $timestamps = false;

    public function getStrength()
    {
        return $this->hasOne('Stat', 'strength_id');
    }

    public function getDexterity()
    {
        return $this->hasOne('Stat', 'dexterity_id');
    }

    public function getIntelligence()
    {
        return $this->hasOne('Stat', 'intelligence_id');
    }

    public function getWisdom()
    {
        return $this->hasOne('Stat', 'wisdom_id');
    }

    public function getLuck()
    {
        return $this->hasOne('Stat', 'luck_id');
    }

    public function getConstitution()
    {
        return $this->hasOne('Stat', 'constitution_id');
    }

    public function getHealth()
    {
        return $this->hasOne('Stat', 'health_id');
    }

    public function getInitiative()
    {
        return $this->hasOne('Stat', 'initiative_id');
    }

    public function getReflexe()
    {
        return $this->hasOne('Stat', 'reflexe_id');
    }

    public function getFortitude()
    {
        return $this->hasOne('Stat', 'fortitude_id');
    }

    public function getWill()
    {
        return $this->hasOne('Stat', 'will_id');
    }

    public function getResistDamage()
    {
        return $this->hasOne('Stat', 'resist_damage_id');
    }

    public function getResistAcid()
    {
        return $this->hasOne('Stat', 'resist_acid_id');
    }

    public function getResistCold()
    {
        return $this->hasOne('Stat', 'resist_cold_id');
    }

    public function getResistFire()
    {
        return $this->hasOne('Stat', 'resist_fire_id');
    }

    public function getResistThunder()
    {
        return $this->hasOne('Stat', 'resist_thunder_id');
    }

    public function getResistSound()
    {
        return $this->hasOne('Stat', 'resist_sound_id');
    }

    public function getResistMagic()
    {
        return $this->hasOne('Stat', 'resist_magic_id');
    }

    public function getMeleeTouch()
    {
        return $this->hasOne('Stat', 'melee_touch_id');
    }

    public function getRangeTouch()
    {
        return $this->hasOne('Stat', 'range_touch_id');
    }

    public function getCmb()
    {
        return $this->hasOne('Stat', 'cmb_id');
    }

    public function getCmd()
    {
        return $this->hasOne('Stat', 'cmd_id');
    }

    public function getArmorClass()
    {
        return $this->hasOne('ArmorClass', 'armor_class_id');
    }

}