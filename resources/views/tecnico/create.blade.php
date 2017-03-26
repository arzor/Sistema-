@extends('layouts.app')
@section('content')
<div class="col-md-6">
    <h1>Crear Solicitud</h1>
    {!! Form::open(['url' => 'tecnico']) !!}
    <div class="form-group">
        {!! Form::label('nombre', 'nombre:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apellido', 'apellido:') !!}
        {!! Form::text('lname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('correo', 'correo:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('servicio', 'servicio:') !!}
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
        {!! Form::label('informacion', 'Informacion adicional:') !!}
        {!! Form::textarea('informacion',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::file('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
     <a href="{{ url('/tecnico')}}" class="btn btn-default glyphicon glyphicon-arrow-left">Atras</a>
        {!! Form::submit('Crear', ['class' => 'btn btn-default glyphicon glyphicon-arrow-left']) !!}
    </div>
    </div>
    {!! Form::close() !!}
@stop