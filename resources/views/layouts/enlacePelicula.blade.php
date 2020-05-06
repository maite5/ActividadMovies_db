@extends('layouts.plantilla')
    @section('fqa')
    "\css\basico.css"
@endsection

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Listado de diez peliculas </title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>  -->
 

   
    @section('titulo')
    Enlace de Peliculas
    @endsection 
    @section('main')
        
    @endsection
    @section ('principal') 
    <h1> Titulo de diez peliculas </h1>
    <ul>
        @forelse ($peliculas as $pelicula)
            <li>
            <p> {{$pelicula['title']}} </p>  
        
            </li> 
    </ul>
    @empty
    @endforelse
    @endsection

        @endsection 
    
<!--
</body> 
</html>  -->
