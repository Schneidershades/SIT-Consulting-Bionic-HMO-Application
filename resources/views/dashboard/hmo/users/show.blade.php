@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title"> {{$user->name}} Details</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{$user->registration}} Details</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right">
	    <a href="{{route('users.create')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
	  </div>
	</div>
</div>

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card gradient-purpink">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{$user->roles->count()}}</h4>
            <span class="text-white">Role</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-1"></span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card gradient-scooter">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{$user->permissions->count()}}</h4>
            <span class="text-white">Permissions</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-1"></span></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Row-->


<div class="row">
  <div class="col-lg-8 mx-auto">
    <div class="card">
      <div class="card-body">
        <div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Information {{$user->name}} </div>
        <hr>

        <div class="row">
            <div class="col-md-3">
                <label for="input-9">Name</label><br>
                <h5>{{$user->name}}</h5>
            </div>
            <div class="col-md-3">
                <label for="input-9">Email</label><br>
                <h5>{{$user->email}}</h5>
            </div>
        </div><br><hr>

        <div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Permissions {{$user->name}} </div>
        <hr>

        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>Permission</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($user->permissions as $permission)
              <tr>
                <td>{{$permission->name}}</td>
                
                <td>
                  <!-- <a href="{{route('users.edit', $user->id)}}" class="btn btn-dark btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-edit"></i></a> -->
                  <a href="{{route('users.show', $user->id)}}" class="btn btn-warning btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-eye"></i></a>
                  <!-- <a href="{{route('users.destroy', $user->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-trash"></i></a> -->
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Permissions</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card bg-dark shadow-dark">
      <div class="card-body">
        <div class="card-title text-uppercase text-white"><i class="fa fa-address-book-o"></i>Create New Role</div>
        <hr>
        <form class="color-form" method="POST" action="{{route('roles.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group col-md-12">
            <label for="input-9">Add Permission</label>
            <select class="form-control multi-select" multiple="multiple" name="permissions[]" id="my_multi_select3">
              @foreach($permissions as $permission)
              <option value="{{$permission->id}}">{{$permission->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-link bg-white text-dark shadow px-5"><i class="icon-lock"></i> Save Role</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection




@section('scripts')

@include('dashboard.partials._datatablesjs')

@endsection


@section('stylesheets')

@include('dashboard.partials._datatablescss')
@endsection

