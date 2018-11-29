@extends('layouts.mi-tema')
@section('contenido')


<section class="bg-primary" id="show" style= "background-image: url(../img/galaxy.png);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Mis peliculas</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4"></p>
            <br>
            <br>
            <table class='table text-white'>
              <thead>
                <tr>
                  <th>Director</th>
                  <th>Año</th>
                  <th>Genero</th>
                  <th>Sinopsis</th>
                  <th>Precio</th>
                  <th>ultima actualizacion</th>
                </tr>
              </thead>
              <body>
                @foreach($peliculas as $pelicula)
                <tr>
                   <td>{{ $pelicula->director}}</td>
                   <td>{{ $pelicula->año }}</td>
                   <td>{{ $pelicula->genero }}</td>
                   <td>{{ $pelicula->sinopsis }}</td>
                   <td>{{ $pelicula->precio }}</td>
                   <td>{{ $pelicula->updated_at }}</td>
                </tr>
                @endforeach
              </body>
            </table>
            <br>
            <br>
            <h2 class="section-heading text-white">Mis promos</h2>
            <hr class="light my-4">
            <table class='table text-white'>
              <thead>
                <tr>
                  <th>Promocion</th>
                  <th>Detalles de la Promocion</th>
                  <th>ultima actualizacion</th>
                </tr>
              </thead>
              <body>
                @foreach($promociones as $promociones)
                <tr>
                   <td>{{ $promociones->nombre}}</td>
                   <td>{{ $promociones->detalles }}</td>
                   <td>{{ $promociones->updated_at }}</td>
                </tr>
                @endforeach
              </body>
            </table>
        </div>
      </div>
    </div>
</section>


@endsection