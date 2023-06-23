<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facultades;

class FacultadesController extends Controller
{
    public function index(){
        $facultades = Facultades::all();
        return view('facultades.listado', compact('facultades'));
    }
    public function create(){
        return view('facultades.create');
    }
    public function store(Request $request){
        $facultad = new Facultades();
        $facultad->codfacultad = $request->codfacultad;
        $facultad->nomfacultad = $request->nomfacultad;
        $facultad->save();
        return redirect()->route('facultades.listado');
    }
    public function destroy(Request $request) {
        $facultad = $request->codfacultad;
        Facultades::where('codfacultad', $facultad)->delete();

        return redirect()->route('facultades.listado');
    }
    public function actualizar($codfacultad) {
        $facultad = Facultades::findOrFail($codfacultad);
        return view('facultades.update', compact('facultad'));
    }
    public function updateFacultad(Request $request, $codfacultad){
        $facultad = Facultades::findOrFail($codfacultad);
        $facultad->codfacultad = $request->input('codfacultad');
        $facultad->nomfacultad = $request->input('nomfacultad');
        $facultad->save();
        return redirect()->route('facultades.listado');
    }

    public function guardar(Request $request, $id) {
        $facultad = Facultades::findOrFail($id);
        $facultad->codfacultad = $request->codfacultad;
        $facultad->nomfacultad = $request->nomfacultad;
        $facultad->save();

        return redirect()->route('facultades.listado');
    }

}
