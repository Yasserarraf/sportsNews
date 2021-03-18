@extends('layouts.backend')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> Edit Section</h1>
		</div>

		<div class="col-sm-4 cat-form">
			@if(Session::has('message'))
                <div class="alert alert-success alert-dismissable fade in" role="alert">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{Session('message')}}
                </div>
            @endif
            <h3>Edit Section</h3>
			<form method="post" action="{{route('updateSection',['id'=>$singleData->sid])}}">
				@csrf
                <input type="hidden" name="tbl" value="{{encrypt('sections')}}" >
                <div class="form-group">
					<label>Name</label>
					<input type="text" name="title" id="category_name" class="form-control" value="{{$singleData->title}}">
					<p>The name is how it appears on your site.</p>
				</div>

				<div class="form-group">
					<label>Slug</label>
					<input type="text" name="slug" id="slug" class="form-control" readonly=""value="{{$singleData->slug}}">
					<p>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</p>
				</div>
                
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Update Section</button>
				</div>
			</form>


		</div>

		<div class="col-sm-8 cat-view">
            <form action="{{route('multipleDelete')}}" method="post">
                <div class="row">

                    @csrf
                    <input type="hidden" name="tbl" value="{{encrypt('sections')}}">
                    <input type="hidden" name="tblid" value="{{encrypt('sid')}}">
                    <div class="col-sm-3">
                        <select name="bulk-action" class="form-control">
                            <option value="0">Bulk Action</option>
                            <option value="1">Move to Trash</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-default">Apply</button>
                    </div>
                    <div class="col-sm-3 col-sm-offset-4">
                        <input type="text" id="search" name="search" class="form-control" placeholder="Search Category">
                    </div>

                </div>
                <div class="content">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="select-all"> Name</th>
                            <th>Slug</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($data)>0)
                            @foreach($data as $section)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="select-data[]" value="{{$section->sid}}">
                                        <a href="{{route('editSection',['id'=>$section->sid])}}">{{$section->title}}</a>
                                    </td>
                                    <td>{{$section->slug}}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">No data found .</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>

                </div>
            </form>
        </div>
	</div>
</div>
@endsection
