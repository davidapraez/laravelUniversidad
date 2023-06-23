@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1 class="titulo">Programas</h1>
@stop

@section('content')
<div class="container titulo-container">

    <a class="btn btn-primary" href="/programas/create">Nuevo</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Facultad</th>
          <th>Actualizar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($programas as $programa)
        <tr>
          <td>{{$programa->codprograma}}</td>
          <td>{{$programa->nomprograma}}</td>
          <td>{{$programa->facultad->nomfacultad}}</td>
          <td>
            <a href="{{ route('programas.actualizar',$programa->codprograma) }}" class="btn btn-success">Editar</a>

          </td>
          <td><form method="POST" action="{{ route('programas.destroy',$programa->codprograma) }}">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Eliminar" />
        </form></td>
        </tr>
        @empty
            <p>No hay registros</p>
        @endforelse
      </tbody>
    </table>
  </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
