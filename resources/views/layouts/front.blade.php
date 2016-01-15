@extends('layouts.master')

@section('layout')
  <div class="title"  style="background-color:#404040;color:#fff;width:100%;">
      
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach

      @if(Session::get('message'))
          {{Session::get('message')}}

      @endif
  </div>
    <div class="contentr" style="overflow-y:hidden;overflow-x:hidden">

<nav class="navbar">
  <div class="container-fluid" style="background-color:#404040;color:#fff">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="background-color:#404040;color:#fff">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color:#fff"></span>
        <span class="icon-bar" style="background-color:#fff"></span>
        <span class="icon-bar" style="background-color:#fff"></span>
      </button>
      <a class="navbar-brand" href="#"  style="background-color:#404040;color:#fff">Manage.Band</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li>
          <span class="col-sm-12 btn" style="width:100%;font-size:1.5em;background-color:#404040;color:#fff">Public Beta Coming Soon!</span>
        </li>        
        <li>
          <button type="button" class="btn btn-lg" style="background-color:#404040;width:100%" data-toggle="modal" data-target="#myModal">
            Sign Up for Free! <i class="fa fa-arrow-right"></i>
          </button>
        </li>
        <li>
          <a href="#" class="col-sm-12 btn hidden" style="background-color:#404040;color:#fff"><i style="font-size:1.5em" class="fa fa-music"></i> Bands</a>          
        </li>
        <li>
          <a href="#" class="col-sm-12 btn hidden" style="background-color:#404040;color:#fff"><i style="font-size:1.5em" class="fa fa-users"></i> Promoters</a>
        </li>
        <li>
          <a href="#" class="col-sm-12 btn hidden" style="background-color:#404040;color:#fff"><i style="font-size:1.5em" class="fa fa-home"></i> Venues</a>
        </li>
        <li>
        <li>
          <a href="#" class="col-sm-12 btn hidden" style="background-color:#404040;color:#fff">Login <i style="font-size:1.5em" class="fa fa-user"></i></a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      <div class="backgroundr" style=";width:101%;overflow-x:hidden">
        @yield('content')
      </div>
    </div>
@stop