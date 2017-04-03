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
        <td class="no-sort no-click no-pdf"><a href="{{ url('/')}}" class="btn btn-default glyphicon glyphicon-arrow-left no-pdf">Atras</a></td>
        </div>
        </div>
    </form>

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
      <input type="hidden" name="calificacion" id="calificacion" value="" />
      <div class="modal-body">
        <div class="form-group">
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
@stop
