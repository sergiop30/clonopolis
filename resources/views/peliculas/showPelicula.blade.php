@extends('layouts.mi-tema')
@section('contenido')


<section class="bg-primary" id="show" style= "background-image: url(../img/galaxy.png);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">{{ $pelicula->nombre }}</h2>
            <hr class="light my-4">
            <img src="{{ asset('img/'.$pelicula->imagen.'.jpg') }}">
            <p class="text-faded mb-4"></p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="{{ route('pelicula.index') }}">Comprar!</a>
            <br>
            <br>
            <table class='table text-white'>
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Director</th>
                  <th>Año</th>
                  <th>Genero</th>
                  <th>Sinopsis</th>
                  <th>Precio</th>
                  <th>ultima actualizacion</th>
                </tr>
              </thead>
              <body>
                <tr>
                   <td>{{ $pelicula->id}}</td>
                   <td>{{ $pelicula->director}}</td>
                   <td>{{ $pelicula->año }}</td>
                   <td>{{ $pelicula->genero }}</td>
                   <td>{{ $pelicula->sinopsis }}</td>
                   <td>{{ $pelicula->precio }}</td>
                   <td>{{ $pelicula->updated_at }}</td>
                </tr>
              </body>
            </table>

            <a class="btn btn-warning" href="{{route('pelicula.edit', $pelicula->id)}}">Editar</a>
            <hr>

            <form action="{{ route('pelicula.destroy', $pelicula->id) }}"method="POST">
                {{csrf_field( )}}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">
                  Borrar pelicula
                </button>
            </form>

            


        </div>
      </div>
    </div>
</section>


@endsection