@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesores</h1>
@stop

@section('content')
<form method="POST" action="{{route('profesores.store')}}" class="col-6">
    @csrf
    <div class="form-group">
      <label for="id">ID profesor:</label>
      <input type="text" class="form-control" id="codfacultades" placeholder="Ingresa el codigo del profesor" name="codprofesor">
    </div>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nomprofesor" placeholder="Ingresa el nombre" name="nomprofesor">
    </div>
    <div class="form-group">
        <label for="nombre">Catedra:</label>
        <select class="form-select custom-select" name="catprofesor" id="catprofesor">
            @foreach ($materias as $materia)
            <option value="{{ $materia->codmateria }}">{{ $materia->nommateria }}</option>
            @endforeach
    </select>
      </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
