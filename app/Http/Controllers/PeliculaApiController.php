<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use Dingo\Api\Routing\Helpers;
use App\Http\Requests;
use App\Http\Transformers\PeliculaTransformer;

class PeliculaApiController extends Controller
{
    use Helpers;

    public function listado(){

        $pelicula = Pelicula::all();

        return $this->response->collection($pelicula, new PeliculaTransformer());

    }
}
