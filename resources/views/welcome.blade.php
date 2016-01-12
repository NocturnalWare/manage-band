@extends('layouts.front')
@section('content')
<div class="backgroundr">
        <div class="col-md-1"></div>
        <div class="col-sm-12 col-md-10" style="background-color:#000;">
            <div class="title" style="color:#fff">
                @if(Session::get('message'))
                    {{Session::get('message')}}
                @else
                    Public Beta Coming Soon!
                @endif
                <br>
            </div>
                <div class="container col-md-10" style="padding:10px;background-color:#404040;border-radius:10px;">
                    <form action="{{route('signUp')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <span class="row">
                            <label class="col-sm-3" style="color:#fff">First Name </label>
                            <input class="col-sm-9 pull-right" name="first_name" />
                        </span>
                        
                        <span class="row">
                            <label class="col-sm-3" style="color:#fff">Last Name</label>
                            <input class="col-sm-9 pull-right" name="last_name" />
                        </span>
                        
                        <span class="row">
                            <label class="col-sm-3" style="color:#fff">Email</label>
                            <input class="col-sm-9 pull-right" name="email" placeholder="email@address.com" />
                        </span>
                        
                        <span class="row">
                            <label class="col-sm-3" style="color:#fff">Zip Code</label>
                            <input class="col-sm-9 pull-right" name="zip"></span>
                        </span>

                        <span class="row">
                            <label class="col-sm-3" style="color:#fff">I'm a </label>
                            <select class="col-sm-9 pull-right" style="color:#000;">
                                <option value="band">Band</option>
                                <option value="venue">Venue</option>
                                <option value="promoter">Promoter</option>
                            </select>
                        </span>
                        
                        <span class="row">
                            <center>
                                <button class="btn-sm btn-success col-sm-12" style="border-radius:10px;">Sign Up for Beta</button>
                            </center>
                        </span>
                    </form>
                </div>

            <div class="content col-sm-10" style="background-color:#000;font-size:1.5em;">
                <div class="img-responsive pull-left row" style="background-image: url('http://manage.band/images/groupshot.jpg');background-repeat:no-repeat;height:400px;width:100%">
                    <div class="col-sm-12 col-md-6 pull-right" style="background-color:#000;color:#fff;height:400px;padding-top:5%;opacity:.8;font-size:1em">
                        Manage your business from the studio, the road, or anywhere else that has an internet connection. <br> <br>
                    </div>
                </div>

                <div class="img-responsive pull-left row" style="background-image: url('http://manage.band/images/frontshot.jpg');background-repeat:no-repeat;height:400px;width:100%">
                    <div class="col-sm-12 col-md-6 pull-right" style="background-color:#000;color:#fff;height:400px;padding-top:5%;opacity:.8;font-size:1em">
                        From amps to Zildjian, manage your gear and make sure you have everything you need to succeed. <br> <br>
                    </div>
                </div>

                <div class="img-responsive pull-left row" style="background-image: url('http://manage.band/images/showshot.jpg');background-repeat:no-repeat;height:400px;width:100%">
                    <div class="col-sm-12 col-md-6 pull-right" style="background-color:#000;color:#fff;height:400px;padding-top:5%;opacity:.8;font-size:1em">
                        Connect with the people you need and social media to quickly set up a show or tour. <br> <br>
                    </div>
                </div>

                <div class="img-responsive pull-left row" style="background-image: url('http://manage.band/images/merchshot.jpg');background-repeat:no-repeat;height:400px;width:100%">
                    <div class="col-sm-12 col-md-6 pull-right" style="background-color:#000;color:#fff;height:400px;padding-top:5%;opacity:.8;font-size:1em">
                        Sell tickets & merch online, inventory management and shipping only takes a few clicks.<br><br>
                        Our transaction fee is only 6% of the whole order with no charge for listing.<br> <br>
                    </div>
                </div>
            </div>
        </div>
        </div>
@stop