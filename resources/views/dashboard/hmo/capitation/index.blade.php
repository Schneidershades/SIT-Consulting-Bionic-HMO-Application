@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
      <h4 class="page-title">Capitations</h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Capitations</li>
     </ol>
    </div>
  <div class="col-sm-3">
     <div class="btn-group float-sm-right">
      <a href="{{route('capitations.index')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
    </div>
  </div>
</div>
<!-- End Breadcrumb-->

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> Capitations in {{auth()->user()->userable->hmo_name}}
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>HCP Code</th>
                <th>Name</th>
                <th>No of Lives</th>
                <th>Capitation</th>
                <th>Remittance</th>
                <th>Period</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($capitations as $capitation)
              <tr>
                <td>{{$capitation->hcp->hcp_code}}</td>
                <td>{{$capitation->hcp->hcp_name}}</td>
                <td>{{$capitation->lives}}</td>
                <td>N {{$capitation->capitation_rate}}</td>
                <td>N {{$capitation->remittance}} </td>
                <td>{{$capitation->month}} {{$capitation->year}} </td>
                <td>{{$capitation->disbursment}} </td>
                <td>
                  @if($capitation->disbursment == 'initiated')
                  <a href="{{route('capitations.process', $capitation->id)}}" class="btn btn-success btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-check"></i></a>
                  <a href="{{route('capitations.decline', $capitation->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-times"></i></a>
					        <!-- <a href="{{route('capitations.edit', $capitation->id)}}" class="btn btn-dark btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-edit"></i></a> -->
		              <!-- <a href="{{route('capitations.show', $capitation->id)}}" class="btn btn-warning btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-eye"></i></a> -->
	                <!-- <a href="{{route('capitations.delete', $capitation->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-trash"></i></a> -->
                  @elseif($capitation->disbursment == 'declined')
                    <button class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-times"></i></button>
                  @elseif($capitation->disbursment == 'processing')
                    <button class="btn btn-success btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-check"></i></button>
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>HCP Code</th>
                <th>Name</th>
                <th>No of Lives</th>
                <th>Capitation</th>
                <th>Amount</th>
                <th>Period</th>
                <th>Status</th>
                <th>Action</th>
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