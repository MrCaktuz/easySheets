<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model 
{

    protected $table = 'stat';
    public $timestamps = false;

    public function getBonuses()
    {
        return $this->hasMany('Bonus', 'stat_id');
    }

}