@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programas</h1>


@stop

@section('content')
<form method="POST" action="{{route('programas.updatePrograma',$programa->codprograma)}}" class="col-6">
    @csrf
    <div class="form-group">
      <label for="id">ID:</label>
      <input type="text" class="form-control" id="id" readonly placeholder="Ingresa el ID del programa" name="codprograma" value="{{  $programa->codprograma}}">
    </div>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre" name="nomprograma" value="{{  $programa->nomprograma}}">
    </div>
    <div class="form-group">
        <label for="facultad">Facultad:</label>
        <select class="form-select custom-select" name="facultad" id="facultad">
            @foreach ($facultades as $facultad)
            <option value="{{ $facultad->codfacultad }}">{{ $facultad->nomfacultad }}</option>
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
