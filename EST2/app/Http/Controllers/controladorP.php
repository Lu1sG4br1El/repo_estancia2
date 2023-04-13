<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorT;
use App\Http\Requests\validadorS;
use Illuminate\Http\Request;

class controladorP extends Controller
{
    function nuevoT(){
        return view('taller');
    }
    public function procesarTaller(validadorT $req){
        return redirect('/taller')->with('confirmacion','El taller se ha guardado :D');
    }
    public function procesarServicio(validadorS $req){
        return redirect('/servi')->with('confirmacion','Tu servicio se solicito correctamente :D');
    }
    function nuevoS(){
        return view('servi');
    }
    function fDocCons(){
        return view('documentos');
    }
}
