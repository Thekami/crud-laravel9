@extends('tema.app')

@section('title', "Listado de tareas")

@section('contenido')
<h3>Listado de tareas</h3>

<table class="table table-responsive">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Finalizada</th>
            <th>Fecha limite</th>
            <th>Urgencia</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tareas as $tarea)
            <tr>
                <td>{{ $tarea->nombre }}</td>
                <td>{{ $tarea->finalizada }}</td>
                <td>{{ $tarea->fecha_limite }}</td>
                <td>{{ $tarea->urgencia }}</td>
                <td>{{ $tarea->descripcion }}</td>
                <td>
                    <button class="btn btn-sm btn-primary">Ver</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection