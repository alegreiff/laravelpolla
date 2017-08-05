<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = ['nombre', 'abr', 'color', 'bombo', 'confederacion', 'grupo', 'posgrupo', 'capital', 'fifa', 'pg', 'pe', 'pp', 'gf', 'gc'];

     public function partidosl()
    {
        return $this->hasMany('App\Partido', 'local_id')->select(array('id', 'local_id', 'visitante_id', 'cities_id'));
    }
     public function partidosv()
    {
        return $this->hasMany('App\Partido', 'visitante_id')->select(array('id', 'local_id', 'visitante_id', 'cities_id'));
    }
    public function allPartidos() {
    	return $this->partidosl->merge($this->partidosv);
        //return $this->partidosl->merge($this->partidosv);
        //->select(array('id', 'username'));
		//return $this->partidosl ?: $this->partidosv;

}
}
