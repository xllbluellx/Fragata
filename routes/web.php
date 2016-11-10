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

//Rutas para Administrador ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::get('/', function () {
    return view(' Login :V');
});

Route::group(['prefix'=>'Administrador'],function(){


	Route::get('/', function () {
	return view('Administrador.Inicio_Administrador');
});

Route::get('Personal', function () {
	return view('Administrador.aPersonal');
});

Route::get('Pacientes', function () {
	return view('Administrador.aPacientes');
});

Route::get('Inventario', function () {
	return view('Administrador.aInventario');
});

Route::get('InFormacion_Personal', function () {
	return view('Administrador.aInformacion_Personal');
});

Route::get('Documentos_Generales', function () {
	return view('Administrador.aDocumentos_Generales');
});

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