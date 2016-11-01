<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
    protected $table = "Documento";

    protected $fillable = ['Usuarios_id','Tipo_de_documento','Ruta_archivo','Periodicidad','Vigencia'];
}
