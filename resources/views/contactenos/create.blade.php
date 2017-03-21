@extends('layouts.app')
@section('content')

<div class="wrapper">
                        <div class="col-11">
                            <h3>Direccion</h3>
                            <div class="adress">
                                <div class="dt">
                                    Estamos en la Av. Bolívar Norte Centro Comercial Los Bucares Center PB. Local 38. Valencia Edo. Carabobo Venezuela
                                </div>
                                <div class="extra-wrap">
                                    <div class="dd">Telófono: +(241) 8780432</div>
                                    <div class="dd">Móvil: +(414) 8739614 </div>
                                    <div class="dd">Correo: <a href="/">TecnologyGenerations@gmail.com</a></div>
                                </div>
                            </div>
                        </div>
    <h1>Ingrese Datos</h1>
    {!! Form::open(['url' => 'contactenos']) !!}
    <div class="form-group">
        {!! Form::label('nombre', '*Nombre (Campo obligatorio):') !!}
        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('correo', '*Correo (Campo obligatorio):') !!}
        {!! Form::text('correo',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
{!! Form::label('municipio', 'municipio:') !!}
<select name="municipio" class="form-control" value="{{ old('email') }}">
@foreach($municipio as $muni)
<option value="{{ $muni->nombre }}">{{ $muni->nombre }} </option>
@endforeach
</select>
</div>
     <div class="form-group">
        {!! Form::label('dirrecion', 'direccion:') !!}
        {!! Form::text('direccion',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('telefono', 'telefono:') !!}
        {!! Form::text('telefono',null,['class'=>'form-control']) !!}
    </div>
      <div class="form-group">
        {!! Form::label('descripcion', 'descripcion:') !!}
        {!! Form::textarea('descripcion',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('enviar', ['class' => 'btn btn-primary form-control']) !!}
         <input class="form-button" type="reset" value="Limpiar">
    </div>

    {!! Form::close() !!}
@stop