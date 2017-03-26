@extends('layouts.app')
@section('content')
    <h1>Tecnico</h1>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Foto</label>
            <div class="col-sm-2">
                <img src="{{asset('img/'.$users->image.'.jpg')}}" height="180" width="150" class="img-rounded">
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="isbn" placeholder={{$users->name}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Apellido</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="title" placeholder={{$users->lname}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Correo</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="author" placeholder={{$users->email}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">municipio</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="municipio" placeholder={{$users->municipio}} readonly>
            </div>
        </div>
      
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-2">
                <a href="{{ url('/search')}}" class="btn btn-default glyphicon glyphicon-arrow-left">Atras</a>
            </div>
        </div>
    </form>
@stop