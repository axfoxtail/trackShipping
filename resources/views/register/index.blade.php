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
                    <h1 class="page-title">SIGN UP WITH US NOW!</h1>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Grey bg end --> 

    <!-- CONTENT -->
    <div class="container clearfix">

        <div class="row">
            <div class="sixteen columns">
                        <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container">Register Account</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                <p>Get access to the full array of ETA Worldwid shipping, tracking and customs tools. Please enter registration information. All the fields are required.</p>

            </div>
        </div>

        <div class="row">
            <div class="sixteen coulmns">
            
                <ul class="tabs-nav m-bot-30">
                    <li class="active">
                        <h4><a href="#tab1">Private Customers</a></h4>
                    </li>
                    <li class="">
                        <h4><a href="#tab2">Business</a></h4>
                    </li>
                </ul>
                
                <div class="content-container-white tab-main-container">
                    <div id="tab1" class="tab-content" style="display: block;">
    <!-- START PRIVATE -->

    <div class="row">
        <form action="" id="private-form" method="post" class="clearfix">
        
            <div class="row">
            
                <div class="eight columns">
                    <div class="row">
                        <div class="caption-container-main m-bot-30 m-t-min-1">
                            <div class="caption-text-container">Contact <b>Information</b></div>
                            <div class="content-container-white caption-bg "></div>
                        </div>
                    </div>
                    <div class="row">
                        <fieldset class="field-1-3 left">
                            <label class="title-block">First name</label>
                            <input type="text" name="fname" id="fname" placeholder="First name..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Last name</label>
                            <input type="text" name="lname" id="lname" placeholder="Last name..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Email address</label>
                            <input type="email" name="email" id="email" placeholder="Email..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Phone number</label>
                            <input type="tel" name="phone" id="phone" placeholder="Phone..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">FAX number</label>
                            <input type="tel" name="fax" id="fax" placeholder="FAX..." class="text">
                        </fieldset>
                    </div>
                </div>
            
                <div class="eight columns">
                    <div class="row">
                        <div class="caption-container-main m-bot-30 m-t-min-1">
                            <div class="caption-text-container">Mailing <b>address</b></div>
                            <div class="content-container-white caption-bg "></div>
                        </div>
                    </div>
                    <div class="row">
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Address</label>
                            <input type="text" name="address" id="address" placeholder="Address..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">City</label>
                            <input type="text" name="city" id="city" placeholder="City..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Country</label>
                            <input type="text" name="country" id="country" placeholder="Country..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">State</label>
                            <input type="text" name="state" id="state" placeholder="State..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">ZIP Code</label>
                            <input type="text" name="postcode" id="postcode" placeholder="ZIP Code..." class="text m-bot-20">
                        </fieldset>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container">Business partner <b>account</b></div>
                    <div class="content-container-white caption-bg "></div>
                </div>
            </div>
            
            <div class="row">
                <div class="eight columns">	
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Email address</label>
                            <input type="email" placeholder="Partner email..." class="text m-bot-20">
                        </fieldset>
                </div>		
            </div>
            
            <div class="row">
                <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container">Login <b>details</b></div>
                    <div class="content-container-white caption-bg "></div>
                </div>
            </div>
            
            <div class="row">
                <div class="eight columns">
                    <fieldset class="field-1-3 left">
                        <label class="title-block">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username..." class="text m-bot-20">
                    </fieldset>
                </div>		
                <div class="eight columns">
                    <fieldset class="field-1-3 left">
                        <label class="title-block">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password..." class="text m-bot-20">
                    </fieldset>
                    <fieldset class="field-1-3 left">
                        <label class="title-block">Retype password</label>
                        <input type="password" name="rpassword" id="rpassword" placeholder="Retype password..." class="text m-bot-20">
                    </fieldset>
                </div>		
            </div>
            
            <div class="row">
                <i class="sixteen columns m-bot-35">* By continuing to use our Services You are implying that You have read these <a href="terms.php">Terms and Conditions</a> and have unconditionally accepted without reservation in their entirety.</i>
                <div class="sixteen columns m-bot-35">
                    <fieldset class="left m-t-min-1">
                        <input type="submit" name="private-formsubmit" value="Register Account" class="button large">
                    </fieldset>
                </div>
            </div>
            
        </form>
    </div>
    <!-- EMD PRIVATE-->



                    </div>
                    <div id="tab2" class="tab-content" style="display: none;">

    <!-- START BUSSINES -->
    <div class="row">
        <form action="{{ route('register') }}" id="business-form" method="post" class="clearfix">
            @csrf

            <!-- START ROW -->
            <div class="row">
                <div class="eight columns">
                    <div class="row">
                        <div class="caption-container-main m-bot-30 m-t-min-1">
                            <div class="caption-text-container">Business <b>Identification</b></div>
                            <div class="content-container-white caption-bg "></div>
                        </div>
                    </div>
                    <div class="row">
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Firm Name (Legal Name)</label>
                            <input type="text" name="bname" id="bname" placeholder="Firm Name..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Other Business Names (DBA)</label>
                            <input type="text" name="obname" id="obname" placeholder="Other Business Names..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Web address(URL)</label>
                            <input type="url" name="url" id="url" placeholder="http://..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Email address</label>
                            <input type="email" name="bemail" id="bemail" placeholder="Email..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Phone number</label>
                            <input type="tel" name="bphone" id="bphone" placeholder="Phone..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">FAX number</label>
                            <input type="tel" name="bfax" id="bfax" placeholder="FAX..." class="text">
                        </fieldset>
                    </div>
                </div>
            
                <div class="eight columns">
                    <div class="row">
                        <div class="caption-container-main m-bot-30 m-t-min-1">
                            <div class="caption-text-container">Mailing <b>address</b></div>
                            <div class="content-container-white caption-bg "></div>
                        </div>
                    </div>
                    <div class="row">
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Address</label>
                            <input type="text" name="baddress" id="baddress" placeholder="Address..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">City</label>
                            <input type="text" name="bcity" id="bcity" placeholder="City..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Country</label>
                            <input type="text" name="bcountry" id="bcountry" placeholder="Country..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Post Code</label>
                            <input type="text" name="bpostcode" id="bpostcode" placeholder="Post Code..." class="text m-bot-20">
                        </fieldset>
                    </div>				
                </div>
            </div>
            <!-- END ROW -->
            
            <!-- START ROW -->
            <div class="row">
                <div class="eight columns">
                    <div class="row">
                        <div class="caption-container-main m-bot-30 m-t-min-1">
                            <div class="caption-text-container">Business <b>Type/Classifications</b></div>
                            <div class="content-container-white caption-bg "></div>
                        </div>
                    </div>
                    <fieldset class="field-1-3 left">
                        <label class="title-block">Type of Business</label>
                        <select name="btype">
                            <option value=""> -- </option>
                            <option value="Sole proprietorship">Sole proprietorship</option>
                            <option value="Partnership">Partnership</option>
                            <option value="Corporation">Corporation</option>
                            <option value="Other">Other</option>
                        </select>
                    </fieldset>
                    <fieldset class="field-1-3 left">
                        <label class="title-block">Nature of Business</label>
                        <select name="bnature">
                            <option value=""> </option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="Distributor">Distributor</option>
                            <option value="Professional">Professional</option>
                            <option value="Retail Sales/Service">Retail Sales/Service</option>
                            <option value="Commercial Sales/Service">Commercial Sales/Service</option>
                            <option value="Other">Other</option>
                        </select>
                    </fieldset>
                </div>
                
                <div class="eight columns">
                    <div class="row">
                        <div class="caption-container-main m-bot-30 m-t-min-1">
                            <div class="caption-text-container">Company <b>Representative</b></div>
                            <div class="content-container-white caption-bg "></div>
                        </div>
                    </div>
                    <div class="row">
                        <fieldset class="field-1-3 left">
                            <label class="title-block">First name</label>
                            <input type="text" name="bfname" id="bfname" placeholder="First name..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Last name</label>
                            <input type="text" name="blname" id="blname" placeholder="Last name..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Title</label>
                            <input type="text" name="title" id="title" placeholder="Title..." class="text m-bot-20">
                        </fieldset>
                    </div>
                </div>
            </div>
            <!-- END ROW -->
            
            <!-- START ROW -->
            <div class="row">
                <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container">Login <b>details</b></div>
                    <div class="content-container-white caption-bg "></div>
                </div>
            </div>
            <!-- END ROW -->
            
            <!-- START ROW -->
            <div class="row">
                <div class="eight columns">
                    <fieldset class="field-1-3 left">
                        <label class="title-block">Username</label>
                        <input type="text" name="name" value="{{ old('name') }}" id="busername" placeholder="Username..." class="text m-bot-20">
                    </fieldset>
                </div>		
                <div class="eight columns">
                    <fieldset class="field-1-3 left">
                        <label class="title-block">Password</label>
                        <input type="password" name="password" id="bpassword" placeholder="Password..." class="text m-bot-20">
                    </fieldset>
                    <fieldset class="field-1-3 left">
                        <label class="title-block">Retype password</label>
                        <input type="password" name="password_confirmation" id="brpassword" placeholder="Retype password..." class="text m-bot-20">
                    </fieldset>
                </div>		
            </div>
            <!-- END ROW -->
            
            <!-- START ROW -->
            <div class="row">
                <i class="sixteen columns m-bot-35">* By continuing to use our Services You are implying that You have read these <a href="terms.php">Terms and Conditions</a> and have unconditionally accepted without reservation in their entirety.</i>
                <div class="sixteen columns m-bot-35">
                    <fieldset class="left m-t-min-1">
                        <input type="submit" name="business-formsubmit" value="Register Business Account" class="button large">
                    </fieldset>
                </div>
            </div>
            <!-- END ROW -->
            
        </form>
    </div>
    <!-- EMD BUSSINES ------------------------------------------------------------------>

                    </div>
                    
                </div>

            </div>
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
    @include('layouts.partials.switcher')
    <!-- /.SWITCHER -->



    <p id="back-top"> <a href="#top" title="Back to Top"><span></span></a> </p>

