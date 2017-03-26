@extends('layouts.app')
@section('content')
    <h1>Actualizar Datos</h1>
    {!! Form::model($solicitud,['method' => 'PATCH','route'=>['tecnico.update',$solicitud->id]]) !!}
    <div class="col-md-6">
    <div class="form-group">
        {!! Form::label('name', 'Nombre:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('lname', 'Apellido:') !!}
        {!! Form::text('lname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Correo:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
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
        {!! Form::label('informacion', 'Informacion adicional:') !!}
        {!! Form::textarea('informacion',null,['class'=>'form-control']) !!}
    </div>
  <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::file('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
     <a href="{{ url('/tecnico')}}" class="btn btn-default glyphicon glyphicon-arrow-left">Atras</a>
        {!! Form::submit('Actualizar', ['class' => 'btn btn-default glyphicon glyphicon-refresh']) !!}
    </div>
</div>
     
 
    {!! Form::close() !!}
@stop