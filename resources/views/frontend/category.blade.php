@extends('layouts.frontend')
@section('content')
<div>

	<div class="row">
		<script>
			var dom = new DOMParser();
			let doc = null;
			var id = null;
			var related = null;
			var texte = null;
			var p = null;
		</script>
		
		@foreach($posts as $post)
		<div class="col-md-6 mt-3" >
			<div class="feature_news_item">
				<div class="item">
					<div class="item_wrapper">
						<div class="item_img">
							<a href="{{url('article')}}/{{$post->slug}}">
								<img class="img-responsive"  style="width:100%;" src="{{url('posts')}}/{{$post->image}}" alt="img">
							</a>
						</div> <!--item_img-->
						<div class="item_title_date"  >
							<div class="news_item_title">
								<h2><a href="{{url('article')}}/{{$post->slug}}">{{$post->title}}</a></h2>
							</div>
						</div><!--item_title_date-->
					</div> <!--item_wrapper-->
					<div class="item_meta">{{$post->created_at}}</a></div>
					<div class="item_content" id="{{$post->pid}}" data-content-desc="{{$post->description}}">
						
					</div>

					<script>
							id = '{{$post->pid}}';
							post = document.getElementById(id);
							
							text = $('#'+id).data("content-desc");

							doc = dom.parseFromString(text, 'text/html')

							p = doc.querySelector('p').textContent;

							if(p.length > 90){

								p = p.split('').slice(0, 87).join('') + '...';

							}

							post.innerHTML = '<p>' + p + '</p>';
					</script>

				</div><!--item-->
			</div><!--feature_news_item-->
		</div><!--col-md-6-->
		@endforeach

		
	</div><!--row-->
	@if(count($posts) > 0)
	<div >
		{{ $posts->links('pagination::bootstrap-4')}}
	</div>
	@endif
</div>
@endsection
