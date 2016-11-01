<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dotacion_med extends Model
{
    protected $table = "Dotacion_Medicamento";

    protected $fillable = ['Nombre_Medicamento','Cantidad_Donada','Nombre_Donador'];
}
