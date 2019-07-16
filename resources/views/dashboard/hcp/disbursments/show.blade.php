@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">Disbursment for  {{$disbursment->hcp->hcp_name}}</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hcp_name}}</a></li>
      <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"> Disbursment for  {{$disbursment->hcp->hcp_name}}</li>
    </ol>
  </div>
  <div class="col-sm-3">
    <div class="btn-group float-sm-right">
      <a href="{{route('disbursments.index')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
    </div>
  </div>
</div>
<!-- End Breadcrumb-->


<div class="row">
  <div class="col-lg-12 mx-auto">
    <div class="card">
      <div class="card-body">
        <div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i>Disbursment for  {{$disbursment->hcp->hcp_name}} </div>
        <hr>
      
      </div>
    </div>
  </div>
</div>
@endsection