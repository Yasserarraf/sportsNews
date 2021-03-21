<div class="tab sitebar">
	<div class="nav nav-tabs" style="background-color: #ff6102; padding-top: 10px;">
		<h3 style="text-align: center; color: white;">Latest News</h3>
	</div>

	<div class="tab-content">
		<div class="tab-pane active" id="1">
			@foreach($latest as $post)
			<div class="media">
				<div class="media-left">
					<a href="{{url('article')}}/{{$post->slug}}"><img class="media-object" src="{{url('posts')}}/{{$post->image}}"
					 style="width:70px;height:70px;object-fit:cover;" alt="image"></a>
				</div><!--media-left-->
				<div class="media-body">
					<h4 class="media-heading"><a href="{{url('article')}}/{{$post->slug}}">{{$post->title}}</a></h4>
					
				</div><!--media-body-->
			</div><!--media-->
			@endforeach
		</div><!--tab-pane-->
	</div><!--tab-content-->

</div><!--tab-->

<div class="ad">
	<div class="col-sm-12">
		@if($sidebarTop)
		<a  href="{{$sidebarTop->url}}" target="_blank"><img class="img-responsive" src="{{url('advertisements')}}/{{$sidebarTop->image}}" alt=""></a>
	</div>
	@endif
</div>

<div class="ad">
	@if($sidebarBottom)
	<div class="col-sm-12">
		<a  href="{{$sidebarBottom->url}}" target="_blank"><img class="img-responsive" src="{{url('advertisements')}}/{{$sidebarBottom->image}}" alt=""></a>
	</div>
	@endif
</div>


