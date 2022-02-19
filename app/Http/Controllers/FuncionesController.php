<?php

namespace App\Http\Controllers;

use App\Funcion;

use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    public function index() {
        $funciones = Funcion::all();
        $argumentos = array();
        $argumentos['funciones'] = $funciones;

        return view('funciones.index',$argumentos);
    }


    public function destroy($id){
        $funcion = Funcion::find($id);

        if($funcion){
            //Si la encuentra la borra
            if($funcion->delete()){
                return redirect()->route('funciones.index');
            }

            return redirect()->route('funciones.index');
        }

        return redirect()->route('funciones.index');

    }

    public function store(Request $request){
        $nuevaCartelera = new Funcion();
        $nuevaCartelera->pelicula = $request->input('pelicula');
        $nuevaCartelera->fecha = $request->input('fecha');
        $nuevaCartelera->hora = $request->input('hora');

        if ($nuevaCartelera-> save()){
            return redirect() -> route('funciones.index');
        }

        return redirect() -> route('funciones.index');
    }


    public function create(){
        return view('funciones.create');

    }



}
