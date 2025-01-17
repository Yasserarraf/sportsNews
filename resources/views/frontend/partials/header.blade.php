  <!-- Header Section -->
  <header>
	    <div class="container">
	     	<div class="top_ber">
				<div class="row">
		    		<div class="col-md-6">
						<div class="top_ber_left">
                            {{date('l , M d, Y')}}
						</div><!--top_ber_left-->
		    		</div><!--col-md-6-->
		    		<div class="col-md-6">
		    			<div class="top_ber_right">
		    				<div class="top-menu">
                                @guest

		    					<ul class="nav navbar-nav">
			                        <li><a href="{{route('login')}}">Login</a></li>
			                        <li><a href="{{route('register')}}">Register</a></li>
	                    		</ul>
                                @else

                                  
                                @if(Auth::user()->hasRole('admin'))
                                    <ul class="nav navbar-nav">
									    <li><a href="#">{{ Auth::user()->name }}</a></li>
                                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
										<li><a href="{{route('logout')}}">logout</a></li>
                                    </ul>
                                    @else
									<ul class="nav navbar-nav">
									   <li><a href="#">{{ Auth::user()->name }}</a></li>
										<li><a href="{{route('logout')}}">logout</a></li>
                                    </ul>
                                   
                                    @endif

                                @endguest
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
						<a  href=""><img class="img-responsive " src="{{url('settings')}}/{{$setting->image}}" alt="logo" ></a>
						@endif
						</div><!--logo-->
		    	 	</div><!--col-md-3-->

		    	 	<div class="col-md-6">
						<div class="header_ad_banner">
						@if($leaderboard)
						<a  href="{{$leaderboard->url}}" target="_blank"><img class="img-responsive" src="{{url('advertisements')}}/{{$leaderboard->image}}" alt=""></a>
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
					@foreach($categories as $cat)
					<li><a class="page-scroll" href="{{route('singleCat',['slug'=>$cat->slug])}}">{{$cat->title}}</a></li>
                    @endforeach

					
				</ul>
				<div class="pull-right">
					<form class="navbar-form" role="search">
						<div class="input-group">
							<input class="form-control" id="search-content" placeholder="Search"  name="q" type="text">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
						</div>
					</form>@csrf
				</div>
				</div>
			</div>
		</nav>
		<!-- .navbar -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

      <script>
      $(document).ready(function(){
         

          $("#search-content").keyup(function () {
              var that = this,
              value = $(this).val();
			  console.log(value);
		   if(value.length < 1 ){
			$('#search-output').hide();
              return false;
		}else{
			 $.ajax({
				 type : "get",
				 url : "{{route('search-content')}}",
				 data : {'value':value},
				 success:function(res){
					 $('#search-output').show();
					 $('#search-output').html(res);
				 }
			 })
		}
          
          });
      });
  </script>
	</header>
