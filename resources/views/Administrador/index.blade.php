@extends('Inicios y mas')

@section('title','Seccion Usuarios')

@section('content')
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Télefono</th>
			<th>Correo Electrónico</th>
			<th>Fecha de Nacimiento</th>
			<th>RFC</th>
			<th>IFE</th>
			<th>Cédula Profesional</th>
			<th>Status</th>
		</thead>

		<tbody>
			@foreach ($profesionistas as $profesionista) 
				<tr>
					<td>{{$profesionista->id}}</td>
					<td>{{$profesionista->Nombre}}</td>
					<td>{{$profesionista->Direccion}}</td>
					<td>{{$profesionista->Telefono}}</td>
					<td>{{$profesionista->Correo_Electronico}}</td>
					<td>{{$profesionista->Fecha_Nacimiento}}</td>
					<td>{{$profesionista->RFC}}</td>
					<td>{{$profesionista->IFE}}</td>
					<td>{{$profesionista->Cedula}}</td>
					<td>{{$profesionista->status}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>	
@endsection