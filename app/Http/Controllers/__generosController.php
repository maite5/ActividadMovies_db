<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;

class GenerosController extends Controller
{
    //esta l hice yo sin video

     public function listado() { 
    //$generos = Genero::All(); 

   // $vac= compact('generos');
    return view('listadoPelicula', $vac); 
     }


}

