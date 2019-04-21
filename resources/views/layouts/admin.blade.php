<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{url('assets/admin/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">

  <!--external css-->
  <link href="{{url('assets/admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{url('assets/admin/css/style.css')}}" rel="stylesheet">
  <link href="{{url('assets/admin/css/style-responsive.css')}}" rel="stylesheet">

  <style type="text/css">
    .card
    {
      height: auto;
    }
    @yield('style')
  </style>

</head>

<body>
  <section id="container">
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{url('admin/logout')}}">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <!-- admin profile -->
          <p class="centered"><a href="profile.html"><img src="{{url('assets/img/admin.jpg')}}" class="img-circle" width="80"></a></p>
          <h5 class="centered">{{Auth::guard('admin')->user()->name}}</h5>
          <!-- end admin profile -->
          <li class="mt">
            <a class="active" href="{{url('admin/dashboard')}}">
              <i class="fa fa-dashboard"></i>
              <span>On // Off</span>
              </a>
          </li>
          <li class="mt-1">
            <a class="active" href="{{url('admin/mainslider')}}">
              <i class="fa fa-dashboard"></i>
              <span>Main Slider</span>
              </a>
          </li>
          <li class="mt-1">
            <a class="active" href="{{url('admin/destination')}}">
              <i class="fa fa-dashboard"></i>
              <span>Destinations</span>
              </a>
          </li>
          <li class="mt-1">
            <a class="active" href="{{url('admin/flightsoffers')}}">
              <i class="fa fa-dashboard"></i>
              <span>Flights Offers</span>
              </a>
          </li>
          <li class="mt-1">
            <a class="active" href="{{url('admin/photos')}}">
              <i class="fa fa-dashboard"></i>
              <span>Photo Album</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        @yield('content')
      </section>
    </section>
    <!--main content end-->





    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{url('assets/admin/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{url('assets/admin/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{url('assets/admin/lib/common-scripts.js')}}"></script>
  <script type="text/javascript">
    @yield('js')
  </script>
</body>
</html>
