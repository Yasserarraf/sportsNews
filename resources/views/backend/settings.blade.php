@extends('layouts.backend')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> Categories</h1>
		</div>

		<div class="col-sm-4 cat-form">
			@if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{Session('message')}}
                </div>
            @endif
            <h3>WebSite Settings</h3>
			<form method="post" action="{{route('addSetting')}}">
				@csrf
				<input type="hidden" name="lbl" value="{{encrypt('settings')}}" />
                <div class="form-group">
					<label>Logo</label>
					<input type="file" name="image" class="form-control">
				</div>

				<div class="form-group">
                	<label>About us</label>
                    <textarea name="about" class="form-control" rows="10"></textarea>
                </div>

				<div id="socialFieldGroup">
					<div class="form-group">
						<label>Social</label>
						<input type="url" name="url[]" class="form-control">
						<p class="text-muted">e.g. https://www.hello.com</p>
					</div>
				</div>

				<div class="text-right form-group">
					<span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
				</div>

				<div class="form-group">
					<div class="alert alert-danger alert-dismissable noshow" id="socialAlert">
						<a href="#" class="close" data-dismiss="alert">$times;</a>
						<stron>Sorry !</stron g> you reached the social fields limit.
					</div>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Add Settings</button>
				</div>
			</form>


		</div>

	</div>
</div>
<style>
	.noshow{
		display: none;
	}
</style>
<script>
	var socialCounter = 1;
	$('#addSocialField').click(function(){
		sicialCounter++;
		if(socialCounter > 5){
			$('#socialAlert').removeClass('noshow');
			return;
		}
		newDiv = $(document.createElement('div')).attr("class", "form-group");
		newDiv.after().html('<input type="url" name="url[]" class="form-control"></div>');
		newDiv.appendTo("#socialFieldGroup");
	})
</script>
@endsection
