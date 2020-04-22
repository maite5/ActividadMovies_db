@section('main')

@section('h1', 'Panel de administración de productos')

{{--  muestreo si NO hay contenidos --}}
@if ( count( $productos ) == 0 )
<div class="alert alert-warning">No se han encontrado registros</div>
@else
{{--  muestreo si hay contenidos --}}
{{-- mensajes de ok --}}
@if( session()->has('mensaje') )
    <div class="alert alert-success">
        {{ session()->get('mensaje') }}
    </div>
@endif

<table class="table table-bordered table-stripped table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Nombre producto</th>
            <th>Title</th>
            <th>Ratin</th>
            <th>Awards</th>
            <th>Fecha de Estreno</th>
            <th>Genero</th>
       <!--     <th>Stock</th>
            <th>Imagen</th>   -->
            <th colspan="2" class="text-center">
                <a href="/agregarPelicula" class="btn btn-outline-light px-4">
                    <i class="far fa-plus-square fa-lg mr-2"></i>
                    agregar
                </a>
            </th>
        </tr>
    </thead>
    <tbody>
    @foreach( $peliculas as $pelicula )
        <tr>
            <td>{{ $pelicula->title }}</td>
            <td>{{ $pelicula->rating }}</td>
           <td>{{ $pelicula->awards->mkNombre }} {{-- $producto->idMarca --}}</td>
           <td>{{ $pelicula->realease_date->catNombre }}{{-- $producto->idCategoria --}}</td>
            <td>{{ $pelicula->prdPresentacion }}</td>
            
         <!--   <td>
                <img src="images/productos/{{ $producto->prdImagen }}" class="img-thumbnail">
            </td> -->
            <td>
                <a href="/formEditarProducto/{{ $producto->idProducto }}" class="btn btn-outline-secondary px-4">
                    <i class="far fa-edit fa-lg mr-2"></i>
                    Modificar
                </a>
            </td>
            <td>
                <a href="/borrarPelicula/{{ $producto->idProducto }}" class="btn btn-outline-secondary px-4">
                    <i class="far fa-minus-square fa-lg mr-2"></i>
                    Eliminar
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $productos->links() }}

@endif

@endsection

