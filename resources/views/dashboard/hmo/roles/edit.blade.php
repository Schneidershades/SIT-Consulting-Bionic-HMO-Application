@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">Update Role</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update roles</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right"><!-- 
	    <a href="{{route('enrollees.create')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a> -->
	  </div>
	</div>
</div>

<div class="row">
  <div class="col-lg-4 mx-auto">
    <div class="card bg-dark shadow-dark">
      <div class="card-body">
        <div class="card-title text-uppercase text-white"><i class="fa fa-address-book-o"></i>Update {{$role->name}} Role</div>
        <hr>
        <form class="color-form" method="POST" action="{{route('roles.update', $role->id)}}" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="input-25">Role Name</label>
              <input name="name" type="text" class="form-control" id="input-25" placeholder="Role Name" value="{{$role->name}}">
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-link bg-white text-dark shadow px-5"><i class="icon-lock"></i> Update Role</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- End Row-->