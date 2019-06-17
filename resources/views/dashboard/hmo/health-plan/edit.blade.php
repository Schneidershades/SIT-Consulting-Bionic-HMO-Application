@extends('dashboard.layouts.layouts')

@section('content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
	<div class="col-sm-9">
		<h4 class="page-title">Edit {{$plan->plan}}</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javaScript:void();">DashRock</a></li>
			<li class="breadcrumb-item active" aria-current="page">Edit {{$plan->plan}}</li>
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
	<div class="col-lg-6 mx-auto">
		<div class="card bg-dark shadow-dark">
			<div class="card-body">
				<div class="card-title text-uppercase text-white"><i class="fa fa-address-book-o"></i>Edit {{$plan->plan}}</div>
				<hr>
				<form class="color-form" method="POST" action="{{route('plans.update', $plan->id)}}" enctype="multipart/form-data">
					@csrf

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="input-25">Name your HMO Plan</label>
							<input name="plan" type="text" class="form-control" id="input-25" placeholder="Enter HMO Plans" value="{{$plan->plan}}">
						</div>
						<div class="form-group col-md-6">
							<label for="input-26">Amount</label>
							<input name="amount" type="number" min="0"  class="form-control" id="input-26" placeholder="Enter Plan Amount" value="{{$plan->amount}}">
						</div>
					</div>

					<div class='repeater'>
						<div data-repeater-list="health_care_benefits_details" class="form-row">
							@foreach($plan->benefits as $b)
							<div class="form-group col-md-12" data-repeater-item>
			              		<label for="input-9">Benefits</label>
								<input type="text" class="form-control" id="input-9" name="benefit" value="{{$b->benefit}}"/>
								<button data-repeater-delete type="button" class="badge badge-pill badge-danger m-1" >-</button>
							</div>
							@endforeach
						</div>
						<div class="text-right">
						    <button data-repeater-create type="button" class="btn btn-primary waves-effect waves-light m-1"> + </button>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-link bg-white text-dark shadow px-5"><i class="icon-lock"></i> Update Plan</button>
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