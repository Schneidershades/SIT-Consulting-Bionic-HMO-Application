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
		<h4 class="page-title">New Capitation</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
			<li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">New Capitation</li>
		</ol>
	</div>
	<div class="col-sm-3">
		<div class="btn-group float-sm-right">
			<a href="{{route('bills.index')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
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
				<form class="color-form" method="POST" action="{{route('capitations.raise.save')}}" enctype="multipart/form-data">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-6">
			              	<label for="input-9">Raise Capitation for: </label><br>

			              	<select  name="raiseCapitationFor" id="for" class="form-control" onchange="
			              		if(this.value=='selectedHcps'){ 
						          	$('#selectedHcps').fadeIn(); 
						      	}
						          else{ 
						          	$('#selectedHcps').fadeOut();
						      	}" 
						    >

							<option value="">---Select HCPs---</option>
							<option value="all">All HCPs</option>
							<option value="selectedHcps">Select from Existing HCPs</option>
						    </select>						      	
		               	</div>

		               	<div class="form-group col-md-6" id="selectedHcps" style="display:none">
			              	<label for="input-9">Select from Existing HCPs</label>
		                    <select multiple="multiple" class=" form-control multi-select" id="my_multi_select3" name="hcps[]">
		                    @foreach($hcps as $hcp)
								<option value="{{$hcp->hcp->id}}">{{$hcp->hcp->hcp_code}} - {{$hcp->hcp->hcp_name}}</option>
		                    @endforeach
			                </select>
		               	</div>

		               	<!-- <div class="form-group col-md-6">
							<label for="input-26">Lives</label>
							<input name="lives" type="number" min="0" class="form-control" id="input-26" placeholder="Number of lives" required>
						</div> -->

						<div class="form-group col-md-6">
							<label for="input-26">Period</label>
							<input name="period" type="date" class="form-control" id="input-26" required>
						</div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-link bg-white text-dark shadow px-5"><i class="icon-lock"></i> Raise Capitation </button>
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

<!-- <script type="text/javascript">

	$('#tariffcode').empty().append('<option value="">--Please select a tariff---</option>');
          //var id = id;
    var url = '{{ URL::to('/js/tariff')}}/';
    console.log(url);
    $.get(url, function (data) {
    	console.log(data);
     	$.each(data, function (i, data) {
          //alert(data.code);
          	$("#tariffcode").append("<option value='"+data.id+"'>"+data.parent_id+' - '+data.description+' - '+data.amount+"</option>");
      	});
    });

      function showBouquets(network) {
      	$('#tvcode').empty().append('<option value="">--Please Select Digital TV Network---</option>');
          //var id = id;
          var url = '{{ URL::to('/js/tv')}}/' + network;
          console.log(url);
          $.get(url, function (data) {
          	console.log(data);
          	$.each(data, function (i, data) {
                //alert(data.code);
                $("#tvcode").append("<option value='"+data.code+"'>"+data.title+"</option>");
            });
          });
      }
      </script> -->

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

	$(document).ready(function () {
		'use strict';
		$('.drugs').repeater({
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

	                placeholder: "Select Drug Item",

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