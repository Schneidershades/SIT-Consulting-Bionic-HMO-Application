@extends('dashboard.layouts.layouts')

@section('content')
      <div class="row mt-4">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-purpink">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white">N6,594,930</h4>
                <span class="text-white">This Month Disbursement</span>
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
                <h4 class="text-white">Bills</h4>
                <span class="text-white">1,132</span>
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
                <h4 class="text-white">849</h4>
                <span class="text-white">Vetted Bills</span>
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
                <h4 class="text-white">324</h4>
                <span class="text-white">HCP tariffs Approved</span>
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
                <h4 class="text-white">179</h4>
                <span class="text-white">Encounters</span>
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
                <h4 class="text-white">183</h4>
                <span class="text-white">Claims</span>
              </div>
              <div class="align-self-center"><span id="dash-chart-4"></span></div>
            </div>
            </div>
          </div>
        </div>

      </div><!--End Row-->

    

      <div class="row">
         <div class="col-12 col-lg-6 col-xl-6">
        
      <div class="card">
        <div class="card-header border-0">HCP Users Visits
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
           <div class="table-responsive">
            <table class="table align-items-center table-flush">
           <thead>
            <tr>
              <th>Date </th>
              <th>Staff</th>
            </tr>
            </thead>
            <tr>
              <td> 15 January</td>
              <td>Dr. Richard Ogele</td>
            </tr>
            <tr>
              <td>  15 January</td>
              <td>Dr Mustapha Ahmed</td>
            </tr>
            <tr>
              <td> 15 January</td>
              <td>Dr. Jola Katherine</td>
            </tr>
            <tr>
              <td>  15 January</td>
              <td>Dr. Bisola Samuel</td>
            </tr>
            <tr>
              <td> 15 January</td>
              <td>Dr. Okon Offor</td>
            </tr>
            <tr>
              <td>  15 January</td>
              <td>Dr Somi Oluwatofunmi</td>
            </tr>
          </table>
        
         </div>
      </div>  
      
          <!-- <div class="card gradient-orange">
            <div class="card-body">
              <div class="media">
               <div class="align-self-center"><span id="dash-chart-15"></span></div>
              <div class="media-body text-right">
                <h4 class="text-white">82.56 %</h4>
                <span class="text-white">Bounce Rate</span>
              </div>
            </div>
            </div>
          </div> -->

         </div>
      </div><!--End Row-->
    
    <!-- <div class="card-group">
       <div class="card border-right">
          <div class="card-header">
              Sales This Week
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
            <canvas id="dash-chart-16" height="180"></canvas>
          </div>
          <ul class="list-group list-group-flush list shadow-none">
            <li class="list-group-item d-flex justify-content-between align-items-center">Drips <span class="badge gradient-purpink text-white badge-pill shadow">50</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Apple <span class="badge gradient-orange
             text-white badge-pill shadow">50</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Nokia <span class="badge gradient-meridian text-white badge-pill">50</span></li>
          </ul>
        </div>
    <div class="card border-right">
          <div class="card-header">
              Profit Ratio
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
            <canvas id="dash-chart-17" height="180"></canvas>
          </div>
          <ul class="list-group list-group-flush list shadow-none">
            <li class="list-group-item d-flex justify-content-between align-items-center">Gross Profit <span class="badge gradient-quepal text-white badge-pill shadow">05</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Revenue <span class="badge gradient-violet
             text-white badge-pill shadow">08</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Expense <span class="badge gradient-ibiza text-white badge-pill shadow">07</span></li>
          </ul>
        </div>
    <div class="card">
          <div class="card-header">
              Trending Products
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
            <canvas id="dash-chart-18" height="180"></canvas>
          </div>
          <ul class="list-group list-group-flush list shadow-none">
            <li class="list-group-item d-flex justify-content-between align-items-center">Jeans <span class="badge gradient-knight text-white badge-pill shadow">25</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">T-Shirts <span class="badge gradient-dusk
             text-white badge-pill shadow">25</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Shoes <span class="badge gradient-yoda text-white badge-pill shadow">25</span></li>
          </ul>
        </div>
    </div> -->
    

@endsection