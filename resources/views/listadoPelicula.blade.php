@extends('layouts.plantilla')
    @section('fqa')
    "\css\basico.css"
@endsection

    @section('title', 'Enlace de peliculas')
    
    

    @section('main')


    
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Buscador por titulo</a>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>

      <h1> 'Peliculas' </h1>



    <!--termina el buscador  -->
    <br>
    <ul>
        @forelse ($peliculas as $pelicula)
            <li>
            <p> <a href=" {{$pelicula->id}}">{{$pelicula->title}} </a>
            </p>
            @if ($pelicula->genero)
            <p>Genero: {{$pelicula->genero->name}}
             </p> 
             @endif 

             
             </ul> 
            </li> 
        </ul>
        @empty
            
        @endforelse

        
    <!-- paginate  -->
        {{$peliculas->links()}}
        @endsection
</body>
</html>