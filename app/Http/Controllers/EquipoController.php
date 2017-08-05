<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\City;
use App\Partido;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\Debugbar\Facade as Debugbar;



class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grupos(){
        $equipos =  Equipo::all();
        //return $equipos;
        return view('equipos.grupos', compact('equipos'));
    }
    public function vue1()
    {
        $equipos =  Equipo::all();
        foreach($equipos as $equipo ){
            foreach($equipo->allPartidos() as $part){
            }
        }

        
        return response()->json([
            'data' => $equipos
        ], 200);
        
    }
    public function index()
    {
        //
        $equipos =  Equipo::get(['nombre', 'id', 'color']);
        Debugbar::info($equipos);
        foreach($equipos as $equipo ){
            foreach($equipo->allPartidos() as $part){
            }
        }


        return view('equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        DB::enableQueryLog();


        
        $equipo = Equipo::findOrFail($id);
        $partidos = Equipo::find($id)->allPartidos();
        //return $partidos;
        foreach ($partidos->cities_id as $partido){
            return $partido->ciudades;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        //
    }
}
