@extends('tema.app')

@section('title', "Ver tarea")

@section('contenido')

    <h4>Tarea: "{{ $tarea->nombre }}"</h4>

    <ul>
        <li>Finalizado: <strong>{{ $tarea->finalizado() }}</strong></li>
        <li>Urgencia: <strong>{{ $tarea->urgencia() }}</strong></li>
        <li>Fecha limite: <strong>{{ $tarea->fecha_limite->format('H:i d/m/Y') }}</strong></li>
    </ul>
    <p>{{ $tarea->descripcion; }}</p>

    <a href="" class="btn btn-sm btn-success"> <span class="fa fa-pencil"></span> Modificar</a>
    <a href="" class="btn btn-sm btn-danger"> <span class="fa fa-destroy"></span> Eliminar</a>
    
@endsection