@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
	<div class="col-sm-9">
		<h4 class="page-title">Create Enrollee</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javaScript:void();">DashRock</a></li>
			<li class="breadcrumb-item active" aria-current="page">Create Enrollee</li>
		</ol>
	</div>
	<div class="col-sm-3">
		<div class="btn-group float-sm-right">
			<button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
			<button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<div class="dropdown-menu">
				<a href="javaScript:void();" class="dropdown-item">Action</a>
				<a href="javaScript:void();" class="dropdown-item">Another action</a>
				<a href="javaScript:void();" class="dropdown-item">Something else here</a>
				<div class="dropdown-divider"></div>
				<a href="javaScript:void();" class="dropdown-item">Separated link</a>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumb-->
@endsection