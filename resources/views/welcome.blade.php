@extends('layouts.front')
@section('content')
<div style="margin-bottom:50px;">
    <div class="col-lg-2 col-md-1"></div>
    <div class="col-xs-12 col-lg-8 col-md-10" style=";border-radius:10px;">
        <div class="row">
            <div class="row">

                        
                        <div id="carousel-example-generic" class="hidden-sm hidden-lg hidden-md carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <center>
                              <img class="img-responsive col-sm-12" style="min-height:300px;" src="http://manage.band/images/n64.png">
                              <div class="carousel-caption">
                                <h3 style="background-color:#000;opacity:.8;color:#fff">
                                    Manage your business from the studio, the road, or anywhere else that has an internet connection. <br>
                                </h3>
                              </div>
                          </center>
                            </div>
                            <div class="item">
                                <center>
                              <img class="img-responsive col-sm-12" style="min-height:300px;" src="http://manage.band/images/brennandrums2.jpg">
                              <div class="carousel-caption">
                                <h3 style="background-color:#000;opacity:.8;color:#fff">
                                    From amps to Zildjian, manage your gear and make sure you have everything you need to succeed.
                                </h3>
                              </div>
                          </center>
                            </div>
                            <div class="item">
                                <center>

                              <img class="img-responsive col-sm-12" style="min-height:300px;"  src="http://manage.band/images/connect.jpg">
                              <div class="carousel-caption">
                                <h3 style="background-color:#000;opacity:.8;color:#fff">
                                    Connect with social media and the people you need to manage a show or tour.
                                </h3>
                              </div>
                          </center>
                            </div>
                            <div class="item">
                                <center>
                              <img class="img-responsive col-sm-12" style="min-height:300px;"  src="http://manage.band/images/connect.jpg">
                              <div class="carousel-caption">
                                <h3 style="padding:10px;background-color:#000;height:100%;color:#fff;font-size:1em">
                                    Sell tickets & merch online, manage inventory and shipping with only a few clicks.<br><br>

                                    <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">
                                        Sign Up for Free! <i class="fa fa-arrow-right"></i>
                                    </button><br><br>
                                    Our transaction fee is only 7% of the whole order -- no other charges.
                                </h3>
                              </div>
                          </center>
                            </div>
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                        <div class="hidden-sm hidden-lg hidden-md row">
                            <div class="col-sm-12 well well-sm" style="font-size:.5em">
                                @include('features')
                                <button type="button" class="btn btn-lg" style="width:100%" data-toggle="modal" data-target="#myModal">
                                    Sign Up for Free! <i class="fa fa-arrow-right"></i>
                                </button><br><br>
                            </div>
                        </div>

                        <div style="max-width:1024px;margin-right:10%;margin-left:15%;">
                    <div class="row hidden-xs col-sm-12" style="width:100%;background-color:#000;color:#fff;padding:2%;border-radius:15px;font-size:2em">
                      
                        <div class="row" style=";background-image: url('http://manage.band/images/n64.png');background-repeat:no-repeat;background-size:100%;">
                            <div class="col-sm-12" style="background-color:#000;color:#fff;padding:2%;opacity:.9;border-radius:15px;text-align:center">
                                    Manage your business from the studio, the road, or anywhere else that has an internet connection.
                                    <span class="showFeature btn" style="color:#000;background-color:#fff;width:100%;font-size:.7em"><span>See Features</span> <i class="fa fa-chevron-circle-down"></i></span>
                            </div>
                            <div class="col-sm-12 mbandFeatures" style="height:500px;"></div>
                                <div class="col-sm-12 mband-feature-overlay hidden mbandFeatures">
                                    <div class="row mband-overlay">
                                        <div class="well well-sm ">
                                            @include('features')
                                            <button type="button" class="btn btn-lg" style="width:100%" data-toggle="modal" data-target="#myModal">
                                                Sign Up for Free! <i class="fa fa-arrow-right"></i>
                                            </button><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- spacer -->
                        <div class="row" style="background-image: url('http://manage.band/images/brennandrums2.jpg');background-repeat:no-repeat;background-size:100%">
                            <div class="col-sm-12" style="background-color:#000;color:#fff;opacity:.8;border-radius:15px;text-align:center">
                                From amps to Zildjian, manage your gear and make sure you have everything you need to succeed.
                            </div>
                            <div class="col-sm-12" style="height:500px;"></div>
                        </div>

                        <div class="row" style="background-image: url('http://manage.band/images/connect.jpg');background-repeat:no-repeat;background-size:100%">
                            <div class="col-sm-12" style="background-color:#000;color:#fff;opacity:.8;border-radius:15px;text-align:center">
                                    Connect with social media and the people you need to manage a show or tour.
                            </div>
                            <div class="row" style="height:500px;"></div>
                        </div>
                        
                        <div class="col-sm-12" style="background-color:#000;opacity;.8;color:#fff;padding-top:9%;border-radius:15px;text-align:center">
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


<!-- Button trigger modal -->



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="">
    <div class="modal-content">
    <div class="modal-header" style="background-color:#404040;border:0px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i style="color:#fff" class="fa fa-times"></i></button>
    </div>
      <div class="modal-body" style="background-color:#404040;opacity:.9">
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
                                                    <div class="well well-sm ">
                                            @include('features')
      </div>

    </div>
  </div>
</div>

<script>
    $('.showFeature').on('click', function(){
        $(this).find('.fa').toggleClass('fa-chevron-circle-down').toggleClass('fa-chevron-circle-up');
        showFeatures();
    });

    function showFeatures(){
        $('.mbandFeatures').toggleClass('hidden');
    }
</script>
@stop