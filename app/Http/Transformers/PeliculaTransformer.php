<?php
namespace App\Http\Transformers;

use App\Pelicula;
use League\Fractal\TransformerAbstract;

class PeliculaTransformer extends TransformerAbstract {

    public function transform(Pelicula $pelicula){


        return [
            'id'     => $pelicula->id,
            'title'  => $pelicula->titulo,
            'rating' => $pelicula->rating,
            'length' => $pelicula->duracion 
        ];
    }
}