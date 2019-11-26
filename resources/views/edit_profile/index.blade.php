@extends('layouts.app')

@section('content')
    
    
<div id="wrap" class="boxed">

    <div class="grey-bg"> <!-- Grey bg  -->    

        <!-- HEADER -->
        @include('layouts.partials.header')
        <!-- ./HEADER -->

        <!-- PAGE TITLE -->
        <div class="container m-bot-35 clearfix">
            <div class="sixteen columns">
                <div class="page-title-container clearfix">
                    <h1 class="page-title">My Account - <b><b>{{ Auth::user()->fname }}</b><b> {{ Auth::user()->lname }}</b></b></h1>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Grey bg end --> 


    <!-- CONTENT -->
    <div class="container clearfix m-bot-30">
        <div class="row">
        
            <!-- START MENIU -->
            @include('layouts.partials.account_submenu')
            <!-- END MENIU -->
            
            <!-- START MY ACCOUNT -->

            @if(Auth::user()->role == 'normal')

            <div class="twelve columns">
                
                <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container"><b>Edit</b> Customer Details</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                
                <p class="m-bot-30">Please note that the details you provide in this section are considered the legal owner's details for all the accounts and services managed through this user area.</p>
                
                <div class="comment-head m-bot-35 clearfix">
                    <div class="comment-name left"><a href=""><b>{{ Auth::user()->fname }}</b><b> {{ Auth::user()->lname }}</b></a></div>
                    <div class="right">
                        <span class="comment-desc">Registered on 29 Oct 2019</span>
                        <span class="comment-reply"><a href="myaccount"><b>View</b> Profile</a></span>
                    </div>  
                </div>
                                
                <ul class="tabs-nav">
                                    <li class="">
                        <a href="#tab1">MAILING <b>ADDRESS</b></a>
                    </li>
                    <li class="">
                        <a href="#tab2">CONTACT <b>INFO</b></a>
                    </li>
                    <li class="">
                        <a href="#tab3"><b>PASSWORD</b></a>
                    </li>
                </ul>
                
                <div class="content-container-white tab-main-container">
                
                                
                    <div id="tab1" class="tab-content" style="display: block;">
                        <ul class="tab-post-container text">
                            <li>
                                <div class="row">
                                    <form action="{{ url('/edit_profile') }}/{{ Auth::user()->id }}" method="POST" id="address_form">
                                    @csrf
                                    @method('PUT')
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">Address</label>
                                            <input type="text" name="address" id="address" class="text m-bot-20" value="{{ old('address') ? old('address') : Auth::user()->address }}" placeholder="Address">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">City</label>
                                            <input type="text" name="city" id="city" class="text m-bot-20" value="{{ old('city') ? old('city') : Auth::user()->city }}" placeholder="City">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">Country</label>
                                            <input type="text" name="country" id="country" class="text m-bot-20" value="{{ old('country') ? old('country') : Auth::user()->country }}" placeholder="Country">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">ZIP Code</label>
                                            <input type="text" name="postcode" id="postcode" class="text m-bot-20" value="{{ old('postcode') ? old('postcode') : Auth::user()->postcode }}" placeholder="ZIP Code">
                                        </fieldset>
                                        <fieldset class="left m-t-min-1">
                                            <button type="submit" name="address_formsubmit" class="button medium"> <b>SAVE</b> CHANGES</button>
                                        </fieldset>
                                    </form>
                                </div>				
                            </li>
                            
                        </ul>
                    </div>
                    <div id="tab2" class="tab-content" style="display: none;">
                        <ul class="tab-post-container text">
                            <li>
                                <div class="row">
                                    <form action="{{ url('/edit_profile') }}/{{ Auth::user()->id }}" method="POST" id="contact_form">
                                    @csrf
                                    @method('PUT')
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">Email address</label>
                                            <input type="email" name="email" id="email" class="text m-bot-20" value="{{ old('firstemail_name') ? old('email') : Auth::user()->email }}" placeholder="Email">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">Phone number</label>
                                            <input type="tel" name="phone" id="phone" class="text m-bot-20" value="{{ old('phone') ? old('phone') : Auth::user()->phone }}" placeholder="Phone">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <button type="submit" name="contact_formsubmit" class="button medium"> <b>SAVE</b> CHANGES</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab3" class="tab-content" style="display: none;">
                        <ul class="tab-post-container text">
                            <li>
                                <div class="row">
                                    <form action="{{ url('/edit_profile') }}/{{ Auth::user()->id }}" method="POST" id="password_form">
                                    @csrf
                                    @method('PUT')
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">New password</label>
                                            <input type="password" name="password" id="password" class="text m-bot-20">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">Retype password</label>
                                            <input type="password" name="rpassword" id="rpassword" class="text m-bot-20">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <button type="submit" name="password_formsubmit" class="button medium"> <b>SAVE</b> CHANGES</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <p>* Please contact our Customer Support if you need further help.</p>
            </div>

            @else 

            <div class="twelve columns">
			
                <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container"><b>Edit</b> Customer Details</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                
                <p class="m-bot-30">Please note that the details you provide in this section are considered the legal owner's details for all the accounts and services managed through this user area.</p>
                
                <div class="comment-head m-bot-35 clearfix">
                    <div class="comment-name left"><a href="">Representative -<b><b>{{ Auth::user()->bfname }}</b><b> {{ Auth::user()->blname }}</b></a></div>
                    <div class="right">
                        <span class="comment-desc">Registered on {{ Auth::user()->created_at }}</span>
                        <span class="comment-reply"><a href="myaccount.php"><b>View</b> Profile</a></span>
                    </div>  
                </div>
                                
                <ul class="tabs-nav">
                                    <li class="">
                        <a href="#tab0">COMPANY <b>REPRESENTATIVE</b></a>
                    </li>
                                    <li class="">
                        <a href="#tab1">MAILING <b>ADDRESS</b></a>
                    </li>
                    <li class="">
                        <a href="#tab2">CONTACT <b>INFO</b></a>
                    </li>
                    <li class="">
                        <a href="#tab3"><b>PASSWORD</b></a>
                    </li>
                </ul>
                
                <div class="content-container-white tab-main-container">
                
                                    <div id="tab0" class="tab-content" style="display: block;">
                        <ul class="tab-post-container text">
                            <li>
                                <div class="row">
                                    <form action="{{ url('/edit_profile') }}/{{ Auth::user()->id }}" method="POST" id="representative_form">
                                    @csrf
                                    @method('PUT')
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">First name</label>
                                            <input type="text" name="bfname" id="fname" class="text m-bot-20" value="{{ old('bfname') ? old('bfname') : Auth::user()->bfname }}" placeholder="First name">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">Last name</label>
                                            <input type="text" name="blname" id="lname" class="text m-bot-20" value="{{ old('blname') ? old('blname') : Auth::user()->blname }}" placeholder="Last name">
                                        </fieldset>
                                        <fieldset class="left m-t-min-1">
                                            <button type="submit" name="representative_formsubmit" class="button medium"> <b>SAVE</b> CHANGES</button>
                                        </fieldset>
                                    </form>
                                </div>				
                            </li>
                            
                        </ul>
                    </div>
                                
                    <div id="tab1" class="tab-content" style="display: block;">
                        <ul class="tab-post-container text">
                            <li>
                                <div class="row">
                                <form action="{{ url('/edit_profile') }}/{{ Auth::user()->id }}" method="POST" id="address_form">
                                    @csrf
                                    @method('PUT')
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">Address</label>
                                            <input type="text" name="address" id="address" class="text m-bot-20" value="{{ old('address') ? old('address') : Auth::user()->address }}" placeholder="Address">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">City</label>
                                            <input type="text" name="city" id="city" class="text m-bot-20" value="{{ old('city') ? old('city') : Auth::user()->city }}" placeholder="City">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">Country</label>
                                            <input type="text" name="country" id="country" class="text m-bot-20" value="{{ old('country') ? old('country') : Auth::user()->country }}" placeholder="Country">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">ZIP Code</label>
                                            <input type="text" name="postcode" id="postcode" class="text m-bot-20" value="{{ old('postcode') ? old('postcode') : Auth::user()->postcode }}" placeholder="ZIP Code">
                                        </fieldset>
                                        <fieldset class="left m-t-min-1">
                                            <button type="submit" name="address_formsubmit" class="button medium"> <b>SAVE</b> CHANGES</button>
                                        </fieldset>
                                    </form>
                                </div>				
                            </li>
                            
                        </ul>
                    </div>
                    <div id="tab2" class="tab-content" style="display: none;">
                        <ul class="tab-post-container text">
                            <li>
                                <div class="row">
                                    <form action="{{ url('/edit_profile') }}/{{ Auth::user()->id }}" method="POST" id="contact_form">
                                    @csrf
                                    @method('PUT')
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">Email address</label>
                                            <input type="email" name="email" id="email" class="text m-bot-20" value="{{ old('firstemail_name') ? old('email') : Auth::user()->email }}" placeholder="Email">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">Phone number</label>
                                            <input type="tel" name="phone" id="phone" class="text m-bot-20" value="{{ old('phone') ? old('phone') : Auth::user()->phone }}" placeholder="Phone">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <button type="submit" name="contact_formsubmit" class="button medium"> <b>SAVE</b> CHANGES</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab3" class="tab-content" style="display: none;">
                        <ul class="tab-post-container text">
                            <li>
                                <div class="row">
                                    <form action="{{ url('/edit_profile') }}/{{ Auth::user()->id }}" method="POST" id="password_form">
                                    @csrf
                                    @method('PUT')
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">New password</label>
                                            <input type="password" name="password" id="password" class="text m-bot-20">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <label class="title-block">Retype password</label>
                                            <input type="password" name="rpassword" id="rpassword" class="text m-bot-20">
                                        </fieldset>
                                        <fieldset class="field-1-3 left">
                                            <button type="submit" name="password_formsubmit" class="button medium"> <b>SAVE</b> CHANGES</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <p>* Please contact our Customer Support if you need further help.</p>
            </div>

            @endif
            <!-- END MY ACCOUNT -->

        </div>
    </div>
	<!-- NEWS LETTER -->
    @include('layouts.partials.newsletter')
    <!-- /.NEWS LETTER -->

	

	<!-- Accreditations -->
    @include('layouts.partials.accreditations')
    <!-- /.Accreditations -->



	<!-- FOOTER -->
    @include('layouts.partials.footer')
    <!-- /.FOOTER -->

    <!-- SWITCHER -->
    @include('layouts.partials.switcher_account')
    <!-- /.SWITCHER -->





    <p id="back-top"> <a href="#top" title="Back to Top"><span></span></a> </p>

