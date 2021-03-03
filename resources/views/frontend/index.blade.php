@extends('layouts.frontend')
@section('content')

		   		<div class="category_layout">
			   		<div class="item_caregory red"><h2><a href="{{route('dashboard')}}">Football</a></h2></div>
					   @if(count($featured) > 0)
						<div class="row">
						@foreach($featured as $key=>$f)
						  @if($key == 1 )
				   			<div class="col-md-7">
								<div class="item feature_news_item">
									<div class="item_wrapper">
										<div class="item_img">
											<img class="img-responsive" src="{{url('posts')}}/{{$f->image}}" alt="Chania">
										</div><!--item_img-->
										<div class="item_title_date">
											<div class="news_item_title">
											    <h2><a href="{{url('article')}}/{{$f->slug}}">{{$f->title}}</a></h2>
											</div><!--news_item_title-->
                                            <div class="item_meta"><a href="#">{{$f->created_at}}</a> by:<a href="#">{{$f->slug}}</a></div>
										</div><!--item_title_date-->
									</div><!--item_wrapper-->
								    <div class="item_content">{!! substr($f->description,0,300) !!}
								    </div><!--item_content-->
									@endif
						            @endforeach
								</div><!--feature_news_item-->
				   			</div><!--col-md-7-->
							   @foreach($featured as $key=>$f)
						       @if($key == 2 )
				   			<div class="col-md-5">
								<div class="media_wrapper">
									<div class="media">
										<div class="media-left">
											<a href="{{url('article')}}/{{$f->slug}}"><img class="media-object" src="{{url('posts')}}/{{$f->image}}" alt="Generic placeholder image"></a>
										</div><!--media-left-->
										<div class="media-body">
										<h2><a href="{{url('article')}}/{{$f->slug}}">{{$f->title}}</a></h2>

											<p>{!! substr($f->description,0,300) !!}</p>

										</div><!--media-body-->
									</div><!--media-->
									@endif
						            @endforeach

									<div class="media">
									@foreach($featured as $key=>$f)
						             @if($key == 3 )
										<div class="media-left">
											<a href="{{url('article')}}/{{$f->slug}}"><img class="media-object" src="{{url('posts')}}/{{$f->image}}" alt="Generic placeholder image"></a>
										</div><!--media-left-->
										<div class="media-body">
											<h3 class="media-heading"><a href="{{url('article')}}/{{$f->slug}}">{{$f->title}}
											</a></h3>

											<p>{!! substr($f->description,0,300) !!}</p>

										</div><!--media-body-->
									</div><!--media-->
                                    @endif
						            @endforeach
									<div class="media">
									@foreach($featured as $key=>$f)
						             @if($key == 4 )
										<div class="media-left">
											<a href="{{url('article')}}/{{$f->slug}}"><img class="media-object" src="{{url('posts')}}/{{$f->image}}" alt="Generic placeholder image"></a>
										</div><!--media-left-->
										<div class="media-body">
											<h3 class="media-heading"><a href="{{url('article')}}/{{$f->slug}}">{{$f->title}}
											</a></h3>

											<p>{!! substr($f->description,0,300) !!}</p>

										</div><!--media-body-->
									</div><!--media-->
									@endif
						            @endforeach
									<div class="media">
									@foreach($featured as $key=>$f)
						             @if($key == 5 )
										<div class="media-left">
											<a href="{{url('article')}}/{{$f->slug}}"><img class="media-object" src="{{url('posts')}}/{{$f->image}}" alt="Generic placeholder image"></a>
										</div><!--media-left-->
										<div class="media-body">
											<h3 class="media-heading"><a href="{{url('article')}}/{{$f->slug}}">{{$f->title}}
											</a></h3>

											<p>{!! substr($f->description,0,300) !!}</p>

										</div><!--media-body-->
										@endif
						                @endforeach
									</div><!--media-->
								</div><!--media_wrapper-->

				   			</div><!--col-md-5-->
							   @endif
				   		</div><!--row-->
			   		</div><!--category_layout-->


					   <div class="category_layout">
		   			<div class="item_caregory blue"><h2><a href="#">Hockey</a></h2></div>
					   @if(count($general) > 0)
					<div class="row">
					@foreach($general as $key=>$g)
						  @if($key == 3 )
			   			<div class="col-md-7">
							<div class="item active feature_news_item">
								<div class="item_wrapper">
									<div class="item_img">
									<a href="{{url('article')}}/{{$g->slug}}"><img class="img-responsive" src="{{url('posts')}}/{{$g->image}}" alt="Chania"></a>
									</div><!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="{{url('article')}}/{{$g->slug}}">{{$g->title}}</a></h2>
										</div><!--news_item_title-->
                                        <div class="item_meta"><a href="#">{{$g->created_at}}</a> by:<a href="#">{{$g->slug}}</a></div>
									</div><!--item_title_date-->
								</div><!--item_wrapper-->
							    <div class="item_content">{!! substr($g->description,0,300) !!}
							    </div>
								@endif
						        @endforeach
							</div><!--feature_news_item-->
			   			</div><!--col-md-7-->

			   			<div class="col-md-5">
							<div class="media_wrapper">
							@foreach($general as $key=>$g)
						     @if($key == 2 )
								<div class="media">
									<div class="media-left">
										<a href="{{url('article')}}/{{$g->slug}}"><img class="media-object" src="{{url('posts')}}/{{$g->image}}" alt="Generic placeholder image"></a>
									</div><!--media-left-->
									<div class="media-body">
										<h3 class="media-heading"><a href="{{url('article')}}/{{$g->slug}}">{{$g->title}}
										</a></h3>

										<p>{!! substr($g->description,0,300) !!}</p>

									</div><!--media-body-->
								</div><!--media-->
								@endif
						        @endforeach
								<div class="media">
								@foreach($general as $key=>$g)
						        @if($key == 1 )
									<div class="media-left">
										<a href="{{url('article')}}/{{$g->slug}}"><img class="media-object" src="{{url('posts')}}/{{$g->image}}" alt="Generic placeholder image"></a>
									</div><!--media-left-->
									<div class="media-body">
										<h3 class="media-heading"><a href="{{url('article')}}/{{$g->slug}}">{{$g->title}}
										</a></h3>

										<p>{!! substr($g->description,0,300) !!}</p>

									</div><!--media-body-->
								</div><!--media-->
								@endif
						        @endforeach
								<div class="media">
								@foreach($general as $key=>$g)
						        @if($key == 0 )
									<div class="media-left">
										<a href="{{url('article')}}/{{$g->slug}}"><img class="media-object" src="{{url('posts')}}/{{$g->image}}" alt="Generic placeholder image"></a>
									</div><!--media-left-->
									<div class="media-body">
										<h3 class="media-heading"><a href="{{url('article')}}/{{$g->slug}}">{{$g->title}}
										</a></h3>

										<p>{!! substr($g->description,0,300) !!}</p>

									</div><!--media-body-->
								</div><!--media-->
                                @endif
						        @endforeach
								<div class="media">
								@foreach($general as $key=>$g)
						        @if($key == 4 )
									<div class="media-left">
										<a href="{{url('article')}}/{{$g->slug}}"><img class="media-object" src="{{url('posts')}}/{{$g->image}}" alt="Generic placeholder image"></a>
									</div><!--media-left-->
									<div class="media-body">
										<h3 class="media-heading"><a href="{{url('article')}}/{{$g->slug}}">{{$g->title}}
										</a></h3>

										<p>{!! substr($g->description,0,300) !!}</p>

									</div><!--media-body-->
								</div><!--media-->
								@endif
						        @endforeach
							</div><!--media_wrapper-->
			   			</div><!--col-md-5-->
						   @endif
			   		</div><!--row-->

		   		</div><!--category_layout-->

		   		<div class="category_layout">
		   			<div class="item_caregory teal"><h2><a href="#">Tennis</a></h2></div>
					@if(count($tennis) > 0)
					<div class="row">
					@foreach($tennis as $key=>$t)
						@if($key == 3 )
			   			<div class="col-md-7">
							<div class="item active feature_news_item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="{{url('posts')}}/{{$t->image}}" alt="Chania">
									</div><!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">

											<h2><a href="#">Leo Messi is boss of the bosses of the football world.</a></h2>

											<h3><a href="{{url('article')}}/{{$t->slug}}">{{$t->title}}</a></h3>

										</div><!--news_item_title-->
                                        <div class="item_meta"><a href="{{url('article')}}/{{$t->slug}}">{{$t->created_at}}</a> by:<a href="#">{{$t->slug}}</a></div>
									</div><!--item_title_date-->
								</div><!--item_wrapper-->
							    <div class="item_content">{!! substr($t->description,0,300) !!}
							    </div>
								@endif
						        @endforeach
							</div><!--feature_news_item-->
			   			</div><!--col-md-7-->

			   			<div class="col-md-5">
							<div class="media_wrapper">
							@foreach($tennis as $key=>$t)
						     @if($key == 4 )
								<div class="media">
									<div class="media-left">
										<a href="{{url('article')}}/{{$t->slug}}"><img class="media-object" src="{{url('posts')}}/{{$t->image}}" alt="Generic placeholder image"></a>
									</div><!--media-left-->
									<div class="media-body">
										<h3 class="media-heading"><a href="{{url('article')}}/{{$t->slug}}">{{$t->title}}
										</a></h3>

										<p>{!! substr($t->description,0,300) !!}</p>


									</div><!--media-body-->
									@endif
						        @endforeach
								</div><!--media-->

								<div class="media">
								@foreach($tennis as $key=>$t)
						        @if($key == 2 )
									<div class="media-left">
										<a href="{{url('article')}}/{{$t->slug}}"><img class="media-object" src="{{url('posts')}}/{{$t->image}}" alt="Generic placeholder image"></a>
									</div><!--media-left-->
									<div class="media-body">
										<h3 class="media-heading"><a href="{{url('article')}}/{{$t->slug}}">{{$t->title}}
										</a></h3>

										<p>{!! substr($t->description,0,300) !!}</p>

									</div><!--media-body-->
								</div><!--media-->
								@endif
						        @endforeach
								<div class="media">
								@foreach($tennis as $key=>$t)
						        @if($key == 5 )
									<div class="media-left">
										<a href="{{url('article')}}/{{$t->slug}}"><img class="media-object" src="{{url('posts')}}/{{$t->image}}" alt="Generic placeholder image"></a>
									</div><!--media-left-->
									<div class="media-body">
										<h3 class="media-heading"><a href="{{url('article')}}/{{$t->slug}}">{{$t->title}}
										</a></h3>

										<p>{!! substr($t->description,0,300) !!}</p>

									</div><!--media-body-->
								</div><!--media-->
								@endif
						        @endforeach
								<div class="media">
								@foreach($tennis as $key=>$t)
						        @if($key == 1 )
									<div class="media-left">
										<a href="{{url('article')}}/{{$t->slug}}"><img class="media-object" src="{{url('posts')}}/{{$t->image}}" alt="Generic placeholder image"></a>
									</div><!--media-left-->
									<div class="media-body">
										<h3 class="media-heading"><a href="{{url('article')}}/{{$t->slug}}">{{$t->title}}
										</a></h3>

										<p>{!! substr($t->description,0,300) !!}</p>

									</div><!--media-body-->
								</div><!--media-->
							</div><!--media_wrapper-->
			   			</div><!--col-md-5-->
						   @endif
						@endforeach
			   		</div><!--row-->
		   		</div><!--category_layout-->
				@endif
		   		<div id="more_news_item" class="more_news_item">
					<div class="more_news_heading"><h2><a href="#">More News</a></h2></div>
					@if(count($others) > 0)
					<div class="row">
					@foreach($others as $key=>$o)
					@if($key == 0 )
						<div class="col-md-4">
							<div class="feature_news_item">
	                			<div class="item">
									<div class="item_wrapper">
										<div class="item_img">
										<a href="{{url('article')}}/{{$o->slug}}"><img class="img-responsive" src="{{url('posts')}}/{{$o->image}}" alt="Chania"></a>
										</div><!--item_img-->
										<div class="item_title_date">
											<div class="news_item_title">
												<h3><a href="{{url('article')}}/{{$o->slug}}">{{$o->title}}</a></h3>
											</div><!--news_item_title-->
											<div class="item_meta"><a href="#">{{$o->created_at}}</a> by:<a href="#">{{$o->slug}}</a></div>
										</div><!--item_title_date-->
									</div><!--item_wrapper-->
								    <div class="item_content">{!! substr($o->description,0,300) !!}
								    </div><!--item_content-->

								</div><!--item-->
	            			</div><!--feature_news_item-->
						</div><!--col-xs-4-->
						@endif
						@endforeach
				
                   <div class="col-md-4">
						@foreach($others as $key=>$o)
					    @if($key == 1 )
							<div class="feature_news_item">
	                			<div class="item active">
									<div class="item_wrapper">
										<div class="item_img">
										<a href="{{url('article')}}/{{$o->slug}}"><img class="img-responsive" src="{{url('posts')}}/{{$o->image}}" alt="Chania"></a>
										</div><!--item_img-->
										<div class="item_title_date">
											<div class="news_item_title">
												<h3><a href="{{url('article')}}/{{$o->slug}}">{{$o->title}}</a></h3>
											</div><!--news_item_title-->
                                            <div class="item_meta"><a href="#">{{$o->created_at}}</a> by:<a href="#">{{$o->slug}}</a></div>
										</div><!--item_title_date-->
									</div><!--item_wrapper-->
								    <div class="item_content">{!! substr($o->description,0,300) !!}
								    </div><!--item_content-->

								</div><!--item-->
	            			</div><!--feature_news_item-->
						</div><!--col-xs-4-->
						@endif
						@endforeach
						<div class="col-md-4">
						@foreach($others as $key=>$o)
					    @if($key == 2 )
							<div class="feature_news_item">
	                			<div class="item active">
									<div class="item_wrapper">
										<div class="item_img">
										<a href="{{url('article')}}/{{$o->slug}}"><img class="img-responsive" src="{{url('posts')}}/{{$o->image}}" alt="Chania"></a>
										</div><!--item_img-->
										<div class="item_title_date">
											<div class="news_item_title">
												<h3><a href="{{url('article')}}/{{$o->slug}}">{{$o->title}}</a></h3>
											</div><!--news_item_title-->
                                            <div class="item_meta"><a href="#">{{$o->created_at}}</a> by:<a href="#">{{$o->slug}}</a></div>
										</div><!--item_title_date-->
									</div><!--item_wrapper-->
								    <div class="item_content">{!! substr($o->description,0,300) !!}
								    </div><!--item_content-->

								</div><!--item-->
	            			</div><!--feature_news_item-->
						</div><!--col-xs-4-->
						@endif
						@endforeach
					</div><!--row-->
					@endif
				</div><!--more_news_item-->


@endsection
