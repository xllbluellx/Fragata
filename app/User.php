<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    use Notifiable;


    protected $table = "Usuarios";

    protected $fillable = ['Nombre','Direccion','Telefono','Fecha_Nacimiento','IFE','status','Nombre_Tutor','Observaciones'];

public function documentos()
{
    return $this->hasMany('App\Documento');
}

public function Usuarios_Periodos()
{
    return $this->hasMany('App\usuario_periodo');
}
}
