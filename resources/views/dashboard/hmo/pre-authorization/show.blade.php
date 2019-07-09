@extends('layouts.dashboard')



@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title"> Pre-Authorization Details in {{auth()->user()->userable->hmo_name}}</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Bionic</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"> Pre-Authorization Details in {{auth()->user()->userable->hmo_name}}</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right">
	    <a href="{{route('hcps.index')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
	  </div>
	</div>
</div>
<!-- End Breadcrumb-->



@endsection
