<!-- Start wrapper-->
<div id="wrapper">

  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
   <div class="brand-logo">
    <a href="{{route('home')}}">
     <img src="{{URL::to('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
     <h5 class="logo-text"> HMO</h5>
   </a>

 </div>
<div class="user-details">
 <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
   <div class="avatar">
    <img class="mr-3 side-user-img" src="{{ URL::to('assets/images/avatars/avatar-4.png')}}" alt="user avatar">
  </div>
  <div class="media-body">
    <h6 class="side-user-name">{{auth()->user()->name}}</h6>
  </div>
</div>
<div id="user-dropdown" class="collapse">
  <ul class="user-setting-menu">
    <!-- <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
    <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li> -->
    <li>
      <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="fa fa-book"></i>{{ __('Logout') }}
      </a>
    </li>
  </ul>
</div>
</div>
<ul class="sidebar-menu do-nicescrol">
  <li class="sidebar-header">MAIN NAVIGATION</li>
  <li>
    <a href="javaScript:void();" class="waves-effect">
      <i class="icon-handbag"></i><span>Health Care Plans</span> 
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="{{route('plans.index')}}"><i class="fa fa-long-arrow-right"></i> View HMO Plans</a></li>
      <li><a href="{{route('plans.create')}}"><i class="fa fa-long-arrow-right"></i> Add HMO Plan</a></li>
    </ul>
  </li>
  <li>
    <a href="/home" class="waves-effect">
      <i class="icon-home"></i><span>HCPs</span><i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="{{route('hcps.index')}}"><i class="fa fa-long-arrow-right"></i> View HCPs </a></li>
      <li><a href="{{route('hcps.create')}}"><i class="fa fa-long-arrow-right"></i> Add HCP </a></li>
    </ul>
  </li>
  <li>
    <a href="javaScript:void();" class="waves-effect">
      <i class="icon-handbag"></i><span>Agreements</span> 
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="{{route('agreements.index')}}"><i class="fa fa-long-arrow-right"></i> View Agreements</a></li>
      <li><a href="{{route('agreements.create')}}"><i class="fa fa-long-arrow-right"></i> Setup Agreements</a></li>
    </ul>
  </li>
  <li>
    <a href="javaScript:void();" class="waves-effect">
      <i class="icon-handbag"></i><span>Enrollees</span> 
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="{{route('enrollees.index')}}"><i class="fa fa-long-arrow-right"></i> View Enrollee</a></li>
      <li><a href="{{route('enrollees.create')}}"><i class="fa fa-long-arrow-right"></i> Add Enrollee</a></li>
      <li><a href="3"><i class="fa fa-long-arrow-right"></i> Change HCP Requests</a></li>
      <li><a href="3"><i class="fa fa-long-arrow-right"></i> Encounter Alerts</a></li>
      <li><a href="3"><i class="fa fa-long-arrow-right"></i> Change HCP</a></li>
    </ul>
  </li>
  <li>
    <a href="javaScript:void();" class="waves-effect">
      <i class="icon-handbag"></i><span>Bills</span> 
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="{{route('bills.index')}}"><i class="fa fa-long-arrow-right"></i> View Bills/Fee-for-Service</a></li>
      <li><a href="{{route('bills.start')}}"><i class="fa fa-long-arrow-right"></i> Add Bills/Fee-for-Service</a></li>
    </ul>
  </li>

  <li>
    <a href="javaScript:void();" class="waves-effect">
      <i class="icon-handbag"></i><span>Pre Authorization</span> 
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="{{route('pre-authorization.index')}}"><i class="fa fa-long-arrow-right"></i> View Request</a></li>
    </ul>
  </li>

  <li>
    <a href="javaScript:void();" class="waves-effect">
     <i class="icon-diamond"></i><span>Claims</span>
     <i class="fa fa-angle-left pull-right"></i>
   </a>
   <ul class="sidebar-submenu">
    <li><a href="{{route('claims.index')}}"><i class="fa fa-long-arrow-right"></i> View Claims</a></li>
  </ul>
</li>

<li>
  <a href="javaScript:void();" class="waves-effect">
    <i class="icon-grid"></i><span>Assessments</span>
    <i class="fa fa-angle-left float-right"></i>
  </a>
  <ul class="sidebar-submenu">
    <li><a href="{{route('assessments.index')}}"><i class="fa fa-long-arrow-right"></i> View Assessments</a></li>
    <li><a href="{{route('assessments.create')}}"><i class="fa fa-long-arrow-right"></i> Add Assessments</a></li>
  </ul>
