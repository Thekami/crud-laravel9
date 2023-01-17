@extends('tema.app')

@section('title', "Editar tarea")

@section('contenido')
    <h3>Editar tarea "{{ $tarea->nombre }}"</h3>

    <form action="{{ route('tarea.update', $tarea) }}" method="POST">
        @method('put')
        {{-- Así se pasa una variable como parámetro al componente --}}
        <x-tarea-form-body :tarea="$tarea"/>

        {{-- Así se pasa texto como parámetro al componente 
             Básicamente solo se elimina el : --}}
        {{-- <x-tarea-form-body tarea="texto"/>  --}}
    </form>

    {{-- Este fragmento de código permite mostrar errores de validación encontrados desde el controlador --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
@endsection