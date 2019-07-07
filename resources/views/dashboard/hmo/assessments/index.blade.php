@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">All HCP Assessments in {{auth()->user()->userable->hmo_name}}</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Bionic</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"> All HCP Assessments in {{auth()->user()->userable->hmo_name}}</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right">
	    <a href="{{route('assessments.create')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Create</button></a>
	  </div>
	</div>
</div>
<!-- End Breadcrumb-->

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> All HCP Assessments in {{auth()->user()->userable->hmo_name}}
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>HCP Code/ Name</th>
                <th>Remarks</th>
                <th>Period</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($assessments as $assessment)
              <tr>
                <td>{{$assessment->hcp->hcp_code}} - {{$assessment->hcp->hcp_name}}</td>
                <td>{{$assessment->remark}}</td>
                <td>{{$assessment->created_at->format('M') }}, {{ $assessment->created_at->format('Y') }}</td>
                <td>
					<a href="{{route('assessments.edit', $assessment->id)}}" class="btn btn-dark btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-edit"></i></a>
		            <a href="{{route('assessments.show', $assessment->id)}}" class="btn btn-warning btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-eye"></i></a>
	                <a href="{{route('assessments.delete', $assessment->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>HCP Code/ Name</th>
                <th>Remarks</th>
                <th>Period</th>
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