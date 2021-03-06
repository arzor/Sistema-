@extends('layouts.app')
@section('content')
    <h1>Servicio Solicitado</h1>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label"></label>
            <div class="col-sm-2">
                <img src="{{asset('img/'.$solicituds->image.'')}}" height="180" width="150" class="img-rounded">
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="isbn" placeholder={{$solicituds->name}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Apellido</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="title" placeholder={{$solicituds->lname}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Correo</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="author" placeholder={{$solicituds->email}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Servicio</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="author" placeholder={{$solicituds->servicio}} readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Telefono</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="telefono" placeholder={{$solicituds->telefono}} readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="author" class="col-sm-2 control-label">informacion</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="author" placeholder={{$solicituds->informacion}} readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <td class="no-sort no-click no-pdf"><a href="{{ url('/buscador')}}" class="btn btn-default glyphicon glyphicon-arrow-left no-pdf">Atras</a></td>
            </div>
        </div>
    </form>
@stop