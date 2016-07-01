<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Actor;


class ActorController extends Controller
{
    public function getNombreCompleto(){
        
        $actor = Actor::all();
        return view('actores',[
            'actor' => $actor
        ]);
    }

    public function show($nombre){

        $actor = Actor::where('nombre', $nombre)->get();
        //dd($actor);

        return view('actores', [
            'actores'=> $actor
        ]);
    }

    public function listar(){
        // Actor viene de haber creado el modelo de Actor con eloquent que me conecto con la base de datos
        $actores = Actor::all();
        return view('actores',[
            'actores' => $actores
        ]);
    }

    public function post(Request $request){
        //dd($request->nombre);

        $q = $request->nombre;
        //dd($q);
        $actores = Actor::where('nombre', "LIKE", "%" . $q . "%")->get();
        
        //dd($actores);
        
        return view('actores', [
            'actores' => $actores
        ]);
    }

    public function  add(){

        return view('agregarActor');

    }

    public function store (Request $request){

        $actor = new Actor();

        $actor->nombre = $request->nombre;
        $actor->apellido = $request->apellido;
        
        $actor->save();

        // faltaria redireccionar al listado de actores
    }


}

