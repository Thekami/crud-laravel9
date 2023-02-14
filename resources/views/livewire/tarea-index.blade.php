<div>
    <div class="row">
        <div class="col-md-2">
            <select class="form-control" wire:model="paginacion">
                <option value="10">10</option>
                <option value="30">30</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" placeholder="Busuqeda.." wire:model="busqueda">
        </div>
    </div>
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
{{ $tareas->links() }}
</div>
