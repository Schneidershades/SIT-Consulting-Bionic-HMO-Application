@extends('layouts.dashboard')

@section('content')
<div class="row mt-4">
  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card gradient-purpink">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">1</h4>
            <span class="text-white">HMO</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-1"></span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card gradient-scooter">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">99</h4>
            <span class="text-white">Enrollee</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-2"></span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card gradient-ibiza">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">56,333</h4>
            <span class="text-white">Month Bills</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-3"></span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card gradient-ohhappiness">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">48,500</h4>
            <span class="text-white">Month Claims</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-4"></span></div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card gradient-ohhappiness">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">2,854</h4>
            <span class="text-white">Referrals</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-4"></span></div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card bg-dark">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">970</h4>
            <span class="text-white">tariffs</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-4"></span></div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card" style="background-color: purple">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">2,000</h4>
            <span class="text-white">Month Assessment</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-4"></span></div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card" style="background-color: green">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">4,284</h4>
            <span class="text-white">Capitation</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-4"></span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card" style="background-color: orange">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">580</h4>
            <span class="text-white">Pending Capitation</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-4"></span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-3">
    <div class="card" style="background-color: red">
      <div class="card-body">
        <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">58,000</h4>
            <span class="text-white">Reports</span>
          </div>
          <div class="align-self-center"><span id="dash-chart-4"></span></div>
        </div>
      </div>
    </div>
  </div>
</div><!--End Row-->


<div class="row">
  <div class="col-12 col-lg-12 col-xl-12">
    <div class="card">
     <div class="card-header">
      Account
      <div class="card-action">
       <div class="dropdown">
         <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
          <i class="icon-options"></i>
        </a>
        <div class="dropdown-menu animated fadeIn dropdown-menu-right">
          <a class="dropdown-item" href="javascript:void();">Action</a>
          <a class="dropdown-item" href="javascript:void();">Another action</a>
          <a class="dropdown-item" href="javascript:void();">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void();">Separated link</a>
        </div>
      </div>
    </div>
  </div>

  <div class="card-body">
   <canvas id="dash-chart-5" height="100"></canvas>
   <div class="row">
    <div class="col-12">
      <div class="card bg-transparent shadow-none mb-0">
        <div class="card-content">
          <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="card-body text-center">
                <h4 class="text-danger">N753,790,400</h4>
                <span>This Month Enrollees Subscription </span>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="card-body text-center">
                <h4 class="text-warning">N642,390,400</h4>
                <span>HCP Disbursment</span>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="card-body text-center">
                <h4 class="text-success">6700</h4>
                <span>This Month Disbursment File</span>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="card-body text-center">
                <h4 class="text-info">N5,624,000</h4>
                <span>This Month New Enrollee Subscription</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--End Row-->
</div>
</div>
</div>
</div>
<!--End Row-->



<div class="row">


  <div class="col-12 col-lg-12 col-xl-12">

    <div class="card">
      <div class="card-header border-0">HCP Login and Authorization
       <div class="card-action">
         <div class="dropdown">
           <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
            <i class="icon-options"></i>
          </a>
          <div class="dropdown-menu animated fadeIn dropdown-menu-right">
            <a class="dropdown-item" href="javascript:void();">Action</a>
            <a class="dropdown-item" href="javascript:void();">Another action</a>
            <a class="dropdown-item" href="javascript:void();">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void();">Separated link</a>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="table-responsive">
      <table class="table align-items-center table-flush">
       <thead>
        <tr>
          <th>Source</th>
          <th>Path</th>
          <th>Visits</th>
        </tr>
      </thead>
      <tr>
        <td>General Hospital Garki </td>
        <td>url/Bills</td>
        <td>45 <span class="ml-3" id="dash-chart-8"></span></td>
      </tr>
      <tr>
        <td>Sauki Hospital </td>
        <td>url/Bills</td>
        <td>56 <span class="ml-3" id="dash-chart-9"></span></td>
      </tr>
      <tr>
        <td>General Hospital Jos</td>
        <td>url/Bills</td>
        <td>42 <span class="ml-3" id="dash-chart-10"></span></td>
      </tr>
      <tr>
        <td> General Hospital Garki </td>
        <td>url/Claims</td>
        <td>52 <span class="ml-3" id="dash-chart-11"></span></td>
      </tr>
      <tr>
        <td> General Hospital Gwagwalada</td>
        <td>url/Bills</td>
        <td>62 <span class="ml-3" id="dash-chart-12"></span></td>
      </tr>
      <tr>
        <td> Saint Monica Hospital</td>
        <td>url/Bills</td>
        <td>72 <span class="ml-3" id="dash-chart-13"></span></td>
      </tr>
      <tr>
        <td> Limi Hospital</td>
        <td>url/Bills</td>
        <td>33 <span class="ml-3" id="dash-chart-14"></span></td>
      </tr>
    </table>

  </div> -->
</div>  

<div class="card gradient-orange">
  <div class="card-body">
    <div class="media">
     <div class="align-self-center"><span id="dash-chart-15"></span></div>
     <div class="media-body text-right">
      <h4 class="text-white">82.56 %</h4>
      <span class="text-white">Bounce Rate</span>
    </div>
  </div>
</div>
</div>

</div>
</div><!--End Row-->



@endsection