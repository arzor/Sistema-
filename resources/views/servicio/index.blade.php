@extends('layouts.app')

@section('content')

<style type="text/css" media="print">
  @page { size: landscape; }
</style>

<div class="row">
   
        <div class="panel panel-default">
            <div class="panel-body">
 <h1>Servicio</h1>
 <a href="{{url('/servicio/create')}}" class="btn btn-default glyphicon glyphicon-plus no-pdf">Crear</a>
 <button  onClick ="pdf();" class="btn btn-default no-pdf glyphicon glyphicon-print">Reporte</button>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Nombre</th>
         <th>Apellido</th>
         <th>Correo</th>
         <th>Servicio</th>
         <th>Especialidad</th>
         <th>Municipio</th>
         <th>Fecha</th>
         <th>Imagen</th>
         <th colspan="3">Opciones</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($servicio as $user)
         <tr>
             <td>{{ $user->nombre }}</td>
             <td>{{ $user->apellido }}</td>
             <td>{{ $user->correo }}</td>
             <td>{{ $user->servicio }}</td>
             <td>{{ $user->especialidad }}</td>
               <td>{{ $user->municipio }}</td>
             <td>{{ $user->created_at }}</td>
            <td class="no-sort no-click no-pdf"><img src="{{asset('img/'.$user->image.'.jpg')}}" height="35" width="30"></td>
            <td class="no-sort no-click no-pdf"><a href="{{url('servicio',$user->id)}}" class="btn btn-default glyphicon glyphicon-zoom-in">Ver</a></td>
            <td class="no-sort no-click no-pdf"><a href="{{route('servicio.edit',$user->id)}}" class="btn btn-default glyphicon glyphicon-refresh">Actualizar</a></td>
            <td class="no-sort no-click no-pdf">
             {!! Form::open(['method' => 'DELETE', 'route'=>['perfil.destroy', $user->id]]) !!}
             {!! Form::submit('Elminar', ['class' => 'btn btn-default glyphicon glyphicon-trash']) !!}
             {!! Form::close() !!}
             </td>
             </td>
         </tr>

        @endforeach
    </tbody>
 </table>
 <td class="no-sort no-click no-pdf"><a href="{{ url('/')}}" class="btn btn-default glyphicon glyphicon-arrow-left no-pdf">Atras</a></td>
@endsection

