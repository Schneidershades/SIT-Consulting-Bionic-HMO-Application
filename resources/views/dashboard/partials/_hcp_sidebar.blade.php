<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
 <div class="brand-logo">
  <a href="{{route('home')}}">
   <img src="{{URL::to('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
     <h5 class="logo-text"> HCP </h5>
 </a>
</div>
<div class="user-details">
 <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
   <div class="avatar">
    <img class="mr-3 side-user-img" src="{{ URL::to('assets/images/avatars/avatar-1.png')}}" alt="user avatar">
  </div>
  <div class="media-body">
    <h6 class="side-user-name">HCP Admin</h6>
  </div>
</div>
<div id="user-dropdown" class="collapse">
  <ul class="user-setting-menu">
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
     <a href="{{route('home')}}" class="waves-effect">
     <i class="icon-home"></i> <span>Dashboard</span> 
     </a>
  </li>
  <li>
     <a href="{{route('hcp-hmos.index')}}" class="waves-effect">
     <i class="icon-home"></i> <span>My HMOs</span> 
     </a>
  </li>
  <li>
    <a href="javaScript:void();" class="waves-effect">
      <i class="icon-home"></i><span>Enrollees</span><i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="{{route('hcp-enrollees.index')}}"><i class="fa fa-long-arrow-right"></i> My Enrollees </a></li>
      <li><a href="{{route('hcp.enrollees.incoming.transfers')}}"><i class="fa fa-long-arrow-right"></i> Incoming Requests </a></li>
      <li><a href="{{route('hcp.enrollees.outgoing.transfers')}}"><i class="fa fa-long-arrow-right"></i> Outgoing Requests </a></li>
    </ul>
  </li>
  <li>
    <a href="javaScript:void();" class="waves-effect">
      <i class="icon-handbag"></i><span>Bills</span> 
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="{{route('hcp-enrollee-bills.start')}}"><i class="fa fa-long-arrow-right"></i> Submit Bills</a></li>
      <li><a href="{{route('hcp-enrollee-bills.index')}}"><i class="fa fa-long-arrow-right"></i> View Bills</a></li>
    </ul>
  </li>

  <li>
    <a href="javaScript:void();" class="waves-effect">
      <i class="icon-diamond"></i><span>Claims </span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="{{route('hcp-claims.index')}}"><i class="fa fa-long-arrow-right"></i> All Claims</a></li>
    </ul>
  </li>

  <li>
     <a href="javaScript:void();" class="waves-effect">
     <i class="icon-docs"></i><span>Pre Authorization</span> 
     <i class="fa fa-angle-left pull-right"></i>
     </a>
     <ul class="sidebar-submenu">
        <li><a href="{{route('pre-authorization.index')}}"><i class="fa fa-long-arrow-right"></i> View Request</a></li>
     </ul>
  </li>


  <li>
    <a href="javaScript:void();" class="waves-effect">
     <i class="icon-diamond"></i><span>HCP Encounters </span>
     <i class="fa fa-angle-left pull-right"></i>
   </a>
   <ul class="sidebar-submenu">
    <li><a href="{{route('hcp-encounters.index')}}"><i class="fa fa-long-arrow-right"></i>Encounters</a></li>
    <li><a href="{{route('hcp-encounters.create')}}"><i class="fa fa-long-arrow-right"></i>Create Encounters</a></li>
  </ul>
</li>

<li>
  <a href="javaScript:void();" class="waves-effect">
    <i class="icon-grid"></i><span>HCP Assessments</span>
    <i class="fa fa-angle-left float-right"></i>
  </a>
  <ul class="sidebar-submenu">
  <li><a href="{{route('hcp-assessments.index')}}"><i class="fa fa-long-arrow-right"></i>Assessments</a></li>
  </ul>
</li>


<li class="sidebar-header">NHIS Rates/tariffs</li>
<li>
  <a href="javaScript:void();" class="waves-effect">
   <i class="icon-diamond"></i><span>NHIS Standards</span>
   <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="sidebar-submenu">
    <li><a href="{{route('hcp.rates')}}"><i class="fa fa-long-arrow-right"></i> Rate</a></li>
    <li><a href="{{route('hcp.tariffs')}}"><i class="fa fa-long-arrow-right"></i> tariffs</a></li>
    <li><a href="{{route('hcp.drugs')}}"><i class="fa fa-long-arrow-right"></i> Drugs</a></li>
  </ul>
</li>

</ul>

</div>
<!--End sidebar-wrapper-->
