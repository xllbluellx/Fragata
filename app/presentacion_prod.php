<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class presentacion_prod extends Model
{
    protected $table = "Presentacion_Producto";

    protected $fillable = ['Presentacion','Concentracion'];
}
