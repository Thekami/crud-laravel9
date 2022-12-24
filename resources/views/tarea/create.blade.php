@extends('tema.app')

@section('title', "Nueva tarea")

@section('contenido')
    <h3>Crear tarea</h3>

    <form action="{{ route('tarea.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label"></label>
                <input type="text"  id="InputNombre" name="nombre" placeholder="..." class="form-control" value="{{ old('nombre') }}">
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="finalizada" id="InputFinalizada" class="form-check-input" @checked(old('finalizada'))>
                    <label for="InputFinalizada" class="form-check-label">Finalizada</label>
                    <script>
                        var check = document.getElementById('InputFinalizada').value;
                        var checked = 2;
                        if(check == 'on'){checked = 1;}
                        
                        document.getElementById('InputFinalizada').value = checked;
                    </script>
                </div>
            </div>
            <div class="col-sm-4">
                <label for="SelectUrgencia" class="form-label"> * Urgencia</label>
                <select name="urgencia" id="Selecturgencia" class="form-select">
                    {{-- <option value="null" selected >Selecciona una prioridad</option> --}}
                    <option value="0">Baja</option>
                    <option value="1">Normal</option>
                    <option value="2">Alta</option>
                </select>
                <script>
                    document.getElementById('Selecturgencia').value = "{{ old('urgencia') }}";
                </script>
            </div>
            <div class="col-sm-4">
                <label for="InputFechaLimite" class="form-limite">* Fecha Limite</label>
                <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control" value="{{ old('fecha_limite') }}">
            </div>
            <div class="col-sm-12">
                <label for="TextAreaDescripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control" value="{{ old('descripcion') }}"></textarea>
            </div>
            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>

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