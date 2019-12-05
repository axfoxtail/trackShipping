@extends('admin.layouts.app', ['menu' => 'Contact Info', 'sub_menu' => ''])

@section('adminCss')
<link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/assets/extra-libs/multicheck/multicheck.css') }}">
<style>
    .invalid {
        border-color: red;
    }
</style>
@endsection

@section('adminContent')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ url('admin/contact/update') }}" method="post" class="clearfix">
                    <input type="hidden" name="_method" value="PUT">    
                    @csrf
                    <div class="card-body">
                        <h5 class="card-title">CONTACT INFORMATION</h5>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control @error('fname'){{ 'invalid' }}@enderror" name="fname" value="{{ $siteinfo->fname }}" placeholder="First Name...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control @error('lname'){{ 'invalid' }}@enderror" name="lname" value="{{ $siteinfo->lname }}" placeholder="Last Name...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="text" class="form-control @error('email'){{ 'invalid' }}@enderror" name="email" value="{{ $siteinfo->email }}" placeholder="Email...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="text" class="form-control @error('phone'){{ 'invalid' }}@enderror" name="phone" value="{{ $siteinfo->phone }}" placeholder="Phone...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control @error('address'){{ 'invalid' }}@enderror" name="address" value="{{ $siteinfo->address }}" placeholder="Address...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control @error('city'){{ 'invalid' }}@enderror" name="city" value="{{ $siteinfo->city }}" placeholder="City...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control @error('country'){{ 'invalid' }}@enderror" name="country" value="{{ $siteinfo->country }}" placeholder="ZIP Code...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>ZIP Code</label>
                                    <input type="text" class="form-control @error('postcode'){{ 'invalid' }}@enderror" name="postcode" value="{{ $siteinfo->postcode }}" placeholder="ZIP Code...">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Week start</label>
                                    <input type="text" class="form-control @error('weekstart'){{ 'invalid' }}@enderror" name="weekstart" value="{{ $siteinfo->weekstart }}" placeholder="Partner email...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Week end</label>
                                    <input type="text" class="form-control @error('weekend'){{ 'invalid' }}@enderror" name="weekend" value="{{ $siteinfo->weekend }}" placeholder="Partner email...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Hour start</label>
                                    <input type="text" class="form-control @error('hourstart'){{ 'invalid' }}@enderror" name="hourstart" value="{{ $siteinfo->hourstart }}" placeholder="Partner email...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Hour end</label>
                                    <input type="text" class="form-control @error('hourend'){{ 'invalid' }}@enderror" name="hourend" value="{{ $siteinfo->hourend }}" placeholder="Partner email...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Rest Day</label>
                                    <input type="text" class="form-control @error('restday1'){{ 'invalid' }}@enderror" name="restday1" value="{{ $siteinfo->restday1 }}" placeholder="Username...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Rest Day 2</label>
                                    <input type="text" class="form-control @error('restday2'){{ 'invalid' }}@enderror" name="restday2" value="{{ $siteinfo->restday2 }}" placeholder="Username...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="text" class="form-control @error('url'){{ 'invalid' }}@enderror" name="url" value="{{ $siteinfo->url }}" placeholder="Username...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control @error('companyname'){{ 'invalid' }}@enderror" name="companyname" value="{{ $siteinfo->companyname }}" placeholder="Username...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body float-right">
                            <button type="submit" class="btn btn-primary">Save</button>
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

@endsection

@section('adminJs')
<script src="{{ asset('admin-assets/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
<script src="{{ asset('admin-assets/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
@endsection