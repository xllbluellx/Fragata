<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventario_med extends Model
{
    protected $table = "Inventario_Medico";

    protected $fillable = ['Nombre','Codigo','Laboratorio','Controlado','Presentacion','Concentracion','Cantidad','Fecha_Ingreso_Medicamento'];


public function Administrar__Medicamentos()
{
	return $this->hasMany('App\administrar_med');
}
}
