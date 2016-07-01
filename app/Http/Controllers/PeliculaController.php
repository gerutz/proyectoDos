<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pelicula;

class PeliculaController extends Controller
{
    // creo un metodo ver

    public function ver(){
        //traer modelo Peliculas

        $peliculas = Pelicula::all();
        
        return view('peliculas',[
            'peliculas'=>$peliculas
        ]);
    }

}
