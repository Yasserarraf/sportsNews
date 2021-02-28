  <!-- Header Section -->
  <header>
	    <div class="container">
	     	<div class="top_ber">
				<div class="row">
		    		<div class="col-md-6">
						<div class="top_ber_left">
							20 August. Thursday 2015. 2:00 PM.
						</div><!--top_ber_left-->
		    		</div><!--col-md-6-->
		    		<div class="col-md-6">
		    			<div class="top_ber_right">
		    				<div class="top-menu">
		    					<ul class="nav navbar-nav">
			                        <li><a href="#">Login</a></li>
			                        <li><a href="#">Register</a></li>
	                    		</ul>
		    				</div><!--top-menu-->
		    			</div><!--top_ber_left-->
		    		</div><!--col-md-6-->
		    	</div><!--row-->
	     	</div><!--top_ber-->

	     	<div class="header-section">
				<div class="row">
		    	 	<div class="col-md-3">
						<div class="logo">
						@if($setting->image)
						<a  href=""><img class="img-responsive" src="{{url('settings')}}/{{$setting->image}}" alt="logo" ></a>
						@endif
						</div><!--logo-->
		    	 	</div><!--col-md-3-->

		    	 	<div class="col-md-6">
						<div class="header_ad_banner">
						@if($leaderboard)
						<!--  images are not showing ... need to fix ! -->
						<a  href="{{$leaderboard->url}}"><img class="img-responsive" src="{{url('advertisements')}}/{{$leaderboard->image}}" alt=""></a>
						@endif
						</div>
		    	 	</div><!--col-md-6-->

		    	 	<div class="col-md-3 top-social">
						<div class="social_icon1">
						@foreach($setting->social as $key=>$social)
						<a href="{{$social}}" class="social-icon"><i class="fa fa-{{$icons[$key]}}"></i></a>
						@endforeach
						</div> <!--social_icon1-->
		    	 	</div><!--col-md-3-->
		    	</div> <!--row-->
	     	</div><!--header-section-->
	    </div><!-- /.container -->

		<nav class="navbar main-menu navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="offcanvas">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				</div>
				<div id="navbar" class="collapse navbar-collapse sidebar-offcanvas">
				<ul class="nav navbar-nav">
					<li class="hidden"><a href="#page-top"></a></li>
					<li><a class="page-scroll" href="{{route('category')}}">Baseball</a></li>
					<li><a class="page-scroll" href="{{route('category')}}">Football</a></li>
					<li><a class="page-scroll" href="{{route('category')}}">Hockey</a></li>
					<li><a class="page-scroll" href="{{route('category')}}">Basketball</a></li>
					<li><a class="page-scroll" href="{{route('category')}}">Boxing</a></li>
					<li><a class="page-scroll" href="{{route('category')}}">Golf</a></li>
					<li><a class="page-scroll" href="{{route('category')}}">Tennis</a></li>
					<li><a class="page-scroll" href="{{route('category')}}">Horse racing</a></li>
					<li><a class="page-scroll" href="{{route('category')}}">Track & Field</a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
						</ul>
					</li>
				</ul>
				<div class="pull-right">
					<form class="navbar-form" role="search">
						<div class="input-group">
							<input class="form-control" placeholder="Search" name="q" type="text">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
						</div>
					</form>
				</div>
				</div>
			</div>
		</nav>
		<!-- .navbar -->
	</header>
