<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profesionista extends Model
{
    protected $table = "Profesionistas";

    protected $fillable = ['Nombre','Direccion','Telefono','Correo_Electronico','Password',
    'Fecha_Nacimiento','RFC','IFE','Cedula','status',];

        /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Password', 'remember_token',
    ];

public function Usuarios_Periodos()
{
    return $this->hasMany('App\usuario_periodo');
}
public function Usuarios_Sistema()
{

	return $this->hasOne('App\usuario_sistema');
}
}
