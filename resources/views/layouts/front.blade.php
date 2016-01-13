@extends('layouts.master')

@section('layout')
  <div class="title" style="width:100%;">
      
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach

      @if(Session::get('message'))
          {{Session::get('message')}}
      @else
          Public Beta Coming Soon!
      @endif
      <br>
  </div>
    <div class="contentr" style="overflow-y:hidden;height:93%;overflow-x:hidden">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Manage.Band</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#" class="col-sm-12 btn"><i style="font-size:1.5em" class="fa fa-music"></i> Bands</a>          
        </li>
        <li>
          <a href="#" class="col-sm-12 btn"><i style="font-size:1.5em" class="fa fa-users"></i> Promoters</a>
        </li>
        <li>
          <a href="#" class="col-sm-12 btn"><i style="font-size:1.5em" class="fa fa-home"></i> Venues</a>
        </li>
        <li>
        <li>
          <a href="#" class="col-sm-12 btn">Login <i style="font-size:1.5em" class="fa fa-user"></i></a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      <div class="backgroundr" style="width:101%;overflow-x:hidden">
        @yield('content')
      </div>
    </div>
@stop