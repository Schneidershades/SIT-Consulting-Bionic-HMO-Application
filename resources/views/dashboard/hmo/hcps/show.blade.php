@extends('layouts.dashboard')
@section('content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">{{$hcp->hcp->hcp_name}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">{{auth()->user()->userable->hmo_name}}</a></li>
            <li class="breadcrumb-item active" aria-current="page"> {{$hcp->hcp->hcp_name}}</li>
        </ol>
    </div>
    <div class="col-sm-3">
        <div class="btn-group float-sm-right">
            <a href="{{route('hcps.index')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
        </div>
    </div>
</div>
<!-- End Breadcrumb-->
<div class="row">
    <div class="col-lg-12 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i>  {{$hcp->hcp->hcp_name}} Details</div>
                <hr>
                <div class="form-group row">
                    <div class="col-md-3">
                        <a href="" type="submit" class="btn btn-primary shadow-primary px-1"><i class="icon-lock"></i> Edit Health Care hcp Details</a>
                    </div>
                    <div class="col-md-3">
                        @if($hcp->hcp->hasAccount($hcp->hcp->id) == 'yes')
                        <span class="btn btn-gradient-royal m-1">Account is created</span>
                        @else
                        <button class="btn btn-gradient-royal m-1" data-toggle="modal" data-target="#royalmodal">
                            Create Account
                        </button>
                        <div class="modal fade" id="royalmodal">
                            <div class="modal-dialog">
                                <div class="modal-content gradient-royal border-0">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-white"><i class="fa fa-star"></i>Create Account for {{$hcp->hcp->hcp_code}} - {{$hcp->hcp->hcp_name}}</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-white">
                                        <form class="color-form" method="POST" action="{{route('create.hcps.account')}}">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="input-25">Name</label>
                                                    <input name="name" type="text" class="form-control" id="input-25" placeholder="Full Name">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="input-26">Email</label>
                                                    <input name="email" type="text" class="form-control" id="input-26" placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="input-26">Password</label>
                                                    <input name="password" type="password" class="form-control" id="input-26" placeholder="Choose Password">
                                                </div>
                                                <input name="userable_id" type="hidden" value="{{$hcp->hcp->id}}">
                                                <input name="userable_type" type="hidden" value="hcp">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-link bg-white text-dark shadow px-5"><i class="icon-lock"></i> Save Account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    
                    <div class="col-md-3">
                        @if($hcp->provider_payment_mechanism != NULL)
                        <span class="btn btn-gradient-royal m-1">
                            Payment Mechanism : {{$hcp->provider_payment_mechanism ? $hcp->provider_payment_mechanism : 'Not Set'}}
                        </span>
                        @else
                        <button class="btn btn-gradient-royal m-1" data-toggle="modal" data-target="#PaymentMechanismModal">Set Payment Mechanism </button>
                        <div class="modal fade" id="PaymentMechanismModal">
                            <div class="modal-dialog">
                                <div class="modal-content gradient-royal border-0">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-white"><i class="fa fa-star"></i>Set Payment Mode for {{$hcp->hcp->hcp_code}} - {{$hcp->hcp->hcp_name}}</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-white">
                                        <form class="color-form" method="POST" action="{{route('set.payment.mechanism')}}">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="input-25">Payment Method</label>
                                                    <select name="provider_payment_mechanism" id="" class="form-control">
                                                        <option value="fee-for-service">Fee for Service</option>
                                                        <option value="capitation">Capitation</option>
                                                    </select>
                                                </div>
                                                <input name="hcp_id" type="hidden" value="{{$hcp->hcp->id}}">
                                            </div>
                                            <!-- <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                <button type="button" class="btn btn-link text-dark bg-white"><i class="fa fa-check-square-o"></i> Save changes</button>
                                                </div> -->
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-link bg-white text-dark shadow px-5"><i class="icon-lock"></i> Save Account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="input-9">HCP Code</label><br>
                        <h5>{{$hcp->hcp->hcp_code}}</h5>
                    </div>
                    <div class="col-md-3">
                        <label for="input-9">Hcp Name</label><br>
                        <h5>{{$hcp->hcp->hcp_name}}</h5>
                    </div>
                    <div class="col-md-3">
                        <label for="input-9">HCP Address</label><br>
                        <h5>{{$hcp->hcp->hcp_address ? $hcp->hcp->hcp_address : 'Not Available'}}</h5>
                    </div>
                    <div class="col-md-3">
                        <label for="input-9">HCP State</label><br>
                        <h5>{{$hcp->hcp->hcp_state ? $hcp->hcp->hcp_state : 'Not Available'}}</h5>
                    </div>
                    <div class="col-md-3">
                        <label for="input-9">HCP Contact</label><br>
                        <h5>{{$hcp->hcp->hcp_contact ? $hcp->hcp->hcp_contact : 'Not Available'}}</h5>
                    </div>
                    <div class="col-md-3">
                        <label for="input-9">HCP Email</label><br>
                        <h5>{{$hcp->hcp->hcp_email ? $hcp->hcp->hcp_email : 'Not Available'}}</h5>
                    </div>
                    <div class="col-md-3">
                        <label for="input-9">HCP Bank Name</label><br>
                        <h5>{{$hcp->hcp->hcp_bank_name ? $hcp->hcp->hcp_bank_name : 'Not Available'}}</h5>
                    </div>
                    <div class="col-md-3">
                        <label for="input-9">HCP Bank Account Number</label><br>
                        <h5>{{$hcp->hcp->hcp_bank_account_number ? $hcp->hcp->hcp_bank_account_number : 'Not Available'}}</h5>
                    </div>
                </div>
                <br><br>	
                <div class="card-title text-uppercase ">
                    <i class="fa fa-address-book-o"></i> tariff / Drug Agreement Details
                </div>
                <hr>
                <div class="table-responsive">
                    @if($agreements != null)
                    <table id="example" class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">tariff Item</th>
                                <th scope="col">Type</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($agreements as $t)
                            <tr scope="row">
                                <th scope="col">{{$t->agreementable->getTitle()}}</th>
                                <th scope="col">{{$t->agreementable_type}}</th>
                                <th scope="col">N {{$t->amount}}</th>
                                <th scope="col">
                                    <a href="{{route('agreements.delete', $t->id)}}" class="btn btn-danger btn-round waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-trash"></i></a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    @else
                    <h5>No Agreements Available</h5>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@include('dashboard.partials._datatablesjs')
@endsection
@section('stylesheets')
@include('dashboard.partials._datatablescss')
@endsection