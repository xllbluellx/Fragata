
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
            {!! Form::submit ('Limpiar',null,['class' => 'btn btn-primary'])!!}
        </div>                  
    {!! Form::close()!!}

@endsection






























<!--
<!DOCTYPE html>
<html lang="es">
<head>
  <title>@yield ('title', 'Default') | Menu de administrador</title>
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head> 
<body>
  <div class="container-frg"><h1 class="frg-font">Fragata</h1><h1 class="frg-font-slogan">Rediseñando Caminos, Transformando Vidas</h1>
  </div>
  <div class="form-control-frg-pacientes">
                    <form id="pform" action="#" method="post">
                
                <fieldset id="datos">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" /><br/>

                    <label for="direccion">Dirección:</label>
                    <input type="text" name="direccion"/><br/>

                    <label for="tel">Teléfono:</label>
                    <input type="text" name="tel"/><br/>

                    <label for="email">Correo Electronico:</label>
                    <input type="text" name="email" /><br/>

                    <label for="password">Contraseña:</label>
                    <input type="password" name="password"/><br/>

                    <label for="fnac">Fecha de Nacimiento:</label>
                    <input type="date" name="fnac"/><br/>

                    <label for="rfc">RFC:</label>
                    <input type="text" name="rfc"/><br/>

                    <label for="ife">IFE:</label>
                    <input type="text" name="ife"/><br/>

                    <label for="cedula">Cédula</label>
                    <input type="text" name="cedula"/><br/>

                    <label for="status">Status</label>
                    <input type="enum" name="status" /><br/>          

                    </fieldset>
                    <br/>
                    

                    <input type="submit" value="Guardar"/>
                    <input type="reset" value="Borrar formulario"/>
                    <input type="button" value="Cancelar" onclick="javascript:alert('En construccion u.u');"/>
                    <input type="image" src="original.png" alt="Registrar" value="Archivo"/>
                </form>
  </div>
</body>
</html>-->