@extends('dashboard.layouts.layouts')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">All Health Care diseases</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Bionic</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"> All Health Care diseases</li>
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
            <h4 class="text-white">{{$diseases->count()}}</h4>
            <span class="text-white">diseases</span>
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
      <div class="card-header"><i class="fa fa-table"></i> All Health Care diseases
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>Code</th>
                <th>Category</th>
                <th>Title</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($diseases as $disease)
              <tr>
                <td>{{$disease->disease_code}}</td>
                <td>{{$disease->parent->description ?? 'None'}}</td>
                <td>{{$disease->description}}</td>
                <td>
                  <a href="{{route('hmo-disease-classes.delete', $disease->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Code</th>
                <th>Category</th>
                <th>Title</th>
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