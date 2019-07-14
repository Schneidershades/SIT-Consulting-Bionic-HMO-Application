@extends('layouts.dashboard')



@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">All Pending Pre-Authorization Code in {{auth()->user()->userable->hmo_name}}</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Bionic</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"> All Pending Pre-Authorization Code in {{auth()->user()->userable->hmo_name}}</li>
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
      <div class="card-header"><i class="fa fa-table"></i> All Pending Pre-Authorization Code {{auth()->user()->userable->hmo_name}}
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>HCP Code/Name</th>
                <th>Enrollee</th>
                <th>Treatment Type</th>
                <th>Service Type</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($transactions as $transaction)
              
              <tr>
                <td>{{$transaction->hcp->hcp_name}}</td>
                <td>{{$transaction->enrollee->first_name}} {{$transaction->enrollee->middle_name}} {{$transaction->enrollee->last_name}}</td>
                <td>{{$transaction->claimable_type}}</td>
                <td>{{$transaction->service_type}}</td>
                <td>{{$transaction->claimable->amount}}</td>
                <td>{{$transaction->status}}</td>
                <td>
                  <a href="{{route('pre-authorization.show', $transaction->identifier)}}" class="btn btn-warning btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-eye"></i></a>

                  @if($transaction->status == 'verified' && $transaction->status == 'cancelled')
                  <a href="{{route('pre-authorization.verify', $transaction->identifier)}}" class="btn btn-success btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-check"></i></a>
                  <a href="{{route('pre-authorization.cancel', $transaction->identifier)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-times"></i></a>
                  @endif

                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>HCP Code/Name</th>
                <th>Enrollee</th>
                <th>Treatment Type</th>
                <th>Service Type</th>
                <th>Amount</th>
                <th>Status</th>
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