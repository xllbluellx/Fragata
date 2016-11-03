<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_periodo extends Model
{
    protected $table = "Usuarios_Periodos";

    protected $fillable = ['Usuario_id','Tipo'];


public function Usuarios(){
	return $this->belongsTo('App\Usuarios');
}

public function Profesionistas()
{
	return $this->belongsTo('App\profesionista');
}
}
