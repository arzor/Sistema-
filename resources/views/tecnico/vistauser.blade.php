@extends('layouts.app')

@section($users as $user)

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tecnicos</div>
                <div class="panel-body">

    <ul>
    <li>{!! $user->email !!}</li>
    </ul>
                    
@endsection