<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarea extends Model
{
    use HasFactory;
    use softDeletes; // para poder usar implicitamente el campo delete_at generado por laravel
    
    // Esta linea se define en caso de que el nombre de la tabla sea distinto al del modelo, para que el modelo sepa a que tabla se enlazará
    protected $table = 'tareas';

    protected $fillable = ['nombre', 'descripcion', 'finalizado', 'fecha_limite', 'urgencia'];

    // Esta linea define que este campo se usará con la librería Carbon que nos facilita las operaciones con fechas
    protected $dates = ['fecha_limite'];

    /*
    Si no queremos usar las columnas por defecto uppdate_at y create_at de Laravel
    Hay que pooner esta linea 

    protected $timestamps = false;
    
    y comentar $table->timestamps(); de el archivo de migración de la tabla.
    */
    
}
