  <div class="row">
  <div class="container">
  
        <div class="container">
            @if(isset($details))
            <p> Los resultados de tu busqueda <b> {{ $query }} </b> son :</p>
            <h2>Tecnicos</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Tecnico</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->servicio}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @elseif(isset($message))
            <p>{{ $message }}</p>
            @endif
        </div>
</div> <br>
    <div class="col-sm-8 col-md-8 col-lg-8">
       <h2>Tecnicos Recomendados</h2>
       <hr>
        <div class="panel panel-default">
            <div class="panel-body">
                @foreach($calificacio as $user) 
                    <div class="col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="{{asset('img/'.$user->image.'')}}" height="180" width="150">
                            <div class="caption">
                            <h4>Nombre:</h4>
                                <h3>{!! $user->nombre !!}</h3>
                            <h4>Calificacion:</h4>  
                                <h3>{!! $user->calificacion !!}</h3>
                            <h4>Reputacion:</h4>
                                <h3>{!! $user->reputacion !!}</h3>
                            <h4>Informacion:</h4>
                                <h3>{!! $user->informacion !!}</h3>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                  <td class="no-sort no-click no-pdf"><a href="#" idtecnico="{{ $user->id }}" onclick="onCalificarClick(this);" data-toggle="modal" data-target="#modalCalificar" class="btn btn-default glyphicon glyphicon-zoom-in">Perfil</a></td>
                                </div>

                                <div style="overflow-y: hidden; overflow-style: auto"><p style="height: 150px;" class="text-justify">
                                </p>                  
                                </div> <!-- aqui-->
                            </div>
                        </div>
                    </div>

                     <!-- Modal -->
<div id="modalCalificar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tecnico Recomendado</h4>
      </div>
      <form method="POST" action="{{ url('/') }}">
      {{ csrf_field() }}
      <input type="hidden" name="calificacion" id="calificacion" value="" />
      <div class="modal-body">
        <div class="form-group">
        <img src="{{asset('img/'.$user->image.'')}}" height="180" width="150">
        <h4>Nombre:</h4>
        <h3>{!! $user->nombre !!}</h3>
        <h4>telefono:</h4>
        <h3>{!! $user->cell_number !!}</h3>
        <h4>Correo:</h4>
        <h3>{!! $user->email !!}</h3>
        <h4>Calificacion:</h4>  
        <h3>{!! $user->calificacion !!}</h3>
        <h4>Reputacion:</h4>
        <h3>{!! $user->reputacion !!}</h3>
        <h4>Informacion:</h4>
        <h3>{!! $user->informacion !!}</h3>                  
        </div>
      </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default glyphicon glyphicon-remove" data-dismiss="modal">Cerrar</button>
      </div>
      </div>
      
      </form>
    </div>

  </div>


<script>

    function onCalificarClick(element){
        document.getElementById("id_solicitud").value = element.getAttribute("idtecnico");
    }

</script>

                @endforeach
            </div>
        </div>
    </div>
    <br>
    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Informacion Personal</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{asset('img/'.Auth::user()->image.'')}}" >
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4>{!! Auth::user()->name !!} {!! Auth::user()->lname !!}</h4>
                        <h4>{!! Auth::user()->email !!}</h4>
                        <td class="no-sort no-click no-pdf"><a href="{{ url('/vista')}}" class="btn btn-default glyphicon glyphicon-user no-pdf">Perfil</a></td>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</div>