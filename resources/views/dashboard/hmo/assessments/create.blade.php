@extends('dashboard.layouts.layouts')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">New Assessment</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">New Assessment</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right">
	    <a href="{{route('assessments.index')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
	  </div>
	</div>
</div>
<!-- End Breadcrumb-->

<div class="row">
	<div class="col-lg-6 mx-auto">
		<div class="card bg-dark shadow-dark">
			<div class="card-body">
				<div class="card-title text-uppercase text-white"><i class="fa fa-address-book-o"></i>New Assessment</div>
				<hr>
				<form class="color-form" method="POST" action="{{route('assessments.store')}}" enctype="multipart/form-data">
					@csrf
					<div class='repeater'>
						<!-- Make sure the repeater list value is different from the first repeater  -->
						<div data-repeater-list="hcp_assessments_details">
							<div data-repeater-item class="form-group row">
								<div class="col-md-12">
									<div class="card-title text-white text-center"><i class="fa fa-address-book-o"></i> New Assessment</div><br>
								</div>

								<div class="form-group col-md-12">
									<label for="input-25">Set Health Care Provider</label>
									<select name="hcp_id" class="form-control single-select" required>
										<option value="">---Select Health Care Provider---</option>
										@foreach($hcps as $hcp)
										<option value="{{$hcp->hcp_id}}">{{$hcp->hcp->hcp_code}} - {{$hcp->hcp->hcp_name}}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group col-md-12">
									<label for="input-25">Remarks</label>
									<textarea name="remark" class="form-control" id="input-25"  cols="30" rows="4"></textarea>
								</div>
								<div class="form-group col-md-12">
									<label for="input-25">Recommendations</label>
									<textarea name="recommendation" class="form-control" id="input-25"  cols="30" rows="4"></textarea>
								</div>
								<div class="form-group col-md-12">
									<button data-repeater-delete type="button" class="badge badge-pill badge-danger m-1" >-</button>
								</div>
								<hr>
							</div>
						</div>
						<div class="text-right">
							<button data-repeater-create type="button" class="btn btn-primary waves-effect waves-light m-1"> + </button>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-link bg-white text-dark shadow px-5"><i class="icon-lock"></i> Save Assessments</button>
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