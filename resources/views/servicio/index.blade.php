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
         <th colspan="4">Opciones</th>
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
            <td class="no-sort no-click no-pdf"><a href="#" idtecnico="{{ $user->id }}" onclick="onVerDetallesClick(this);" class="btn btn-default glyphicon glyphicon-zoom-in">Ver</a></td>
            <td class="no-sort no-click no-pdf"><a href="#" idtecnico="{{ $user->id }}" onclick="onActualizarClick(this);" class="btn btn-default glyphicon glyphicon-refresh">Actualizar</a></td>
            <td class="no-sort no-click no-pdf"><a href="#" idtecnico="{{ $user->id }}" onclick="onCalificar2Click(this);" data-toggle="modal" data-target="#modalCalificar" class="btn btn-default glyphicon glyphicon-check">Calificar</a></td>
            <td class="no-sort no-click no-pdf">
             {!! Form::open(['onsubmit' => 'return onDeleteSubmit();', 'method' => 'DELETE', 'route'=>['servicio.destroy', $user->id]]) !!}
             {!! Form::submit('Elminar', ['class' => 'btn btn-default glyphicon glyphicon-trash']) !!}
             {!! Form::close() !!}
             </td>
             </td>
         </tr>

        @endforeach
    </tbody>
 </table>
 <td class="no-sort no-click no-pdf"><a href="{{ url('/')}}" class="btn btn-default glyphicon glyphicon-arrow-left no-pdf">Atras</a></td>

 <div id="modalCalificar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Califique al Usuario</h4>
      </div>

      <form method="POST" action="{{ url('calificar2') }}">

      <form method="POST" action="{{ url('calificar') }}">

      {{ csrf_field() }}
      <input type="hidden" name="calificacion" id="calificacion" value="" />
      <div class="modal-body">
        <div class="form-group">
        {!! Auth::user()->name !!} 
        {!! Form::label('nombre', 'nombre:') !!}
        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
        </div>
             <div class="form-group">
            <label class="col-md-2">Calificar</label>
            <select name="calificacion" class="input-md">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

<input type="hidden" name="reputacion" id="reputacion" value="" />
      <div class="modal-body">
        <div class="form-group">
            <label class="col-md-3">Reputacion</label>
            <select name="reputacion" class="input-md">
                <option value="pesima">pesima</option>
                <option value="mala">mala</option>
                <option value="regular">regular</option>
                <option value="buena">buena</option>
                <option value="excelente">excelente</option>
            </select>
        </div>

            <div class="form-group">
            {!! Form::label('informacion', 'informacion:') !!}
            {!! Form::textarea('informacion',null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-default glyphicon glyphicon-ok">Calificar</button>
        <button type="button" class="btn btn-default glyphicon glyphicon-remove" data-dismiss="modal">Cerrar</button>

        </div>

      </div>

      </div>
  </div>
</div>
</div>
<script>


    function onVerDetallesClick(element){
        if (confirm("Confirmar navegacion")){
            location.href = "{{url('servicio')}}/" + element.getAttribute("idtecnico");  
        }
    }

    function onActualizarClick(element){
        if (confirm("Confirmar navegacion")){
            location.href = "{{url('servicio')}}/" + element.getAttribute("idtecnico") + "/edit";  
        }
    }

    function onDeleteSubmit(){
        return confirm("Confirmar eliminacion?");
    }


    function onCalificar2Click(element){
        document.getElementById("id_solicitud").value = element.getAttribute("idtecnico");
    }

</script>
@endsection

