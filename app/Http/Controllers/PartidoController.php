<?php

namespace App\Http\Controllers;

use App\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$posts = App\Post::has('comments')->get();*/
        /*$partidos = App\Partido::has('equipovisitante')->get();*/
        /*$partidos = Partido::all();*/
        //return view('tickets.index', compact('lostiquetes'));

/*'equipovisitante.nombre', 'equipolocal.nombre', 'fecha', 'ciudades.nombre', 'ciudades.estadio'*/
        $partidos = Partido::with('equipovisitante', 'equipolocal', 'cities')
                    ->where('fase', 5)
                    ->orderBy('fecha')
                    ->paginate(8);
        /*$partidos = Partido::with('equipovisitante')
        ->with('equipolocal')->with('ciudades')->get();*/
        
        //$partidos = Partido::with('equipovisitante')->with('equipolocal')->with('ciudades')->get()->pluck('equipovisitante.nombre', 'equipolocal.nombre', 'fecha', 'ciudades.nombre', 'ciudades.estadio');
        //return $partidos;
        return view('partidos.index', compact('partidos'));

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
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function show(Partido $partido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function edit(Partido $partido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partido $partido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partido $partido)
    {
        //
    }

    public function listaPartidos()
    {
        /*$partidos = Partido::with('equipovisitante', 'equipolocal', 'cities')
                    ->where('fase', 5)
                    ->orderBy('fecha');*/
        $partidos = Partido::all()->where('fase', 5);
        
        return response()->json([
            'data' => $partidos
        ], 200);

    }
}
