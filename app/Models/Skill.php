<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model 
{

    protected $table = 'skill';
    public $timestamps = false;

    public function getType()
    {
        return $this->hasOne('SkillType', 'type_id');
    }

}