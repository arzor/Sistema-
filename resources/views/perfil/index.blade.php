@extends('layouts.app')

@section('content')
 <h1>Perfil</h1>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>nombre</th>
         <th>apellido</th>
         <th>Correo</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($users as $user)
         <tr>
             <td>{{ $user->name }}</td>
             <td>{{ $user->lname }}</td>
             <td>{{ $user->email }}</td>
             <td><img src="{{asset('img/'.$user->image.'.jpg')}}" height="35" width="30"></td>
             <td><a href="{{url('perfil',$user->id)}}" class="btn btn-primary">Ver</a></td>
             <td><a href="{{route('perfil.edit',$user->id)}}" class="btn btn-warning">Actualizar</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['perfil.destroy', $user->id]]) !!}
             {!! Form::submit('Elminar', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
                <a href="{{ url('/')}}" class="btn btn-primary">Atras</a>

@endsection