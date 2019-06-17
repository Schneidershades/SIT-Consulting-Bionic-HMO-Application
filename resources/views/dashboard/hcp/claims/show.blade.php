@extends('dashboard.layouts.layouts')
@section('stylesheets')

<style>
	table td[class*=col-], table th[class*=col-] {
		position: static;
		display: table-cell;
		float: none;
	}
</style>
@endsection
@section('content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
	<div class="col-sm-9">
		<h4 class="page-title">Bill for {{$bill->enrollee->first_name}} {{$bill->enrollee->middle_name}} {{$bill->enrollee->last_name}} in {{$bill->hcp->hcp_name}}</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
			<li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page"> Bill for {{$bill->enrollee->first_name}} {{$bill->enrollee->middle_name}} {{$bill->enrollee->last_name}} in {{$bill->hcp->hcp_name}}</li>
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
		<div class="card">
			<div class="card-body">
				<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i>  Bill for {{$bill->enrollee->first_name}} {{$bill->enrollee->middle_name}} {{$bill->enrollee->last_name}} in {{$bill->hcp->hcp_name}} </div>
				<hr>

				<section class="content-header">
					<h3>
						Invoice
						<small>#{{$bill->identifier}}</small>
					</h3>
				</section>

				<!-- Main content -->
				<section class="invoice">
					<!-- title row -->
					<div class="row mt-3">
						<div class="col-lg-6">
							<h4><i class="fa fa-globe"></i> {{$bill->hcp->hcp_name}}</h4>
						</div>
						<div class="col-lg-6">
							<h5 class="float-sm-right">Date: {{$bill->date_of_bill}}</h5>
						</div>
					</div>

					<hr>
					<div class="row invoice-info">
						<div class="col-sm-4 invoice-col">
							From
							<address>
								<strong>{{$bill->hcp->hcp_name}}</strong><br>
								{{$bill->hcp->hcp_address ? $bill->hcp->hcp_address : 'Not available'}}<br>
								Phone: {{$bill->hcp->hcp_phone ? $bill->hcp->hcp_phone : 'Not available'}}<br>
								Email: {{$bill->hcp->hcp_email ? $bill->hcp->hcp_email : 'Not available'}}
							</address>
						</div><!-- /.col -->
						<div class="col-sm-4 invoice-col">
							To
							<address>
								<strong>{{$bill->hmo->hmo_name}}</strong><br>
								{{$bill->hmo->hmo_address ? $bill->hmo->hmo_address : 'Not available'}}<br>
								Phone: {{$bill->hmo->hmo_phone ? $bill->hmo->hmo_phone : 'Not available'}}<br>
								Email: {{$bill->hmo->hmo_email ? $bill->hmo->hmo_email : 'Not available'}}
							</address>
						</div><!-- /.col -->
						<div class="col-sm-4 invoice-col">
							<!-- <b>Invoice #007612</b><br>
							<br>
							<b>Order ID:</b> 4F3S8J<br>
							<b>Payment Due:</b> 2/22/2014<br>
							<b>Account:</b> 968-34567 -->
						</div><!-- /.col -->
					</div><!-- /.row -->
					
					<table class="table">

						<div><h5>tariff BreakDown</h5>	</div>
						<thead>
							<tr>
								<th scope="col">Tariff code</th>
								<th scope="col">Description</th>
								<th scope="col">Amount</th>
							</tr>
						</thead>
						<tbody>
							@if(json_decode($bill->drug_break_down) < 0)
							<b>	No Service was documented</b>
							@endif
							@foreach(json_decode($bill->service_break_down) as $t)
							<tr scope="row">
								<th scope="col">{{$t->tariff_code}} </th>
								<th scope="col">{{$t->description}}</th>
								<th scope="col">{{$t->amount}}</th>
							</tr>
							@endforeach
						</tbody>
					</table><br>


					<h5>Drug BreakDown</h5>

					<table class="table">
						<thead>
							<tr>
								<th scope="col">Drug Name</th>
								<th scope="col">Amount</th>
							</tr>
						</thead>
						<tbody>
							@if(json_decode($bill->drug_break_down) < 0)
							<b>	No Drugs Prescribed</b>
							@endif

							@foreach(json_decode($bill->drug_break_down) as $t)
							<tr scope="row">
								<th scope="col"> {{$t->drug_name}} - {{$t->dosage_form}}  - {{$t->strengths}}  - {{$t->presentation}}</th>
								<th scope="col">{{$t->amount}}</th>
							</tr>
							@endforeach
						</tbody>
					</table>
					<br><br>

					<div class="row">
						<div class="col-lg-6 payment-icons">
							<p class="lead">Payment Description:</p>
							<p class="text-muted bg-light p-2 mt-3 border rounded">
								{{$bill->description}}
							</p>

							<p class="text-muted bg-light p-2 mt-3 border rounded">
								HCP claim Status: {{$bill->hcp_operator_id ? "approve" : "pending"}} <br>
								HMO claim Status: {{$bill->hmo_operator_id ? "approve" : "pending"}} <br>
							</p>

							<!-- <p class="text-muted bg-light p-2 mt-3 border rounded">
								Bill Status: {{$bill->hmo_operator_id ? "approve" : "pending"}}
							</p> -->


						</div>
						<div class="col-lg-6">
							<p class="lead">Amount Due </p>
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<th style="width:50%">Subtotal:</th>
											<td>N {{$bill->final_payment}}</td>
										</tr>
										<tr>
											<th>Total:</th>
											<td>N {{$bill->final_payment}}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<!-- <div class="card-body">
						<table class="table">
							<thead>
								<tr class="row">
									<th class="col-md-12"><h5>HCP Description</h5></th>
								</tr>
							</thead>
							<tbody>
								<tr scope="row">
									<th scope="col">Date of Bill<br>{{$bill->created_at}}</th>
									<th scope="col">Bill Description<br>{{$bill->created_at}}</th>
									<th scope="col">HCP Amount Charged<br>N {{$bill->amount_charged ? $bill->amount_charged : 'Not Available'}}</th>
								</tr>

								<tr scope="row">
									<th scope="col">Enrollee Amount Paid<br>N {{$bill->amount_paid ? $bill->amount_paid : 'Not Available'}}</th>
									<th scope="col">HCP Charged Deductions<br>N {{$bill->hcp_deduction ? $bill->hcp_deduction : 'Not Available'}}</th>
									<th scope="col">Tariff Deductions<br>N{{$bill->tariff_deduction ? $bill->tariff_deduction : 'Not concluded'}}</th>
								</tr>
							</tbody>
						</table><br>
						<table>
							<tbody>
						        <tr class="row">
						        	<th class="col-md-12"><h5>HMO Operation Activity </h5></th>
						        	<th class="col-md-4">Remarks <br> </th>
						        	<th class="col-md-4">Action <br> </th>
						        	<th class="col-md-4">Disbursment <br> </th>
						        </tr>
						    </tbody>
						</table>

						
					</div> -->

					<!-- this row will not appear when printing -->
					<hr>
					<div class="row no-print">
						<div class="col-lg-3">
							<a href="javascript:window.print();" target="_blank" class="btn btn-outline-secondary m-1"><i class="fa fa-print"></i> Print</a>
						</div>
						<div class="col-lg-9">
							<div class="float-sm-right">
								<button class="btn btn-success m-1"><i class="fa fa-credit-card"></i> Submit Payment</button>
								<button class="btn btn-primary m-1"><i class="fa fa-download"></i>Disbursed</button>
								<button class="btn btn-danger m-1"><i class="fa fa-error"></i>Rejected</button>
								<button class="btn btn-primary m-1"><i class="fa fa-download"></i> Generate PDF</button>
							</div>
						</div>
					</div>
				</section>
				<!-- /.content -->

				
				
				

				<!-- <div class="form-group row">
					<div class="col-sm-10">
						<a href="" type="submit" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i> Edit Medical Bill Details</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>
@endsection