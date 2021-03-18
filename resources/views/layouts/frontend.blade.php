<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Sports News</title>

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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
    <!--<section id="feature_category_section" class="feature_category_section section_wrapper">-->
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
					<div class="footer_widget_title"><h2>About Sport News</h2></div>

		         	<div class="footer_widget_content">
					 @if($setting && $setting->about)
					 <p>{{$setting->about}}</p>
					 @endif
					</div>
					</div><!--text_widget-->
				</div><!--col-xs-3-->

				<div class="col-md-5">
					<div class="footer_widget">
                        <div class="footer_widget_title"><h2>Discover</h2></div>
					    <div class="footer_menu_item ">
						<div class="row">
							<div class="col-sm-5">
								<ul class="nav navbar-nav ">
								@foreach($sections as $section)
					                 <li><a  href="{{route('singleSection',['slug'=>$section->slug])}}">{{$section->title}}</a></li>
                                 @endforeach
								</ul>
						    </div><!--col-sm-4-->
					        <div class="col-sm-3 ">
							<div class="footer_widget_title"><h2>Use it</h2></div>
								<ul class="nav navbar-nav  ">
									<li><a href="../navbar/">Track & Field</a></li>
									<li><a href="{{url('privacy')}}">Privacy Policy</a></li>
									
								</ul>
					        </div><!--col-sm-4-->
					       
				      	</div><!--row-->
			      	</div><!--footer_menu_item-->
                    </div><!--footer_widget-->
				</div><!--col-xs-6-->

				<div class="col-md-4">
 					<div class="text_widget footer_widget">
						<div class="footer_widget_title"><h2>Subscribe to our newsletter</h2></div>
						
						<div class="footer_widget_content">
							<form id="subsribe-form">
								<p>Email :</p>
								<input type="email" id="email" name="email" size="35" style="color: black;" placeholder="email@gmail.com" required>
								<button type="submit" id="submit-btn" style="background-color: #ff6102;">Subscribe</button>
								<p id="subscribe-message"></p>
							</form>
							<script>
								const messageP = document.getElementById('subscribe-message');
								const emailInput = document.getElementById('email');

								$(document).ready(function(){
										var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
										$("#subsribe-form").submit(function(e){
											e.preventDefault();
											messageP.innerHTML = '';
											$.ajax({
												url: "{{url('/subscribe')}}",
												type: 'POST',
												data: {_token: CSRF_TOKEN, email:$("#email").val()},
												dataType: 'JSON',
												success: function (data) { 
													if(data && data.msg){
														messageP.innerHTML = data.msg;
														if(data.msg !== 'Invalid email !'){
															emailInput.value = '';
														}
													}
												}
											}); 
										});
								})
								
								
							</script>
						</div>
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
							<span class="footer_widget_title">Editors: </span>
							YASSER ARRAF - MOUHAMMAD TOIHIR MOHAMED HALIM - FILAL Imane 

					</div><!--col-xs-3-->
					<div class="col-md-5">
						<div class="copyright">
						© Copyright {{date('Y')}} - Sportify Design by: <a href="http://www.fstt.ac.ma/" >Cycle d'Ingénieur LSI</a>
						</div>
					</div><!--col-xs-6-->
					<div class="col-md-3">
						SportNews
					</div><!--col-xs-3-->
				</div><!--row-->
			</div><!--container-->
		</div><!--copyright-section-->
</footer>
<div class="elfsight-app-7ec4eacb-d12f-4cbc-bce5-26cf541285a5"></div>

</div> <!--main-wrapper-->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src='{{asset("js/jquery.min.js")}}'></script>


<!-- Owl carousel -->
<script src='{{asset("js/owl.carousel.js")}}'></script>

<!-- Bootstrap -->
<script src='{{asset("js/bootstrap.min.js")}}'></script>

<!-- Theme Script File-->
<script src='{{asset("js/script.js")}}'></script>

<!-- Off Canvas Menu -->
<script src='{{asset("js/offcanvas.min.js")}}'></script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>



</body>
</html>
