<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <h1> Peliculas y sus actores  </h1>
</body>

@extends('layouts.plantilla')
    @section('fqa')
    "\css\basico.css"
@endsection

    @section('title', 'Enlace de peliculas')
    <br>
    @section('h1', 'Titulo de diez Peliculas')

    @section('main')



    <ul> <!-- para crear el id para borrar    -->
<!--        @forelse ($peliculas as $pelicula)
            <li>
  <p>   <a href="peliculas"> {{$pelicula->$id}}  </p> 
            </li> 
    </ul>
    @empty 
    @endforelse

        @endsection -->




        @forelse($Peliculas as $pelicula)
        <div class="col-6 col-lg-4 col-xl-3 mb-5">
            <div class="card __card-bandera">
                <a href="/pais/{{ $pelicula->id }}">
                    
                    <div class="card-body">
                        <h4 class="card-title">{{ $pelicula->title }}</h4>
                        <ul>
                            <li><strong>Raiting:</strong> {{ $pelicula->raiting }}</li>
                            @if ($pais->genero)
                                <li><strong>Awards:</strong> {{ $pelicula->awards }}</li>
                            @endif
                        </ul>
                    </div>
                </a>
            </div>
        </div>
    @empty
        <h2 class="mt-5 w-100 text-center">¡Rayos! No tengo paises para mostrar :(</h2>
    @endforelse
</body> 
</html>

</html>