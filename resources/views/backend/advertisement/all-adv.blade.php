@extends('layouts.backend')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> All Advertisement <a href="{{url('add-adv')}}" class="btn btn-sm btn-default">Add New</a></h1>
    </div>
    <div class="col-sm-12">
    @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable fade in" role="alert">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{Session('message')}}
                </div>
            @endif
    </div>
     
    <form method="post" action="{{url('multipledelete')}}">
      <div class="filter-div">
        {{csrf_field()}}
        <input type="hidden" name="tbl" value="{{encrypt('advertisements')}}">
        <input type="hidden" name="tblid" value="{{encrypt('aid')}}"> 
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
          <div class="col-sm-3">
        </div>
      </div> 
      <div class="col-sm-12" ></div> 
      
    </form>
    <div class="col-sm-12">
      <div class="content">
        <table class="table table-striped" id="myTable">
          <thead>
            <tr>
              <th><input type="checkbox" id="select-all"> Title</th>
              <th>Link</th>
              <th>Location</th>
              <th>Image</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @if(count($data)>0)
            @foreach($data as $adv)
            <tr>
              <td>
                <input type="checkbox" name="select-data[]" value="{{$adv->aid}}"> 
                <a href="{{url('editadv')}}/{{$adv->aid}}">{{$adv->title}}</a>
              </td>
              <td>{{$adv->url}}</td>
              <td>{{$adv->location}}</td>
              <td>
                @if($adv->image)
                <img src="{{url('advertisements')}}/{{$adv->image}}" alt="adv" width="200" />
                @endif
              </td>              
              <td>{{$adv->status}}</td>              
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="4">No Data Found. </td>
             </tr>
            @endif     
          </tbody>
        </table>
      </div>
    </div>
    
    <div class="clearfix"></div> 

  </div>
</div>

@endsection