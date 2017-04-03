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
                            <img src="{!! asset('img/slider3.jpg') !!}" alt="">
                            <div class="caption">
                            <h4>Nombre:</h4>
                                <h3>{!! $user->nombre !!}</h3>
                            <h4>Calificacion:</h4>  
                                <h3>{!! $user->calificacion !!}</h3>
                            <h4>Reputacion:</h4>
                                <h3>{!! $user->reputacion !!}</h3>
                            <h4>Informacion:</h4>
                                <h3>{!! $user->informacion !!}</h3>
                                <div style="overflow-y: hidden; overflow-style: auto"><p style="height: 15px;" class="text-justify">
                                </p>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <td><a href="{{url('perfil',$user->id)}}" class="btn btn-default col-lg-12 space"><span class="glyphicon glyphicon-eye-open"></span> Ver Perfil</a></td>
                                </div>
                       
                                </div> <!-- aqui-->
                            </div>
                        </div>
                    </div>
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
                            <img src="{{ asset('img/ray.jpg') }}" alt="...">
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