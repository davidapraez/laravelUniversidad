<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiantes;
use App\Models\Ciudades;
use App\Models\Barrios;
use App\Models\Programas;

class EstudiantesController extends Controller
{
    //
    public function index(){
        $estudiantes = Estudiantes::all();

        return view('estudiantes.listado', compact('estudiantes'));
    }
    public function create(){
        $ciudades = Ciudades::all();
        $barrios = Barrios::all();
        $programas= Programas::all();
        return view('estudiantes.create',compact('ciudades','barrios','programas'));
    }
    public function store(Request $request){
        $estudiante = new Estudiantes();
        $estudiante->codestudiante = $request->codestudiante;
        $estudiante->nomestudiante = $request->nomestudiante;
        $estudiante->edaestudiante = $request->edaestudiante;
        $estudiante->fechestudiante = $request->fechestudiante;
        $estudiante->sexestudiante = $request->sexestudiante;
        $estudiante->ciudades_codciudad = $request->ciudad;
        $estudiante->barrios_codbarrio= $request->barrio;
        $estudiante->programas_codprograma= $request->programa;
        $estudiante->save();
        return redirect()->route('estudiantes.listado');
    }
    public function destroy(Request $request) {
        $estudiante= $request->codestudiante;
        Estudiantes::where('codestudiante', $estudiante)->delete();

        return redirect()->route('estudiantes.listado');
    }
    public function formActualizar($codestudiante) {
        $estudiante= Estudiantes::findOrFail($codestudiante);
        $ciudades = Ciudades::all();
        $barrios = Barrios::all();
        $programas= Programas::all();
        return view('estudiantes.update', compact('estudiante','ciudades','barrios','programas'));
    }
    public function updateEstudiantes(Request $request, $codestudiante){
        $estudiante = Estudiantes::findOrFail($codestudiante);
        $estudiante->codestudiante = $request->input('codestudiante');
        $estudiante->nomestudiante = $request->input('nomestudiante');
        $estudiante->edaestudiante = $request->input('edaestudiante');
        $estudiante->fechestudiante = $request->input('fechestudiante');
        $estudiante->sexestudiante = $request->input('sexestudiante');
        $estudiante->ciudades_codciudad = $request->input('ciudad');
        $estudiante->barrios_codbarrio= $request->input('barrio');
        $estudiante->programas_codprograma= $request->input('programa');
        $estudiante->save();
        return redirect()->route('estudiantes.listado');
    }
}
