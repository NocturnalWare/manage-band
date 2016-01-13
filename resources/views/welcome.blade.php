@extends('layouts.front')
@section('content')
<div class="contentr" style="margin-bottom:50px;">
    <div class="col-md-1"></div>
    <div class="col-sm-12 col-md-10" style=";border-radius:10px;">
        <div class="container col-md-12" style="padding:10px;border-radius:10px;">
            <form action="{{route('signUp')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <span class="row">
                    <label class="col-xs-5" style="text-align:right;color:#fff">First Name </label>
                    <input class="col-xs-7 pull-right" name="first_name" />
                </span>
                
                <span class="row">
                    <label class="col-xs-5" style="text-align:right;color:#fff">Last Name</label>
                    <input class="col-xs-7 pull-right" name="last_name" />
                </span>
                
                <span class="row">
                    <label class="col-xs-5" style="text-align:right;color:#fff">Email</label>
                    <input class="col-xs-7 pull-right" name="email" placeholder="email@address.com" />
                </span>
                
                <span class="row">
                    <label class="col-xs-5" style="text-align:right;color:#fff">Zip Code</label>
                    <input class="col-xs-7 pull-right" name="zip"></span>
                </span>

                <span class="row">
                    <label class="col-xs-5" style="text-align:right;color:#fff">I'm a </label>
                    <select class="col-xs-7 pull-right" style="color:#000;">
                        <option value="band">Band</option>
                        <option value="venue">Venue</option>
                        <option value="promoter">Promoter</option>
                    </select>
                </span>
                
                <span class="row">
                    <center>
                        <button class="btn-sm btn-success col-xs-6 pull-right" style="border-radius:10px;">Sign Up for Beta</button>
                    </center>
                </span>
            </form>
        </div>

        <div class="content col-sm-12" style="font-size:1.5em;border-radius:10px;">
            <div class="col-sm-12">
                <div class="img-responsive col-xs-12 pull-left row" style="padding-left:3%;background-image: url('http://manage.band/images/groupshot.jpg');background-repeat:no-repeat;height:500px;width:100%">
                    <div class="col-sm-12 col-md-4 pull-right" style="background-color:#000;color:#fff;height:400px;padding-top:9%;opacity:.8;border-radius:15px;font-size:1em">
                        Manage your business from the studio, the road, or anywhere else that has an internet connection. <br> <br>
                    </div>
                </div>
            </div>

            <div class="img-responsive col-xs-12 pull-left row" style="background-image: url('http://manage.band/images/frontshot.jpg');background-repeat:no-repeat;height:500px;width:100%">
                <div class="col-sm-12 col-md-4 pull-right" style="background-color:#000;color:#fff;height:400px;padding-top:9%;opacity:.8;border-radius:15px;font-size:1em">
                    From amps to Zildjian, manage your gear and make sure you have everything you need to succeed. <br> <br>
                </div>
            </div>

            <div class="img-responsive col-xs-12 pull-left row" style="background-image: url('http://manage.band/images/showshot.jpg');background-repeat:no-repeat;height:500px;width:100%">
                <div class="col-sm-12 col-md-4 pull-right" style="background-color:#000;color:#fff;height:400px;padding-top:9%;opacity:.8;border-radius:15px;font-size:1em">
                    Connect with the people you need and social media to quickly set up a show or tour. <br> <br>
                </div>
            </div>

            <div class="img-responsive col-xs-12 pull-left row" style="background-image: url('http://manage.band/images/merchshot.jpg');background-repeat:no-repeat;height:500px;width:100%">
                <div class="col-sm-12 col-md-4 pull-right" style="background-color:#000;color:#fff;height:400px;padding-top:9%;opacity:.8;border-radius:15px;font-size:1em">
                    Sell tickets & merch online, inventory management and shipping only takes a few clicks.<br><br>
                    Our transaction fee is only 7% of the whole order with no charge for listing.<br> <br>
                </div>
            </div>
        </div>
    </div>
</div>
@stop