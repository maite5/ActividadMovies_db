@extends('layouts.plantilla')
    @section('fqa')
    "\css\basico.css"
@endsection

    @section('title', 'Enlace de peliculas')
    
    @section('h1', 'Titulo de  Peliculas')

    @section('main')


    <section id="pelicula">
        @forelse ($peliculas as $pelicula)
    <ul>
        
            <li>
   <a href="http://localhost:8000/pelicula/{{$pelicula->id}}">{{$pelicula['title']}}  
            </li> 
    </ul>
    @empty 
    @endforelse

        @endsection 

</body> 
</html>
