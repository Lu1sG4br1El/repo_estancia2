<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\validadorT;
use Illuminate\Http\Request;

class controBD_T extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultarTalleres = DB::table('talleres')->get();
        return view('consultarT', compact('consultarTalleres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('taller');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorT $req)
    {
        DB::table('talleres')->insert([
            'nombreT'=>$req->input('txtTaller'),
            'docente'=>$req->input('txtDocente'),
            'FyH'=>$req->input('txtHdE')
        ]);
        return redirect('listaT/create')->with('confirmacion','Los datos de la solicitud se guardaron :D');
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
        $tallerid=DB::table('talleres')->where('idT', $id)->first();
        return view('editarTaller', compact('tallerid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        DB::table('talleres')->where('idT', $id)->update([
            'nombreT'=>$req->input('txtTaller'),
            'docente'=>$req->input('txtDocente'),
            'FyH'=>$req->input('txtHdE')
        ]);
        return redirect('listaT')->with('mensaje','Los datos del taller se actualizaron :O');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('talleres')->where('idT', $id)->delete();
        return redirect('listaT')->with('mensaje', "La solicitud de taller se ha eliminado :v");
    }

    public function confirm($id)
    {
        $tallerid=DB::table('talleres')->where('idT', $id)->first();
        return view('confirmarElim', compact('tallerid'));
    }
}
