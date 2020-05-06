<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    //
    public $table ='movies';    
    public $guarded = []; 

    //Relacion belongs to(peliculas) a generos(Has many) clave foranea
    public function genero() { 
    return $this->belongsTo('App\Genero', 'genre_id');
 }
 //Relac de N.M pelicu a actores
    public function actores(){  //1para tipo objecto devuelvue, tablainterm, 2 y 3parametro claves foraneas
    return $this->belongsToMany('App\Actor', 'actor_movie', 'movie_id', 'actor_id' );

}
    //vista sin loguearse
    
 }
