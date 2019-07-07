@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">All Health Care Drugs</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Bionic</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"> All Health Care Drugs</li>
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
            <h4 class="text-white">{{$drugs->count()}}</h4>
            <span class="text-white">Drugs</span>
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
      <div class="card-header"><i class="fa fa-table"></i> All Health Care Drugs
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($drugs as $drug)
              <tr>
                <td>{{$drug->drug_name}} - {{$drug->dosage_form}}  - {{$drug->strengths}}  - {{$drug->presentation}}</td>
                <td>
                  <a href="{{route('hmo-drugs.delete', $drug->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
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

  <script src="{{ URL::to('assets/js/responsive.bootstrap4.min.js')}}"></script>
 <script type="text/javascript">
        $.extend($.fn.dataTable.defaults, {
          rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true

        });       
    </script>

@endsection


@section('stylesheets')

@include('dashboard.partials._datatablescss')
@endsection