</div>


@endsection


@section('scripts')
  @parent
    <script src="{{url('assets/admin/js/jquery.maskedinput.js')}}"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });

        jQuery(function($){
            $("#phone").mask("9 999 999 ?9999");
            $("#fax").mask("9 999 999 ?9999");
            $("#bphone").mask("9 999 999 ?9999");
            $("#bfax").mask("9 999 999 ?9999");
        });

        $(document).ready(function() {
            
            $("#business-form").validate({
                rules: {
                    bname: 		{ required: true, minlength: 4, letterswithbasicpunc: true },
                    obname: 		{ minlength: 4, letterswithbasicpunc: true },
                    url:			{ url: true },
                    bemail: { 
                        required: true, 
                        email: true, 
                        remote: {
                            url: "check-email.php",
                            type: "post",
                            data: {
                                bemail: function() {
                                    return $("[name='bemail']").val();
                                }
                            }
                        }
                    },
                    bphone: 		{ required: true, minlength: 9 },
                    bfax: 		{ minlength: 9 },
                    baddress: 	{ required: true, minlength: 4 },
                    bcity: 		{ required: true, minlength: 4, letterswithbasicpunc: true },
                    bcountry: 	{ required: true, minlength: 4, letterswithbasicpunc: true },
                    bpostcode: 	{ required: true, minlength: 4 },
                    btype:		{ required: true },
                    bnature:		{ required: true },
                    bfname: 		{ required: true, minlength: 4, letterswithbasicpunc: true },
                    blname: 		{ required: true, minlength: 4, letterswithbasicpunc: true },
                    title:		{ required: true, minlength: 4, letterswithbasicpunc: true },
                    busername: 	{ 
                            required: true, 
                            minlength: 4, 
                            alphanumeric:true,
                            remote: {
                                url: "check-username.php",
                                type: "post",
                                data: {
                                    busername: function() {
                                        return $("[name='busername']").val();
                                    }
                                }
                            }
                    },
                    bpassword: 	{ required: true, minlength: 4 },
                    brpassword: 	{ required: true, minlength: 4, equalTo: "#bpassword" }
                },
                messages: {
                    bname: {
                        required: "Please fill Firm Name field",
                    },
                    bemail: {
                        required: "Please enter your email",
                        email: "Please enter a valid email",
                        remote: "Email address is already registered"
                    },
                    bphone: {
                        required: "Please enter a phone number",
                    },
                    baddress: {
                        required: "Please enter a address",
                    },
                    bcity: {
                        required: "Please enter a city",
                    },
                    bpostcode: {
                        required: "Please enter a post code",
                    },
                    btype: {
                        required: "Please select the type of business",
                    },
                    bnature: {
                        required: "Please select the nature of business",
                    },
                    bfname: {
                        required: "Please enter representative first name",
                    },
                    blname: {
                        required: "Please enter representative last name",
                    },
                    title: {
                        required: "Please enter representative title",
                    },
                    busername: {
                        required: "Please enter a username",
                        remote: "Username already registered"
                    },
                    bpassword: {
                        required: "Please enter a password",
                        digits: "Only digits"
                    },
                    brpassword: {
                        required: "Please retype the password",
                        equalTo: "The passwords you typed do not match"
                    }
                }
            });

            $("#private-form").validate({
                rules: {
                    fname: 		{ required: true, minlength: 4, letterswithbasicpunc: true },
                    lname: 		{ required: true, minlength: 4, letterswithbasicpunc: true },
                    email: { 
                        required: true, 
                        email: true, 
                        remote: {
                            url: "check-email.php",
                            type: "post",
                            data: {
                                email: function() {
                                    return $("[name='email']").val();
                                }
                            }
                        }
                    },
                    phone: 		{ required: true, minlength: 9 },
                    fax: 			{ minlength: 9 },
                    address: 		{ required: true, minlength: 4 },
                    city: 		{ required: true, minlength: 4, letterswithbasicpunc: true },
                    state: 		{ required: true, minlength: 2, letterswithbasicpunc: true },
                    country: 		{ required: true, minlength: 4, letterswithbasicpunc: true },
                    postcode: 	{ required: true, minlength: 4 },
                    username: 	{ 
                            required: true, 
                            minlength: 4, 
                            alphanumeric:true,
                            remote: {
                                url: "check-username.php",
                                type: "post",
                                data: {
                                    username: function() {
                                        return $("[name='username']").val();
                                    }
                                }
                            }
                    },
                    password: 	{ required: true, minlength: 4 },
                    rpassword: 	{ required: true, minlength: 4, equalTo: "#password" }
                },
                messages: {
                    fname: {
                        required: "Please enter your first name",
                    },
                    lname: {
                        required: "Please enter your last name",
                    },
                    email: {
                        required: "Please enter your email",
                        email: "Please enter a valid email",
                        remote: "Email address is already registered"
                    },
                    phone: {
                        required: "Please enter your phone",
                    },
                    address: {
                        required: "Please enter your address",
                    },
                    city: {
                        required: "Please enter your city",
                    },
                    state: {
                        required: "Please enter your state",
                    },
                    postcode: {
                        required: "Please enter your post code",
                    },
                    username: {
                        required: "Please enter a username",
                        remote: "Username already registered"
                    },
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
