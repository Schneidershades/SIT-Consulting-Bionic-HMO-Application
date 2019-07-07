@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">Enrollee:  {{$enrollee->first_name}} {{$enrollee->middle_name}} {{$enrollee->last_name}} from  {{$enrollee->hmo->hmo_name}} Details</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Enrollee:  {{$enrollee->first_name}} {{$enrollee->middle_name}} {{$enrollee->last_name}} in  {{$enrollee->hmo->hmo_name}} Details</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right">
	    <a href="{{route('plans.index')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
	  </div>
	</div>
</div>
<!-- End Breadcrumb-->


<div class="row">
	<div class="col-lg-12 mx-auto">
		<div class="card">
			<div class="card-body">
				<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Enrollee:  {{$enrollee->first_name}} {{$enrollee->middle_name}} {{$enrollee->last_name}} from  {{$enrollee->hmo->hmo_name}} Details</div>
				<hr>
				<div class="row">
					<div class="col-md-4">
						<label for="input-25">Set Enrollee Number</label>
						<h5>{{$enrollee->identifier}}</h5>
					</div>
					<div class="col-md-4">
						<label for="input-26">Set Enrollee Plan</label>
						<h5>{{$enrollee->health_care_plan->plan}} - {{$enrollee->health_care_plan->amount}}</h5>
					</div>
					<div class="col-md-4">
						<label for="input-25">Set Health Care Provider</label>
						<h5>{{$enrollee->hmo->hmo_name}}</h5>
					</div>
					<hr>
					<div class="col-md-4">
						<label for="input-25">First Name</label>
						<h5>{{$enrollee->first_name}} {{$enrollee->middle_name}} {{$enrollee->last_name}}</h5>
					</div>

					<div class="col-md-4">
						<label for="input-26">Date of Birth</label>
						<h5>{{$enrollee->dob}}</h5>
					</div>
					<div class="col-md-4">
						<label for="input-13">Gender</label>
						<h5>{{$enrollee->gender}}</h5>
					</div>

					<div class="col-md-4">
						<label for="input-25">Email</label>
						<h5>{{$enrollee->email}}</h5>
					</div>

					<div class="col-md-4">
						<label for="input-25">Phone Number</label>
						<h5>{{$enrollee->phone_number}}</h5>
					</div>

					<div class="col-md-4">
						<label for="input-25">Occupation</label>
						<h5>{{$enrollee->occupation}}</h5>
					</div>

					<div class="col-md-4">
						<label for="input-25">Company</label>
						<h5>{{$enrollee->company}}</h5>
					</div>

					<div class="col-md-4">
						<label for="input-25">Company Sector</label>
						<h5>{{$enrollee->company_sector}}</h5>
					</div>

					<div class="col-md-4">
						<label for="input-25">Address</label>
						<h5>{{$enrollee->residential_address}}</h5>
					</div>

					<div class="col-md-4">
						<label for="input-25">State</label>
						<h5>{{$enrollee->residential_state}}</h5>
					</div>

					<div class="col-md-4">
						<label for="input-25">Nationality</label>
						<h5>{{$enrollee->nationality}}</h5>
					</div>
				</div>
				<hr>


				<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Dependants of {{$enrollee->first_name}} {{$enrollee->middle_name}} {{$enrollee->last_name}} from  {{$enrollee->hmo->hmo_name}} Details</div>
				<hr>

			

				<div class="row">
				
				
				@if(!$dependants->count())
					<div class="col-md-12">
						<h5>No Dependant are available for now</h5>
					</div>
				@endif

				@foreach($dependants as $dependant)

					<div class="col-md-4">
						<label for="input-25">Set Enrollee Number</label>
						<h5>{{$dependant->deppendant_id}}</h5>
					</div>
					<hr>
					<div class="col-md-3">
						<label for="input-25">First Name</label>
						<h5>{{$dependant->first_name}} {{$dependant->middle_name}} {{$dependant->last_name}}</h5>
					</div>

					<div class="col-md-3">
						<label for="input-26">Date of Birth</label>
						<h5>{{$dependant->dbo}}</h5>
					</div>
					<div class="col-md-3">
						<label for="input-13">Gender</label>
						<h5>{{$dependant->gender}}</h5>
					</div>

					<div class="col-md-3">
						<label for="input-25">Email</label>
						<h5>{{$dependant->email}}</h5>
					</div>

					<div class="col-md-3">
						<label for="input-25">Phone Number</label>
						<h5>{{$dependant->phone_number}}</h5>
					</div>

					<div class="col-md-3">
						<label for="input-25">Occupation</label>
						<h5>{{$dependant->occupation}}</h5>
					</div>

					<div class="col-md-3">
						<label for="input-25">Company</label>
						<h5>{{$dependant->company}}</h5>
					</div>

					<div class="col-md-3">
						<label for="input-25">Company Sector</label>
						<h5>{{$dependant->company_sector}}</h5>
					</div>

					<div class="col-md-6">
						<label for="input-25">Address</label>
						<h5>{{$dependant->residential_address}}</h5>
					</div>

					<div class="col-md-3">
						<label for="input-25">State</label>
						<h5>{{$dependant->residential_state}}</h5>
					</div>

					<div class="col-md-3">
						<label for="input-25">Nationality</label>
						<h5>{{$dependant->nationality}}</h5>
					</div>

					@endforeach		
				</div>
				<div class="row text-right">
					<div class="col-sm-12">
						<a href="" type="submit" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i> Edit Enrollee Details</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection