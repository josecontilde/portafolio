<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index(){
        return view('portafolio.contactame');
    }
    public function enviarMensaje(Request $request){
        // Aquí manejas la lógica para procesar los datos del formulario y enviar el mensaje
        
        $contacto = new Contacto;
        $contacto->nombre = $request->nombre;
        $contacto->email = $request->email;
        $contacto->tipo_proyecto = $request->tipo_proyecto;
        $contacto->detalles = $request->detalles;

        $contacto->save();
        return redirect()->route('portafolio')->with('success', 'Mensaje enviado correctamente.');
    }
}
