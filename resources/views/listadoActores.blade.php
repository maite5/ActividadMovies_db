
    @extends('layouts.plantilla')
    @section('fqa')
    "\css\basico.css"
@endsection

    @section('title', 'Listado de diez pelicula detalle y sus actores ')
    <br>
    @section('h1', 'Detalle Pelicula ')

    @section('main')


    <ul>
        @forelse ($peliculas as $pelicula)
            <li>
            <p> <a href="/pelicula/{{$pelicula->id}}">{{$pelicula->title}}  </a>
             <p> Rating:  {{$pelicula->rating}}  </p>
             <p>  Awards: {{$pelicula->awards}} </p>
             <p> Fecha de lanzamiento: {{$pelicula->release_date}} </p>
                 
            
            
                
           

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

