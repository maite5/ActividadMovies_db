@extends('layouts.app')

    @section('fqa')
    "\css\basico.css"
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenidos</div>

                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <a href="{{url('/dd')}}">Admin</a>
                    @else
                    <a href="{{url('/index/pelicula')}}">Click aqui para ver el detalles de las Peliculas</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
