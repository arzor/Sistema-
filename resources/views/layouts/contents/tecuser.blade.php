@foreach($users as $user)
    <ul>
        <li>{!! $user->email !!}</li>
    </ul>
@endforeach
<div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8">
    <h3 class="panel-title">Tecnicos</h3>
        <div class="panel panel-default">
            <div class="panel-body">
   @foreach($tecnico as $user) 
                    <div class="col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="{!! asset('img/sample.png') !!}" alt="">
                            <div class="caption">
                                <h3>{!! $user->name !!}</h3>
                                <div style="overflow-y: hidden; overflow-style: auto"><p style="height: 150px;" class="text-justify">
                                        {!! $user->email !!}</p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button class="btn btn-default col-lg-12 space" type="submit"><span class="glyphicon glyphicon-pencil"></span> Ver Perfil</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
          </div>
        </div>
    </div>
    </div>

    <div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8">
    <h3 class="panel-title">Usuarios</h3>
        <div class="panel panel-default">
            <div class="panel-body">
     @foreach($tecnico as $user) 
                    <div class="col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="{!! asset('img/sample.png') !!}" alt="">
                            <div class="caption">
                                <h3>{!! $user->name !!}</h3>
                                <div style="overflow-y: hidden; overflow-style: auto"><p style="height: 150px;" class="text-justify">
                                        {!! $user->email !!}</p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button class="btn btn-default col-lg-12 space" type="submit"><span class="glyphicon glyphicon-pencil"></span> Ver Perfil</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
		</div>
		</div>
		</div>
		</div>