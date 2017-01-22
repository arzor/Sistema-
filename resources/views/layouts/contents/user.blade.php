<div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8">
        <div class="panel panel-default">
            <div class="panel-body">
                @foreach($users as $user)
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

    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Informacion Personal</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('img/cute.jpg') }}" alt="...">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4>{!! Auth::user()->name !!} {!! Auth::user()->lname !!}</h4>
                        <h4>{!! Auth::user()->email !!}</h4>
                        <button class="btn btn-default col-lg-12" type="submit"><span class="glyphicon glyphicon-pencil"></span> Editar Datos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>