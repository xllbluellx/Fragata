<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
    return view(' Login :V');
});

//Rutas para Administrador ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::group(['prefix'=>'Administrador'],function(){


	Route::get('/', function () {
	return view('Administrador.Inicio_Administrador');
});

Route::resource('Personal','PersonalController');

Route::resource('Pacientes','PacientesController');

Route::resource('Inventario','InventarioController');

Route::resource('InFormacion_Personal','Informacion_PersonalController');

Route::resource('Documentos_Generales','Documentos_GeneralesController');

});


//Rutas para Médicos ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

Route::group(['prefix'=>'Medico'],function(){


	Route::get('/', function () {
	return view('Medico.Inicio_Medicos');
});

/*Route::get('Inventario', function () {
	return view('Medico.mInventario');
});*/

Route::get('InFormacion_Personal', function () {
	return view('Medico.mInformacion_Personal');
});

Route::get('Documentos_Generales', function () {
	return view('Medico.mDocumento');
});

});

//Rutas para Psicologos ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

Route::group(['prefix'=>'Psicologo'],function(){


	Route::get('/', function () {
	return view('Psicologo.Inicio_Psicologo');
});

Route::get('Personal', function () {
	return view('Psicologo.pPersonal');
});

Route::get('Pacientes', function () {
	return view('Psicologo.pPacientes');
});

Route::get('Inventario', function () {
	return view('Psicologo.pInventario');
});

Route::get('InFormacion_Personal', function () {
	return view('Psicologo.pInformacion_Personal');
});

Route::get('Documentos_Generales', function () {
	return view('Psicologo.pDocumentos_Generales');
});

});

//Rutas para Tutores ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

Route::group(['prefix'=>'Tutor'],function(){


	Route::get('/', function () {
	return view('Tutor.Inicio_Tutores');
});

Route::get('InFormacion_Personal', function () {
	return view('Tutor.tInformacion_Personal');
});

Route::get('Documentos_Generales', function () {
	return view('Tutor.tDocumentos');
});

});