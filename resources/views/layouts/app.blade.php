<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sports</title>
	
    <link href="{{asset('css/font-awesome.min.min.css')}}" rel="stylesheet">
    <!-- Goole Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,500" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
	 <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">

    <!-- Off Canvas Menu -->
    <link href="{{asset('css/offcanvas.min.css')}}" rel="stylesheet">

    <!--Theme CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<div id="main-wrapper">

  @include('frontend.partials.header')



    <main>
    <section id="feature_category_section" class="feature_category_section section_wrapper">
	<div class="container">
		<div class="row">
            <div class="col-md-9">
                @yield('content')
            </div>
            <div class="col-md-3">
                @include('frontend.partials.sidebar')
            </div>
        </div>
    </div>
    </main>



    <!-- Footer Section -->
    <footer class="footer_section section_wrapper section_wrapper" >
	<div class="footer_top_section">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="text_widget footer_widget">
					<div class="footer_widget_title"><h2>About Sports Mag</h2></div>

		         	<div class="footer_widget_content">
					 <p>{{$setting->about}}</p>
					</div>
					</div><!--text_widget-->
				</div><!--col-xs-3-->

				<div class="col-md-6">
					<div class="footer_widget">
                        <div class="footer_widget_title"><h2>Discover</h2></div>
					    <div class="footer_menu_item ">
						<div class="row">
							<div class="col-sm-4">
								<ul class="nav navbar-nav ">
									<li><a href="../navbar/">Baseball</a></li>
									<li><a href="../navbar-static-top/">Football</a></li>
									<li><a href="./">Cricket</a></li>
									<li><a href="../navbar/">Rugbi</a></li>
									<li><a href="../navbar/">Hockey</a></li>
									<li><a href="../navbar-static-top/">Boxing</a></li>
									<li><a href="./">Golf</a></li>
									<li><a href="../navbar/">Tennis</a></li>
									<li><a href="../navbar/">Horse Racing</a></li>
								</ul>
						    </div><!--col-sm-4-->
					        <div class="col-sm-4 ">
								<ul class="nav navbar-nav  ">
									<li><a href="../navbar/">Track & Field</a></li>
									<li><a href="../navbar-static-top/">MembershipContact us</a></li>
									<li><a href="./">Newsletter Alerts</a></li>
									<li><a href="../navbar/">Podcast</a></li>
									<li><a href="../navbar/">Blog</a></li>
									<li><a href="../navbar-static-top/">SMS Subscription</a></li>
									<li><a href="./">Advertisement Policy</a></li>
									<li><a href="../navbar/">Jobs</a></li>
								</ul>
					        </div><!--col-sm-4-->
					        <div class="col-sm-4">
								<ul class="nav navbar-nav ">
									<li><a href="../navbar/">Report technical issue</a></li>
									<li><a href="../navbar-static-top/">Complaints & Corrections</a></li>
									<li><a href="./">Terms & Conditions</a></li>
									<li><a href="../navbar-static-top/">Privacy Policy</a></li>
									<li><a href="./">Cookie Policy</a></li>
									<li><a href="../navbar/">Securedrop</a></li>
									<li><a href="../navbar/">Archives</a></li>
								</ul>
					        </div><!--col-sm-4-->
				      	</div><!--row-->
			      	</div><!--footer_menu_item-->
                    </div><!--footer_widget-->
				</div><!--col-xs-6-->

				<div class="col-md-3">
 					<div class="text_widget footer_widget">
						<div class="footer_widget_title"><h2>Editor’s Message</h2></div>
						<img src="{{asset('img/img-author.jpg')}}" />
						<div class="footer_widget_content">Collaborativelyadministrate empowered marketsplug-and-play networks. Dynamic procrastinate after.marketsplug-and-play networks. Dynamic procrastinate users after. Dynamic procrastinateafter. marketsplug-and-play networks. Dynamic procrastinate users after...</div>
					</div>
				</div><!--col-xs-3-->
			</div><!--row-->
		</div><!--container-->
	</div><!--footer_top_section-->
	<a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

	<div class="copyright-section">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
							Editor: Joshep guinter Grunt
					</div><!--col-xs-3-->
					<div class="col-md-6">
						<div class="copyright">
						© Copyright 2015 - Sports News Mag.com. Design by: <a href="https://uiCookies.com" title="uiCookies">uiCookies</a>
						</div>
					</div><!--col-xs-6-->
					<div class="col-md-3">
						Sports News Magazine
					</div><!--col-xs-3-->
				</div><!--row-->
			</div><!--container-->
		</div><!--copyright-section-->
</footer>

</div> <!--main-wrapper-->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- Owl carousel -->
<script src="{{asset('js/owl.carousel.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Theme Script File-->
<script src="{{asset('js/script.js')}}"></script>

<!-- Off Canvas Menu -->
<script src="{{asset('js/offcanvas.min.js')}}"></script>



</body>
</html>
