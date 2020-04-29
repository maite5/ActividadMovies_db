@extends('layouts.plantilla')
@section('modificar')
  Administracion Pelicula
@endsection

@section('h1')
  Editar Pelicula
@endsection
@section('main')
  <div class="alert bg-light py-3">
      <form action="/editPelicula/{{$pelicula->id}}" method="post">
          @csrf
          Nombre Pelicula:
          <br>
          <input type="text" name="title" class="form-control" value="{{$peliculas->title}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Rating Pelicula:
          <br>
          <input type="text" name="rating" class="form-control" value="{{$peliculas->rating}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Awards Pelicula:
          <br>
          <input type="text" name="awards" class="form-control" value="{{$peliculas->awards}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Fecha de extreno Pelicula:
          <br>
          <input type="date" name="release_date" class="form-control" value="{{$peliculas->release_date}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Genero Pelicula:
          <br>
          <input type="text" name="genero" class="form-control" value="{{$peliculas->genero->name}}">
         @error('nombre') {{$message}} @enderror
          <br>
      <!--    Imagen Producto:
          <br>
          <img id="imagen" alt="Aqui se carga la imagen" src=""/>
          <input type="imagen" name="imagen" id="/imagen" onchange="document.getElementById('imagen').src=this.value;" class="form-control" value="{{$producto->imagen}}">
         @error('nombre') {{$message}} @enderror   -->
          <br>
          <button class="btn btn-dark">Guardar cambios</button>
      </form>
  </div>
@endsection  
</body>
</html>