@extends('layouts.backend')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i>Settings</h1>
		</div>

		<div class="col-sm-4 cat-form">
			@if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{Session('message')}}
                </div>
            @endif
            <h3>WebSite Settings</h3>
			@if($data == null)
			<form method="post" action="{{route('addSetting')}}" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="tbl" value="{{encrypt('settings')}}" />
                <div class="form-group">
					<label>Logo</label>
					<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
					<p><label for="file" style="cursor: pointer;" class="btn btn-warning">Upload Image</label></p>
					<p><img id="output"/></p>
				</div>

				<div class="form-group">
                	<label>About us</label>
                    <textarea name="about" class="form-control" rows="10"></textarea>
                </div>

				<div id="socialFieldGroup">
					<div class="form-group">
						<label>Social</label>
						<input type="url" name="social[]" class="form-control">
						<p class="text-muted">e.g. https://www.hello.com</p>
					</div>
				</div>

				<div class="text-right form-group">
					<span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
				</div>

				<div class="form-group">
					<div class="alert alert-danger alert-dismissable noshow socialAlert">
						<a href="#" class="close" data-dismiss="alert">$times;</a>
						<strong>Sorry !</strong> you reached the social fields limit.
					</div>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Add Settings</button>
				</div>
			</form>
			<script>
				var socialCounter = 1;
				$('#addSocialField').click(function(){
					socialCounter++;
					if(socialCounter > 5){
						$('#socialAlert').removeClass('noshow');
						return;
					}
					newDiv = $(document.createElement('div')).attr("class", "form-group");
					newDiv.after().html('<input type="url" name="social[]" class="form-control"></div>');
					newDiv.appendTo("#socialFieldGroup");
				})
			</script>
			@else
			<form method="post" action="{{url('updateSettings')}}/{{$data->sid}}" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="tbl" value="{{encrypt('settings')}}" />
				<input type="hidden" name="sid" value="{{$data->sid}}" />
                <div class="form-group">
					<label>Logo</label>
					@if(!empty($data->image))
					<p>
						<img src="{{url('settings')}}/{{$data->image}}" alt="logo" id='output'>
					</p>
					<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
					<p><label for="file" style="cursor: pointer;" class="btn btn-warning">Replace Image</label></p>
					@else
					<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
					<p><label for="file" style="cursor: pointer;" class="btn btn-warning">Upload Image</label></p>
					<p><img id="output"/></p>
					@endif
				</div>

				<div class="form-group">
                	<label>About us</label>
                    <textarea name="about" class="form-control" rows="10">{{$data->about}}</textarea>
                </div>

				<div id="socialFieldGroup">
					<div class="form-group">
						<label>Social</label>
						@foreach($data->social as $social)
						<div class="form-group">
							<input type="url" name="social[]" class="form-control socialCount" value="{{$social}}">
						</div>
						@endforeach
					</div>
				</div>

				<div class="text-right form-group">
					<span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
				</div>

				<div class="form-group">
					<div class="alert alert-danger alert-dismissable noshow socialAlert">
						<a href="#" class="close" data-dismiss="alert">&times;</a>
						<strong>Sorry !</strong> you reached the social fields limit.
					</div>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Update Settings</button>
				</div>
			</form>
			<script>
				socialCounter = $(".socialCount").length;
				$('#addSocialField').click(function(){
					socialCounter++;
					if(socialCounter > 5){
						$('.socialAlert').removeClass('noshow');
						return;
					}
					newDiv = $(document.createElement('div')).attr("class", "form-group");
					newDiv.after().html('<input type="url" name="social[]" class="form-control"></div>');
					newDiv.appendTo("#socialFieldGroup");
				})
			</script>
			@endif
		</div>

	</div>
</div>
<style>
	.noshow{
		display: none;
	}
</style>
<script>
	var loadFile = function(event) {
		var image = document.getElementById('output');
		image.src = URL.createObjectURL(event.target.files[0]);
	};
</script>

@endsection
