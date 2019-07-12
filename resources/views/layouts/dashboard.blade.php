<!DOCTYPE html>
<html lang="en">

<head>
  @include('dashboard.partials._head')
</head>

<body onload="info_noti()">

<!-- Start wrapper-->
 <div id="wrapper">
  @if(auth()->user()->userable->hmo_name)
    @include('dashboard.partials._hmo_sidebar')
    @include('dashboard.partials._hmo_topbar')
  @endif
  @if(auth()->user()->userable->hcp_name)
    @include('dashboard.partials._hcp_sidebar')
    @include('dashboard.partials._hcp_topbar')
  @endif


<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!--Start Dashboard Content-->
        @yield('content')
      <!--End Dashboard Content-->
    </div>
    <!-- End container-fluid-->
    
  </div><!--End content-wrapper-->
  @include('dashboard.partials._footer')
   
  </div><!--End wrapper-->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
  @include('dashboard.partials._script')
  @yield('scripts')
</body>
</html>
