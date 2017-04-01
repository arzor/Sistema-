@extends('layouts.app')

@section('content')
<head>
<title>Search functionality - justLaravel.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
    href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                    placeholder="Buscar"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
        <div class="container">
            @if(isset($details))
            <p> Los resultados de tu busqueda <b> {{ $query }} </b> son :</p>
            <h2>Tecnicos</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Servicio</th>
                        <th>Especialidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $user)
                    <tr>
                        <td>{{$user->nombre}}</td>
                        <td>{{$user->apellido}}</td>
                        <td>{{$user->correo}}</td>
                        <td>{{$user->servicio}}</td>
                        <td>{{$user->especialidad}}</td>
                               <td><a href="{{url('verservicio',$user->id)}}" class="btn btn-default glyphicon glyphicon-zoom-in">Ver</a></td>
                               <td class="no-sort no-click no-pdf"><a href="#" idtecnico="{{ $user->id }}" onclick="onAceptarClick(this);" data-toggle="modal" data-target="#modalCalificar" class="btn btn-default glyphicon glyphicon-ok">Aceptar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @elseif(isset($message))
            <p>{{ $message }}</p>
            @endif
        </div>

       <div id="modalCalificar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Aceptar Servicio</h4>
      </div>
      <form method="POST" action="{{ url('aceptar') }}">
      {{ csrf_field() }}
      <h4 class="modal-title">¿Desea Aceptar el Servicio?</h4>
      <input type="hidden" name="id" id="id_solicitud" value="" />
           <div class="form-group">         
                <input type='hidden' value='0' name='calificacion'>
                <div class="col-md-3">
                {!! Form::hidden('estatus', 'aceptada') !!}
                {!! Form::hidden ('id_user', Auth::user()->name) !!}
                </div>
                </div>
                 <div class="modal-footer">
        <button type="submit" class="btn btn-default glyphicon glyphicon-ok">Aceptar</button>
        <button type="button" class="btn btn-default glyphicon glyphicon-ok" data-dismiss="modal">Rechazar</button>
      </div>
            </div>
     
      </form>
    </div>

  </div>
</div>

<script>

    function onAceptarClick(element){
        document.getElementById("id_solicitud").value = element.getAttribute("idtecnico");
    }

</script>

</body>
@endsection
