<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class presentacion_prod extends Model
{
    protected $table = "Presentacion_Producto";

    protected $fillable = ['Presentacion','Concentracion'];

public function Inventario_Medico()
{
	return $this->belongsTo('App\inventario_med');
}   
}
