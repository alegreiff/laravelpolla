<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['descripcion', 'colequipo_id'];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function Colequipo()
    {
    	return $this->belongsTo('App\Colequipo');
    }
}
