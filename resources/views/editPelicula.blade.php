@extends('layouts.plantilla')
@section('modificar')
  Administracion Pelicula
@endsection

@section('h1')
  Editar Pelicula
@endsection
@section('main')
  <div class="alert bg-light py-3">
      <form action="/editarPelicula/{{$pelicula->id}}" method="post">
          @csrf
          ID Pelicula:
          <br>
          <input type="text" name="id" class="form-control" value="{{$pelicula->id}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Nombre Pelicula:
          <br>
          <input type="text" name="title" class="form-control" value="{{$pelicula->title}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Rating Pelicula:
          <br>
          <input type="text" name="rating" class="form-control" value="{{$pelicula->rating}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Awards Pelicula:
          <br>
          <input type="text" name="awards" class="form-control" value="{{$pelicula->awards}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Fecha de extreno Pelicula:
          <br>
          <input type="date" name="release_date" class="form-control" value="{{$pelicula->release_date}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Genero Pelicula:
          <br>
          <input type="text" name="genero" class="form-control" value="{{$pelicula->genero->name}}">
         @error('nombre') {{$message}} @enderror
          <br>
          <button class="btn btn-dark">Guardar cambios</button>
      </form>
  </div>
@endsection  
</body>
</html>