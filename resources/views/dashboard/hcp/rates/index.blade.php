@extends('dashboard.layouts.layouts')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">All Health Care rates</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Bionic</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"> All Health Care rates</li>
     </ol>
    </div>
</div>
<!-- End Breadcrumb-->

<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card gradient-purpink">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">{{$rates->count()}}</h4>
            <span class="text-white">Rates</span>
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
      <div class="card-header"><i class="fa fa-table"></i> All Health Care rates
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Period</th>
              </tr>
            </thead>
            <tbody>
              @foreach($rates as $rate)
              <tr>
                <td>{{$rate->id}}</td>
                <td><span class="btn btn-primary m-1">{{$rate->name}}</span></td>
                <td><span class="btn btn-success m-1">{{$rate->amount}}</span></td>
                <td>{{$rate->period_applied}}</td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Period</th>
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