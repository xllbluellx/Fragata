<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\profesionista;

class PersonalController extends Controller
{
    public function view ($nombre)
    {
    	$profesionista = profesionista::find($nombre);
    	$profesionista ->Usuario_Sistema;
    	$profesionista ->Usuario_Periodo;
    	dd($profesionista);
    }
}