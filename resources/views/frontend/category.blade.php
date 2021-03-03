@extends('layouts.frontend')
@section('content')

				<div class="row">
                    @foreach($posts as $post)
					<div class="col-md-6 mt-3">
						<div class="feature_news_item">
							<div class="item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive"  style="width:100%" src="{{url('posts')}}/{{$post->image}}" alt="Chania">
									</div> <!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="{{url('article')}}/{{$post->slug}}">{{$post->title}}</a></h2>
										</div>
										<div class="item_meta"><a href="#">{{$post->created_at}}</a> by:<a href="#">{{$post->slug}}</a></div>
									</div><!--item_title_date-->
								</div> <!--item_wrapper-->
								<div class="item_content">{{$post->description}}
								</div>

							</div><!--item-->
						</div><!--feature_news_item-->
					</div><!--col-md-6-->
                    @endforeach
				</div><!--row-->

@endsection
