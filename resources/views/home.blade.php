<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>Temanggung</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Compass Template
    http://www.templatemo.com/tm-454-compass
    -->
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- CSS Bootstrap & Custom -->
    <link href="{{ asset('csscore/bootstrap/css/bootstrap.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{ asset('csscore/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('csscore/css/templatemo-misc.css') }}">
    <link rel="stylesheet" href="{{ asset('csscore/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('csscore/css/templatemo-main.css') }}">
        
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    <!-- JavaScripts -->
    <script src="{{ asset('csscore/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('csscore/js/modernizr.js') }}"></script>
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
</head>
<body>
    
    <div id="home">
        <div class="site-header">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="left-header">
                                <span><i class="fa fa-phone"></i>080 080 0990</span>
                                <span><i class="fa fa-envelope"></i>temanggung@m_city.com</span>
                            </div> <!-- /.left-header -->
                        </div> <!-- /.col-md-6 -->
                        <div class="col-md-6 col-sm-6">
                            <div class="right-header text-right">
                                <ul class="social-icons">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul>
                            </div> <!-- /.left-header -->
                        </div> <!-- /.col-md-6 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="logo">
                                <img src="{{ asset('images/temanggung/title.png') }}" title="Logo Temanggung" width="110" height="35" >
                                {{-- <h1><a href="#" title="Dreri">Compass</a></h1> --}}
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <div class="menu text-right hidden-sm hidden-xs">
                                <ul>
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#portfolio">Nearby</a></li>
                                    <li><a href="#about">Weather</a></li>
                                    {{-- <li><a href="#contact">Contact</a></li>
                                    <li><a href="http://www.facebook.com/templatemo" class="external">External</a></li> --}}
                                </ul>
                            </div> <!-- /.menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                    <div class="responsive-menu text-right visible-xs visible-sm">
                        <a href="#" class="toggle-menu fa fa-bars"></a>
                        <div class="menu">
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#portfolio">Nearby</a></li>
                                <li><a href="#about">Weather</a></li>
                            </ul>
                        </div> <!-- /.menu -->
                    </div> <!-- /.responsive-menu -->
                </div> <!-- /.container -->
            </div> <!-- /.header -->
        </div> <!-- /.site-header -->
    </div> <!-- /#home -->

    <div class="flexslider">
        <ul class="slides">
            @foreach($slider->result as $sld)
            <li>
                <img src="http://temanggung.mcity.id/files/content/{{$sld->images}}" alt="" height="400px">
                <div class="flex-caption">
                    <h2>{{$sld->name}}</h2>
                    <span></span>

            </div> 
            </li>
            @endforeach
            {{-- <li>
                <img src="{{ asset('csscore/images/banner02.jpg') }}" alt="">
                <div class="flex-caption">
                    <h2>Responsive Mobile</h2>
                    <span></span>
                    <p>Ea, similique, odit id consectetur est beatae quia dicta officiis ipsam itaque in<br>facilis aliquid quas officia voluptatem repellendus repellat!</p>
                </div>
            </li> --}}
        </ul>
    </div>

    <div id="portfolio" class="section-content">
        <div class="container">
            <div class="title-section text-center">
                <h2>Our Services</h2>
                <span></span>
            </div> <!-- /.title-section -->
            <div class="row">
                @foreach($menu->result->default as $mn)
                @if($mn->menu_id != 23 && $mn->menu_id != 3 && $mn->menu_id != 19 )
        
        

                <div class="col-md-3 col-sm-6" onclick="data_menu({{ $mn->menu_id }})">
                    @csrf

                    <div class="portfolio-thumb">
                        <img src="{{$mn->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                        <div class="overlay">
                            <div class="inner">
                                <h4>{{$mn->menu_name}}</h4>
                                {{-- <span>Design</span> --}}
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.portfolio-thumb -->
                </div> <!-- /.col-md-3 -->
                @endif
                {{-- agenda --}}
                @if($mn->menu_id == 19)
        
                <div class="col-md-3 col-sm-6" onclick="agenda({{ $mn->menu_id }})">
                    @csrf

                    <div class="portfolio-thumb">
                        <img src="{{$mn->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                        <div class="overlay">
                            <div class="inner">
                                <h4>{{$mn->menu_name}}</h4>
                                {{-- <span>Design</span> --}}
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.portfolio-thumb -->
                </div> <!-- /.col-md-3 -->
                @endif{{-- pelayanan publik --}}
                @if($mn->menu_id == 3)

                <div class="col-md-3 col-sm-6" onclick="pelayanan({{ $mn->menu_id }})">
                    @csrf

                    <div class="portfolio-thumb">
                        <img src="{{$mn->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                        <div class="overlay">
                            <div class="inner">
                                <h4>{{$mn->menu_name}}</h4>
                                {{-- <span>Design</span> --}}
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.portfolio-thumb -->
                </div> <!-- /.col-md-3 -->
                @endif
                {{-- galeri --}}
                @if($mn->menu_id == 23)

                <div class="col-md-3 col-sm-6" onclick="data_gallery(1)">
                    @csrf

                    <div class="portfolio-thumb">
                        <img src="{{$mn->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                        <div class="overlay">
                            <div class="inner">
                                <h4>{{$mn->menu_name}}</h4>
                                {{-- <span>Design</span> --}}
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.portfolio-thumb -->
                </div> <!-- /.col-md-3 -->
                @endif
                @endforeach

                <div class="col-md-3 col-sm-6 klik-lain">
                    @csrf

                    <div class="portfolio-thumb">
                        <img src="{{asset('images/temanggung/lainnya.png')}}" alt="Portfolio Item 1" height="50" width="50">
                        <div class="overlay">
                            <div class="inner">
                                <h4>Lainnya</h4>
                                {{-- <span>Design</span> --}}
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.portfolio-thumb -->
                </div> <!-- /.col-md-3 -->

            </div> <!-- /.row -->
            <div class="title-section text-center">
                <h2>Layanan Publik</h2>
                <span></span>
            </div> <!-- /.title-section -->
