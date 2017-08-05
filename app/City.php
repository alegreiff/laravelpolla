<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function partidos()
    {
        return $this->hasMany('App\Partido');
    }
}
