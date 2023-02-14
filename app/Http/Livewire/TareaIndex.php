<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;
use Livewire\WithPagination;

class TareaIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $busqueda = "";
    public $paginacion = 10;

    protected $queryString = [
        'busqueda' => ['except' => ''],
        'paginacion' => ['except' => 10],
    ];
    public function render()
    {
        $tareas = $this->consulta()->paginate($this->paginacion);
        if($tareas->currentPage() > $tareas->lastPage()){
            $this->resetPage();
            $tareas = $this->consulta()->paginate($this->paginacion);
        }


        return view('livewire.tarea-index', compact('tareas'));
        // $tareas = $this->consulta();
        // $params = ['tareas' => $tareas->paginate($this->paginacion)];
        // return view('livewire.tarea-index', $params);
    }

    private function consulta()
    {
        $query = Tarea::orderByDesc('id');

        if ($this->busqueda != "") {
            $query->where('nombre', 'LIKE', "%{$this->busqueda}%")->orWhere('descripcion', 'LIKE', "%{$this->busqueda}%");
        }

        return $query;
    }
}