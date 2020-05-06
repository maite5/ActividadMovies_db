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
     
      public function detalle($id) {
        $pelicula = Pelicula::find($id);
        return view('detallePelicula')->with('pelicula', $pelicula);
    }
  
  //esta la hice yo para q salga l vista d actoresc peli
    public function actores() {
     $peliculas = Pelicula::all();
      $vac = compact('peliculas');
      return view('listadoActores', $vac);
  }
  
  //Nombres d las peliculas index 
          public function enlace(){
          $peliculas = Pelicula::all();
          $vac = compact('peliculas');
       //    return view('enlacePelicula', $vac);
       return view('enlacePelicula', $vac); 
        }   

        //vista de Peliculas sin estar logueado 
        public function vista(){
          $peliculas = Pelicula::all();
          $vac = compact('peliculas');
           return view('vistaPelicula', $vac); 
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
    $vac = compact("pelicula");
    return  view('editPelicula',$vac);
  }

  public function update(Request $request)
    {
        
        $Pelicula = Pelicula::find($request->input('id'));
        $Pelicula->title = $request->input('title');
        $Pelicula->rating = $request->input('rating');
        $Pelicula->awards = $request->input('awards');
        $Pelicula->release_date = $request->input('release_date');
        $Pelicula->genero->name = $request->input('genero->name');
        $Pelicula->save();
        return redirect('/dd')
            ->with('mensaje', 'Pelicula '.$Pelicula->title.' modificada con éxito');
    }

  
}    

