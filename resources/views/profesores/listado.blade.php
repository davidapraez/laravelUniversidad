@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesores</h1>


@stop

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/profesores/create">Nuevo</a>
        <table class="table">
          <thead>
            <tr>
              <th>Codprofesor</th>
              <th>Nombre</th>
              <th>Catedra</th>
              <th>Actualizar</th>
            <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($profesores as $profesor)
            <tr>
              <td>{{$profesor->codprofesor}}</td>
              <td>{{$profesor->nomprofesor}}</td>
              <td>{{$profesor->materia->nommateria}}</td>
              <td>
                <a href="{{ route('profesores.actualizar',$profesor->codprofesor) }}" class="btn btn-success">Editar</a>

              </td>
              <td>
                <form method="POST" action="{{ route('profesores.destroy',$profesor->codprofesor) }}">
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
