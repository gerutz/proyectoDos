<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use Dingo\Api\Contract\Routing\Helpers;
use App\Http\Requests;

class PeliculaApiController extends Controller
{
    use Helpers;

    public function listado(){
        $pelicula = Pelicula::all();

        return $this->response->collection($pelicula);
    }
}
