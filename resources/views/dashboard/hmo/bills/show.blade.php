@extends('layouts.dashboard')
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


<div class="row myDivToPrint">
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
							From: HCP
							<address>
								<strong>{{$bill->hcp->hcp_name}}</strong><br>
								{{$bill->hcp->hcp_address ? $bill->hcp->hcp_address : 'Not available'}}<br>
								Phone: {{$bill->hcp->hcp_phone ? $bill->hcp->hcp_phone : 'Not available'}}<br>
								Email: {{$bill->hcp->hcp_email ? $bill->hcp->hcp_email : 'Not available'}}
							</address>
						</div><!-- /.col -->
						<div class="col-sm-4 invoice-col">
							To: HMO
							<address>
								<strong>{{$bill->hmo->hmo_name}}</strong><br>
								{{$bill->hmo->hmo_address ? $bill->hmo->hmo_address : 'Not available'}}<br>
								Phone: {{$bill->hmo->hmo_phone ? $bill->hmo->hmo_phone : 'Not available'}}<br>
								Email: {{$bill->hmo->hmo_email ? $bill->hmo->hmo_email : 'Not available'}}
							</address>
						</div><!-- /.col -->
						<div class="col-sm-4 invoice-col">
							Benefactor: Enrollee
							<address>
								<strong>{{$bill->enrollee->first_name}} {{$bill->enrollee->middle_name}} {{$bill->enrollee->last_name}}</strong><br>
								{{$bill->enrollee->address ? $bill->enrollee->address : 'Not available'}}<br>
								Phone: {{$bill->enrollee->phone ? $bill->enrollee->phone : 'Not available'}}<br>
								Email: {{$bill->enrollee->email ? $bill->enrollee->email : 'Not available'}}
							</address>
						</div><!-- /.col -->
					</div><!-- /.row -->
					@if($bill->transactions->count() > 0)
						<table class="table">

							<div><h5>Tariff Breakdown</h5>	</div>
							<thead>
								<tr>
									<th scope="col">Tariff code</th>
									<th scope="col">Description</th>
									<th scope="col">Amount</th>
									<th scope="col">type</th>
									<th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($bill->transactions as $t)
									@if($t->claimable_type == "tariff")
									<tr scope="row">
										<th scope="col">{{$t->claimable->tariff_code}} </th>
										<th scope="col">{{$t->claimable->description}} </th>
										<th scope="col">{{$t->claimable->amount}} </th>
										<th scope="col">{{$t->service_type}} </th>
										<th scope="col">{{$t->status}} </th>
									</tr>
									@endif
								@endforeach
							</tbody>
						</table><br>


						<table class="table">
							<h5>Drug BreakDown</h5>
							<thead>
								<tr>
									<th scope="col">Drug Items</th>
									<th scope="col">Amount</th>
									<th scope="col">Type</th>
									<th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($bill->transactions as $t)
									@if($t->claimable_type == "drug")
										<tr scope="row">
											<th scope="col"> {{$t->claimable->drug_name}} - {{$t->claimable->dosage_form}}  - {{$t->claimable->strengths}}  - {{$t->claimable->presentation}}</th>
											<th scope="col">{{$t->claimable->amount}}</th>
											<th scope="col">{{$t->service_type}}</th>
											<th scope="col">{{$t->status}}</th>
										</tr>
									@endif
								@endforeach
							</tbody>
						</table>
					@endif

					<br><br>

					<div class="row">
						<div class="col-lg-12 payment-icons">
							<p class="lead">Treatment Description:</p>
							<p class="text-muted bg-light p-2 mt-3 border rounded">
								{{$bill->description}}
							</p>
						</div>
						<div class="col-lg-4 payment-icons">

							<p class="lead">HCP Approval Status:</p>
							<p class="text-muted bg-light p-2 mt-3 border rounded">
                      			@foreach ($bill->hcp->showApprovalStatus("verify bills", $bill->hcp_id, "bill", $bill->id) as $role)
								
                      			{{$role->user->name}} -
                      			@if($role->user->hcpSignReport($role->user_id, 'bill', $bill) == 'accepted')
									<span class="badge badge-pill badge-success m-1"><i class="fa fa-check"></i>{{$role->user->hcpSignReport($role->user_id, 'bill', $bill)}}</span>
                      			@elseif($role->user->hcpSignReport($role->user_id, 'bill', $bill) == 'rejected')
									<span class="badge badge-pill badge-danger m-1"><i class="fa fa-times"></i> {{$role->user->hcpSignReport($role->user_id, 'bill', $bill)}}</span>
								@else
									<span class="badge badge-pill badge-warning m-1"><i class="fa fa-eye"></i> {{$role->user->hcpSignReport($role->user_id, 'bill', $bill)}}</span>
                      			@endif<br>
								@endforeach
                      			<br>
								HCP Bill Status: {{$bill->hmo_signature_status}} <br>
							</p>

							<!-- <p class="text-muted bg-light p-2 mt-3 border rounded">
								Bill Status: {{$bill->hmo_operator_id ? "approve" : "pending"}}
							</p> -->
						</div>
						<div class="col-lg-4">
							<p class="lead">HMO Service Status:</p>
							<p class="text-muted bg-light p-2 mt-3 border rounded">
                      			@foreach ($bill->hcp->showApprovalStatus("verify bills", $bill->hcp_id, "bill", $bill->id) as $role)
								
                      			{{$role->user->name}} -
                      			@if($role->user->hcpSignReport($role->user_id, 'bill', $bill) == 'accepted')
									<span class="badge badge-pill badge-success m-1"><i class="fa fa-check"></i>{{$role->user->hcpSignReport($role->user_id, 'bill', $bill)}}</span>
                      			@elseif($role->user->hcpSignReport($role->user_id, 'bill', $bill) == 'rejected')
									<span class="badge badge-pill badge-danger m-1"><i class="fa fa-times"></i> {{$role->user->hcpSignReport($role->user_id, 'bill', $bill)}}</span>
								@else
									<span class="badge badge-pill badge-warning m-1"><i class="fa fa-eye"></i> {{$role->user->hcpSignReport($role->user_id, 'bill', $bill)}}</span>
                      			@endif<br>

								@endforeach 
                      			<br>
								HMO Bill Status: {{$bill->hmo_signature_status}} <br>
							</p>

						</div>
						<div class="col-lg-4">
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
					<!-- this row will not appear when printing -->
					<hr>
					<div class="row no-print">
						<div class="col-lg-3">
							<a href="javascript:window.print();" target="_blank" class="btn btn-outline-secondary m-1"><i class="fa fa-print"></i> Print</a>
						</div>
						<div class="col-lg-9">
							<div class="float-sm-right">
								<button class="btn btn-success m-1"><i class="fa fa-credit-card"></i> Submit Payment</button>
								<button class="btn btn-primary m-1"><i class="fa fa-download"></i>Approve</button>
								<button class="btn btn-danger m-1"><i class="fa fa-error"></i>Rejected</button>
								<button class="btn btn-primary m-1"><i class="fa fa-download"></i> Generate PDF</button>
							</div>
						</div>
					</div>
				</section>
				<!-- /.content -->
			</div>
		</div>
	</div>
</div>
@endsection