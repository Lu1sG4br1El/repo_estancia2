<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\validadorS;
use Illuminate\Http\Request;

class controBD_S extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultarServicios = DB::table('servicios')->get();
        return view('consultarS', compact('consultarServicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorS $req)
    {
        DB::table('servicios')->insert([
            'servicio'=>$req->input('txtServe'),
            'estatus'=>$req->input('txtStatus'),
        ]);
        return redirect('listaS/create')->with('confirmacion','La solicitud se ha enviado correctamente :D');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $servicioid=DB::table('servicios')->where('idS', $id)->first();
        return view('editarServicio', compact('servicioid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        DB::table('servicios')->where('idS', $id)->update([
            'servicio'=>$req->input('txtServe'),
            'estatus'=>$req->input('txtStatus')
        ]);
        return redirect('listaS')->with('mensaje','Se actualizo el estatus del servicio solicitado >:D');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('servicios')->where('idS', $id)->delete();
        return redirect('listaS')->with('mensaje', "El estatus del servicio esta sin adeudos, por lo tanto fue eliminado :v");
    }

    public function confirm($id)
    {
        $servicioid=DB::table('servicios')->where('idS', $id)->first();
        return view('confirmarElimSer', compact('servicioid'));
    }
}
