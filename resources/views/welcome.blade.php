@extends('layouts.front')
@section('content')
<div style="margin-bottom:50px;">
    <div class="col-md-1"></div>
    <div class="col-sm-12 col-md-10" style=";border-radius:10px;">
        <div class="row">
            <div class="row">

                    <div class="row" style="background-color:#000;color:#fff;padding:2%;opacity:.8;border-radius:15px;font-size:3em">

                        <div class="row" style="min-height:700px;background-image: url('http://manage.band/images/n64.jpg');background-repeat:no-repeat;background-size:100%;">
                            <div class="col-sm-12" style="background-color:#000;color:#fff;padding:2%;opacity:.8;border-radius:15px;text-align:center">
                                Manage your business from the studio, the road, or anywhere else that has an internet connection. <br> <br>
                            </div>
                        <!-- spacer -->
                            <div class="row" style="min-height:400px"></div>
                        <div class="row" style="opacity:.2;min-height:600px;background-image: url('http://manage.band/images/brennandrums2.jpg');background-repeat:no-repeat;background-size:100%;">
                            <div class="col-sm-12" style="background-color:#000;color:#fff;opacity:.8;border-radius:15px;text-align:center">
                                    From amps to Zildjian, manage your gear and make sure you have everything you need to succeed.
                            </div>
                            <div class="row" style="min-height:600px"></div>
                        </div>
                        </div>

                        <div class="col-sm-12" style="background-color:#000;color:#fff;opacity:.8;padding-top:9%;border-radius:15px;text-align:center">
                                Connect with social media and the people you need to manage a show or tour. <br> <br>
                        <div class="row" style="display:flex;min-height:600px;background-image: url('http://manage.band/images/connect.jpg');background-repeat:no-repeat;background-size:100%;"></div>
                        </div>
                        
                        <div class="col-sm-12" style="background-color:#000;color:#fff;padding-top:9%;border-radius:15px;text-align:center">
                            Sell tickets & merch online, manage inventory and shipping with only a few clicks.<br><br>
                            <button type="button" class="btn btn-default btn-lg" style="width:50%;height:100px" data-toggle="modal" data-target="#myModal">
                                Sign Up for Free! <i class="fa fa-arrow-right"></i>
                            </button><br><br>
                            Our transaction fee is only 7% of the whole order -- no other charges.<br> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Button trigger modal -->



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body" style="background-color:#404040">
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

    </div>
  </div>
</div>


@stop