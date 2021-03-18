@extends('layouts.frontend')
@section('content')

<div class="single_content_layout">
	<div class="item feature_news_item">
		<div class="news_item_title" style="">
				<h2><a href="">{{$data->title}}</a></h2>
			</div><!--news_item_title-->

		<div class="item_img" style="display: flex; justify-content: center;">
			<img  class="img-responsive" src="{{url('posts')}}/{{$data->image}}" alt="Chania">
		</div><!--item_img-->
			<div class="item_wrapper">
				<div class="item_meta">publié à {{$data->created_at}}</div>

					
					<div class="item_content" id="content-article" data-content-art="{{$data->description}}" >
					
					</div><!--item_content-->

					<div class="single_social_icon">
						@if($setting)
						@foreach($setting->social as $key=>$social)
						<a class="icons-sm fb-ic" href="{{$social}}"><i class="fa fa-{{$icons[$key]}}"></i><span>{{$icons[$key]}}</span></a>
						@endforeach
						@endif
						
					</div> <!--social_icon1-->
					
					<script>
						var content = document.getElementById('content-article');
						
						var text = $('#content-article').data("content-art");
						
						content.innerHTML  = text;
					</script>
					
			</div><!--item_wrapper-->
	</div><!--feature_news_item-->

	<script>
		var dom = new DOMParser();
		let doc = null;
		var id = null;
		var related = null;
		var texte = null;
		var p = null;
	</script>

	<div class="single_related_news">
		<div class="single_media_title"><h2>Related News</h2></div>
		<div class="media_wrapper">
			
			@foreach($relatedNews as $post)
			<div class="media">
				<div class="media-left">
					<a href="{{url('article')}}/{{$post->slug}}"><img class="media-object" src="{{url('posts')}}/{{$post->image}}" alt="Generic placeholder image" width="100px"></a>
				</div><!--media-left-->
				<div class="media-body">
					<h4 class="media-heading">
						<a href="{{url('article')}}/{{$post->slug}}">{{$post->title}}</a>
					</h4>
					<div class="media_meta"><a href="{{url('article')}}/{{$post->slug}}">{{$post->created_at}}</a></div>
					<div class="media_content" id="{{$post->pid}}" data-content-desc="{{$post->description}}">

					</div><!--media_content-->
					<script>
						id = '{{$post->pid}}';
						related = document.getElementById(id);
						
						text = $('#'+id).data("content-desc");

						doc = dom.parseFromString(text, 'text/html')

						p = doc.querySelector('p').textContent;
						
						if(p.length > 175){

							p = p.split('').slice(0, 172).join('') + '...';

						}

						related.innerHTML = '<p>' + p + '</p>';
					</script>
				</div><!--media-body-->
			</div><!--media-->
			@endforeach

		</div><!--media_wrapper-->
	</div><!--single_related_news-->

	<!-- 
	<div class="readers_comment">
		<div class="single_media_title"><h2>Related Comments</h2></div>
		<div class="media">
			<div class="media-left">
				<a href="#">
					<img alt="64x64" class="media-object" data-src="{{asset('img/img-author1.jpg')}}"
							src="{{asset('img/img-author1.jpg')}}" data-holder-rendered="true">
				</a>
			</div>
			<div class="media-body">
				<h2 class="media-heading">Sr. Ryan</h2>
				But who has any right to find fault with a man who chooses to enjoy a pleasure that has
				no annoying consequences, or one who avoids a pain that produces no resultant pleasure?


				<div class="comment_article_social">
					<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
					<a href="#"><span class="reply_ic">Reply </span></a>
				</div>
				<div class="media reply">
					<div class="media-left">
						<a href="#">
							<img alt="64x64" class="media-object" data-src="{{asset('img/img-author2.jpg')}}"
									src="{{asset('img/img-author2.jpg')}}" data-holder-rendered="true">
						</a>
					</div>
					<div class="media-body">
						<h2 class="media-heading">Admin</h2>
						But who has any right to find fault with a man who chooses to enjoy a pleasure
						that has no annoying consequences, or one who avoids a pain that produces no
						resultant pleasure?

						<div class="comment_article_social">
							<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
							<a href="#"><span class="reply_ic"> Reply </span></a>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="media">
			<div class="media-left">
				<a href="#">
					<img alt="64x64" class="media-object" data-src="{{asset('img/img-author1.jpg')}}"
							src="{{asset('img/img-author1.jpg')}}" data-holder-rendered="true">
				</a>
			</div>
			<div class="media-body">
				<h2 class="media-heading">S. Joshep</h2>
				But who has any right to find fault with a man who chooses to enjoy a pleasure that has
				no annoying consequences, or one who avoids a pain that produces no resultant pleasure?

				<div class="comment_article_social">
					<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
					<a href="#"><span class="reply_ic"> Reply </span></a>
				</div>
			</div>
		</div>
	</div>

	<div class="add_a_comment">
		<div class="single_media_title"><h2>Add a Comment</h2></div>
		<div class="comment_form">
			<form>
				<div class="form-group">
					<input type="text" class="form-control" id="inputName" placeholder="Name">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inputEmail" placeholder="Email">
				</div>
				<div class="form-group comment">
					<textarea class="form-control" id="inputComment" placeholder="Comment"></textarea>
				</div>

				<button type="submit" class="btn btn-submit red">Submit</button>
			</form>
		</div>
	</div>-->

</div><!--single_content_layout-->

@endsection
