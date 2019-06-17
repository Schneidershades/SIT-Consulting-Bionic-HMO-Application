@extends('dashboard.layouts.layouts')

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">API Payment Security for {{auth()->user()->userable->hmo_name}}</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Bionic</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"> API Payment Security for {{auth()->user()->userable->hmo_name}}</li>
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
	<div class="col-lg-12 mx-auto">
		<div class="card bg-dark shadow-dark">
			<div class="card-body">
				<div class="card-title text-uppercase text-white"><i class="fa fa-address-book-o"></i>API Payment Setting</div>
				<hr>
				<form class="color-form" method="POST" action="{{route('payment.store')}}" enctype="multipart/form-data">
					@csrf
					<div class="form-group row">
						<div class="form-group col-md-12">
							<label for="input-25">Set Payment Gateway</label>
							<select name="hmo_payment_gateway" class="form-control">
								<option value="">---Select Payment Gateway---</option>
								<option value="remita">Remita</option>
								<option value="flutterwave">FlutterWave</option>
								<option value="paystack">Pastack</option>
								<option value="gladepay">GladePay</option>
							</select>
						</div>

						<div class="form-group col-md-12">
							<label for="input-25">API Public Key Sandbox/Test Key </label>
							<input name="hmo_payment_api_public_key_sandbox" type="text" class="form-control" id="input-25" placeholder="Input your Public API given by chosen payment gateway"  value="{{auth()->user()->userable->hmo_payment_api_public_key_sandbox}}">
						</div>
						
						<div class="form-group col-md-12">
							<label for="input-25">API Private Key Sandbox/Test Key </label>
							<input name="hmo_payment_api_private_key_sandbox" type="text" class="form-control" id="input-25" placeholder="Input your Public API given by chosen payment gateway"  value="{{auth()->user()->userable->hmo_payment_api_private_key_sandbox}}">
						</div>

						<div class="form-group col-md-12">
							<label for="input-25">API Public Key Live/Production Key </label>
							<input name="hmo_payment_api_public_key_live" type="text" class="form-control" id="input-25" placeholder="Input your live/production public API given by chosen payment gateway"  value="{{auth()->user()->userable->hmo_payment_api_public_key_live}}">
						</div>

						<div class="form-group col-md-12">
							<label for="input-25">API Public Key Live/Production Key </label>
							<input name="hmo_payment_api_private_key_live" type="text" class="form-control" id="input-25" placeholder="Input your live/production public API given by chosen payment gateway" value="{{auth()->user()->userable->hmo_payment_api_private_key_live}}">
						</div>
						<hr>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-link bg-white text-dark shadow px-5"><i class="icon-lock"></i> Save Payment API Settings</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



@endsection

