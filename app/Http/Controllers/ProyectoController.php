<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function index(){
        return view('proyecto.create');
    }
    public function create(Request $request){
        $proyecto = new Proyecto;
        $proyecto->nombre = $request->nombre;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->imagen = $request->imagen;
        $proyecto->url = $request->url;

        $proyecto->save();
        return redirect()->route('portafolio')->with('success', 'Registrado correctamente');
    }
}
