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
                <th>HCP Code/Name</th>
                <th>Enrollee</th>
                <th>Date</th>
                <th>conclusive Amount</th>
                <th>Disbursment Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($bills as $bill)
              <tr>
                <td>{{$bill->hcp->hcp_name}}</td>
                <td>{{$bill->enrollee->first_name}} {{$bill->enrollee->middle_name}} {{$bill->enrollee->last_name}}</td>
                <td>{{$bill->date_of_bill}}</td>
               
                <td>{{$bill->final_payment}}</td>
                <td>Processing</td>
                <td>
                  <!-- <a href="{{route('bills.edit', $bill->id)}}" class="btn btn-dark btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-edit"></i></a> -->
                  <a href="{{route('claims.show', $bill->identifier)}}" class="btn btn-warning btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-eye"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>HCP Code/Name</th>
                <th>Enrollee</th>
                <th>Date</th>
                <th>conclusive Amount</th>
                <th>Disbursment Status</th>
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