</div>


@endsection

@section('scripts')
  @parent
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });

        $(document).ready(function() {
            $("#representative_form").validate({
                rules: {
                    bfname: 		{ required: true, minlength: 4, letterswithbasicpunc: true },
                    blname: 		{ required: true, minlength: 4, letterswithbasicpunc: true },
                },
                messages: {
                    bfname: {
                        required: "Please enter representative first name",
                    },
                    blname: {
                        required: "Please enter representative first name"
                    }
                }
            });
            
            $("#address_form").validate({
                rules: {
                    address: 		{ required: true, minlength: 4 },
                    city: 		{ required: true, minlength: 4, letterswithbasicpunc: true },
                    country: 		{ required: true, minlength: 4, letterswithbasicpunc: true },
                    postcode: 	{ required: true, minlength: 4 }
                },
                messages: {
                    address: {
                        required: "Please enter your address",
                    },
                    city: {
                        required: "Please enter a city",
                    },
                    country: {
                        required: "Please enter a country",
                    },
                    postcode: {
                        required: "Please enter a post code"
                    }
                }
            });

            $("#contact_form").validate({
                rules: {
                    email: { 
                        required: true, 
                        email: true, 
                       
                    },
                    phone: 		{ required: true, minlength: 9, digits: true }
                },
                messages: {
                    email: {
                        required: "Please enter your email",
                        email: "Please enter a valid email",
                        remote: "Email address is already registered"
                    },
                    phone: {
                        required: "Please enter your phone",
                    }
                }
            });
            
            
            $("#password_form").validate({
                rules: {
                    password: 	{ required: true, minlength: 4 },
                    rpassword: 	{ required: true, minlength: 4, equalTo: "#password" }
                },
                messages: {
                    password: {
                        required: "Please enter your password",
                        digits: "Only digits"
                    },
                    rpassword: {
                        required: "Please retype your password",
                        equalTo: "The passwords you typed do not match"
                    }
                }
            });

            
        });
    </script>

@stop