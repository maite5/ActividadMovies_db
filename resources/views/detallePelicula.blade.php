@extends('layouts.plantilla')
@section('fqa')
"\css\basico.css"
@endsection

@section('title', 'Enlace de peliculas')
<br>
@section('h1', 'Detalle de Pelicula')

@section('main')


<section id="pelicula">
    <div class="container justify-content-center">
    <div class="card" style="max-width: 30rem;">
        <div class="card-header">
             <strong>{{ $pelicula->title }} </strong>
        </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Nombre de la pelicula:</strong> {{ $pelicula->title }}</li>
        <li class="list-group-item"><strong>Rating:</strong> {{ $pelicula->rating}}</li>
        <li class="list-group-item"><strong>Awards:</strong> {{ $pelicula->awards}}</li>
        <li class="list-group-item"><strong>Fecha de estreno:</strong> {{ $pelicula->release_date}}</li>
        <li class="list-group-item"><strong>Genero:</strong> {{ $pelicula->genero->name}}</li>
        <li class="list-group-item"><strong>Actores:</strong>   <ul> @foreach($pelicula->actores as $actor) 
            <li> {{$actor->getNombre()}}   
     </li> 
     @endforeach  
     </ul> </li>
    </ul>
    </div> 
    </div>
@endsection 
</body> 
</html>