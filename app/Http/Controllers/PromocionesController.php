<?php

namespace App\Http\Controllers;

use App\Promociones;
use App\Pelicula;
use Illuminate\Http\Request;

class PromocionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
        'nombre'=> 'required',
        'detalles'=> 'required',
      ]);
      
      
      //Pelicula::create($request->all());
        $promociones = new Promociones();
        //$pelicula->user_id = \Auth::id();
        $promociones->nombre = $request->input('nombre');
        $promociones->detalles = $request->input('detalles');
        $promociones->save();
      
        
        //$user = User::find(\Auth::id());
        //$user->peliculas()->save($pelicula);

      
        return redirect()->route('pelicula.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function show(Promociones $promociones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function edit(Promociones $promociones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promociones $promociones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promociones $promociones)
    {
        //
    }
}
