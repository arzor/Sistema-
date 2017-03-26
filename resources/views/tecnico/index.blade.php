@extends('layouts.app')

@section('content')

<style type="text/css" media="print">
  @page { size: landscape; }
</style>

<div class="row">
   
        <div class="panel panel-default">
            <div class="panel-body">
 <h1>Solicitar Servicio</h1>
 <a href="{{url('/tecnico/create')}}" class="btn btn-default no-pdf glyphicon glyphicon-plus no-pdf">Solicitar</a>
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
         <th colspan="4">Opciones</th>
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
            <td class="no-sort no-click no-pdf"><a href="#" idtecnico="{{ $user->id }}" onclick="onVerDetallesClick(this);" class="btn btn-default glyphicon glyphicon-zoom-in">Ver</a></td>
            <td class="no-sort no-click no-pdf"><a href="#" idtecnico="{{ $user->id }}" onclick="onActualizarClick(this);" class="btn btn-default glyphicon glyphicon-refresh">Actualizar</a></td>
            <td class="no-sort no-click no-pdf"><a href="#" idtecnico="{{ $user->id }}" onclick="onCalificarClick(this);" data-toggle="modal" data-target="#modalCalificar" class="btn btn-default glyphicon glyphicon-check">Calificar</a></td>
            <td class="no-sort no-click no-pdf">
             {!! Form::open(['onsubmit' => 'return onDeleteSubmit();', 'method' => 'DELETE', 'route'=>['perfil.destroy', $user->id]]) !!}
             {!! Form::submit('Elminar', ['class' => 'btn btn-default glyphicon glyphicon-trash']) !!}
             {!! Form::close() !!}
             </td>
             </td>
         </tr>

        @endforeach
    </tbody>
 </table>
 <td class="no-sort no-click no-pdf"><a href="{{ url('/')}}" class="btn btn-default glyphicon glyphicon-arrow-left no-pdf">Atras</a></td>


<!-- Modal -->
<div id="modalCalificar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Califique al tecnico</h4>
      </div>
      <form method="POST" action="{{ url('calificar') }}">
      {{ csrf_field() }}
      <input type="hidden" name="id" id="id_solicitud" value="" />
      <div class="modal-body">
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

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default glyphicon glyphicon-ok">Calificar</button>
        <button type="button" class="btn btn-default glyphicon glyphicon-remove" data-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>

  </div>
</div>

<script>


    function onVerDetallesClick(element){
        if (confirm("Confirmar navegacion")){
            location.href = "{{url('tecnico')}}/" + element.getAttribute("idtecnico");  
        }
    }

    function onActualizarClick(element){
        if (confirm("Confirmar navegacion")){
            location.href = "{{url('tecnico')}}/" + element.getAttribute("idtecnico") + "/edit";  
        }
    }

    function onDeleteSubmit(){
        return confirm("Confirmar eliminacion?");
    }

    function onCalificarClick(element){
        document.getElementById("id_solicitud").value = element.getAttribute("idtecnico");
    }

</script>
@endsection


