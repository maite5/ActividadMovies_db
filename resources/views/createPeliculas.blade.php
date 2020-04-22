@extends('layouts/plantilla')
@section('fqa')
    "\css\basico.css"
@endsection

    @section('title', 'Alta de una nueva Marca')


    @section('main')

        @section('h1', 'Alta de un nuevo producto')

        <div class="card bg-light col-md-7 mt-5 p-3 mx-auto">
        <form action="/peliculas/create" method="post" enctype="multipart/form-data">
           <!-- @csrf -->
            {{csrf_field()}}  

            <div class="form-group">
                <label for="title">Titulo:</label>
                <input type="text" class="form-control" name="title"  value="{{ old('title') }}" id="title" placeholder="Nombre de la pelicula" required>
            </div>
            <div class="form-group">
            <label for="rating">Rating:</label>
            <div class="input-group mb-2">
               <div class="input-group-prepend">
              <!--      <div class="input-group-text">$</div>  -->
                </div>
                <input type="text" name="rating" value="{{ old('rating') }}" class="form-control" id="rating" placeholder="Rating" required >
            </div>
            </div>

            <div class="form-group">
                <label for="awards">Awards:</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="number" name="awards" value="{{ old('awards') }}" class="form-control" id="awards" placeholder="0" min="0" step="0" required>
                </div>  
                </div>  


      <!--   <div class="form-group">
            <label for="awards">Awards:</label>
            <textarea name="awards" class="form-control" id="awards">{{ old('awards') }}</textarea>
            </div> -->

            <div class="form-group">
            <label for="release_date">Fecha de Estreno:</label>
            <input type="date" name="release_date" value="{{ old('release_date') }}"class="form-control" id="release_date" required min="0" step="1">
            </div>

      <!--      Imagen: <br>
            <input type="file" name="prdImagen" class="form-control"> -->
            <br> 
            <button type="submit" class="btn btn-dark px-4">
                <i class="far fa-plus-square fa-lg mr-2"></i>
                Agregar Pelicula
            </button>
            <a href="/dd" class="btn btn-outline-secondary ml-3">
                volver al panel de productoss
            </a>

            @if(count($errors))
                <div class="form-group mt-3">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

        </form>
        </div>

    @endsection