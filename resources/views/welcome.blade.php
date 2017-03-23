@extends('layouts.app')

@section('content')
  @if (Auth::guest())
    @include('layouts.contents.notecuser')
  @else
    @if(Auth::user()->rol_user == 1 and Auth::user()->rol_tec == 1)
      @include('layouts.contents.tecuser')    
    @elseif (Auth::user()->rol_tec == 1)
      @include('layouts.contents.tec')
    @elseif(Auth::user()->rol_user == 1)
      @include('layouts.contents.user')
    @elseif(Auth::user()->rol_user == 0 and Auth::user()->rol_tec == 0)
      @include('layouts.contents.admin')
    @else
      @include('layouts.contents.notecuser')    
    @endif
  @endif
@endsection
