
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AV Health</title>

  <!-- css -->
  <link href="{{url('/webstyle/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('/webstyle/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="{{url('/webstyle/plugins/cubeportfolio/css/cubeportfolio.min.css')}}">
  <link href="{{url('/webstyle/css/nivo-lightbox.css')}}" rel="stylesheet" />
  <link href="{{url('/webstyle/css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('/webstyle/css/owl.carousel.css')}}" rel="stylesheet" media="screen" />
  <link href="{{url('/webstyle/css/owl.theme.css')}}" rel="stylesheet" media="screen" />
  <link href="{{url('/webstyle/css/animate.css')}}" rel="stylesheet" />
  <link href="{{url('/webstyle/css/style.css')}}" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="{{url('/webstyle/bodybg/bg1.css')}}" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="{{url('/webstyle/color/default.css')}}" rel="stylesheet">

  <style>
    .appointment-btn{
      margin-left: 25px;
    background: #3fbbc0;
    color: #fff;
    border-radius: 4px;
    padding: 8px 25px;
    white-space: nowrap;
    transition: 0.3s;
    font-size: 14px;
    display: inline-block;
    font-size: 13px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: 700;
    }
    .appointment-btn:hover{
    background: #4fdadf;
    color: #ffffff;
    }
  </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              
              <p class="bold text-left">Gmail : {{session()->get('email')}} </p>

            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right">Call us now : +923172427692</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{url('/webstyle/img/sAv.jpg')}}" alt="" width="150" height="50" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/services')}}">Service</a></li>
            <li><a href="{{url('/contact')}}">Contact Us</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>More <b class="caret"></b></a>
              <ul class="dropdown-menu">
                @if (!session()->has('email'))
                <li><a href="{{url('/login')}}">Login</a></li>
                <li><a href="{{url('/register')}}">Sign Up</a></li>
                <li><a href="{{url('/loginhospital')}}">Hospital Login</a></li>
                <li><a href="{{url('/Hospitalregister')}}">Hospital Registration</a>
                
                @else
                
                  <li><a href="{{url('/userdashboard')}}">Dashboard</a>
                    <li><a href="{{url('/logout')}}">Logout</a>
                      {{session()->get('email')}}
                      {{session()->get('hospitalemail')}}
                    </li>
                    @endif
                    
                  </ul>
            </li>
          
            <a href="{{url('/SetAppoinment')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Book an</span> Appointment</a>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        
      </div>
      <!-- /.container -->
    </nav>



    @yield('homecon')


    <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>About AV Health</h5>
                <p>
                  Lorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, fuga blanditiis. Animi nam placeat aliquid dicta amet, aperiam dolore fuga.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>HELP</h5>
                <p>
                  Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
                </p>
                <ul>
                
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +923172427692
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> aamirkhan24@gmail.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Our location</h5>
                <p>Sector 32/A Plot no#R09 Korangi Industrail Area,Karachi</p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                    
                    <a target="_blank" href="#">Team : AV HEALTH</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="{{url('/webstyle/js/jquery.min.js')}}"></script>
  <script src="{{url('/webstyle/js/bootstrap.min.js')}}"></script>
  <script src="{{url('/webstyle/js/jquery.easing.min.js')}}"></script>
  <script src="{{url('/webstyle/js/wow.min.js')}}"></script>
  <script src="{{url('/webstyle/js/jquery.scrollTo.js')}}"></script>
  <script src="{{url('/webstyle/js/jquery.appear.js')}}"></script>
  <script src="{{url('/webstyle/js/stellar.js')}}"></script>
  <script src="{{url('/webstyle/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
  <script src="{{url('/webstyle/js/owl.carousel.min.js')}}"></script>
  <script src="{{url('/webstyle/js/nivo-lightbox.min.js')}}"></script>
  <script src="{{url('/webstyle/js/custom.js')}}"></script>

  <script>if( window.self == window.top ) { (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-55234356-4', 'auto'); ga('send', 'pageview'); } </script>
</body>


</html>
