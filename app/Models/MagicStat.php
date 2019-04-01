<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MagicStat extends Model 
{

    protected $table = 'magic_stat';
    public $timestamps = false;

    public function getKnown()
    {
        return $this->hasOne('Stat', 'known_id');
    }

    public function getDaily()
    {
        return $this->hasOne('Stat', 'daily_id');
    }

}