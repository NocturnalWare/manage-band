@extends('layouts.master')

@section('layout')

    <div class="backgroundr" style="overflow-y:hidden">

<nav class="navbar navbar-default" style="background-color:#000;padding:0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
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

@yield('content')

    </div>
@stop