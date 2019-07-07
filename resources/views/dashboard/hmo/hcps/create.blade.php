@extends('layouts.dashboard')

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
	    <h4 class="page-title">Add HCPs </h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add HCPs</li>
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
				<div class="card-title text-uppercase text-white"><i class="fa fa-address-book-o"></i>Add HCPs
					<!-- <a type="submit" class="btn btn-danger bg-white text-dark align-lef shadow px-5"><i class="icon-lock"></i> Cancel Activity</a> -->
				</div>
				<hr>
				<form class="color-form" method="POST" action="{{route('hcps.store')}}" enctype="multipart/form-data">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-12">
			              	<label for="input-9">Select from Existing HCPs</label>
		                    <select multiple="multiple" class="multi-select" id="my_multi_select3" name="hcps[]">
		                    @foreach($hcps as $hcp)
								<option value="{{$hcp->id}}">{{$hcp->hcp_code}} - {{$hcp->hcp_name}}</option>
		                    @endforeach
			                </select>

			                <!-- <select class="form-control multiple-select" multiple="multiple" name="hcps[]">
	                      		@foreach($hcps as $hcp)
	                        	<option value="{{$hcp->id}}">{{$hcp->hcp_code}} - {{$hcp->hcp_name}}</option>
	                        	@endforeach
	                      	</select> -->
		               	</div>
					</div>

					<!-- <div class="card-title text-uppercase text-white "><i class="fa fa-address-book-o"></i> PARTICULARS OF HCP (if not Above) </div>
					<hr>

					<div class='repeater'>
						<div data-repeater-list="business_partners_details">
							<div data-repeater-item class="form-group row">
								<hr>
								<div class="col-md-12">
									<div class="card-title text-white text-center"><i class="fa fa-address-book-o"></i>HCP DETAILS</div><br>
								</div>

								<div class="form-group col-md-6">
									<label for="input-25">Set Hcp Number</label>
									<input name="hcp_code" type="text" class="form-control" id="input-25" placeholder="Input an Hcp Number/Identifier">
								</div>
								<div class="form-group col-md-6">
									<label for="input-25">Name of Hcps</label>
									<input name="hcp_code" type="text" class="form-control" id="input-25" placeholder="Name of Hcps">
								</div>
								<div class="form-group col-md-12">
									<label for="input-25">HCP Address</label>
									<input name="hcp_address" type="text" class="form-control" id="input-25" placeholder="HCP Address">
								</div>

								<div class="form-group col-md-3">
									<label for="input-13">Hcp Category</label>
									<select name="gender" class="form-control">
										<option value="">---Select HCP Category---</option>
										<option value="public">Public</option>
										<option value="private">Private</option>
									</select>
								</div>

								<div class="form-group col-md-3">
									<label for="input-25">HCP Email</label>
									<input name="hcp_email" type="email" class="form-control" id="input-25" placeholder="HCP Email">
								</div>

								<div class="form-group col-md-3">
									<label for="input-25">HCP Service</label>
									<input name="hcp_service" type="text" class="form-control" id="input-25" placeholder="HCP Service">
								</div>

								<div class="form-group col-md-3">
									<label for="input-25">Contact Number</label>
									<input name="hcp_contact" type="text" class="form-control" id="input-25" placeholder="Phone Number">
								</div>

								<div class="form-group col-md-3">
									<label for="input-25">Bank Name</label>
									<input name="hcp_bank_name" type="text" class="form-control" id="input-25" placeholder="Bank Name">
								</div>

								<div class="form-group col-md-3">
									<label for="input-25">Account number</label>
									<input name="hcp_bank_account_number" type="text" class="form-control" id="input-25" placeholder="Company">
								</div>
								<hr>
							</div>
						</div>
						<div class="text-right">
							<button data-repeater-create type="button" class="btn btn-primary waves-effect waves-light m-1"> + </button>
						</div>
					</div> -->
					<div class="form-group">
						<button type="submit" class="btn btn-link bg-white text-dark shadow px-5"><i class="icon-lock"></i> Register HMO</button>

						<a type="submit" class="btn btn-danger bg-white text-dark shadow px-5"><i class="icon-lock"></i> Cancel Activity</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
<script src="{{URL::to('assets/js/jquery.repeater.js')}}"></script>
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

    <!--Select Plugins Js-->
    <script src="{{URL::to('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--Inputtags Js-->
    <!-- <script src="{{URL::to('assets/plugins/inputtags/js/bootstrap-tagsinput.js')}}"></script> -->

    <!--Bootstrap Datepicker Js-->
   <!--  <script src="{{URL::to('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
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

    </script> -->
    <!--Multi Select Js-->
    <script src="{{URL::to('assets/plugins/jquery-multi-select/jquery.multi-select.js')}}"></script>
    <script src="{{URL::to('assets/plugins/jquery-multi-select/jquery.quicksearch.js')}}"></script>
    
	<script>
        $(document).ready(function() {
            $('.single-select').select2();
      
            $('.multiple-select').select2();

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
	          selectableHeader: "<div class='custom-header'>Selectable items</div>",
	          selectionHeader: "<div class='custom-header'>Selection items</div>",
	          selectableFooter: "<div class='custom-header'>Selectable footer</div>",
	          selectionFooter: "<div class='custom-header'>Selection footer</div>"
	        });
	      });

    </script>
	

@endsection