@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
	<div class="col-sm-9">
		<h4 class="page-title">Create Enrollee</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javaScript:void();">DashRock</a></li>
			<li class="breadcrumb-item active" aria-current="page">Create Enrollee</li>
		</ol>
	</div>
	<div class="col-sm-3">
		<div class="btn-group float-sm-right">
			<button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
			<button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<div class="dropdown-menu">
				<a href="javaScript:void();" class="dropdown-item">Action</a>
				<a href="javaScript:void();" class="dropdown-item">Another action</a>
				<a href="javaScript:void();" class="dropdown-item">Something else here</a>
				<div class="dropdown-divider"></div>
				<a href="javaScript:void();" class="dropdown-item">Separated link</a>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumb-->


<div class="row">
	<div class="col-lg-12 mx-auto">
		<div class="card">
			<div class="card-body">
				<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i>  {{$hcp->hcp_name}} Details</div>
				<hr>
				<div class="form-row">
					<div class="col-md-3">
	              		<label for="input-9">HCP Code</label><br>
	              		<h5>{{$hcp->hcp_code}}</h5>
					</div>

					<div class="col-md-3">
	              		<label for="input-9">Hcp Name</label><br>
	              		<h5>{{$hcp->hcp_name}}</h5>
					</div>

					<div class="col-md-3">
	              		<label for="input-9">HCP Address</label><br>
	              		<h5>{{$hcp->hcp_address ? $hcp->hcp_state : 'Not Available'}}</h5>
					</div>

					<div class="col-md-3">
	              		<label for="input-9">HCP State</label><br>
	              		<h5>N{{$hcp->hcp_state ? $hcp->hcp_state : 'Not Available'}}</h5>
					</div>

					<div class="col-md-3">
	              		<label for="input-9">HCP Contact</label><br>
	              		<h5>{{$hcp->hcp_contact ? $hcp->hcp_contact : 'Not Available'}}</h5>
					</div>

					<div class="col-md-3">
	              		<label for="input-9">HCP Email</label><br>
	              		<h5>{{$hcp->hcp_email ? $hcp->hcp_email : 'Not Available'}}</h5>
					</div>

					<div class="col-md-3">
	              		<label for="input-9">HCP Bank Name</label><br>
	              		<h5>{{$hcp->hcp_bank_name ? $hcp->hcp_bank_name : 'Not Available'}}</h5>
					</div>

					<div class="col-md-3">
	              		<label for="input-9">HCP Bank Account Number</label><br>
	              		<h5>N{{$hcp->hcp_bank_account_number ? $hcp->hcp_bank_account_number : 'Not Available'}}</h5>
					</div>

				</div><br><br>	

				

				<div class="form-group row">
					<div class="col-sm-10">
						<a href="" type="submit" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i> Edit Health Care hcp Details</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection