@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>
@stop

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/estudiantes/create">Nuevo</a>
        <table class="table">
          <thead>
            <tr>
              <th>Codigo</th>
              <th>Nombre</th>
              <th>Edad</th>
              <th>Fecha</th>
              <th>Genero</th>
              <th>Ciudad</th>
              <th>Barrio</th>
              <th>Programa</th>
              <th>Actualizar</th>
            <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($estudiantes as $estudiante)
            <tr>
              <td>{{$estudiante->codestudiante}}</td>
              <td>{{$estudiante->nomestudiante}}</td>
              <td>{{$estudiante->edaestudiante}}</td>
              <td>{{$estudiante->fechestudiante}}</td>
              <td>{{$estudiante->sexestudiante}}</td>
              <td>{{$estudiante->ciudad->nomciudad}}</td>
              <td>{{$estudiante->barrio->nombarrio}}</td>
              <td>{{$estudiante->programa->nomprograma}}</td>

              <td>
                <a href="{{ route('estudiantes.actualizar',$estudiante->codestudiante) }}" class="btn btn-success">Editar</a>
              </td>
              <td>
                <form method="POST" action="{{ route('estudiantes.destroy',$estudiante->codestudiante) }}">
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
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
