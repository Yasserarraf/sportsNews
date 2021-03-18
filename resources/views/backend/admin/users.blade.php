@extends('layouts.backend')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 title">
        <h1>Administrators</h1>
        </div>
        <div class="col-sm-12">
        @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissable fade in" role="alert">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        {{Session('message')}}
                    </div>
                @endif
        </div>
        <div class="search-div">

        <div class="col-sm-3">
            <input type="text" id="search" name="search" class="form-control" placeholder="Search Admin">
        </div>
        </div>

        <div class="clearfix"></div>
        <form method="post" action="{{url('multipledelete')}}">
        <div class="filter-div">
        {{csrf_field()}}
        <input type="hidden" name="tbl" value="{{encrypt('users')}}">
        <input type="hidden" name="tblid" value="{{encrypt('id')}}">
        <div class="col-sm-2">
            <select name="bulk-action" class="form-control">
                <option value="0">Bulk Action</option>
                <option value="1">Move to Trash</option>
            </select>
            </div>
            <div class="col-sm-1">
            <div class="row">
                <button class="btn btn-default">Apply</button>
            </div>
            </div>
            <div class="filter-div">
        
        </div>
        <div class="col-sm-12" ></div>

        <div class="col-sm-12">
        <div class="content">
            <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                <th width="40%"><input type="checkbox" id="select-all">Name</th>
                <th width="40%">Email</th>
                <th width="20%">Date</th>
                </tr>
            </thead>
            <tbody>
                @if(count($users)>0)
                @foreach($users as $user)
                <tr>
                <td>
                    <input type="checkbox" name="select-data[]" value="{{$user->id}}">
                    <a href="{{url('editpost')}}/{{$user->id}}">{{$user->name}}</a>
                </td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                </tr>
                @endforeach
                @else
                <tr>
                <td colspan="4">No Admin Found. </td>
                </tr>
                @endif
            </tbody>
            </table>
        </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-3 col-sm-offset-6">

        </div>
        </div>
        </form>
    </div>
    <div >
		{{ $users->links('pagination::bootstrap-4')}}
	</div>
</div>
@endsection
