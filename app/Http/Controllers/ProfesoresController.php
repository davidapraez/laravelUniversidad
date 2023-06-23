<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profesores;
use App\Models\Materias;

class ProfesoresController extends Controller
{
    //
    public function index(){
        $profesores = Profesores::all();
        return view('profesores.listado', compact('profesores'));
    }
    public function create(){
        $materias = Materias::all();
        return view('profesores.create',compact('materias'));
    }
    public function store(Request $request){
        $profesor = new Profesores();
        $profesor->codprofesor = $request->codprofesor;
        $profesor->nomprofesor = $request->nomprofesor;
        $profesor->materias_codmateria = $request->catprofesor;
        $profesor->save();
        return redirect()->route('profesores.listado');
    }
    public function destroy(Request $request) {
        $profesor= $request->codprofesor;
        Profesores::where('codprofesor', $profesor)->delete();

        return redirect()->route('profesores.listado');
    }
    public function formActualizar($codprofesor) {
        $profesor = Profesores::findOrFail($codprofesor);
        $materias = Materias::all();
        return view('profesores.update', compact('profesor','materias'));
    }
    public function updateProfesor(Request $request, $codprofesor){
        $profesor = Profesores::findOrFail($codprofesor);
        $profesor->codprofesor = $request->input('codprofesor');
        $profesor->nomprofesor = $request->input('nomprofesor');
        $profesor->materias_codmateria = $request->input('catprofesor');
        $profesor->save();
        return redirect()->route('profesores.listado');
    }
}
