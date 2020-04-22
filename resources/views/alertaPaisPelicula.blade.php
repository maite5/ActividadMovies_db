@extends('layouts.plantilla')
    @section('fqa')
    "\css\basico.css"
@endsection
@section('titulo')
    Eliminar Pelicula
    @endsection 
    @section('main')
        
    @endsection
    @section ('principal') 
    <h1> Esta seguro que quiere eliminar la pelicula </h1>

<div class="container">
    <div class="row">  
        
        
            <div class="body">
                <h4 class="ctitle">{{ $peliculas->title }}</h4>  
                <ul>
                    <li><strong>Rating:</strong> {{ $peliculas->rating }}</li>
                    <li><strong>Awards:</strong> {{ $peliculas->awards }}</li>
                </ul>
            </div>
            <form class="text-center" method="post" action="/pais/borrar/{{ $peliculas->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h5>¿Estás seguro de borrar esta Pelicula?</h5>
                <input type="hidden" name="id" value="{{ $peliculas->id }}">        
                <button class="btn btn-danger btn-lg btn-block" type="submit">Eliminar pelicula</button>
            </form>
        </div>          
        
    </div>
</div>
</section>
@endsection 