<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Programas;
use App\Models\Facultades;


class ProgramasController extends Controller
{
    //
    public function index(){
        $programas = Programas::all();
        $facultad = Facultades::all();
        return view('programas.listado', compact('programas','facultad'));
    }
    public function create(){
        $facultades = Facultades::all();
        return view('programas.create',compact('facultades'));
    }
    public function store(Request $request){
        $programas= new Programas();
        $programas->codprograma = $request->codprograma;
        $programas->nomprograma = $request->nomprograma;
        $programas->facultades_codfacultad = $request->facultad;
        $programas->save();
        return redirect()->route('programas.listado');
    }
    public function destroy(Request $request) {
        $programa= $request->codprograma;
        Programas::where('codprograma', $programa)->delete();

        return redirect()->route('programas.listado');
    }

    public function actualizar($codprograma) {
        $programa= Programas::findOrFail($codprograma);
        $facultades = Facultades::all();
        return view('programas.update', compact('programa','facultades'));
    }
    public function updatePrograma(Request $request, $codprograma){
        $programa = Programas::findOrFail($codprograma);
        $programa->codprograma = $request->input('codprograma');
        $programa->nomprograma= $request->input('nomprograma');
        $programa->facultades_codfacultad= $request->input('facultad');
        $programa->save();
        return redirect()->route('programas.listado');
    }
}
