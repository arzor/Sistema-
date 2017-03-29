@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">¿Cómo Desea registrarse?</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <div class="col-md-6">
                              <a href="{{ route('tec.register') }}" role="button" class="btn btn-info col-lg-12" type="submit">
                                  <h2 class="glyphicon glyphicon-wrench"></h2>
                                  <h3>Técnico</h3>
                              </a>
                            </div>
                        <div class="col-md-6">
                              <a href="{{ route('user.register') }}" role="button" class="btn btn-info col-lg-12" type="submit">
                                  <h2 class="glyphicon glyphicon-user"></h2>
                                  <h3>Usuario</h3>
                              </a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
