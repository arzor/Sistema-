@extends('layouts.app')

@section('content')
 <style type="text/css" media="print">
  @page { size: landscape; }
</style>
<div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8">
        <div class="panel panel-default">
            <div class="panel-body">
 <h1>Solicitar Servicio</h1>
 <a href="{{url('/books/create')}}" class="btn btn-success no-pdf">Solicitar</a>
 <button  onClick ="pdf();" class="btn btn-default no-pdf">Exportar PDF</button>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Nombre</th>
         <th>Apellido</th>
         <th>Correo</th>
         <th>Servicio</th>
         <th>Imagen</th>
         <th colspan="3">Opciones</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($books as $book)
         <tr>
             <td>{{ $book->id }}</td>
             <td>{{ $book->isbn }}</td>
             <td>{{ $book->title }}</td>
             <td>{{ $book->author }}</td>
             <td>{{ $book->publisher }}</td>
             <td class="no-sort no-click no-pdf"><img src="{{asset('img/'.$book->image.'.jpg')}}" height="35" width="30"></td>
             <td class="no-sort no-click no-pdf"><a href="{{url('books',$book->id)}}" class="btn btn-primary">Ver</a></td>
             <td class="no-sort no-click no-pdf"><a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Actualizar</a></td>
             <td class="no-sort no-click no-pdf">
             {!! Form::open(['method' => 'DELETE', 'route'=>['books.destroy', $book->id]]) !!}
             {!! Form::submit('Elminar', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
    </div>
    </div>
    </div>
    </div>

@endsection
