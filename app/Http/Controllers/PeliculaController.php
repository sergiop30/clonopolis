<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.indexPelicula', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peliculas.formPelicula');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'nombre'=> 'required',
        'director'=> 'required',
        'año'=> 'required|integer',
        'genero'=> 'required',
        'sinopsis'=> 'required',
        'precio'=> 'required'
      ]);
      
      
      //Pelicula::create($request->all());
        $pelicula = new Pelicula();
        //$pelicula->user_id = \Auth::id();
        $pelicula->nombre = $request->input('nombre');
        $pelicula->director = $request->input('director');
        $pelicula->año = $request->input('año');
        $pelicula->genero = $request->input('genero');
        $pelicula->sinopsis = $request->input('sinopsis');
        $pelicula->precio = $request->input('precio');
        $pelicula->save();
      
        
        //$user = User::find(\Auth::id());
        //$user->peliculas()->save($pelicula);

      
        return redirect()->route('pelicula.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $pelicula)
    {
        //$pelicula = Pelicula::all();
        return view('peliculas.showPelicula')->with(['peliula'=>$pelicula]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $pelicula)
    {
        return view('materias.formMateria')->with(['materia'=> $materium]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        $materium->materia = $request->nombre_materia;
        $materium->nrc = $request->nrc;
        $materium->hora_inicio = $request->horario;
        $materium->save();
      
        return redirect()->route('materia.show', $materium->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        $materium->delete();
        return redirect()->route('materia.index');
    }
}
