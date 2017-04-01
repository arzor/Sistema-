@extends('layouts.app')
@section('content')
    <h1>Perfil Del Tecnico</h1>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Cover</label>
            <div class="col-sm-2">
                <img src="{{asset('img/'.$servicios->image.'.jpg')}}" height="180" width="150" class="img-rounded">
            </div>
        </div>
        <div class="form-group">
            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="nombre" placeholder={{$servicios->nombre}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="apellido" class="col-sm-2 control-label">Apellido</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="apellido" placeholder={{$servicios->apellido}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="correo" class="col-sm-2 control-label">Correo</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="correo" placeholder={{$servicios->correo}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="servicio" class="col-sm-2 control-label">Servicio</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="servicio" placeholder={{$servicios->servicio}} readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="telefono" class="col-sm-2 control-label">Telefono</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="telefono" placeholder={{$servicios->telefono}} readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="author" class="col-sm-2 control-label">informacion</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="author" placeholder={{$servicios->especialidad}} readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <td class="no-sort no-click no-pdf"><a href="{{ url('/')}}" class="btn btn-default glyphicon glyphicon-arrow-left no-pdf">Atras</a></td>
            </div>
        </div>
    </form>
@stop
