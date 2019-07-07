@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">Pending Transfer Request</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pending Transfer Request</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right">
	    <a href=""><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
	  </div>
	</div>
</div>

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card gradient-purpink">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{$transfers->count()}}</h4>
            <span class="text-white">transfers</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-1"></span></div>
        </div>
      </div>
    </div>
  </div>
</div><!--End Row-->


<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> All transfers 
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>User Type</th>
                <th>HMO</th>
                <th>From</th>
                <th>To</th>
                <th>Enrollee</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($transfers as $transfer)
              <tr>
                <td>{{$transfer->transferrable_type}}</td>
                <td>{{$transfer->hmo->hmo_name}}</td>
                <td>{{$transfer->transferFrom->hcp_name}}</td>
                <td>{{$transfer->transferTo->hcp_name}}</td>
                <td>{{$transfer->enrollee->first_name}} {{$transfer->enrollee->middle_name}} {{$transfer->enrollee->last_name}}</td>
                <td>
                  <a href="{{route('enrollees.change.hcp.show.request', $transfer->id)}}" class="btn btn-warning btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-edit"></i></a>
                  <a href="{{route('enrollees.change.hcp.verify.request', $transfer->id)}}" class="btn btn-success btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-check"></i></a>
                  <a href="{{route('enrollees.change.hcp.cancel.request', $transfer->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-times"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>User Type</th>
                <th>HMO</th>
                <th>From</th>
                <th>To</th>
                <th>Enrollee</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
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