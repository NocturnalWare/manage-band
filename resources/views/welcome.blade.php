@extends('layouts.front')
@section('content')
<div class="backgroundr">
        <div class="col-md-2"></div>
        <div class="col-sm-12 col-md-8" style="background-color:#000;">
            <div class="title" style="color:#fff">
                Manage Local Music -- Beta Coming Soon<br>
                <form>
                    <input name="email" class="col-sm-12 col-md-6" style="font-size:.75em" placeholder="email@address.com">
                    <select class="col-sm-12 col-md-6" style="color:#000;">
                        <option value="band"><span style="font-size:.5em;">I'm a</span> Band</option>
                        <option value="venue"><span style="font-size:.5em;">I'm a</span> Venue</option>
                        <option value="promoter"><span style="font-size:.5em;">I'm a</span> Promoter</option>
                    </select>
                    <button class="btn-lg btn-default col-sm-12">Sign Up for Beta</button>
                </form>
            </div>
            <div class="content col-sm-12" style="background-color:#000;font-size:1.5em;">
                <div class="img-responsive row" style="background-image: url('http://manage.band/images/groupshot.jpg');background-repeat:no-repeat;height:500px;">
                    <div class="col-sm-6 pull-right" style="background-color:#000;color:#fff;height:500px;padding-top:15%;opacity:.8;font-size:1em">
                        Manage your business from the studio, the road, or anywhere else that has an internet connection. <br> <br>
                    </div>
                </div>

                <div class="img-responsive row" style="background-image: url('http://manage.band/images/frontshot.jpg');background-repeat:no-repeat;height:500px;">
                    <div class="col-sm-6 pull-left" style="background-color:#000;color:#fff;height:500px;padding-top:15%;opacity:.8;font-size:1em">
                        From amps to Zildjian, manage your gear and make sure you have everything you need to succeed. <br> <br>
                    </div>
                </div>

                <div class="img-responsive row" style="background-image: url('http://manage.band/images/showshot.jpg');background-repeat:no-repeat;height:500px;">
                    <div class="col-sm-6 pull-right" style="background-color:#000;color:#fff;height:500px;padding-top:15%;opacity:.8;font-size:1em">
                        Connect with the people you need and social media to quickly set up a show or tour. <br> <br>
                    </div>
                </div>

                <div class="img-responsive row" style="background-image: url('http://manage.band/images/merchshot.jpg');background-repeat:no-repeat;height:500px;">
                    <div class="col-sm-6 pull-left" style="background-color:#000;color:#fff;height:500px;padding-top:15%;opacity:.8;font-size:1em">
                        Sell tickets & merch online, inventory management and shipping only takes a few clicks.<br>
                        Our transaction fee is only 6% of the whole order with no charge for listing.<br> <br>
                    </div>
                </div>
            </div>
        </div>
        </div>
@stop