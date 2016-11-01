<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $table = "Usuarios";

    protected $fillable = ['Nombre','Direccion','Telefono','Fecha_Nacimiento','IFE','status','Nombre_Tutor','Observaciones'];

}
