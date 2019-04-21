<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Shams</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{url('assets/img/gold-sun.png')}}">
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <script src="{{url('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    <style type="text/css">
        .SoicalAndSearch a
        {
            display: flex !important;
            justify-content: center;
            align-items: center;
        }
        #aboutus .circle-w
        {
            display: flex !important;
            justify-content: center;
            align-items: center;
        }
        .tab-content .tab-pane
        {
            background-color: #fe8;
            border-radius: 20px;
            border: 1px #fff solid;
        }
        .nav-pills .nav-link
        {
            border-radius: 0px !important;
            background-color: #1ba;
            margin: 5px;
            color: #fff;
            padding: 3px;
            font-size: 14px;
        }
        .nav-pills .nav-link.active
        {
            background-color: #057;
        }
        input
        {
            font-family: nour, Helvetica Neue, Arial;
        }
        #section-2 .card:hover .card-block
        {
            top: 0px !important;
        }
        #final
        {
            display: none;
        }
    </style>
</head>


<body>
    <div id="preloader">
        <div class="preloader">
            <div class="preloader-top">
                <div class="preloader-top-sun">
                    <div class="preloader-top-sun-bg"></div>
                    <div class="preloader-top-sun-line preloader-top-sun-line-0"></div>
                    <div class="preloader-top-sun-line preloader-top-sun-line-45"></div>
                    <div class="preloader-top-sun-line preloader-top-sun-line-90"></div>
                    <div class="preloader-top-sun-line preloader-top-sun-line-135"></div>
                    <div class="preloader-top-sun-line preloader-top-sun-line-180"></div>
                    <div class="preloader-top-sun-line preloader-top-sun-line-225"></div>
                    <div class="preloader-top-sun-line preloader-top-sun-line-270"></div>
                    <div class="preloader-top-sun-line preloader-top-sun-line-315"></div>
                </div>
            </div>
            <div class="preloader-bottom">
                <div class="preloader-bottom-line preloader-bottom-line-lg"></div>
                <div class="preloader-bottom-line preloader-bottom-line-md"></div>
                <div class="preloader-bottom-line preloader-bottom-line-sm"></div>
                <div class="preloader-bottom-line preloader-bottom-line-xs"></div>
            </div>
        </div>
    </div>
    <!--wrapper start-->
    <div class="wrapper" id="wrapper">
        <!--header section-->
        <header id='header'>
            <div class="upper-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="call-us"> <i class="fa fa-phone fa-flip-horizontal"></i> <span> @lang('global.Exceplanation')؟  @lang('global.Contact'): 23300 2985 </span> </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 text-left">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-white"> <i class="fa fa-sign-in fa-fw" aria-hidden="true"></i> <span>@lang('global.Login')</span></a>
                                </li>
                                <li class="list-inline-item">|</li>
                                <li class="list-inline-item mr-1"> <a href="#" class="text-white "><i class="fa fa-user-o fa-fw"></i> <span>@lang('global.Register')</span></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-5">
                            <a href="#" class="logo"> <img src="{{url('assets/img/Logo.png')}}"> </a>
                        </div>
                        <div class="col-sm-12 col-lg-7">
                            <div class="menu-header">
                                <ul class="list-inline float-left" id='nav'>
                                    <li class="list-inline-item active"><a href="#wrapper">@lang('global.Main')</a> </li>
                                    <li class="list-inline-item"> <a href="#whereto">@lang('global.Offers')</a> </li>
                                    <li class="list-inline-item"> <a href="#section-1">@lang('global.Services')</a> </li>
                                    <li class="list-inline-item"> <a href="#aboutus">@lang('global.About')</a> </li>
                                    <li class="list-inline-item"> <a href="#contact">@lang('global.Contact')</a> </li>

                                    @if(App::getLocale() == 'en')
                                        <li class="list-inline-item"> <a href="{{url('lang','ar')}}">عربى</a> </li>
                                    @endif
                                    @if(App::getLocale() == 'ar')
                                        <li class="list-inline-item"> <a href="{{url('lang','en')}}">EN</a> </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="SoicalAndSearch">
                                <div class="search-box float-left">
                                    <input type="text" class="form-control" value="@lang('global.Search')"> <i class="fa fa-search fa-fw"></i> </div>
                                <ul class="soical float-left list-inline">
                                    <li class="list-inline-item"> <a href="https://www.facebook.com/"><i class="fa fa-facebook fa-fw"></i></a> </li>
                                    <li class="list-inline-item"> <a href="https://twitter.com/"><i class="fa fa-twitter fa-fw"></i></a> </li>
                                    <li class="list-inline-item"> <a href="https://google.com/"><i class="fa fa-google fa-fw"></i></a> </li>
                                    <li class="list-inline-item"> <a href="https://youtube.com/"><i class="fa fa-youtube fa-fw"></i></a> </li>
                                    <li class="list-inline-item"> <a href="https://www.linkedin.com/"><i class="fa fa-linkedin fa-fw"></i></a> </li>
                                    <li class="list-inline-item"> <a href="https://www.instagram.com/"><i class="fa fa-instagram fa-fw"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <div class="section-body">
            <!-- Slider sectoion -->
            <section id='slider'>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">

                        {{ Session::put('status','active') }}
                        
                        @foreach($sliders as $slider)
                        <div class="carousel-item {{Session::get('status')}} {{ Session::put('status','') }}"> <img class="d-block img-fluid" src="{{url('upload/main slider',$slider->url)}}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>{{$slider->hint}}</h3>
                                <p>ضع بعض الكلمات الدلالية هنا</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                </div>
            </section>
            <!-- where you go section-->
            <section class="m-5" id="final">
                <div class="m-5">
                    <h3 class="p-2 rounded bg-primary" style="color: #fff">معلومات الاتصال</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <p>البريد الالكترونى*</p>
                                <input type="email" name="" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <p>رقم الهاتف*</p>
                                <input type="number" name="" class="form-control">
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-warning">ارسال الطلب</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="whereto" id="whereto">
                <div class="container whereto-container">
                    <h3 class="text-header wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">@lang('global.Where Do You Want To Go?')</h3>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist" id='myTab'>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#flyings" role="tab">
                                <i class='fa fa-plane'></i>
                                <span>@lang('global.Flight')</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#hotels" role="tab">
                                <i class='fa fa-building'></i>
                                <span>@lang('global.Hotels')</span>
                            </a>
                        </li>
                       
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active " id="flyings" role="tabpanel">
                            
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">@lang('global.Round Trip')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">@lang('global.One Way')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">@lang('global.Multiple Trips')</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                    @if(session('messege'))
                                        <div class="alert alert-success">{{session('messege')}}</div>
                                    @endif
                                    <!-- <form method="post" action="{{url('roundtrip')}}"> -->
                                        <!-- @csrf() -->
                                    <div class=" row col-12">
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input name="from" type="text" class="form-control" placeholder="@lang('global.Departing From')"> <i class="fa fa-map-marker"></i> </div>
                                        </div>
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input name="to" type="text" class="form-control" placeholder="@lang('global.Arrive To')"> <i class="fa fa-map-marker"></i> </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="date-input">
                                                <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" /><i class="fa fa-calendar"></i> </div>
                                                <div>
                                                    <input type="checkbox" class="my-3" name="flexdate">
                                                    <label>@lang('global.Flexible Date')</label>
                                                </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-2">
                                            <select class="form-control" style="width:100%" name="class">
                                                <option value="0">@lang('global.Booking Class')</option>
                                                <option value="tourism">@lang('global.Tourism')</option>
                                                <option value="bussiness">@lang('global.Bussiness')</option>
                                            </select>
                                        </div>

                                        <!-- second row -->
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input type="number" name="adults" class="d-inline-block form-control m-0" placeholder="@lang('global.Adult')">
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input type="number" name="kids" class="d-inline-block form-control m-0" placeholder="@lang('global.Kid')" >
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input type="number" name="babies" class="d-inline-block form-control m-0" placeholder="@lang('global.Baby')" >
                                            </div>
                                        </div>
                                        <div class="col-sm-12  col-lg-3">
                                            <button class="btn bg-color-green text-white w-100" id="but" type="submit">@lang('global.Book')</button>
                                        </div>
                                    </div>
                                <!-- </form> -->


                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


                                    <form method="post" action="{{url('onewaytrip')}}">
                                        @csrf()
                                    <div class=" row col-12">
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input name="from" type="text" class="form-control" placeholder="@lang('global.Departing From')"> <i class="fa fa-map-marker"></i> </div>
                                        </div>
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input name="to" type="text" class="form-control" placeholder="@lang('global.Arrive To')"> <i class="fa fa-map-marker"></i> </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="date-input">
                                                <input type="text" name="date_go" value="01/01/2018" /><i class="fa fa-calendar"></i> </div>
                                                <div>
                                                    <input type="checkbox" class="my-3" name="flexdate">
                                                    <label>@lang('global.Flexible Date')</label>
                                                </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-2">
                                            <select class="form-control" name="class" style="width:100%">
                                                <option>@lang('global.Booking Class')</option>
                                                <option>@lang('global.Tourism')</option>
                                                <option>@lang('global.Bussiness')</option>
                                            </select>
                                        </div>

                                        <!-- second row -->
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input type="number" name="adults" class="d-inline-block form-control m-0" placeholder="@lang('global.Adult')" >
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input type="number" name="kids" class="d-inline-block form-control m-0" placeholder="@lang('global.Kid')" >
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input type="number" name="babies" class="d-inline-block form-control m-0" placeholder="@lang('global.Baby')" >
                                            </div>
                                        </div>
                                        <div class="col-sm-12  col-lg-3">
                                            <button class="btn bg-color-green text-white w-100" type="submit">حجز</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    
                                    <div class=" row col-12" id="trips">
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input type="text" class="form-control" placeholder="@lang('global.Departing From')"> <i class="fa fa-map-marker"></i> </div>
                                        </div>
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input type="text" class="form-control" placeholder="@lang('global.Arrive To')"> <i class="fa fa-map-marker"></i> </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="date-input">
                                                <input type="text" name="date-multi" value="01/01/2018" /><i class="fa fa-calendar"></i> </div>
                                                <div>
                                                    <input type="checkbox" class="my-3" name="flexdate">
                                                    <label>@lang('global.Flexible Date')</label>
                                                </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-2">
                                            <select class="form-control" style="width:100%">
                                                <option>@lang('global.Booking Class')</option>
                                                <option>@lang('global.Bussiness')</option>
                                                <option>@lang('global.Tourism')</option>
                                            </select>
                                        </div>
                                        <!-- second row -->
                                        <div class="col-12 mb-3">
                                            <div class="col-4">
                                                <button id="add-trip" class="px-5 py-2" style="background-color: #7c6;color: #fff;">@lang('global.Add A Trip')</button>
                                            </div>
                                        </div>
                                        <!-- third row -->
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input type="number" name="" class="d-inline-block form-control m-0" placeholder="@lang('global.Adult')" >
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input type="number" name="" class="d-inline-block form-control m-0" placeholder="@lang('global.Kid')" >
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input type="number" name="" class="d-inline-block form-control m-0" placeholder="@lang('global.Baby')" >
                                            </div>
                                        </div>
                                        <div class="col-sm-12  col-lg-3"> <a href="#" class="btn bg-color-green text-white w-100">@lang('global.Search')</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="hotels" role="tabpanel">
                            <form method="post" action="{{url('hotelbooking')}}">
                                @csrf()
                                    <div class=" row col-12">
                                        <div class=" col-sm-12 col-lg-3">
                                            <div class="location-input">
                                                <input name="from" type="text" class="form-control" placeholder="@lang('global.Departing From')"> <i class="fa fa-map-marker"></i> </div>
                                        </div>
                                        
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="date-input">
                                                <input type="text" name="hotel_date" value="01/01/2018" /><i class="fa fa-calendar"></i> </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-2">
                                            <select class="form-control" style="width:100%" name="rooms">
                                                <option value="0">عدد الغرف</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12  col-lg-3">
                                            <button class="btn bg-color-green text-white w-100">حجز</button>
                                        </div>
                                        <div class="mt-4">
                                            <p class="d-inline-block">عدد الاشخاص</p>
                                            <input type="number" class="mx-3 p-1 rounded" style="border: 1px #fb1 solid" name="adults" placeholder="@lang('global.Adult')">
                                            <input type="number"  style="border: 1px #fb1 solid" class="p-1 rounded" name="kids" placeholder="طفل">
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </section>
            <!--section 1 -->
            <section class="section" id="section-1">
                <div class="container">
                    <div class="section-header wow fadeInDown" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <h2>
                            <span class="section-title">@lang('global.The Most Famous Destinations')</span>
                        </h2>
                        <p>@lang('global.The Most Famous Tourist Places In The World')</p>
                    </div>
                    <div class="section-body">
                        <div class="card-deck row">

                            @foreach($destinations as $destination)
                            <div class="col-sm-12 col-lg-3 wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                                <div class="card"> <img class="card-img-top" src="{{url('upload/destinations',$destination->url)}}" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">{{$destination->name}}</h4>
                                        <p class="card-text">{{$destination->hint}}</p>
                                        <p class="card-text"><small class="text-muted">Last updated at {{$destination->created_at}}</small></p> <a href="#" class="float-left btn btn-card btn-sm">المزيد </a> </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!--section 2 -->
            <section class="section" id="section-2">
                <div class="container">
                    <div class="section-header wow fadeInDown" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <h2>
                            <span class="section-title">@lang('global.The Most Famous Destinations')</span>
                        </h2>
                        <p>@lang('global.The Most Famous Tourist Places In The World')</p>
                    </div>
                    <div class="section-body">
                        <div class="card-deck row">
                            @foreach($flightoffers as $offer)
                            <div class="col-sm-12 col-lg-4 wow zoomIn" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                                <div class="card"> <img class="card-img-top" src="{{url('upload/flights offers',$offer->url)}}" alt="Card image cap">
                                    <div class="card-block w-100">
                                        <h5 class="card-title clearfix">
                                            <div class="float-right">
                                                <small>{{$offer->country}}</small>
                                                <p>{{$offer->place}}</p>
                                            </div>
                                            <div class="float-left">
                                                <small>{{$offer->duration}}</small>
                                                <p>{{$offer->coast}}</p>
                                            </div>
                                        </h5>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> <a href="#" class="float-left btn btn-card btn-sm">المزيد </a> </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!--about us section-->
            <section class="section" id="aboutus">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3  wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <div class="rounded-circle bg-color-green circle-w" style="display: flex;align-items: center;justify-content: center"><i class="fa fa-globe"></i></div>
                            <p>2300</p>
                            <p>المزارات السياحية العالمية</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <div class="rounded-circle bg-color-yellow circle-w"><i class="fa fa-plane"></i></div>
                            <p>2300</p>
                            <p>طائرة للسفر حول العالم</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <div class="rounded-circle bg-color-blue circle-w"><i class="fa fa-suitcase"></i></div>
                            <p>2300</p>
                            <p> أماكن خاصة للسفر</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <div class="rounded-circle bg-color-bruble circle-w"><i class="fa fa-building-o"></i></div>
                            <p>2300</p>
                            <p> فنادق خمس نجوم </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--  -->
            <section class="section clearfix" id="section-2">
                <div class="container">
                    <div class="section-header wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <h2>
                            <span class="section-title">@lang('global.Photos')</span>
                        </h2>
                        <p>@lang('global.Photos Hint')</p>
                    </div>
                    <div class="section-body">
                        <div class="col-md-12" id="portfolio-list">
                            <ul class="cbp-rfgrid">
                                @foreach($photos as $photo)
                                <li class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                                    <a href="#" class="more"> <img class=" w-100" src="{{url('upload/photo album',$photo->url)}}">
                                        <div class="project-info">
                                            <div class="project-details">
                                                <h5 class="white-text red-border-bottom">{{$photo->place}}</h5>
                                                <div class="details white-text">{{$photo->hint}}</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--contact us section-->
            <section class="section" id="contact">
                <div class="container">
                    <div class="section-header wow fadeInDown" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <h2>تواصل معنا لتصلك أخر العروض </h2>
                    </div>
                    <div class="contact-input-con wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <input type="text" class="form-control" placeholder="اكتب ايميلك الخاص لكي تصل أخر العروض "> <i class="fa fa-paper-plane"></i></div>
                    <div class="button-cont wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s"> <a class="btn btn-cont"> إشترك الان</a> </div>
                </div>
            </section>
            <!--footer section-->
            <section class="footer" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="footer-logo"><img src="{{url('assets/img/Logo.png')}}"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-3">
                            <h3 class="footer-title">نبذة عن الشركة </h3>
                            <ul>
                                <li> <a href="#"> تاريخنا</a> </li>
                                <li> <a href="#">  رؤيتنا ومهمتنا</a> </li>
                                <li> <a href="#">  القادة</a> </li>
                                <li> <a href="#"> وكلاء شركات الطيران GSA</a> </li>
                                <li> <a href="#"> الجوائز</a> </li>
                                <li> <a href="#"> حقائق وأرقام</a> </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-lg-3">
                            <h3 class="footer-title">خدماتنا </h3>
                            <ul>
                                <li> <a href="#"> تاريخنا</a> </li>
                                <li> <a href="#">  رؤيتنا ومهمتنا</a> </li>
                                <li> <a href="#">  القادة</a> </li>
                                <li> <a href="#"> وكلاء شركات الطيران GSA</a> </li>
                                <li> <a href="#"> الجوائز</a> </li>
                                <li> <a href="#"> حقائق وأرقام</a> </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-lg-3">
                            <h3 class="footer-title"> علاقات المستثمرين </h3>
                            <ul>
                                <li> <a href="#"> تاريخنا</a> </li>
                                <li> <a href="#">  رؤيتنا ومهمتنا</a> </li>
                                <li> <a href="#">  القادة</a> </li>
                                <li> <a href="#"> وكلاء شركات الطيران GSA</a> </li>
                                <li> <a href="#"> الجوائز</a> </li>
                                <li> <a href="#"> حقائق وأرقام</a> </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-lg-3">
                            <h3 class="footer-title">اتصل بنا </h3>
                            <div class="contact-footer">
                                <p>للاستفسارات يرجى الاتصال على الرقم</p>
                                <h2> <span>920010033</span><i class="fa fa-phone"></i> </h2>
                                <p><i class="fa fa-paper-plane-o"></i><span>ارسل الينا رساله </span> </p>
                                <p><i class="fa fa-at"></i> <span>darklevel152@gmail.com</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6 text-right"> <span>عدد زوار الموقع : 2969901</span></div>
                            <div class="col-sm-12 col-lg-6 text-left"><span>جميع الحقوق محفوظة الشمس للسياحة والسفر © 2017</span></div> <a href="#header" class="scroll-to"><i class="fa fa-angle-up"></i></a> </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--wrapper end-->
    <script src="{{url('assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.easing.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/tether.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/select2.full.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/wow.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.nav.js')}}"></script>
    <script src="{{url('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- <script src="{{url('assets/js/main.js')}}"></script> -->
    <script>
                    
                $(document).ready(function() {
            setTimeout(function() {
                $('#preloader').fadeOut('slow', function() {
                    $('.preloader').fadeOut('slow');
                });
            }, 1000);
            $('input[name="date_go"]').datepicker();
            $('input[name="date-multi"]').datepicker();
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
              }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
              });
            $('select').select2({
                dir: "rtl"
            });
            $('input[name="hotel_date"]').daterangepicker({
                opens: 'left'
              }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
              });
            $('select').select2({
                dir: "rtl"
            });
            $('.menu-header').onePageNav({
                currentClass: 'active',
                changeHash: false,
                scrollSpeed: 750,
                scrollThreshold: 0.5,
                filter: '',
                easing: 'swing',
                begin: function() {
                    //I get fired when the animation is starting
                },
                end: function() {
                    //I get fired when the animation is ending
                },
                scrollChange: function($currentListItem) {
                    //I get fired when you enter a section and I pass the list item of the section
                }
            });
            $('#myTab a').click(function(e) {
                e.preventDefault()
                $(this).tab('show')
            })
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= 150) {
                    $(".menu-scroll").css('display', 'block');

                    $('.lower-header').addClass('fixed');
                } else {
                    $(".menu-scroll").css('display', 'none');
                    $('.lower-header').removeClass('fixed');
                }
            });
        });
                $('#add-trip').on('click',function(){
                    $('#trips').prepend('<div class=" col-sm-12 col-lg-3" id="first"><div class="location-input"><input type="text" class="form-control" placeholder="@lang("global.Departing From")"> <i class="fa fa-map-marker"></i> </div></div><div class=" col-sm-12 col-lg-3" id="second"><div class="location-input"><input type="text" class="form-control" placeholder="@lang("global.Arrive To")"> <i class="fa fa-map-marker"></i> </div></div><div class="col-sm-12 col-lg-4" id="third"><div class="date-input"><input type="text" name="date-multi" value="01/01/2018" /><i class="fa fa-calendar"></i> </div><div><input type="checkbox" class="my-3" name="flexdate"><label>@lang("global.Flexible Date")</label></div></div><div class="col-sm-12 col-lg-2" id="forth"><select class="form-control" style="width:100%"><option>@lang("global.Booking Class")</option><option>@lang("global.Tourism")</option><option>@lang("global.Bussiness")</option></select></div>');
                });

        $('#but').on('click',function(){
            $('#final').css('display','block')
            $('#whereto').css('display','none')
        })
    </script>
    <script>
        new WOW().init();

    </script>
</body>
</html>
<section class="m-5" id="final">
                <div class="m-5">
                    <h3 class="p-2 rounded bg-primary" style="color: #fff">معلومات الاتصال</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <p>البريد الالكترونى*</p>
                                <input type="email" name="" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <p>رقم الهاتف*</p>
                                <input type="number" name="" class="form-control">
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-warning">ارسال الطلب</button>
                        </div>
                    </div>
                </div>
            </section>