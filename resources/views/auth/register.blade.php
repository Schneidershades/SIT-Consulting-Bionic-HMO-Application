@extends('auth.layouts.auth')



@section('auth_content')
<!-- <div class="card mb-0">
   <div class="bg-signup2"></div>
    <div class="card-img-overlay rounded-left my-5">
     <h2 class="text-white">Welcome Back</h2>
     <h1 class="text-white">HMO ERP System </h1>
     <p class="card-text text-white pt-3">This is an Entreprise Resource Planning Syetem that is best fit for data Health Management Organisation & Health Care Centers to improve digitally on data processing on all aspects of the health organization .</p>
 </div>
</div>

<div class="card mb-0">
    <div class="card-body">
        <div class="card-content p-3">
         <div class="text-center">
            <img src="assets/images/logo-icon.png"/>
          </div>
         <div class="card-title text-uppercase text-center py-2">Sign Up</div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="form-group">
               <div class="position-relative has-icon-left">
                  <label for="exampleInputName" class="sr-only">Health Institute Name</label>
                  <input type="text" id="exampleInputName" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Health Institute Name">
                  <div class="form-control-position">
                      <i class="icon-user"></i>
                  </div>
               </div>
              </div>

              <div class="form-group">
               <div class="position-relative has-icon-left">
                  <label for="exampleInputEmailId" class="sr-only">Health Institute Email</label>
                  <input type="text" id="exampleInputEmailId"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Health Institute Email">
                  <div class="form-control-position">
                      <i class="icon-envelope-open"></i>
                  </div>
               </div>
              </div>
              <div class="form-group">
               <div class="position-relative has-icon-left">
                  <label for="exampleInputPassword" class="sr-only">Password</label>
                  <input type="password" id="exampleInputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                  <div class="form-control-position">
                      <i class="icon-lock"></i>
                  </div>
               </div>
              </div>
              <div class="form-group">
               <div class="position-relative has-icon-left">
                  <label for="exampleInputRetryPassword" class="sr-only">Retry Password</label>
                  <input type="password" id="exampleInputRetryPassword"  class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                  <div class="form-control-position">
                      <i class="icon-lock"></i>
                  </div>
               </div>
              </div>

              <div class="form-group mb-0">
               <div class="demo-checkbox">
                <input type="checkbox" id="user-checkbox" class="filled-in chk-col-danger" checked="" />
                <label for="user-checkbox">I Accept terms & conditions</label>
              </div>
             </div>

             <button type="submit" class="btn btn-danger shadow-danger btn-block waves-effect waves-light">Sign Up</button>
             <div class="text-center pt-3">
                 <hr>
                 <p class="text-muted">Already have an account? <a href="{{ route('login') }}"> Sign In here</a></p>
             </div>
        </form>
     </div>
    </div>
</div> -->

@endsection

@section('auth_stylesheets')
  <!--Select Plugins-->
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
@endsection

@section('auth_scripts')
<!--Select Plugins Js-->
<script src="assets/plugins/select2/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
      $('.single-select').select2();


      jQuery.ajax ({
          type: "GET",
          url: 'https://api.grid-nigeria.org/health-facilities/',
          // data: {"action":"package_deliveryspeed","merchant_key":merchant_key},
          crossDomain: true,
          success:function(responceData)
          {
              var data=JSON.stringify(responceData);
              console.log(data);

              // for(var x in Object(data.features)){
              //     console (Object(data.features));
              //     var newObj = Object(data.features);
              //     console.log(newObj.properties['name']);
              // }
              // if(data.RESPONSECODE==1)
              // {
              //     var options='<option value="">Select Delivery Speed</option>';
              //     jQuery.each(data.DELIVERYSPEEDLIST,function(field,value) {
              //         options+='<option  value="'+value['deliveryspeed_name']+'" >'+value['deliveryspeed_name']+'</option>';
              //     });
                  
              //     jQuery("#hospitalName").html(options);
              // }
          }
      });
  });
</script>
@endsection