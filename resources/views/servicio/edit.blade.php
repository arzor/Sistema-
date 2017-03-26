@extends('layouts.app')
@section('content')
    <h1>Actualizar Datos</h1>
    {!! Form::model($servicio,['method' => 'PATCH','route'=>['servicio.update',$servicio->id]]) !!}
    <div class="col-md-6">
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre:') !!}
        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apellido', 'Apellido:') !!}
        {!! Form::text('apellido',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('correo', 'Correo:') !!}
        {!! Form::text('correo',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('servicio', 'Servicio:') !!}
        {!! Form::text('servicio',null,['class'=>'form-control']) !!}
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
        {!! Form::label('especialidad', 'Especialidad:') !!}
        {!! Form::text('especialidad',null,['class'=>'form-control']) !!}
    </div>
  <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::file('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    <a href="{{ url('/servicio')}}" class="btn btn-default glyphicon glyphicon-arrow-left">Atras</a>
        {!! Form::submit('Actualizar', ['class' => 'btn btn-default glyphicon glyphicon-refresh']) !!}
    </div>

    </div> 
 
    {!! Form::close() !!}
@stop