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
   
    
    @section('titulo')
    Listado de Peliculas-actor 
    @ensection 
    @section ('principal') 
    <h1> Titulo de diez actores </h1>
    <ul>
        @forelse ($actores as $actor)
            <li>
            {{$actor['first_name']}} 
            {{$actor->last_name}} 
            </li> </ul>
        @empty
            
        @endforelse

        @ensection 

</body>
</html>