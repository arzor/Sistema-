@extends('layouts.app')

@section('content')
<head>
<title>Search functionality - justLaravel.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
    href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
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
                         <th>Apellido</th>
                        <th>Correo</th>
                        <th>Servicio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                         <td>{{$user->lname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->servicio}}</td>
                               <td><a href="{{url('tecnico',$user->id)}}" class="btn btn-default col-lg-12 space">Ver</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @elseif(isset($message))
            <p>{{ $message }}</p>
            @endif
        </div>

</body>
@endsection
