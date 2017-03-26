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
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('img/ray.jpg') }}" alt="...">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4>{!! Auth::user()->name !!} {!! Auth::user()->lname !!}</h4>
                        <h4>{!! Auth::user()->email !!}</h4>
                        <h4>{!! Auth::user()->municipio !!}</h4>
                        <h4>{!! Auth::user()->cell_number!!}</h4>
                         <td class="no-sort no-click no-pdf"><a href="{{ url('/')}}" class="btn btn-default glyphicon glyphicon-arrow-left no-pdf">Atras</a></td>
                         <td class="no-sort no-click no-pdf"><a href="{{ url('/')}}" class="btn btn-default glyphicon glyphicon-refresh no-pdf">Actualizar Datos</a></td>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>
  @endsection