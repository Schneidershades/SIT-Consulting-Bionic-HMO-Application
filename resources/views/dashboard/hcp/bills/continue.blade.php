@extends('dashboard.layouts.layouts')

@section('stylesheets')
<!--Select Plugins-->
<link href="{{URL::to('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<!--inputtags-->
<link href="{{URL::to('assets/plugins/inputtags/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />
<!--multi select-->
<link href="{{URL::to('assets/plugins/jquery-multi-select/multi-select.css')}}" rel="stylesheet" type="text/css">
<!--Bootstrap Datepicker-->
<link href="{{URL::to('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
<!--Touchspin-->
<link href="{{URL::to('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css">
<style>
	.select2-selection--multiple{
		overflow: hidden !important;
		height: auto !important;
	}
</style>
@endsection
@section('content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
	<div class="col-sm-9">
		<h4 class="page-title">New Bill</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hcp_name}}</a></li>
			<li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">New Bill</li>
		</ol>
	</div>
	<div class="col-sm-3">
		<div class="btn-group float-sm-right">
			<a href="{{route('hcp-bills.index')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
		</div>
	</div>
</div>
<!-- End Breadcrumb-->

<div class="row">
	<div class="col-lg-12 mx-auto">
		<div class="card bg-dark shadow-dark">
			<div class="card-body">
				<div class="card-title text-uppercase text-white"><i class="fa fa-address-book-o"></i>New Bill or Fee for Service</div>
				<hr>
				<form class="color-form" method="POST" action="{{route('hcp-enrollee-bills.continue.store', $bill->identifier)}}" enctype="multipart/form-data">
					@csrf
					<div class="form-group row text-white">
						<div class="col-md-12">
							<div class="card-title text-white text-center"><i class="fa fa-address-book-o"></i> NEW BILL</div><br>
						</div>


						<div class="form-group col-md-4 ">
							<label for="input-26">Date</label>
							<h5 class="text-white">{{$bill->date_of_bill}}</h5>
						</div>

						<div class="form-group col-md-4">
							<label for="input-26">Payment Reference</label>
							<h5 class="text-white">{{$bill->payment_reference}}</h5>
						</div>

						<div class="form-group col-md-4">
							<label for="input-25">Enrollee </label>
							<h5 class="text-white">{{$bill->enrollee->first_name}} {{$bill->enrollee->middle_name}} {{$bill->enrollee->last_name}}</h5>
						</div>


						<div class="form-group col-md-12">
							<label for="input-26">Hcp</label>
							<h5 class="text-white">{{$bill->hmo->name}}</h5>
						</div>
					</div>

					<div class='repeater'>
						<!-- Make sure the repeater list value is different from the first repeater  -->
						<div data-repeater-list="hcp_service_details">
							<div data-repeater-item class="form-group row">
								<div class="form-group col-md-12" >
									<label>Fee for service</label>
									<select class="form-control single-select" name="treatment_id" id="treatment">
										<option value="">---Select Service---</option>
										@foreach($tariffAgreements as $agreement)
										<option value="{{$agreement->agreementable->id}}">{{$agreement->agreementable->description}} -{{$agreement->agreementable->amount}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group col-md-12">
									<button data-repeater-delete type="button" class="badge badge-pill badge-danger m-1" >-</button>
								</div>
								<hr>
							</div>
						</div>
						<div class="text-right">
							<button data-repeater-create type="button" class="btn btn-primary waves-effect waves-light m-1"> + Add Fee for Service </button>
						</div>
					</div>

					<div class='repeater'>
						<!-- Make sure the repeater list value is different from the first repeater  -->
						<div data-repeater-list="hcp_drug_details">
							<div data-repeater-item class="form-group row">
								<div class="form-group col-md-12">
									<label>Drug purchase</label>
									<select class="form-control single-select" name="drug_id" id="drug">
										<option value="">---Select Drug ---</option>
										@foreach($drugAgreements as $drug)
										<option value="{{$drug->agreementable->id}}">{{$drug->agreementable->drug_name}} - {{$drug->agreementable->dosage_form}} - {{$drug->agreementable->strengths}} - {{$drug->agreementable->presentation}} - {{$drug->agreementable->amount}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group col-md-12">
									<button data-repeater-delete type="button" class="badge badge-pill badge-danger m-1" >-</button>
								</div>
								<hr>
							</div>
						</div>
						<div class="text-right">
							<button data-repeater-create type="button" class="btn btn-primary waves-effect waves-light m-1"> + Add Drug </button>
						</div>
					</div>

					<div class="form-group row">
						<div class="form-group col-md-4">
							<label for="input-26">Amount Charged</label>
							<input name="amount_charged" type="number" min="0" class="form-control" id="input-26" placeholder="Enter Charged Amount">
						</div>

						<div class="form-group col-md-4">
							<label for="input-26">Amount Paid</label>
							<input name="amount_paid" type="number" min="0" class="form-control" id="input-26" placeholder="Enter Amount Paid">
						</div>
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-link bg-white text-dark shadow px-5"><i class="icon-lock"></i> Register Bill</button>
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


<!--Select Plugins Js-->
<script src="{{URL::to('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Inputtags Js-->
<script src="{{URL::to('assets/plugins/inputtags/js/bootstrap-tagsinput.js')}}"></script>

<!--Bootstrap Datepicker Js-->
<script src="{{URL::to('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script>
	$('#default-datepicker').datepicker({
		todayHighlight: true
	});
	$('#autoclose-datepicker').datepicker({
		autoclose: true,
		todayHighlight: true
	});

	$('#inline-datepicker').datepicker({
		todayHighlight: true
	});

	$('#dateragne-picker .input-daterange').datepicker({
	});

</script>
<!--Multi Select Js-->
<script src="{{URL::to('assets/plugins/jquery-multi-select/jquery.multi-select.js')}}"></script>
<script src="{{URL::to('assets/plugins/jquery-multi-select/jquery.quicksearch.js')}}"></script>


<script type="text/javascript">

</script>


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
				// form.find('.multiple-select').select2();
				$(this).find('.single-select').select2({

	                placeholder: "Select Fee for service",

	                allowClear: true,

	            });
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


<script>
	$(document).ready(function() {
		$('.single-select').select2();

		$('.multiple-select').select2({
		});

        //multiselect start

        $('#my_multi_select1').multiSelect();
        $('#my_multi_select2').multiSelect({
        	selectableOptgroup: true
        });

        $('#my_multi_select3').multiSelect({
        	selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
        	selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
        	afterInit: function (ms) {
        		var that = this,
        		$selectableSearch = that.$selectableUl.prev(),
        		$selectionSearch = that.$selectionUl.prev(),
        		selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
        		selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

        		that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
        		.on('keydown', function (e) {
        			if (e.which === 40) {
        				that.$selectableUl.focus();
        				return false;
        			}
        		});

        		that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
        		.on('keydown', function (e) {
        			if (e.which == 40) {
        				that.$selectionUl.focus();
        				return false;
        			}
        		});
        	},
        	afterSelect: function () {
        		this.qs1.cache();
        		this.qs2.cache();
        	},
        	afterDeselect: function () {
        		this.qs1.cache();
        		this.qs2.cache();
        	}
        });

        $('.custom-header').multiSelect({
        	selectableHeader: "<div class='custom-header' >Selectable items</div>",
        	selectionHeader: "<div class='custom-header'>Selection items</div>",
        	selectableFooter: "<div class='custom-header'>Selectable footer</div>",
        	selectionFooter: "<div class='custom-header'>Selection footer</div>"
        });
    });

</script>

@endsection