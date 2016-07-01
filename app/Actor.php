<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected  $table = 'actor';

    public $timestamps = false;

    protected $guarded = [];

    // primera opcion para guardar datos en la base de datos
    //  $fillable = [ "campo1" , "campo2" ]
    // segunda opcion para permitir realizar cambios en la base de datos.
}
