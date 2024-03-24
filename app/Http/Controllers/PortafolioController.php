<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function __invoke(){
        $proyectos = Proyecto::all();
        return view('portafolio.principal',['proyectos'=> $proyectos]);
    }
}
