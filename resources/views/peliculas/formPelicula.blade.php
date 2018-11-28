@extends('Layouts.mi-tema')
@section('contenido')

<!--@if(isset($pelicula))
    <form action="{{route('pelicula.update', $pelicula->id )}}" method="POST">
    <input type="hidden" name="_method" value="PATCH">
  @else
    <form action="{{route('pelicula.store')}}" method="POST">
  @endif-->
    
    <section class="bg-primary" id="form" style= "background-image: url(../img/abstract.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Ingresa una pelicula</h2>
            <hr class="light my-4">
            <form action="{{route('pelicula.store')}}" method="POST">
              {{csrf_field() }}
                <label for="pelicula">Pelicula:</label>
                <input type="text" name="nombre" value="{{isset($pelicula) ? $pelicula->nombre : ''}}">
                <br>
                <label for="director">Director:</label>
                <input type="text" name="director">
                <br>
                <label for="año">Año:</label>
                <input type="text" name="año">
                <br>
                <label for="genero">Genero:</label>
                <input type="text" name="genero">
                <br>
                <label for="sinopsis">Sinopsis:</label>
                <input type="text" name="sinopsis">
                <br>
                <label for="precio">Precio:</label>
                <input type="text" name="precio">
                <br>
                
                <!--<a class="btn btn-light btn-xl js-scroll-trigger" type="submit" name="Guardar">¡Guardar!</a>-->
                <input type="submit" name="Guardar">
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-primary" id="form" style= "background-image: url(../img/galaxy.png);">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Ingresa una Promo</h2>
            <hr class="light my-4">
            <form action="{{route('promociones.store')}}" method="POST">
              {{csrf_field() }}
                <label for="nombre" class="text-white">Promocion:</label>
                <input type="text" name="nombre" value="{{isset($promociones) ? $promociones->nombre : ''}}">
                <br>
                <label for="detalles" class="text-white">Detalles:</label>
                <input type="text" name="detalles">
                <br>
                
                <!--<a class="btn btn-light btn-xl js-scroll-trigger" type="submit" name="Guardar">¡Guardar!</a>-->
                <input type="submit" name="Guardar">
            </form>
          </div>
        </div>
      </div>
    </section>
    
  
@endsection