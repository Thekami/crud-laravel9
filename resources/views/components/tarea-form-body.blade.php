@csrf
{{-- {{ dd($urgencia); }} --}}
<div class="row">
    <div class="col-sm-12">
        <label for="InputNombre" class="form-label"></label>
        <input type="text"  id="InputNombre" name="nombre" placeholder="..." class="form-control" value="{{ old('nombre', $tarea->nombre) }}">
    </div>
    <div class="col-sm-4">
        <div class="form-check">
            <input type="checkbox" name="finalizada" id="InputFinalizada" class="form-check-input" value="1" @checked(old('finalizada', $tarea->finalizado))>
            <label for="InputFinalizada" class="form-check-label">Finalizada</label>
        </div>
    </div>
    <div class="col-sm-4">
        <label for="SelectUrgencia" class="form-label"> * Urgencia</label>
        <select name="urgencia" id="Selecturgencia" class="form-select">
            {{-- <option value="null" selected >Selecciona una prioridad</option> --}}
            {{-- <option value="0">Baja</option>
            <option value="1">Normal</option>
            <option value="2">Alta</option> --}}
            @for($i = 0; $i < count($urgencia); $i++)
                {{-- <option value="{{ $i }}"
                    @if($i == old('urgencia', $tarea->urgencia))
                        selected="selected"
                    @endif
                >{{ $urgencia[$i] }}</option> --}}
                @if($i == old('urgencia', $tarea->urgencia))
                    <option value="{{ $i }}" selected="selected">{{ $urgencia[$i] }}</option> 
                @else
                    <option value="{{ $i }}">{{ $urgencia[$i] }}</option> 
                @endif
            @endfor
        </select>
        {{-- <script>
            document.getElementById('Selecturgencia').value = "{{ old('urgencia') }}";
        </script> --}}
    </div>
    <div class="col-sm-4">
        <label for="InputFechaLimite" class="form-limite">* Fecha Limite</label>
        <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control" value="{{ old('fecha_limite', $tarea->fecha_limite->format('Y-m-d\TH:i')) }}">
    </div>
    <div class="col-sm-12">
        <label for="TextAreaDescripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control">{{ old('descripcion', $tarea->descripcion) }}</textarea>
    </div>
    <div class="col-sm-12 text-end my-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>