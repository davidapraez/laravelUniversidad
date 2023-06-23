@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>


@stop

@section('content')
<form method="POST" action="{{route('estudiantes.updateEstudiantes',$estudiante->codestudiante)}}" class="col-6">
    @csrf
    <div class="form-group">
      <label for="id">ID:</label>
      <input type="text" class="form-control" id="id" placeholder="Ingresa el Codigo del estudiante" name="codestudiante" readonly value="{{ $estudiante->codestudiante }}">
    </div>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre" name="nomestudiante" value="{{ $estudiante->nomestudiante }}">
    </div>
    <div class="form-group">
        <label for="nombre">Edad:</label>
        <input type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre" name="edaestudiante" value="{{ $estudiante->edaestudiante }}">
      </div>
      <div class="form-group">
        <label for="nombre">Fecha:</label>
        <input type="date" class="form-control" id="nombre" placeholder="Ingresa el nombre" name="fechestudiante" value="{{ $estudiante->fechestudiante }}">
      </div>
      <div class="form-group">
        <label for="nombre">Genero:</label>
        <input type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre" name="sexestudiante" value="{{ $estudiante->sexestudiante}}">
      </div>
      <div class="form-group">
        <label for="nombre">Ciudad:</label>
        <select class="form-select custom-select" aria-label=".form-select-sm example" name="ciudad" id="ciudad">
            @foreach ($ciudades as $ciudad)
            <option value="{{ $ciudad->codciudad }}">{{ $ciudad->nomciudad }}</option>
            @endforeach
    </select>
      </div>
      <div class="form-group">
        <label for="nombre">Barrio:</label>
        <select class="form-select custom-select"  aria-label=".form-select-sm example" name="barrio" id="barrio">
            @foreach ($barrios as $barrio)
            <option value="{{ $barrio->codbarrio }}">{{ $barrio->nombarrio }}</option>
            @endforeach
    </select>
      </div>
      <div class="form-group">
        <label for="nombre">Programa:</label>
        <select class="form-select custom-select"  aria-label=".form-select-sm example" name="programa" id="programa">
            @foreach ($programas as $programa)
            <option value="{{ $programa->codprograma }}">{{ $programa->nomprograma }}</option>
            @endforeach
    </select>
      </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/estilos.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
