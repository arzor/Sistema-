@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Como Desea registrarse</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                              <button class="btn btn-default col-lg-12" type="submit"><span class="glyphicon glyphicon-wrench"></span><a href="{{ url('/regitec') }}">Tecnico</a></button>
                            </div>
                        <div class="col-md-6 col-md-offset-4">
                              <a class="btn btn-default col-lg-12" type="submit"><span class="glyphicon glyphicon-user"></span><a href="{{ url('/regiuser') }}">Usuario</a></a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
