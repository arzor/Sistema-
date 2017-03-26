  <div class="row">
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
       <h2>Tecnicos</h2>
       <hr>
        <div class="panel panel-default">
            <div class="panel-body">
                @foreach($users as $user) 
                    <div class="col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="{!! asset('img/ray.jpg') !!}" alt="">
                            <div class="caption">
                                <h3>{!! $user->name !!}</h3>
                                <div style="overflow-y: hidden; overflow-style: auto"><p style="height: 150px;" class="text-justify">
                                    {!! $user->email !!}
                                    
                                    {!! $user->municipio !!}   
                                     </p>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <td><a href="{{url('perfil',$user->id)}}" class="btn btn-default col-lg-12 space"><span class="glyphicon glyphicon-eye-open"></span> Ver Perfil</a></td>
                                </div>
                                   <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button class="btn btn-default col-lg-12 space" type="submit"><span class="glyphicon glyphicon-thumbs-up"></span> Aceptar Solicitud</button>
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