</li>


<li>
  <a href="javaScript:void();" class="waves-effect">
    <i class="icon-envelope-letter"></i><span>Encounters</span>
    <small class="badge float-right badge-warning">12</small>
  </a>
  <ul class="sidebar-submenu">
    <li><a href="{{route('encounters.index')}}"><i class="fa fa-long-arrow-right"></i> View Encounters</a></li>
    <li><a href="{{route('encounters.create')}}"><i class="fa fa-long-arrow-right"></i> Add Encounter</a></li>
  </ul>
</li>

<li>
  <a href="javaScript:void();" class="waves-effect">
    <i class="icon-folder-alt"></i><span>Capitation</span>
    <i class="fa fa-angle-left float-right"></i>
  </a>
  <ul class="sidebar-submenu">
    <li><a href="{{route('capitations.index')}}"><i class="fa fa-long-arrow-right"></i>Capitation Disbursment List</a></li>
    <li><a href="{{route('capitations.raise.start')}}"><i class="fa fa-long-arrow-right"></i> Raise Capitation </a></li>
  </ul>
</li>


<li class="sidebar-header">Services & Products</li>
<li>
  <a href="javaScript:void();" class="waves-effect">
   <i class="icon-diamond"></i><span>tariffs</span>
   <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="sidebar-submenu">
    <li><a href="{{route('hmo-tariffs.create')}}"><i class="fa fa-long-arrow-right"></i> Create tariffs</a></li>
    <li><a href="{{route('hmo-tariffs.index')}}"><i class="fa fa-long-arrow-right"></i>All System tariffs </a></li>
  </ul>
</li>
<li>
  <a href="javaScript:void();" class="waves-effect">
   <i class="icon-diamond"></i><span>Drugs</span>
   <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="sidebar-submenu">
    <li><a href="{{route('hmo-drugs.create')}}"><i class="fa fa-long-arrow-right"></i> Create Drugs</a></li>
    <li><a href="{{route('hmo-drugs.index')}}"><i class="fa fa-long-arrow-right"></i>All System Drugs </a></li>
  </ul>
</li>


<li class="sidebar-header">Money Transfer</li>
<li>
  <a href="javaScript:void();" class="waves-effect">
   <i class="icon-diamond"></i><span>Payment Transfer</span>
   <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="sidebar-submenu">
    <li><a href="{{route('payment.create')}}"><i class="fa fa-long-arrow-right"></i> Payment Gateway settings</a></li>
    <!-- <li><a href="payment-history"><i class="fa fa-long-arrow-right"></i> Payment History</a></li> -->
  </ul>
</li>

<li class="sidebar-header">HMO Office</li>
<li>
  <a href="javaScript:void();" class="waves-effect">
   <i class="icon-diamond"></i><span>Staff</span>
   <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="sidebar-submenu">
    <li><a href="{{route('staff.index')}}"><i class="fa fa-long-arrow-right"></i> View Staff</a></li>
    <li><a href="{{route('staff.create')}}"><i class="fa fa-long-arrow-right"></i> Add New</a></li>
  </ul>
</li>

<li>
  <a href="javaScript:void();" class="waves-effect">
   <i class="icon-folder-alt"></i><span>Cash Book</span>
   <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="sidebar-submenu">
    <li><a href="{{route('cash.index')}}"><i class="fa fa-long-arrow-right"></i> View Cash Entry</a></li>
    <li><a href="{{route('cash.create')}}"><i class="fa fa-long-arrow-right"></i> Add Cash Entry</a></li>
  </ul>
</li>


<li>
  <a href="javaScript:void();" class="waves-effect">
   <i class="icon-folder-alt"></i><span>User Account</span>
   <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="sidebar-submenu">
    <li><a href="{{route('users.index')}}"><i class="fa fa-long-arrow-right"></i> View Users & Role</a></li>
    <li><a href="{{route('users.create')}}"><i class="fa fa-long-arrow-right"></i>Create User Account</a></li>
  </ul>
</li>

<li class="sidebar-header">LABELS</li>
<li><a href="javaScript:void();" class="waves-effect"><i class="icon-cloud-upload text-danger"></i><span>Disk Space</span></a></li>
<li><a href="javaScript:void();" class="waves-effect"><i class="icon-hourglass text-warning"></i><span>Server Load</span></a></li>
<li><a href="javaScript:void();" class="waves-effect"><i class="icon-drop text-info"></i><span>Information</span></a></li>
</ul>

</div>
   <!--End sidebar-wrapper-->