@extends('layouts.app')
@section('content')
    <h1>Actualizar Datos</h1>
    {!! Form::model($users,['method' => 'PATCH','route'=>['vista.update',$users->id]]) !!}
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
        {!! Form::label('cell_number', 'Telefono:') !!}
        {!! Form::text('cell_number',null,['class'=>'form-control']) !!}
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
        {!! Form::label('Image', 'Imagen:') !!}
        {!! Form::file('image',null,['class'=>'form-control']) !!}
    </div>
 <div class="form-group">
     <a href="{{ url('/vista')}}" class="btn btn-default glyphicon glyphicon-arrow-left">Atras</a>
             {!! Form::open(['onsubmit' => 'return onSubmit();', 'method' => 'UPDATE', 'route'=>['vista.edit', $users->id]]) !!}
             {!! Form::submit('Actualizar', ['class' => 'btn btn-default glyphicon glyphicon-refresh']) !!}
             {!! Form::close() !!}
</div>
    </div>
 <script>

function onSubmit(){
        return confirm("Confirmar actualizacion?");
    }

</script>
{!! Form::close() !!}
@stop