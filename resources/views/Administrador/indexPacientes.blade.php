@extends('Inicios y mas')

@section('title','Seccion Pacientes')

@section('content')
	<head>
		<div class="nav navbar-nav-word">Pacientes</div>
	</head>
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Télefono</th>
			<th>Fecha de Nacimiento</th>
			<th>IFE</th>
			<th>Status</th>
			<th>Nombre del  Tutor</th>
			<th>Observaciones</th>
		</thead>

		<tbody>
			@foreach ($pacientes as $paciente) 
				<tr>
					<td>{{$paciente->id}}</td>
					<td>{{$paciente->Nombre}}</td>
					<td>{{$paciente->Direccion}}</td>
					<td>{{$paciente->Telefono}}</td>
					<td>{{$paciente->Fecha_Nacimiento}}</td>
					<td>{{$paciente->IFE}}</td>
					<td>{{$paciente->status}}</td>
					<td>{{$paciente->Nombre_Tutor}}</td>
					<td>{{$paciente->Observaciones}}</td>					
					<td> <a href="" class="btn btn-danger">Editar</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>	
@endsection