@extends('Inicios y mas')

@section('title','Seccion I.Médico')

@section('content')
	<head>
		<div class="nav navbar-nav-word">Inventario Médico</div>
	</head>
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Código</th>
			<th>Laboratorio</th>
			<th>Controlado</th>
			<th>Presentacion</th>
			<th>Concentracion</th>
			<th>Cantidad</th>
			<th>Ingreso del medicamento</th>		
		</thead>

		<tbody>
			@foreach ($medicamentos as $medicamento) 
				<tr>
					<td>{{$medicamento->id}}</td>				
					<td>{{$medicamento->Nombre}}</td>
					<td>{{$medicamento->Codigo}}</td>
					<td>{{$medicamento->Laboratorio}}</td>
					<td>{{$medicamento->Controlado}}</td>
					<td>{{$medicamento->Presentacion}}</td>
					<td>{{$medicamento->Concentracion}}</td>
					<td>{{$medicamento->Cantidad}}</td>								
					<td>{{$medicamento->Fecha_Ingreso_Medicamento}}</td>

					<td> <a href="" class="btn btn-danger">Editar</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>	
@endsection