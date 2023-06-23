
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop
@section('content')
<h2>Editar Facultad</h2>
    <form method="POST" action="{{route('facultades.updateFacultad',$facultad->codfacultad)}}" class="col-6">
        @csrf
        <div class="form-group">
          <label for="id">ID:</label>
          <input type="text" class="form-control" id="id" placeholder="Código de Facultad" name="codfacultad" readonly value='{{ $facultad->codfacultad }}'>
        </div>
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" placeholder="Nombre de Facultad<" name="nomfacultad" value='{{ $facultad->nomfacultad }}'>
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
