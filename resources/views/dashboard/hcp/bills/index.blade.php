@extends('dashboard.layouts.layouts')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">Enrollee Bills</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">bills Bills</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Enrollee Bills</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right">
	    <a href="{{route('home')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
	  </div>
	</div>
</div>

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card gradient-purpink">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{$bills->count()}}</h4>
            <span class="text-white">Bills</span>
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
      <div class="card-header"><i class="fa fa-table"></i> All bills 
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>HCP Code/Name</th>
                <th>Enrollee</th>
                <th>Date</th>
                <th>Charged</th>
                <th>Paid</th>
                <th>Deduction</th>
                <th>Tariff Deduction</th>
                <th>Conclusive Disburse</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($bills as $bill)
              <tr>
                <td>{{$bill->hmo->hmo_code}} - {{$bill->hmo->hmo_name}}</td>
                <td>{{$bill->enrollee->first_name}} {{$bill->enrollee->middle_name}} {{$bill->enrollee->last_name}}</td>
                <td>{{$bill->date_of_bill}}</td>
                <td>{{$bill->amount_charged}}</td>
                <td>{{$bill->amount_paid}}</td>
                <td>{{$bill->hcp_deduction}}</td>
                <td>{{$bill->tariff_deduction}}</td>
                <td>{{$bill->final_payment}}</td>
                <td>
                  <a href="{{route('bills.edit', $bill->identifier)}}" class="btn btn-dark btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-edit"></i></a>
                  <a href="{{route('bills.show', $bill->identifier)}}" class="btn btn-warning btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-eye"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>HCP Code/Name</th>
                <th>Enrollee</th>
                <th>Date</th>
                <th>Charged</th>
                <th>Paid</th>
                <th>Deduction</th>
                <th>Tariff Deduction</th>
                <th>Conclusive Disburse</th>
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