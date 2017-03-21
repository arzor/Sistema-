@extends('layouts.app')

@section('content')

<style type="text/css" media="print">
  @page { size: landscape; }
</style>
<div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8">
        <div class="panel panel-default">
            <div class="panel-body">
 <h1>Solicitar Servicio</h1>
 <a href="{{url('/tecnico/create')}}" class="btn btn-success no-pdf">Solicitar</a>
 <button  onClick ="pdf();" class="btn btn-default no-pdf glyphicon glyphicon-print">Reporte</button>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Nombre</th>
         <th>Apellido</th>
         <th>Correo</th>
         <th>Servicio</th>
         <th>informacion</th>
         <th>Municipio</th>
         <th>Imagen</th>
         <th>Fecha</th>
         <th colspan="3">Opciones</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($solicitud as $user)
         <tr>
             <td>{{ $user->name }}</td>
             <td>{{ $user->lname }}</td>
             <td>{{ $user->email }}</td>
             <td>{{ $user->servicio }}</td>
             <td>{{ $user->informacion }}</td>
               <td>{{ $user->municipio }}</td>
             <td>{{ $user->created_at }}</td>
            <td class="no-sort no-click no-pdf"><img src="{{asset('img/'.$user->image.'.jpg')}}" height="35" width="30"></td>
            <td class="no-sort no-click no-pdf"><a href="{{url('tecnico',$user->id)}}" class="btn btn-primary">Ver</a></td>
            <td class="no-sort no-click no-pdf"><a href="{{route('tecnico.edit',$user->id)}}" class="btn btn-warning">Actualizar</a></td>
            <td class="no-sort no-click no-pdf">
             {!! Form::open(['method' => 'DELETE', 'route'=>['perfil.destroy', $user->id]]) !!}
             {!! Form::submit('Elminar', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
             </td>
         </tr>

        @endforeach
    </tbody>
 </table>
 <td class="no-sort no-click no-pdf"><a href="{{ url('/')}}" class="btn btn-primary">Atras</a></td>
@endsection

