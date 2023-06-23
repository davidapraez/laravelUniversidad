@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="titulo">Facultades</h1>


@stop

@section('content')


  <div class="container">
    <a class="btn btn-primary" href="/facultades/create">Nuevo</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Actualizar</th>
        <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($facultades as $facultad)
        <tr>
          <td>{{$facultad->codfacultad}}</td>
          <td>{{$facultad->nomfacultad}}</td>
          <td>
            {{--  <form method="POST" action="{{ route('facultades.actualizar',$facultad->codfacultad) }}">
                @csrf
                @method('GET')
                <input type="submit" class="btn btn-success" value="Editar" />
            </form>  --}}
            <a href="{{ route('facultades.actualizar',$facultad->codfacultad) }}" class="btn btn-success">Editar</a>
          </td>
          <td>
            <form method="POST" action="{{ route('facultades.destroy',$facultad->codfacultad) }}">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Eliminar" />
            </form>
          </td>
        </tr>

        @empty
            <p>No hay registros</p>
        @endforelse

      </tbody>
    </table>
  </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/estilos.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
