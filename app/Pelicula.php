<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    // este protected es porque la convencion de Laravel busca la tabla peliculas.
    // le suma una s a la clase

    protected $table = 'pelicula';
    
}
