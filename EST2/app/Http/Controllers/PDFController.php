<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function PDF(){
        $pdf = \PDF::loadView('constancia');
        return $pdf->download('constancia.pdf');
    }
    public function PDF2(){
        $pdf2 = \PDF::loadView('kardex');
        return $pdf2->download('kardex.pdf');
    }
    public function PDF3(){
        $pdf3 = \PDF::loadView('historial_academico');
        return $pdf3->download('historial_academico.pdf');
    }
}
