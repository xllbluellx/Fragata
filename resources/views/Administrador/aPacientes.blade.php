
@extends('Inicios y mas')

@section('title','Crear Paciente')

@section('content')

    {!! Form::open(['route' => 'Pacientes.store' , 'method' => 'POST'])!!}
        <div class="form-group">
            {!! Form::label('Nombre','Nombre')!!}
            {!! Form::text ('Nombre',null,['class' => 'form-control', 'placeholder' => 'Nombre completo','required'])!!}
        </div>

                <div class="form-group">
            {!! Form::label('Direccion','Dirección')!!}
            {!! Form::text ('Direccion',null,['class' => 'form-control', 'placeholder' => 'Calle, Numero y Colonia','required'])!!}
        </div>

                <div class="form-group">
            {!! Form::label('Telefono','Telefono')!!}
            {!! Form::text ('Telefono',null,['class' => 'form-control','required'])!!}
        </div>

                <div class="form-group">
            {!! Form::label('Fecha_Nacimiento','Fecha de nacimiento')!!}
            {!! Form::date ('Fecha_Nacimiento',null,['class' => 'form-control','required'])!!}
        </div>

                <div class="form-group">
            {!! Form::label('IFE','IFE')!!}
            {!! Form::text ('IFE',null,['class' => 'form-control','required'])!!}
        </div>     

                <div class="form-group">
            {!! Form::label('Nombre_Tutor','Nombre_Tutor')!!}
            {!! Form::text ('Nombre_Tutor',null,['class' => 'form-control','required'])!!}
        </div>     

                <div class="form-group">
            {!! Form::label('Observaciones','Observaciones')!!}
            {!! Form::text ('Observaciones',null,['class' => 'form-control','required'])!!}
        </div>             
                <div class="form-group">
            {!! Form::submit ('Registrar',null,['class' => 'btn btn-primary'])!!}
        </div>                                                             

                <div class="form-group">
            {!! Form::submit ('Cancelar',null,['class' => 'btn btn-primary'])!!}
        </div>                  
    {!! Form::close()!!}

@endsection



