<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventario_med extends Model
{
    protected $table = "Inventario_Medico";

    protected $fillable = ['Presentacion_Producto_id','Nombre','Codigo','Laboratio','Controlado','Fecha_Ingreso_Medicamento','Cantidad'];

public function Presentacion_Productos()
{
	return $this->hasMany('App\presentacion_prod');
}

public function Administrar__Medicamentos()
{
	return $this->hasMany('App\administrar_med');
}
}
