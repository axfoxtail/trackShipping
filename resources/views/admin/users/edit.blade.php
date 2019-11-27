@extends('admin.layouts.app', ['menu' => 'Users', 'sub_menu' => 'business accounts'])

@section('adminCss')
<link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/assets/extra-libs/multicheck/multicheck.css') }}">
@endsection

@section('adminContent')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ url('admin/users/update') }}/{{ $user->id }}" method="post" class="clearfix">
                    <input type="hidden" name="_method" value="PUT">    
                    @csrf
                    @if($user->role == 'normal')
                        <div class="card-body">
                            <h5 class="card-title">CONTACT INFORMATION</h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" name="fname" value="{{ $user->fname }}" placeholder="First Name...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" name="lname" value="{{ $user->lname }}" placeholder="Last Name...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" value="{{ $user->address }}" placeholder="Address...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="city" value="{{ $user->city }}" placeholder="City...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Phone number</label>
                                        <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" placeholder="Phone...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" name="country" value="{{ $user->country }}" placeholder="ZIP Code...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ZIP Code</label>
                                        <input type="text" class="form-control" name="postcode" value="{{ $user->postcode }}" placeholder="ZIP Code...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>FAX number</label>
                                        <input type="text" class="form-control" name="fax" value="{{ $user->fax }}" placeholder="FAX...">
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <h5 class="card-title">BUSINESS PARTNER ACCOUNT</h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="text" class="form-control" name="partner_email" value="{{ $user->partner_email }}" placeholder="Partner email...">
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <h5 class="card-title">BUSINESS PARTNER ACCOUNT</h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" value="{{ $user->username }}" placeholder="Username...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                                <!-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password" placeholder="Password...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Retype password</label>
                                        <input type="text" class="form-control" name="password_confirmation" placeholder="Retype password...">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    @else
                        <div class="card-body">
                            <h5 class="card-title">BUSINESS IDENTIFICATION</h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" name="fname" value="{{ $user->fname }}" placeholder="First Name...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" value="{{ $user->address }}" placeholder="Address...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="city" value="{{ $user->city }}" placeholder="City...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Other Business Names (DBA)</label>
                                        <input type="text" class="form-control" name="bname" value="{{ $user->bname }}" placeholder="Other Business Names...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" name="country" value="{{ $user->country }}" placeholder="Country...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Post Code</label>
                                        <input type="text" class="form-control" name="postcode" value="{{ $user->postcode }}" placeholder="Post Code...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Web address(URL)</label>
                                        <input type="text" class="form-control" name="url" value="{{ $user->url }}" placeholder="https://...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Phone number</label>
                                        <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" placeholder="Phone...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>FAX number</label>
                                        <input type="text" class="form-control" name="fax" value="{{ $user->fax }}" placeholder="FAX...">
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <h5 class="card-title">BUSINESS TYPE/CLASSIFICATIONS</h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Type of Business</label>
                                        <select class="form-control" name="btype">
                                            <option value="" {{ ($user->btype == '' || $user->btype == 'null' || $user->btype == 'NULL') ? 'selected' : '' }}> -- </option>
                                            <option value="Sole proprietorship" {{ $user->btype == 'Sole proprietorship' ? 'selected' : '' }}>Sole proprietorship</option>
                                            <option value="Partnership" {{ $user->btype == 'Partnership' ? 'selected' : '' }}>Partnership</option>
                                            <option value="Corporation" {{ $user->btype == 'Corporation' ? 'selected' : '' }}>Corporation</option>
                                            <option value="Other" {{ $user->btype == 'Other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nature of Business</label>
                                        <select class="form-control" name="bnature">
                                            <option value=""> </option>
                                            <option value="Manufacturing" {{ $user->bnature == 'Manufacturing' ? 'selected' : '' }}>Manufacturing</option>
                                            <option value="Distributor" {{ $user->bnature == 'Distributor' ? 'selected' : '' }}>Distributor</option>
                                            <option value="Professional" {{ $user->bnature == 'OtProfessionalher' ? 'selected' : '' }}>Professional</option>
                                            <option value="Retail Sales/Service" {{ $user->bnature == 'Retail Sales/Service' ? 'selected' : '' }}>Retail Sales/Service</option>
                                            <option value="Commercial Sales/Service" {{ $user->bnature == 'Commercial Sales/Service' ? 'selected' : '' }}>Commercial Sales/Service</option>
                                            <option value="Other" {{ $user->bnature == 'Other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="bfname" value="{{ $user->bfname }}" placeholder="First Name...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" name="blname" value="{{ $user->blname }}" placeholder="Last name...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    
                                </div>
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" value="{{ $user->title }}" placeholder="Title...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                            </div>
                            <hr>

                            <h5 class="card-title">LOGIN DETAILS</h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" value="{{ $user->username }}" placeholder="Username...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                                <!-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password" placeholder="Password...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Retype password</label>
                                        <input type="text" class="form-control" name="password_confirmation" placeholder="Retype password...">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    @endif
                    <div class="border-top">
                        <div class="card-body float-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- Modal -->
<input type="hidden" id="user_id" class="form-control" value="">
<div id="deleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Do you really delete this user?</h4>  
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <h5>After delete user, You can not recoever user data.</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-delete">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>
<div id="editModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Will You Approve This Transaction?</h4>  
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row mb-3 align-items-center">
            <div class="col-lg-4 col-md-12 text-right">
                <span>Shipping Price</span>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="input-group">
                    <input type="hidden" id="transaction_id" class="form-control" value="">
                    <input type="number" id="transaction_price" class="form-control" placeholder="5.000" aria-label="Recipient 's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">$</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-update">Update</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection

@section('adminJs')
<script src="{{ asset('admin-assets/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
<script src="{{ asset('admin-assets/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
@endsection