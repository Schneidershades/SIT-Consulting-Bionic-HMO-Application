@extends('dashboard.layouts.layouts')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">Assessment for {{$assessment->hcp->hcp_name}} - {{$assessment->created_at}}</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Assessment for {{$assessment->hcp->hcp_name}} - {{$assessment->created_at}}</li>
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
	<div class="col-lg-12 mx-auto">
		<div class="card">
			<div class="card-body">
				<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i>  {{$assessment->hcp->hcp_name}} Details</div>
				<hr>
				<div class="form-row">
					<div class="col-md-6">
	              		<label for="input-9">HCP Code</label><br>
	              		<h5>{{$assessment->hcp->hcp_code}} - {{$assessment->hcp->hcp_name}}</h5>
					</div>

					<div class="col-md-4">
	              		<label for="input-9">Hcp Remarks</label><br>
	              		<h5>{{$assessment->remark}}</h5>
					</div>

					<div class="col-md-6">
	              		<label for="input-9">HCP Recommendation</label><br>
	              		<h5>{{$assessment->recommendation ? $assessment->recommendation : 'Not Available'}}</h5>
					</div>

					<div class="col-md-6">
	              		<label for="input-9">Date </label><br>
	              		<h5>{{$assessment->created_at->format('M') }}, {{ $assessment->created_at->format('Y') }}</h5>
					</div>

				</div>


				<div class="form-group row">
					<div class="col-sm-10">
						<a href="" type="submit" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i> Edit HCP Assessment Details</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection