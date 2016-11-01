<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrar_med extends Model
{
    protected $table = "Administrar_Medicamento";

    protected $fillable = ['Inventario_Medico_id','Usuarios_id','Periodicidad','Cantidad_Administracion','Fecha_Fin'];

}
