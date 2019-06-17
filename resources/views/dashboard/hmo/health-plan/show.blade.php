@extends('dashboard.layouts.layouts')

@section('content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
	<div class="col-sm-9">
		<h4 class="page-title">Show {{$plan->plan}}</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javaScript:void();">DashRock</a></li>
			<li class="breadcrumb-item active" aria-current="page">Show {{$plan->plan}} Details</li>
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
				<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> {{$plan->plan}} Details</div>
				<hr>
				<div class="form-row">
					<div class="col-md-6">
	              		<label for="input-9">Health Care Plan</label><br>
	              		<b>{{$plan->parent->plan}} - {{$plan->plan}}</b>
					</div>

					<div class="col-md-6">
	              		<label for="input-9">Amount</label><br>
	              		<b>N {{$plan->amount}}</b>
					</div>

				</div><br><br>	

				<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Health Care Benefits</div>
				<hr>
				
				<div class="form-row">
					<div class="col-md-6">
	              		<label for="input-9">Add More Benefits</label><br>
	              		<b>N {{$plan->amount}}</b>
					</div>

					<div class="col-md-6">
	              		<label for="input-9">Benefits</label><br>
		              	@if($plan->benefits->count() > 0)
							@foreach($plan->benefits as $benefit)
							<div class="form-group col-md-3" data-repeater-item>
			              		<li>{{$benefit->benefit}}</li>
							</div>
							@endforeach
						@else
							<div class="form-group col-md-3" data-repeater-item>
			              		<h5>No Benefits Available</h5>
							</div>
						@endif
					</div>
				</div><br><br>	
              	
				<br><br>

				<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Health Care Plan Coverage</div>
				<hr>

              	 <div class="table-responsive">
		          <table id="example" class="table table-bordered">
		            <thead>
		              <tr>
		                <th scope="col">Type</th>
		                <th scope="col">tariff Item</th>
		                <th scope="col">Occurence</th>
		                <th scope="col">Action</th>
		              </tr>
		            </thead>
		            <tbody>
		              @foreach($plan->tariffs as $t)
		              <tr scope="row">
		                <th scope="col">Tariffs</th>
		                <th scope="col">{{$t->getTitle()}}</th>
		                <th scope="col">{{$t->times_in_a_month ? $t->times_in_a_month : 0}} </th>
		                <th scope="col"><a href="{{route('healthPlanService.delete', $t->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-trash"></i></a></th>
		              </tr>
		              @endforeach

		              @foreach($plan->drugs as $t)
		              <tr scope="row">
		                <th scope="col">Drugs</th>
		                <th scope="col">{{$t->getTitle()}}</th>
		                <th scope="col">{{$t->times_in_a_month ? $t->times_in_a_month : 0}}</th>
		                <th scope="col"><a href="{{route('healthPlanService.delete', $t->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-trash"></i></a></th>
		              </tr>
		              @endforeach
		            </tbody>
		            <tfoot>
		              <tr>
		                <th scope="col">Type</th>
		                <th scope="col">tariff Item</th>
		                <th scope="col">Occurence</th>
		                <th scope="col">Action</th>
		              </tr>
		            </tfoot>
		          </table>
		        </div>
				<br><br>

				<div class="form-group row">
					<div class="col-sm-10">
						<a href="{{route('plans.edit', $plan->id)}}" type="submit" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i> Edit Health Care Plan Details</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


@section('scripts')

@include('dashboard.partials._datatablesjs')

@endsection


@section('stylesheets')

@include('dashboard.partials._datatablescss')
@endsection