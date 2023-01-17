@extends('tema.app')

@section('title', "Nueva tarea")

@section('contenido')
    <h3>Crear tarea</h3>

    <form action="{{ route('tarea.store') }}" method="POST">
        <x-tarea-form-body/>
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