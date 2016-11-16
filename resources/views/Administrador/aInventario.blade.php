
@extends('Inicios y mas')

@section('title','Nuevo medicamento')

@section('content')

    {!! Form::open(['route' => 'Inventario.store' , 'method' => 'POST'])!!}

                 <div class="form-group">
            {!! Form::label('Nombre','Nombre')!!}
            {!! Form::text ('Nombre',null,['class' => 'form-control','required'])!!}
        </div>

                <div class="form-group">
            {!! Form::label('Codigo','Codigo')!!}
            {!! Form::text ('Codigo',null,['class' => 'form-control','required'])!!}
        </div>

                <div class="form-group">
            {!! Form::label('Laboratorio','Laboratorio')!!}
            {!! Form::text ('Laboratorio',null,['class' => 'form-control','required'])!!}
        </div>

                <div class="form-group">
            {!! Form::label('Controlado','Controlado')!!}
            {!! Form::select ('Controlado',['' => '----','Si','No'],null,['class' => 'form-control','required'])!!}
        </div>     

                <div class="form-group">
            {!! Form::label('Presentacion','Presentacion')!!}
            {!! Form::select ('Presentacion',['' => '----','Comprimidos','Liquidos','Aerosoles'],null,['class' => 'form-control','required'])!!}
        </div>       

                <div class="form-group">
            {!! Form::label('Concentracion','Concentracion')!!}
            {!! Form::text ('Concentracion',null,['class' => 'form-control','required'])!!}
        </div>       

                <div class="form-group">
            {!! Form::label('Cantidad','Cantidad  (Cajas/frascos)')!!}
            {!! Form::text ('Cantidad',null,['class' => 'form-control','required'])!!}
        </div>                       
                <div class="form-group">
            {!! Form::label('Fecha_Ingreso_Medicamento','Fecha_Ingreso_Medicamento')!!}
            {!! Form::date ('Fecha_Ingreso_Medicamento',null,['class' => 'form-control','required'])!!}
        </div>     
      
                <div class="form-group">
            {!! Form::submit ('Registrar',null,['class' => 'btn btn-primary'])!!}
        </div>                                                             

                <div class="form-group">
            {!! Form::submit ('Cancelar',null,['class' => 'btn btn-primary'])!!}
        </div>                  
    {!! Form::close()!!}

@endsection



