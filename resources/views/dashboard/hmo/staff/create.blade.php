@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
	<div class="col-sm-9">
		<h4 class="page-title">New {{auth()->user()->userable->hmo_name}} Staff </h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
			<li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">New HMO Staff </li>
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
		<div class="card bg-dark shadow-dark">
			<div class="card-body">
				<div class="card-title text-uppercase text-white"><i class="fa fa-address-book-o"></i>New {{auth()->user()->userable->hmo_name}} Staff</div>
				<hr>
				<form class="color-form" method="POST" action="{{route('staff.store')}}" enctype="multipart/form-data">
					@csrf

					<div class="card-title text-uppercase text-white "><i class="fa fa-address-book-o"></i> Staff Reference</div>
					<hr>

					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="input-25">Set Staff Number</label>
							<input name="first_name" type="text" class="form-control" id="input-25" placeholder="Input an Staff Number/Identifier">
						</div>
					</div>
					<hr>

					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="input-25">First Name</label>
							<input name="first_name" type="text" class="form-control" id="input-25" placeholder="First Name">
						</div>
						<div class="form-group col-md-3">
							<label for="input-26">Middle Name</label>
							<input name="middle_name" type="text" class="form-control" id="input-26" placeholder="Middle Name">
						</div>
						<div class="form-group col-md-3">
							<label for="input-25">Last Name</label>
							<input name="last_name" type="text" class="form-control" id="input-25" placeholder="Last Name">
						</div>
						<div class="form-group col-md-3">
							<label for="input-13">Gender</label>
							<select name="gender" class="form-control " required>
								<option value="">---Select Gender---</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>

						<div class="form-group col-md-3">
							<label for="input-26">Date of Birth</label>
							<input name="dob" type="date" class="form-control" id="input-26" placeholder="Date of Birth">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Rank</label>
							<input name="rank" type="text" class="form-control" id="input-25" placeholder="Office Rank">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Profession</label>
							<input name="profession" type="text" class="form-control" id="input-25" placeholder="Profession">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Designation</label>
							<input name="designation" type="text" class="form-control" id="input-25" placeholder="Designation">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Department</label>
							<input name="department" type="text" class="form-control" id="input-25" placeholder="Department">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Qualification</label>
							<input name="qualification" type="text" class="form-control" id="input-25" placeholder="Qualification">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Position</label>
							<input name="position" type="text" class="form-control" id="input-25" placeholder="Position">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Pension Managers</label>
							<input name="pension_managers" type="text" class="form-control" id="input-25" placeholder="Pension Managers">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Initial Appointment Date</label>
							<input name="initial_appointment_date" type="date" class="form-control" id="input-25" placeholder="Initial Appointment Date">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Present Appointment Date</label>
							<input name="present_appointment_date" type="date" class="form-control" id="input-25" placeholder="Present Appointment Date">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Employment Type</label>
							<input name="employment_type" type="date" class="form-control" id="input-25" placeholder="Employment Type">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Current Location</label>
							<input name="current_location" type="date" class="form-control" id="input-25" placeholder="Current Location">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Previous Location</label>
							<input name="previous_location" type="date" class="form-control" id="input-25" placeholder="Previous Location">
						</div>


						<div class="form-group col-md-3">
							<label for="input-25">Bank Account number</label>
							<input name="bank_account_number" type="date" class="form-control" id="input-25" placeholder="Bank Account number">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Bank Name</label>
							<input name="bank_name" type="date" class="form-control" id="input-25" placeholder="Bank Name">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Nationality</label>
							<input name="nationality" type="text" class="form-control" id="input-25" placeholder="Nationality">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">State</label>
							<input name="state" type="text" class="form-control" id="input-25" placeholder="State">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Local Govt. Area</label>
							<input name="lga" type="text" class="form-control" id="input-25" placeholder="Local Govt. Area">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Place of Birth</label>
							<input name="pob" type="text" class="form-control" id="input-25" placeholder="Place of Birth">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Marital Status</label>
							<input name="marital_status" type="text" class="form-control" id="input-25" placeholder="Marital Status">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Phone Number</label>
							<input name="phone_number" type="text" class="form-control" id="input-25" placeholder="Phone Number">
						</div>

						<div class="form-group col-md-6">
							<label for="input-25">Residential Address</label>
							<input name="residential_address" type="email" class="form-control" id="input-25" placeholder="Residential Address">
						</div>

						<div class="form-group col-md-6">
							<label for="input-25">Contact Address</label>
							<input name="contact_address" type="email" class="form-control" id="input-25" placeholder="Contact Address">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Height</label>
							<input name="height" type="text" class="form-control" id="input-25" placeholder="Height">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Weight</label>
							<input name="weight" type="text" class="form-control" id="input-25" placeholder="Weight">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Genotype</label>
							<input name="genotype" type="text" class="form-control" id="input-25" placeholder="Genotype">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Blood Group</label>
							<input name="blood_group" type="text" class="form-control" id="input-25" placeholder="Blood Group">
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">Any Deformity</label>
							<select name="gender" class="form-control " required>
								<option value="">---Any Deformiy---</option>
								<option value="yes">yes</option>
								<option value="no">no</option>
							</select>
						</div>

						<div class="form-group col-md-3">
							<label for="input-25">State Deformity</label>
							<input name="state_deformity" type="text" class="form-control" id="input-25" placeholder="State Deformity">
						</div>
					</div>
					<hr>

					<div class="form-group">
						<button type="submit" class="btn btn-link bg-white text-dark shadow px-5"><i class="icon-lock"></i> Register Staff</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
<script src="{{URL::to('assets/js/jquery.repeater.js')}}"></script>
<script src="{{URL::to('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<!-- <script src="{{URL::to('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js')}}"></script> -->
<script>

	// $('.dropify').dropify();
	// 
	
	$(document).ready(function () {
		'use strict';
		$('.repeater').repeater({
			isFirstItemUndeletable: true,
			defaultValues: {
				'textarea-input': 'foo',
				'text-input': 'bar',
				'select-input': 'B',
				'checkbox-input': ['A', 'B'],
				'radio-input': 'B'
			},
			show: function () {
				$(this).slideDown();
			},
			hide: function (deleteElement) {
				if(confirm('Are you sure you want to delete this element?')) {
					$(this).slideUp(deleteElement);
				}
			},
			ready: function (setIndexes) {

			}
		});
	});
</script>

@endsection