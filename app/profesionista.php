<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profesionista extends Model
{
    protected $table = "Profesionistas";

    protected $fillable = ['Nombre','Direccion','Telefono','Correo_Electronico','Contraseña',
    'Fecha_Nacimiento','RFC','IFE','Cedula','status',];

        /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Contraseña', 'remember_token',
    ];
}
