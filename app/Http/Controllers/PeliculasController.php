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
 return redirect("/dd"); 
}  
  //esta funcion es para eliminar segun playground
  public function destroy($id)
  { 
    //recupera l pelicula mediante l bdd
    $pelicula = Pelicula::find($id); {
      //ACA ELIMINAR RELACION 
    $pelicula->delete();
    return redirect("/dd");  
  } 
  }
  //esto lo creo yo para llevar datos al formulario general
     public function formul() 
    {  
      $peliculas = Pelicula::all();
      $vac = compact('peliculas');
       return view('formulPelicula', $vac);
    } 

  //Inicio funcion MODIFICAR 
   
  public function edit($id)
  {
    $pelicula = Pelicula::find($id);
    return  view('editPelicula',['peliculas'=>$pelicula]);
  }

  public function update(Request $request, $id){
    $pelicula = Pelicula::find($id);
    $validar = $request->validate(
            [
                'nombre' => 'required|min:3|max:75'
            ]);
    $pelicula->title = $request->title;
    $pelicula->rating = $request->rating;
    $pelicula->awards = $request->awards;
    $pelicula->release_date = $request->release_date;
    $pelicula->genero->name = $request->genero->name; 
  //$peliculas->imagen = $request->imagen;

    $pelicula->update(); 
    return redirect('/dd'); 
  }
}    

