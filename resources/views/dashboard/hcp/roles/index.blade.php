@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">All Roles</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">New roles</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right"><!-- 
	    <a href="{{route('enrollees.create')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a> -->
	  </div>
	</div>
</div>

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card gradient-purpink">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{$roles->count()}}</h4>
            <span class="text-white">roles</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-1"></span></div>
        </div>
      </div>
    </div>
  </div>
</div><!--End Row-->


<div class="row">
  <div class="col-lg-8">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> All roles 
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Users</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($roles as $role)
              <tr>
                <td>{{$role->name}}</td>
                <td>{{$role->permissions->count()}}</td>
                <td>
                  <a href="{{route('roles.edit', $role->id)}}" class="btn btn-dark btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-edit"></i></a>
                  <!-- <a href="{{route('roles.show', $role->id)}}" class="btn btn-warning btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-eye"></i></a>
                  <a href="{{route('roles.destroy', $role->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-trash"></i></a> -->
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card bg-dark shadow-dark">
      <div class="card-body">
        <div class="card-title text-uppercase text-white"><i class="fa fa-address-book-o"></i>Create New Role</div>
        <hr>
        <form class="color-form" method="POST" action="{{route('roles.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="input-25">Name</label>
              <input name="name" type="text" class="form-control" id="input-25" placeholder="Full Name">
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-link bg-white text-dark shadow px-5"><i class="icon-lock"></i> Save Role</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- End Row-->



@endsection


@section('scripts')

@include('dashboard.partials._datatablesjs')

@endsection


@section('stylesheets')

@include('dashboard.partials._datatablescss')
@endsection