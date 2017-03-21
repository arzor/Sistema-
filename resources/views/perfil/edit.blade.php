@extends('layouts.app')
@section('content')
    <h1>Actualizar Datos</h1>
    {!! Form::model($users,['method' => 'PATCH','route'=>['perfil.update',$users->id]]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre:') !!}
        {!! Form::text('isbn',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('lname', 'Apellido:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop