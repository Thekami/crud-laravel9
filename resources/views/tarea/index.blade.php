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
                <td>{{ $tarea->finalizado() }}</td>
                <td>{{ $tarea->fecha_limite->format('d/m/Y H:i:s') }}</td>
                <td>{{ $tarea->urgencia() }}</td>
                <td>{{ $tarea->descripcion }}</td>
                <td>
                    <a href="{{ route('tarea.edit', $tarea->id) }}" class="btn btn-sm btn-success ">
                        <span class="fa fa-pencil"></span> Editar
                    </a>
                    <a href="{{ route('tarea.show', $tarea->id) }}" class="btn btn-sm btn-primary">
                        <span class="fa fa-eye"></span> Ver
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection