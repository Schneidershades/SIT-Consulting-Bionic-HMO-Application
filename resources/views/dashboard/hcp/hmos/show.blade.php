@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
<div class="col-sm-9">
	<h4 class="page-title">{{$hmo->hmo->hmo_name}}</h4>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
		<li class="breadcrumb-item active" aria-current="page"> {{$hmo->hmo->hmo_name}}</li>
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
<div class="col-lg-12 mx-auto">
	<div class="card">
		<div class="card-body">
			<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i>  {{$hmo->hmo->hmo_name}} Details</div>
			<hr>

			<div class="form-row">
				<div class="col-md-3">
					<label for="input-9">HMO Code</label><br>
					<h5>{{$hmo->hmo->hmo_code}}</h5>
				</div>

				<div class="col-md-3">
					<label for="input-9">HMO Name</label><br>
					<h5>{{$hmo->hmo->hmo_name}}</h5>
				</div>

				<div class="col-md-3">
					<label for="input-9">HMO Address</label><br>
					<h5>{{$hmo->hmo->hmo_address ? $hmo->hmo->hmo_address : 'Not Available'}}</h5>
				</div>

				<div class="col-md-3">
					<label for="input-9">HMO State</label><br>
					<h5>{{$hmo->hmo->hmo_state ? $hmo->hmo->hmo_state : 'Not Available'}}</h5>
				</div>

				<div class="col-md-3">
					<label for="input-9">HMO Contact</label><br>
					<h5>{{$hmo->hmo->hmo_contact ? $hmo->hmo->hmo_contact : 'Not Available'}}</h5>
				</div>

				<div class="col-md-3">
					<label for="input-9">HMO Email</label><br>
					<h5>{{$hmo->hmo->hmo_email ? $hmo->hmo->hmo_email : 'Not Available'}}</h5>
				</div>

				<div class="col-md-3">
					<label for="input-9">HMO Region</label><br>
					<h5>{{$hmo->hmo->region ? $hmo->hmo->region : 'Not Available'}}</h5>
				</div>

				<div class="col-md-3">
					<label for="input-9">HMO Service</label><br>
					<h5>{{$hmo->hmo->hmo_service ? $hmo->hmo->hmo_service : 'Not Available'}}</h5>
				</div>
			</div><br><br>	

			<div class="card-title text-uppercase ">
				<i class="fa fa-address-book-o"></i> Tariff / Drug Agreement Details
			</div>
			<hr>

				<div class="table-responsive">
					

					@if($agreements != null)
					<table id="example" class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">tariff Item</th>
								<th scope="col">Type</th>
								<th scope="col">Amount</th>
							</tr>
						</thead>
						<tbody>
							@foreach($agreements as $t)
							<tr scope="row">
								<th scope="col">{{$t->agreementable->getTitle()}}</th>
								<th scope="col">{{$t->agreementable_type}}</th>
								<th scope="col">N {{$t->amount}}</th>
							</tr>
							@endforeach
						</tbody>
					</table><br>

					@else
						<h5>No Agreements Available</h5>
					@endif

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