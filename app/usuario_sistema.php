<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_sistema extends Model
{
    protected $table = "Usuarios_Sistema";

    protected $fillable = ['Profesionistas_id','Tipo_Usuario'];
}
