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
Route::get('/registrarse', function (){
  return view('auth/register');
});

Route::get('/home', 'HomeController@index')->name('home');

/* Controlador para Relac de generos y  peliculas, 
listado es la funcion*/
Route::get('/peliculas', 'PeliculasController@listado'); 

//controlador para detalles peliculas,sus actores,genero td la inf por id
Route::get('/pelicula/{id}', "PeliculasController@detalle");
 
//listado de tds las peliculas detallada, paginate  relacion de N:- M 
  Route::get('/actores', 'PeliculasController@actores'); 
 
//controlador  para vista solo titulo y enlaces al detalle 
  Route::get('/index/{id}', 'PeliculasController@enlace'); 

  //Lista de Pelicula sin loguearse
Route::get('/bienvenidos', 'PeliculasController@vista');

#### ABM PARA LOS ADMINISTRADORES ####

//ROUTES PARA AGREGAR
Route::get('/peliculas/create', function() {
  return view('createPeliculas'); 
 });

Route::post('/peliculas/create', 'PeliculasController@createPeli'); 


//Formulario del PANEL DE CONTROL (ABM)
Route::get('/dd', 'PeliculasController@formul');

//ROUTE PARA ELIMINAR 
Route::get('/eliminarPelicula/{id}','PeliculasController@destroy');

//FORMULARIO De MODIFICAR PELICULA
Route::get('/formModificarPelicula/{id}', 'PeliculasController@edit'); 
Route::post('/editarPelicula/{id}', 'PeliculasController@update'); 

