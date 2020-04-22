<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//registrarse
Route::get('/registrarse', function (){
  return view('auth/register');
});

Route::get('/home', 'HomeController@index')->name('home');

/*  Este controlador es para Relac de generos y  peliculas, 
listado es la funcion*/
Route::get('/peliculas', 'PeliculasController@listado'); 



//controlador para detalles peliculas y sus actores
Route::get('/pelicula/{$id}','PeliculasController@detalle'); 
  //este controlador buscaran la funcion return view("detallePelicula", $vac); 

//listado de tds los actores y detalle peliculas relacion de N:- M 
  Route::get('/actores', 'PeliculasController@actores'); 
 

//controlador  para vista solo pelicula y enlace
  Route::get('/index', 'PeliculasController@enlace'); 

//ROUTES PARA AGREGAR
Route::get('/peliculas/create', function() {
  return view('createPeliculas'); 
 });
//Route::get('/agregarPelicula', 'PeliculasController@agregar');

Route::post('/peliculas/create', 'PeliculasController@createPeli'); 


//Route para borrar 
//Route::post('/borrarPelicula/{$id}', 'PeliculasController@destroy');

//formulario de Marcos 
Route::get('/dd', 'PeliculasController@formul');

//aqui inicia los Route para borrar segùn el video d herni

Route::get('/pais/{id}', 'PeliculasController@detallePais'); 
Route::get('/pais/borrar/{id}', 'PeliculasController@alertaPais');
Route::post('/pais/borrar{id}', 'PeliculasController@eliminarPais'); 


