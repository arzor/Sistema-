@extends('layouts.app')
@section('content')
    <h1>Servicio</h1>
    {!! Form::open(['url' => 'servicio']) !!}
    <div class="form-group">
        {!! Form::label('nombre', 'nombre:') !!}
        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apellido', 'apellido:') !!}
        {!! Form::text('apellido',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('correo', 'correo:') !!}
        {!! Form::text('correo',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('servicio', 'servicio:') !!}
        {!! Form::text('servicio',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('especialidad', 'especialidad:') !!}
        {!! Form::text('especialidad',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telefono', 'telefono:') !!}
        {!! Form::text('telefono',null,['class'=>'form-control']) !!}
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
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::file('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    <div class="form-group">
        <a href="{{ url('/servicio')}}" class="btn btn-primary">Atras</a>
    </div>
    {!! Form::close() !!}
@stop