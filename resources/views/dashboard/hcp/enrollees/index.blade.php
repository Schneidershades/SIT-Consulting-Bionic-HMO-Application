@extends('dashboard.layouts.layouts')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">Enrollees Transfers</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Enrollees Transfers to {{auth()->user()->userable->hcp_name}}</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Enrollees Transfers</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right">
	    <a href="{{route('home')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
	  </div>
	</div>
</div>

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card gradient-purpink">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{$enrollees->count()}}</h4>
            <span class="text-white">Enrollees</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-1"></span></div>
        </div>
      </div>
    </div>
  </div>
</div><!--End Row-->


<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> All Enrollees 
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>Code</th>
                <th>Name</th>
                <th>HMO</th>
              </tr>
            </thead>
            <tbody>
              @foreach($enrollees as $enrollee)
              <tr>
                <td>{{$enrollee->identifier}}</td>
                <td><span class="btn btn-primary m-1">{{$enrollee->first_name}} {{$enrollee->middle_name}} {{$enrollee->last_name}}</span></td>
                <td><span class="btn btn-success m-1">{{$enrollee->hmo->hmo_name}}</span></td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Code</th>
                <th>Name</th>
                <th>HMO</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Row-->



@endsection


@section('scripts')

@include('dashboard.partials._datatablesjs')

@endsection


@section('stylesheets')

@include('dashboard.partials._datatablescss')
@endsection