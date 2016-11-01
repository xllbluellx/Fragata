<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tratamiento extends Model
{
    protected $table = "Tratamiento";

    protected $fillable = ['Usuario_id','Profesionistas_id','Fecha_Expedicion','status','Fecha_Fin_Tratamiento','Indicaciones'];
}
