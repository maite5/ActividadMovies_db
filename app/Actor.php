<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// el actor estaba en minusula
class Actor extends Model
{   protected $table= "actors";
    //
    public $guarded = []; 

    public function getNombre(){
        return $this->first_name. ' ' . $this->last_name;
    }
    //aqui va el metodo relacion de muchos a muchos

    public function peliculas()
    {
        //imp 1para nomMode, 2para tabla intermedia, 3para clavFo, 4clavF
    return $this->belongsToMany("App\Pelicula", "actor_movie", "actor_id", "movie_id");    
    } 
    public function pelicula(){  
    return $this->hasMany("App\Pelicula", "movie_id");  
}
   }