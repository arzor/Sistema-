@extends('layouts.app')


@section('content')

  <h1>Perfil</h1>
<br>
    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="/" class="thumbnail">
                            <img src="{{ asset('img/ray.jpg') }}" alt="...">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4>{!! Auth::user()->name !!} {!! Auth::user()->lname !!}</h4>
                        <h4>{!! Auth::user()->email !!}</h4>
                        <h4>{!! Auth::user()->municipio !!}</h4>
    
                    </div>
                </div>
            </div>
        </div>
       
        <td class="no-sort no-click no-pdf"><a href="{{route('perfil.edit',$user->id)}}" class="btn btn-warning">Actualizar</a></td>
        <a href="{{ url('/')}}" class="btn btn-primary">Atras</a>
    </div>

 @endsection