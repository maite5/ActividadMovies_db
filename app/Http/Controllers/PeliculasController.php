<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula; 

class PeliculasController extends Controller
{
  //Relacion de detalle pelicula y actores
     public function listado() 
      {   $peliculas = Pelicula::paginate(6);
         // $peliculas = Pelicula::all();

          $vac = compact('peliculas');
           return view('listadoPelicula', $vac);
}  

  // return view('listadoPelicula');  

  //aparece en video de controlador le coloque para espec id, pero no lo uso
  
  //public function detalle($id) {
    //  $vac= compact("id");
     // return view("detallePelicula", $vac);
     public function detalle($id) {
       $peliculas =Pelicula::all($id);
        $vac= peliculas("id");
        return view("detallePelicula", $vac);
  }
  
  //esta la hice yo para q salga l vista d actoresc peli
    public function actores() 
 {
  $peliculas = Pelicula::all();
  $vac = compact('peliculas');
   return view('listadoActores', $vac);
  }
  
  //este lo hice yo para mostrar td ls nombres d las peliculas index
  public function enlace() 
      {
          $peliculas = Pelicula::all();
          $vac = compact('peliculas');
           return view('enlacePelicula', $vac); 
}  

// esto es de la API
public function listadoAPI(){
  $peliculas = Pelicula::all();
  return json_encode($peliculas);
  dd($peliculas);
  
}

// eSTO ES para el SAVE agregar pelicula
  public  function createPeli(Request $req) {
  $peliculaNueva = new Pelicula();
  $peliculaNueva->title=$req["title"];
  $peliculaNueva->rating=$req["rating"];
  $peliculaNueva->awards=$req["awards"];
  $peliculaNueva->release_date=$req["release_date"];
  $peliculaNueva->genre_id=$req["genre_id"]; 
  $peliculaNueva-> save(); 
 // return redirect ("/peliculas");   
 return view('/dd');
}  
  //esta funcion es para eliminar segun playground
  public function destroy(Request $formulario){ 
    $id=formulario['id'];
    //recupera l pelicula mediante l bdd
    $pelicula=Pelicula::find($id);
    $pelicula->delete();
    //return redirect ('/peliculas'); 
    return redirect ('/dd');
  } 
   





  //esto lo creo yo para llevar datos al formulario general
    public function formul(){
      $peliculas = Pelicula::all();
      $vac = compact('peliculas');
       return view('formulPelicula', $vac);
  }

  // Functiones para borrar
    public function  detallePais($id) { 
      $peliculas = Pelicula::find($id);
      $vac = compact('peliculas'); 
      return view('detallePais', $vac);
    
  }
    public function alertaPais($id) {
      $peliculas = Pelicula::find($id);
      $vac = compact('peliculas');
      return view('alertaPaisPelicula', $vac);
    }
      public function eliminarPais(Request $req){ 
     $id= $req["id"];
    $peliculas=Pelicula::find($id);
    $peliculas->delete(); 
    return redirect("/dd"); 
  }  
} 

