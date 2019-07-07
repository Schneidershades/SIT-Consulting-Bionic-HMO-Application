@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">New Cash Transaction</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Bionic</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">New Cash Transaction</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right">
	    <a href="{{route('cash.index')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
	  </div>
	</div>
</div>
<!-- End Breadcrumb-->

<div class="row">
	<div class="col-lg-12 mx-auto">
		<div class="card bg-dark shadow-dark">
			<div class="card-body">
				<div class="card-title text-uppercase text-white"><i class="fa fa-address-book-o"></i>Create Cash Transactions</div>
				<hr>
				<form class="color-form" method="POST" action="{{route('cash.store')}}" enctype="multipart/form-data">
					@csrf
					<div class='repeater'>
						<!-- Make sure the repeater list value is different from the first repeater  -->
						<div data-repeater-list="cash_transaction_details">
							<div data-repeater-item class="form-group row">
								<div class="col-md-12">
									<div class="card-title text-white text-center"><i class="fa fa-address-book-o"></i>NEW TRANSACTION</div><br>
								</div>
								<div class="form-group col-md-4">
									<label for="input-25">Initiate Transaction Date </label>
									<input name="transaction_date" type="date" class="form-control" id="input-25" placeholder="Initiate Transaction Date">
								</div>
								<div class="form-group col-md-4">
									<label for="input-26">Transaction Type</label>
									<select name="transaction_type_id" class="form-control " required>
										<option value="">---Select Type of Transaction---</option>
										@foreach($types as $type)
										<option value="{{$type->id}}">{{$type->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group col-md-4">
									<label for="input-26">Classification Type</label>
									<select name="transaction_classification_id" class="form-control " required>
										<option value="">---Select Classification---</option>
										@foreach($classes as $class)
										<option value="{{$class->id}}">{{$class->name}}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group col-md-12">
									<label for="input-25">Description/ Particulars</label>
									<input name="description" type="text" class="form-control" id="input-25" placeholder="Transaction Description">
								</div>

								<div class="form-group col-md-4">
									<label for="input-25">Transaction Amount </label>
									<input name="amount" type="number" min="0" class="form-control" id="input-25" placeholder="Initiate Transaction Date">
								</div>

								<div class="form-group col-md-4">
									<label for="input-25">Transaction Reference (if any)</label>
									<input name="transaction_reference" type="number" min="0" class="form-control" id="input-25" placeholder="Initiate Transaction Date">									
								</div>

								<div class="form-group col-md-4">
									<label for="input-25">Payment Method</label>
									<select name="payment_method" class="form-control " required>
										<option value="">---Select Payment Method---</option>
										<option value="cash">Cash</option>
										<option value="cheque">Cheque</option>
										<option value="bank_transfer">Bank Transfer</option>
									</select>									
								</div>
								
								<hr>

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
						<button type="submit" class="btn btn-link bg-white text-dark shadow px-5"><i class="icon-lock"></i> Create Transaction(s)</button>
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