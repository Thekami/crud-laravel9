<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use App\Http\Requests\TareaRequest;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // Hace una consulta a la tabla tareas usando el modelo Tarea
        // Aquí se puede usar todas las opciones del querybuilder de laravel para filtrar los datos.
        $tareas = Tarea::orderByDesc('id')->get();

        // compact() permite retornar lo resultante de la consulta
        return view('tarea.index', compact('tareas'));
        
        /* 
            También se puede usar esta estructura para retornar los datos si es que no queremos usar compact()

            $params = ['tareas' => $tareas];
            return view('tarea.index', $params);
        */
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarea.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TareaRequest $request)
    {

        // Permite validar los campos que se recibirán
        $datos = $request->validated();

        $tarea = Tarea::create($datos);
        return redirect()->route('tarea.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        $params = ['tarea' => $tarea];
        return view('tarea.show', $params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        // dd($tarea);
        return view('tarea.edit', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(TareaRequest $request, Tarea $tarea)
    {
        // Permite validar los campos que se recibirán
        $datos = $request->validated();
        // dd($request);
        $tarea->update($datos);
        return redirect()->route('tarea.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        //
    }
}
