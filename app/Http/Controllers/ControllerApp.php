<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerApp extends Controller
{
    private $mensajes = [
        'home' => "Welcome Home",
        'aboutus' => "We are the Champions",
        'peliculas' => "Peliculas recomendadas"
    ];
    
    private $peliculas = [
            'band of brothers',
            'heidi',
            'heman'
    ];

    private $nosotros = [
        'German Utz',
        'Gabriel Utz'
    ];
    
//    public function show($id){
//        return view('welcome', [
//                "mensaje" => $this->mensajes[$id],
//                "peliculas" => $this->peliculas
//            ]);
//    }

    public function peliculas(){
        return view('welcome', [
            'pelicula' =>$this->peliculas[1],
        ]);
    }

    public function about(){
        return view('welcome', [
             'yo    ' => $this->nosotros[0]
        ]);
    }
}
