@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">All HCP Agreements in {{auth()->user()->userable->hmo_name}}</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Bionic</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"> All HCP Agreements in {{auth()->user()->userable->hmo_name}}</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right">
	    <a href="{{route('agreements.create')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Create</button></a>
	  </div>
	</div>
</div>
<!-- End Breadcrumb-->

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> All HCP Agreements in {{auth()->user()->userable->hmo_name}}
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Hcp Name</th>
                <th scope="col">tariff Item</th>
                <th scope="col">Service</th>
                <th scope="col">Type</th>
                <th scope="col">Amount</th>
                <th scope="col">Created Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($agreements as $t)
              <tr scope="row">
                <th scope="col">{{$t->hcp->hcp_name}}</th>
                <th scope="col">{{$t->agreementable->getTitle()}}</th>
                <th scope="col">{{$t->service_type}}</th>
                <th scope="col">{{$t->agreementable_type}}</th>
                <th scope="col">N {{$t->amount}}</th>
                <th scope="col">{{$t->created_at}}</th>
                <th scope="col"><a href="{{route('agreements.delete', $t->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-trash"></i></a></th>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th scope="col">Hcp Name</th>
                <th scope="col">tariff Item</th>
                <th scope="col">Service</th>
                <th scope="col">Type</th>
                <th scope="col">Amount</th>
                <th scope="col">Created Date</th>
                <th scope="col">Action</th>
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