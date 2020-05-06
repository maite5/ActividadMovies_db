
    @extends('layouts.plantilla')
    @section('fqa')
    "\css\basico.css"
@endsection

    @section('title', 'Listado de pelicula detalle, sus actores ')
    
    @section('h1', 'Detalle Pelicula ')

    @section('main')

    <section id="pelicula">
 <!--  <ul> -->
        @forelse ($peliculas as $pelicula)
        <ul>
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

