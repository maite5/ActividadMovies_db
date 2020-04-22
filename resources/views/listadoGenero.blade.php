@section('Titulos')
    
<h1>  Generos y sus titulos<h1> 
    <ul>
        @foreach ($generos as $genero)
        <li>
          
            {{$genero->name}}
            Peliculas
            <ul> 
                @foreach ($genero->peliculas as $pelicula)
                    <li> {{$pelicula->title}}  </li>
                @endforeach
        </li>  

            @endforeach
        
    </ul>
@endsection