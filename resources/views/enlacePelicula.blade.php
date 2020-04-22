    @extends('layouts.plantilla')
    @section('fqa')
    "\css\basico.css"
@endsection

    @section('title', 'Enlace de peliculas')
    <br>
    @section('h1', 'Titulo de diez Peliculas')

    @section('main')



    <ul>
        @forelse ($peliculas as $pelicula)
            <li>
  <p>   <a href="#pelicula"> {{$pelicula['title']}}  </p> 
            </li> 
    </ul>
    @empty 
    @endforelse

        @endsection 

</body> 
</html>
