
@extends('Inicios y mas')

@section('title','Crear profesionista')

@section('content')

    {!! Form::open(['route' => 'Personal.store' , 'method' => 'POST'])!!}
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
            {!! Form::label('Correo_Electronico','Correo Electrónico')!!}
            {!! Form::email ('Correo_Electronico',null,['class' => 'form-control','required'])!!}
        </div>

                <div class="form-group">
            {!! Form::label('Password','Contraseña')!!}
            {!! Form::text ('Password',null,['class' => 'form-control','required'])!!}
        </div>

                <div class="form-group">
            {!! Form::label('Fecha_Nacimiento','Fecha de nacimiento')!!}
            {!! Form::date ('Fecha_Nacimiento',null,['class' => 'form-control','required'])!!}
        </div>

                <div class="form-group">
            {!! Form::label('RFC','RFC')!!}
            {!! Form::text ('RFC',null,['class' => 'form-control','required'])!!}
        </div> 

                <div class="form-group">
            {!! Form::label('IFE','IFE')!!}
            {!! Form::text ('IFE',null,['class' => 'form-control','required'])!!}
        </div>     

                <div class="form-group">
            {!! Form::label('Cedula','Cédula Profesional')!!}
            {!! Form::text ('Cedula',null,['class' => 'form-control','required'])!!}
        </div>         

                <div class="form-group">
            {!! Form::submit ('Registrar',null,['class' => 'btn btn-primary'])!!}
        </div>                                                             

                <div class="form-group">
            {!! Form::submit ('Cancelar',null,['class' => 'btn btn-primary'])!!}
        </div>                  
    {!! Form::close()!!}

@endsection



