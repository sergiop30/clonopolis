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
        'precio'=> 'required',
        'imagen'=> 'required'
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
        $pelicula->imagen = $request->input('imagen');
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
        //$nombreImagen = $pelicula;
        //$pelicula = Pelicula::all();
        return view('peliculas.showPelicula', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $pelicula)
    {
        return view('peliculas.formPelicula', compact('pelicula'));
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
        $pelicula->nombre = $request->nombre;
        $pelicula->director = $request->director;
        $pelicula->año = $request->año;
        $pelicula->genero = $request->genero;
        $pelicula->sinopsis = $request->sinopsis;
        $pelicula->precio = $request->precio;
        $pelicula->imagen = $request->imagen;
        $pelicula->save();
      
        return redirect()->route('pelicula.show', $pelicula->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return redirect()->route('pelicula.index');
    }
}
