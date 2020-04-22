<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Listado de diez peliculas </title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @extends('plantilla')
    @section('fqa')
    "\css\basico.css"
@endsection
    @extends('layouts.plantilla')
    @section('titulo')
    Listado de Peliculas
    @ensection 
    @section ('principal') 
    <h1> Titulo de diez peliculas </h1>
    <ul>
        @forelse ($peliculas as $pelicula)
            <li>
            <p> <a href="/pelicula/{{$pelicula->id}}">{{$pelicula->title}} </a>
            </p>
            @if ($pelicula->actor)
            <p>Actor: {{$pelicula->actor->name}}
             </p> 
             @endif 


            






             

             <p> Actores </p>  <ul> @foreach($pelicula->actores as $actor) 
                    <li> {{$actor->getNombre()}}   
             </li> 
             @endforeach  
             </ul> 
            </li> 
        </ul>
        @empty
            
        @endforelse

        @ensection 

</body>
</html>

