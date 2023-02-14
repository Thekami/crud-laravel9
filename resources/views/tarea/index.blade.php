@extends('tema.app')

@section('title', "Listado de tareas")

@section('contenido')
<h3>Listado de tareas</h3>

@livewire('tarea-index')
@endsection