<div class="row">
        {{-- harga pokok --}}
        @foreach($menu->result->more as $mm)
        @if($mm->menu_id == 1 )
        <div class="col-md-3 col-sm-6" onclick="harga_pokok()">
            @csrf

            <div class="portfolio-thumb">
                <img src="{{$mm->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                <div class="overlay">
                    <div class="inner">
                        <h4>{{$mm->menu_name}}</h4>
                        {{-- <span>Design</span> --}}
                    </div>
                </div> <!-- /.overlay -->
            </div> <!-- /.portfolio-thumb -->
        </div> <!-- /.col-md-3 -->
        @endif
        @endforeach
        {{-- Pengaduan --}}
        @foreach($menu->result->more as $mm)
        @if($mm->menu_id == 2 )

        <a target="_blank" href="https://sms.temanggungkab.go.id/layanan.html">

        <div class="col-md-3 col-sm-6">
            @csrf

            <div class="portfolio-thumb">
                <img src="{{$mm->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                <div class="overlay">
                    <div class="inner">
                        <h4>{{$mm->menu_name}}</h4>
                        {{-- <span>Design</span> --}}
                    </div>
                </div> <!-- /.overlay -->
            </div> <!-- /.portfolio-thumb -->
        </div> <!-- /.col-md-3 -->
    </a>

        @endif
        @endforeach
        {{-- Layanan Publik semua --}}
        @foreach($menu->result->more as $mm)

        @if($mm->menu_id != 1 && $mm->menu_id != 2 )

        <div class="col-md-3 col-sm-6" onclick="data_menu({{ $mm->menu_id }})">
            @csrf

            <div class="portfolio-thumb">
                <img src="{{$mm->menu_icon_url}}" alt="Portfolio Item 1" height="50" width="50">
                <div class="overlay">
                    <div class="inner">
                        <h4>{{$mm->menu_name}}</h4>
                        {{-- <span>Design</span> --}}
                    </div>
                </div> <!-- /.overlay -->
            </div> <!-- /.portfolio-thumb -->
        </div> <!-- /.col-md-3 -->
        @endif

        @endforeach
    </div>
        </div> <!-- /.container -->
    </div> <!-- /#portfolio -->



    <div id="about" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>About Us</h2>
                <span></span>
            </div> <!-- /.title-section -->
            <div class="row">
                <div class="col-md-8">
                    <h4 class="widget-title">Company Background</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, ex, amet, quisquam magni quasi modi sint accusamus architecto velit veritatis nobis autem repellat dolore quis atque totam laudantium ab sed impedit beatae esse error culpa voluptatem eius et. <br><br>Aut, nulla, debitis voluptates doloribus quisquam maiores repudiandae nam culpa voluptatibus alias earum magnam numquam. Consectetur, ratione, ipsam totam et nesciunt atque temporibus fuga quos rem deserunt tempore dolore eaque dolorum a doloremque optio nihil pariatur aliquid ex id officiis aliquam sed.</p>
                </div> <!-- /.col-md-3 -->
                <div class="col-md-4 our-skills">
                    <h4 class="widget-title">Our Skills</h4>
                    <ul class="progess-bars">
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">Design 90%</div>
                            </div>
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">HTML CSS 75%</div>
                            </div>
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">WordPress 85%</div>
                            </div>
                        </li>
                        <li>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">Marketing 95%</div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="our-team">
                    <div class="col-md-4 col-sm-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('csscore/images/team/member-1.jpg') }}" alt="Tracy">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                    </ul>
                                </div> <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Tracy One</h5>
                                <span>Product Developer</span>
                                <p>Mauris vel lorem non odio accumsan scelerisque. Nullam id augue vel nibh soll.</p>
                            </div>
                        </div> <!-- /.team-member -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('csscore/images/team/member-2.jpg') }}" alt="Mary">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                    </ul>
                                </div> <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Mary Two</h5>
                                <span>Product Designer</span>
                                <p>Mauris vel lorem non odio accumsan scelerisque. Nullam id augue vel nibh soll.</p>
                            </div>
                        </div> <!-- /.team-member -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('csscore/images/team/member-3.jpg') }}" alt="Julia">
                                <div class="overlay">
                                    <ul class="social">
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                    </ul>
                                </div> <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5>Julia Three</h5>
                                <span>Product Manager</span>
                                <p>Mauris vel lorem non odio accumsan scelerisque. Nullam id augue vel nibh soll.</p>
                            </div>
                        </div> <!-- /.team-member -->
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.our-team -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#about -->

    <div id="contact" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Contact Us</h2>
                <span></span>
            </div> <!-- /.title-section -->
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <h4 class="widget-title">Send a message to us</h4>
                    <div class="contact-form">
                        <p class="full-row">
                            <label for="name-id">Your Name:</label>
                            <input type="text" id="name-id" name="name-id">
                        </p>
                        <p class="full-row">
                            <label for="email-id">Email:</label>
                            <input type="text" id="email-id" name="email-id">
                        </p>
                        <p class="full-row">
                            <label for="subject-id">Subject:</label>
                            <input type="text" id="subject-id" name="subject-id">
                        </p>
                        <p class="full-row">
                            <label for="message">Message:</label>
                            <textarea name="message" id="message" rows="6"></textarea>
                        </p>
                        <input class="mainBtn" type="submit" name="" value="Send Message">
                    </div>
                </div> <!-- /.col-md-3 -->
                <div class="col-md-5 col-sm-6">
                    <h4 class="widget-title">Our location</h4>
                    <div class="map-holder">
                        <div class="google-map-canvas" id="map-canvas" style="height: 250px;">
                        </div>
                    </div> <!-- /.map-holder -->
                    <div class="contact-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, modi, non ducimus nesciunt in commodi similique aliquam omnis ea at!</p>
                        <span><i class="fa fa-home"></i>850 In luctus justo vel nisi, Duis mattis 10440</span>
                        <span><i class="fa fa-phone"></i>080-080-0990</span>
                        <span><i class="fa fa-envelope"></i>info@company.com</span>
                    </div>
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#contact -->

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <p>Copyright &copy; 2084 Company Name</p>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="go-top">
                        <a href="#" id="go-top">
                            <i class="fa fa-angle-up"></i>
                            Back to Top
                        </a>
                    </div>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <script src="{{ asset('csscore/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('csscore/js/plugins.js') }}"></script>
    <script src="{{ asset('csscore/js/jquery.lightbox.js') }}"></script>
    <script src="{{ asset('csscore/js/custom.js') }}"></script>
    <script type="text/javascript">

        function initialize() {
          var mapOptions = {
			  scrollwheel: false,
            zoom: 15,
            center: new google.maps.LatLng(13.758468,100.567481)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>

</body>
</html>