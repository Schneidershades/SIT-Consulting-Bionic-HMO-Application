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
    </div>
    <div class="col-sm-3">
        <div class="btn-group float-sm-right">
            <a href="{{route('hcps.index')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
        </div>
    </div>
</div>
<!-- End Breadcrumb-->
<div class="row">
    <div class="col-lg-12 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Pre-Authorization Details {{$transaction->identifier}} </div>
                <hr>
                <div class="form-row">
                    <div class="col-md-3">
                        <label for="input-9">HCP </label><br>
                        <h5>{{$transaction->hcp->hcp_name}}</h5>
                    </div>
                    <div class="col-md-3">
                        <label for="input-9">Enrollee Name</label><br>
                        <h5>{{$transaction->enrollee->first_name}} {{$transaction->enrollee->middle_name}} {{$transaction->enrollee->last_name}}</h5>
                    </div>

                    <div class="col-md-3">
                        <label for="input-9">Service Type </label><br>
                        <h5>{{$transaction->hospitable_type}}</h5>
                    </div>
                    <div class="col-md-3">
                        <label for="input-9">Service Category</label><br>
                        <h5>{{$transaction->service_type}}</h5>
                    </div>

                    <div class="col-md-3">
                        <label for="input-9">Service Name</label><br>
                        <h5>{{$transaction->hospitable->getTitle()}}</h5>
                    </div>

                    <div class="col-md-3">
                        <label for="input-9">Amount </label><br>
                        <h5>N {{$transaction->hospitable->amount}}</h5>
                    </div>
                    <div class="col-md-3">
                        <label for="input-9">Transaction status</label><br>
                        <h5>{{$transaction->status}}</h5>
                    </div>
                </div>
                <br><br>	
            </div>
        </div>
    </div>
</div>
@endsection