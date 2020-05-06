@extends('layouts.plantilla')
    @section('fqa')
    "\css\basico.css"
@endsection

@section('title', 'Detalles de Peliculas')
    @section('main')
    
    

        @forelse ($peliculas as $pelicula)
            <ul>
            <li>
             
             "{{$pelicula->id}}">{{$pelicula['title']}}
            
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

        @endsection 

</body>
</html>

