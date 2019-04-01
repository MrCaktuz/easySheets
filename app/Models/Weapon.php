<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model 
{

    protected $table = 'weapon';
    public $timestamps = false;

    public function getTouchBonus()
    {
        return $this->hasOne('Stat', 'touch_bonus_id');
    }

    public function getDamageBonus()
    {
        return $this->hasOne('Stat', 'damage_bonus_id');
    }

}