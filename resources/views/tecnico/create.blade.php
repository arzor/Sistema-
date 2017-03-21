@extends('layouts.app')
@section('content')
    <h1>Create Boo</h1>
    {!! Form::open(['url' => 'tecnico']) !!}
    <div class="form-group">
        {!! Form::label('name', 'name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('lname', 'lname:') !!}
        {!! Form::text('lname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'email:') !!}
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
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    <div class="form-group">
        <a href="{{ url('/tecnico')}}" class="btn btn-primary">Atras</a>
    </div>
    {!! Form::close() !!}
@stop