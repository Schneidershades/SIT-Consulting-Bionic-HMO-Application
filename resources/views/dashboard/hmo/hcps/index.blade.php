@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">All Health Care Providers in {{auth()->user()->userable->hmo_name}}</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Bionic</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"> All Health Care Providers in {{auth()->user()->userable->hmo_name}}</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right">
	    <a href="{{route('hcps.index')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
	  </div>
	</div>
</div>
<!-- End Breadcrumb-->

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> All Health Care Providers in {{auth()->user()->userable->hmo_name}}
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>HCP Code</th>
                <th>Name</th>
                <th>Enrollees</th>
                <th>Payment Channel</th>
                <th>Account Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($selected_hcps as $hcp)
              <tr>
                <td>{{$hcp->hcp->hcp_code}}</td>
                <td>{{$hcp->hcp->hcp_name}}</td>
                <td>{{$hcp->countHmoEnrollees($hcp->hcp->id)}}</td>
                <td>
                  @if($hcp->provider_payment_mechanism == NULL)
                  <span class="badge badge-danger m-1">None</span>
                  @else
                  <span class="badge badge-success">{{$hcp->provider_payment_mechanism}}</span>
                  @endif
                </td>
                <td>
                  @if($hcp->hasAccount($hcp->hcp_id) == 'yes')
                  <span class="badge badge-danger m-1">Has an Account</span>
                  @else
                  <span class="badge badge-success">No Account Account</span>
                  @endif
                </td>
                <td>
		            <a href="{{route('hcps.show', $hcp->hcp->id)}}" class="btn btn-warning btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-eye"></i></a>
	                <a href="{{route('hcps.delete', $hcp->hcp->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
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