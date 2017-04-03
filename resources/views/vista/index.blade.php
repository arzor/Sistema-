 @extends('layouts.app')

 @section('content')
  <div class="row">

    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Informacion Personal</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="/" class="thumbnail">
                               <img src="{{asset('img/'.Auth::user()->image.'')}}" height="180" width="150" class="img-rounded">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4>Nombre:<h4>{!! Auth::user()->name !!} {!! Auth::user()->lname !!}</h4></h4>
                        <h4>Correo:<h4>{!! Auth::user()->email !!}</h4></h4>
                        <h4>Municipio:<h4>{!! Auth::user()->municipio !!}</h4></h4>
                        <h4>Telefono:<h4>{!! Auth::user()->cell_number!!}</h4></h4>
                          @foreach ($users as $user)
                        <td class="no-sort no-click no-pdf"><a href="{{route('vista.edit',$user->id)}}" class="btn btn-warning">Actualizar</a></td>
                         @endforeach
                    </div>
                </div>
            </div>
        </div>
          <td class="no-sort no-click no-pdf"><a href="{{ url('/')}}" class="btn btn-default glyphicon glyphicon-arrow-left no-pdf">Atras</a></td>
    </div>
  </div>
  @endsection