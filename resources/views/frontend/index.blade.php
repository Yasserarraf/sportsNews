@extends('layouts.frontend')
@section('content')
<div>
	<script>
		var dom = new DOMParser();
		let doc = null;
		var id = null;
		var related = null;
		var texte = null;
		var p = null;
	</script>
	@foreach($sectionsPosts as $section)
	@if(count($section->posts) > 0)
	<div class="category_layout">
		<div class="item_caregory red" style="bakground: #ff6102;"><h2><a href="{{route('singleSection',['slug'=>$section->slug])}}">{{$section->title}}</a></h2></div>
		<div class="row">
			<div class="col-md-7">
				<div class="item feature_news_item">
					<div class="item_wrapper">
						<div class="item_img">
						<a href="{{url('article')}}/{{$section->posts[0]->slug}}">
							<img class="img-responsive" style="width:100%;height:350px;object-fit:cover;" 
								src="{{url('posts')}}/{{$section->posts[0]->image}}" alt="img">
						</a>
						</div><!--item_img-->
						<div class="item_title_date">
							<div class="news_item_title">
								<h2><a href="{{url('article')}}/{{$section->posts[0]->slug}}">{{$section->posts[0]->title}}</a></h2>
							</div><!--news_item_title-->
							<div class="item_meta">{{$section->posts[0]->created_at}}</div>
						</div><!--item_title_date-->
					</div><!--item_wrapper-->
					<div class="item_content" id="{{$section->slug.$section->posts[0]->pid}}" data-content-desc="{{$section->posts[0]->description}}">
					
					</div><!--item_content-->
					<script>
							id = '{{$section->slug.$section->posts[0]->pid}}';
							post = document.getElementById(id);
							
							text = $('#'+id).data("content-desc");

							doc = dom.parseFromString(text, 'text/html')

							p = doc.querySelector('p').textContent;

							if(p.length > 120){

								p = p.split('').slice(0, 117).join('') + '...';

							}

							post.innerHTML = '<p>' + p + '</p>';
					</script>
				</div><!--feature_news_item-->
			</div><!--col-md-7-->

			<div class="col-md-5">
				<div class="media_wrapper">
					@for($x = 1; $x < count($section->posts); $x++)
					<div class="media">
						<div class="media-left">
							<a href="{{url('article')}}/{{$section->posts[$x]->slug}}">
								<img class="media-object" src="{{url('posts')}}/{{$section->posts[$x]->image}}" 
								style="width:80px;height:80px;object-fit:cover;" alt="img">
							</a>
						</div><!--media-left-->
						<div class="media-body">
							<h3 class="media-heading">
								<a href="{{url('article')}}/{{$section->posts[$x]->slug}}"><strong>{{$section->posts[$x]->title}}</strong></a>
							</h3>
							<div id="{{$section->slug.$section->posts[$x]->pid}}" data-content-desc="{{$section->posts[$x]->description}}">
							</div>
							<script>
								id = '{{$section->slug.$section->posts[$x]->pid}}';
								post = document.getElementById(id);
								
								text = $('#'+id).data("content-desc");

								doc = dom.parseFromString(text, 'text/html')

								p = doc.querySelector('p').textContent;

								if(p.length > 100){

									p = p.split('').slice(0, 47).join('') + '...';

								}

								post.innerHTML = '<p>' + p + '</p>';
						</script>

						</div><!--media-body-->
					</div><!--media-->
					@endfor
					
				</div><!--media_wrapper-->
			</div><!--col-md-5-->
		</div><!--row-->
	</div><!--category_layout-->
	@endif
	@endforeach
</div>


@endsection
