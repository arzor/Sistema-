@extends('layouts.app')

@section('content')

<style type="text/css" media="print">
  @page { size: landscape; }
</style>

<div class="row">
   
 <div class="panel panel-default">
 <div class="panel-body">
 <h1>Servicios Aceptados</h1>
 <button  onClick ="pdf();" class="btn btn-default no-pdf glyphicon glyphicon-print">Reporte</button>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Tecnico</th>
         <th>Correo</th>
         <th>Telefono</th>
         <th>Foto</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($activos as $activo)
         <tr>
             <td>{{ $activo->name }}</td>
             <td>{{ $activo->correo }}</td>
             <td>{{ $activo->cell_number }}</td>
             <td class=><img src="{{asset('img/'.$activo->image.'')}}" height="35" width="30"></td>
     </tr>
        @endforeach
    </tbody>
 </table>
 <td class="no-sort no-click no-pdf"><a href="{{ url('/tecnico')}}" class="btn btn-default glyphicon glyphicon-arrow-left no-pdf">Atras</a></td>

@endsection
