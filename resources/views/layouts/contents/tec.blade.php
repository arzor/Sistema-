              <div class="container">
        <form action="/buscador" method="POST" role="buscador">
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
            <h2>Servicios</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                         <th>apellido</th>
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
</div>
               @foreach($solicitud as $user) 
                    <div class="col-lg-4 col-md-4">
                        <div class="thumbnail">
                           <h3>Solicitudes</h3>
                            <img src="{!! asset('img/sample.png') !!}" alt="">
                            <div class="caption">
                                <h3>{!! $user->name !!}</h3>
                                <div style="overflow-y: hidden; overflow-style: auto"><p style="height: 150px;" class="text-justify">
                                        {!! $user->email !!}</p>
                                </div>
                                <p style="height: 150px;" class="text-justify">
                                        {!! $user->servicio !!}</p>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                   <td><a href="{{url('versol',$user->id)}}" class="btn btn-default col-lg-12 space"><span class="glyphicon glyphicon-eye-open"></span> Ver Perfil</a></td>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($users as $user) 
                          <div class="col-lg-4 col-md-4">
                        <div class="thumbnail">
                           <h3>Solicitudes Aceptadas</h3>
                            <img src="{!! asset('img/sample.png') !!}" alt="">
                            <div class="caption">
                                <h3>{!! $user->name !!}</h3>
                                <div style="overflow-y: hidden; overflow-style: auto"><p style="height: 150px;" class="text-justify">
                                        {!! $user->email !!}</p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button class="btn btn-default col-lg-12 space" type="submit"><span class="glyphicon glyphicon-user"></span> Perfil</button>
                                </div>
                            </div>
                        </div>
                    </div>
             @endforeach