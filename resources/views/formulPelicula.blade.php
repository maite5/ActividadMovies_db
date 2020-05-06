@extends('layouts.plantilla')

 
@section('title', 'Panel de Peliculas')
 

    @section('h1', 'Panel de Peliculas')

    @section('main')

        <table class="table table-hover table-striped table-border">
            <thead class="thead-dark">
            <tr>
                <th><a href="" class="btn btn-dark">
                    Nombre Pelicula
                </a></th>
                <th>
                    <a href="" class="btn btn-dark">
                        Rating
                    </a></th>
                <th>
                    <a href="" class="btn btn-dark">
                        Awards
                    </a></th>
                    <th colspan="2">
                    <a href="/peliculas/create" class="btn btn-dark">
                        Agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
        @foreach( $peliculas as $pelicula )
            <tr>
                <td>{{ $pelicula->title }}</td>
                <td>{{ $pelicula->rating }}</td>
                <td>{{ $pelicula->awards }}</td>
                <td>
                    <a href="formModificarPelicula/{{$pelicula->id}}" class="btn btn-outline-secondary">
                        Modificar
                    </a>
                </td>
                <td>
                    <a href="eliminarPelicula/{{$pelicula->id}}" class="btn btn-outline-secondary">
                        Eliminar 
                    </a>
                </td>
            </tr>
        @endforeach
            </tbody>
        </table>

    @endsection

</body>
</html>