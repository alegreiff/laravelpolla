<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $fillable = ['local_id', 'visitante_id', 'fecha', 'fase', 'grupo', 'cities_id', 'lg', 'vg'];
    
    public function equipolocal()
    {
        return $this->belongsTo('App\Equipo', 'local_id', 'id');
    }
    public function equipovisitante()
    {
        return $this->belongsTo('App\Equipo', 'visitante_id', 'id');
    }
    public function cities()
    {
        return $this->belongsTo('App\City');

    }
    
}



/*
class Matches extends Model
{
    public hometeam()
    {
        return $this->belongsTo('Teams', 'Home-team_id', 'id');
    }
    public visitingteam()
    {
        return $this->belongsTo('Teams', 'Visiting-team_id', 'id');
    }
}

/// Sample usage:
$myMatch = Matches::with('hometeam')->with('visitingteam')->find(1);

$HomeTeam = $myMatch->hometeam;
$VisitingTeam = $myMatch->visitingteam;

// or just access directly:
echo 'Home team: '.$myMatch->hometeam->name;
*/