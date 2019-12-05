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
                    <h1 class="page-title">REQUEST SHIPPING QUOTE</h1>
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
                    <div class="caption-text-container">Get <b>Rates</b> & <b>Transit Times</b></div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                <p>Please provide information about your shipment to estimate the shipping cost.</p>
                <p>Rates shown here may be different than the actual charges for your shipment. Differences may occur based on actual weight, dimensions, currency conversion rate and other factors. Consult the applicable ETA Worldwide Service Guide for details.</p>
            </div>
        </div>
        
        <div class="row">
            <form action="{{url('/quote')}}" id="quote-form" method="POST" class="clearfix">
            @csrf
            @method('PUT')
                <div class="eight columns">
                    <div class="row">
                        <div class="caption-container-main m-bot-30 m-t-min-1">
                            <div class="caption-text-container">Shipping <b>From</b></div>
                            <div class="content-container-white caption-bg "></div>
                        </div>
                    </div>
                    <div class="row">
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Address</label>
                            <input type="text" name="faddress" id="faddress" placeholder="Address..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">City</label>
                            <input type="text" name="fcity" id="fcity" placeholder="City..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Country</label>
                            <input type="text" name="fcountry" id="fcountry" placeholder="Country..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">ZIP Code</label>
                            <input type="text" name="fpostcode" id="fpostcode" placeholder="ZIP Code..." class="text m-bot-20">
                        </fieldset>
                    </div>
                </div>
                
                <div class="eight columns">
                    <div class="row">
                        <div class="caption-container-main m-bot-30 m-t-min-1">
                            <div class="caption-text-container">Shipping <b>To</b></div>
                            <div class="content-container-white caption-bg "></div>
                        </div>
                    </div>
                    <div class="row">
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Address</label>
                            <input type="text" name="taddress" id="taddress" placeholder="Address..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">City</label>
                            <input type="text" name="tcity" id="tcity" placeholder="City..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Country</label>
                            <input type="text" name="tcountry" id="tcountry" placeholder="Country..." class="text m-bot-20">
                        </fieldset>
                        <fieldset class="field-1-3 left">
                            <label class="title-block">ZIP Code</label>
                            <input type="text" name="tpostcode" id="tpostcode" placeholder="ZIP Code..." class="text m-bot-20">
                        </fieldset>
                    </div>
                </div>
                
                <div class="eight columns">
                    <div class="row">
                        <div class="caption-container-main m-bot-30 m-t-min-1">
                            <div class="caption-text-container">Shipping <b>Details</b></div>
                            <div class="content-container-white caption-bg "></div>
                        </div>
                    </div>
                    <div class="row">
                        <!--<fieldset class="field-1-3 left">-->
                        <!--    <span class="title-block">Packaging required:</span>-->
                        <!--    <select name="packing" class="text m-bot-20">-->
                        <!--        <option value="">--</option>-->
                        <!--        <option value="yes">YES</option>-->
                        <!--        <option value="no">NO</option>-->
                        <!--    </select>-->
                        <!--</fieldset>-->

                        <!--<fieldset class="field-1-3 left smallinput">-->
                        <!--    <label class="title-block">Size (inch):</label>-->
                        <!--    <input type="text" name="length" id="length" placeholder="Length..." class="text m-bot-20">-->
                        <!--    <input type="text" name="width" id="width" placeholder="Width..." class="text m-bot-20">-->
                        <!--    <input type="text" name="height" id="height" placeholder="Height..." class="text m-bot-20">-->
                        <!--</fieldset>-->
                        
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Weight</label>
                            <input type="text" name="weight" id="weight" placeholder="Weight..." class="text m-bot-20">
                        </fieldset>
                        
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Shipping date</label>
                            <input type="text" name="datepicker" id="datepicker" placeholder="Shipping date..." class="text m-bot-20">
                        </fieldset>
                        
                        <fieldset class="field-1-3 left">
                            <label class="title-block" class="title-block">Extra information</label>
                            <textarea name="extrainfo" id="extrainfo" rows="5" class="text" placeholder="Extra information..."></textarea>
                        </fieldset>					
                    </div>
                </div>
                
                <div class="eight columns">
                    <div class="row">
                        <div class="caption-container-main m-bot-30 m-t-min-1">
                            <div class="caption-text-container">Contact <b>Details</b></div>
                            <div class="content-container-white caption-bg "></div>
                        </div>
                    </div>
                    <div class="row">
                    
                        <!--<fieldset class="field-1-3">-->
                        <!--    <span class="title-block">Gender:</span>-->
                        <!--    <select name="gender" class="text m-bot-20">-->
                        <!--        <option value="">--</option>-->
                        <!--        <option value="mr">Mr.</option>-->
                        <!--        <option value="ms">Ns.</option>-->
                        <!--    </select>-->
                        <!--</fieldset>-->
                        
                        <fieldset class="field-1-3">
                            <label class="title-block">First name</label>
                            <input type="text" name="fname" id="fname" placeholder="First name..." class="text m-bot-20">
                        </fieldset>
                        
                        <fieldset class="field-1-3">
                            <label class="title-block">Last name</label>
                            <input type="text" name="lname" id="lname" placeholder="Last name..." class="text m-bot-20">
                        </fieldset>
                        
                        <fieldset class="field-1-3">
                            <label class="title-block">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" class="text m-bot-20">
                        </fieldset>
                        
                        <fieldset class="field-1-3">
                            <label class="title-block">Telephone</label>
                            <input type="tel" name="phone" id="phone" placeholder="Telephone" class="text m-bot-20">
                        </fieldset>
                    </div>
                </div>
                
                <div class="sixteen columns m-bot-35">* In compliance with <a target="_blank" href="cargo_securing_guidelines_en.pdf"><b>US</b> Cargo Securing Guidelines</a></b></div>
                <div class="sixteen columns m-bot-35">The rate and transit time application only uses city name or zip/postal code to define transit time. ETA Worldwid only displays the city or zip/postal codes served by FedEx in the destination and origin countries you selected.</div>
                <div class="sixteen columns m-bot-35">
                    <fieldset class="left m-t-min-1">
                        <input type="submit" name="quote-formsubmit" value="Get Your Quote" class="button large">
                    </fieldset>
                </div>

            </form>
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
    @if(Auth::guest())
        @include('layouts.partials.switcher')
    @else
        @include('layouts.partials.switcher_account')
    @endif
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

            $("#quote-form").validate({
                rules: {
                    faddress: 	{ required: true, minlength: 4 },
                    fcity: 		{ required: true, minlength: 4 },
                    fcountry: 	{ required: true, minlength: 4 },
                    fpostcode: 	{ required: true, minlength: 4 },
                    taddress: 	{ required: true, minlength: 4 },
                    tcity: 		{ required: true, minlength: 4 },
                    tcountry: 	{ required: true, minlength: 4 },
                    tpostcode: 	{ required: true, minlength: 4 },
                    packing: 		"required",
                    length: 		{ required: true, digits: true },
                    width: 		{ required: true, digits: true },
                    height: 		{ required: true, digits: true },
                    weight: 		{ required: true, digits: true },
                    datepicker: 	"required",
                    gender: 		"required",
                    fname: 		{ required: true, minlength: 4 },
                    lname: 		{ required: true, minlength: 4 },
                    email: 		{ required: true, email: true },
                    phone: 		{ required: true, minlength: 4 }
                },
                messages: {
                    faddress: {
                        required: "Please enter the address",
                        minlength: "Your address must consist of at least 4 characters"
                    },
                    fcity: {
                        required: "Please enter the city",
                        minlength: "Your city must consist of at least 4 characters"
                    },
                    fcountry: {
                        required: "Please enter the country",
                        minlength: "Your country must consist of at least 4 characters"
                    },
                    fpostcode: {
                        required: "Please enter the post code",
                        minlength: "Your post code must consist of at least 4 characters"
                    },
                    taddress: {
                        required: "Please enter the address",
                        minlength: "Your address must consist of at least 4 characters"
                    },
                    tcity: {
                        required: "Please enter the city",
                        minlength: "Your city must consist of at least 4 characters"
                    },
                    tcountry: {
                        required: "Please enter the country",
                        minlength: "Your country must consist of at least 4 characters"
                    },
                    tpostcode: {
                        required: "Please enter the post code",
                        minlength: "Your zip must consist of at least 4 characters"
                    },
                    packing: "Please select the packing",
                    length: {
                        required: "Please enter the length",
                        digits: "Only digits"
                    },
                    width: {
                        required: "Please enter the width",
                        digits: "Only digits"
                    },
                    height: {
                        required: "Please enter the height",
                        digits: "Only digits"
                    },
                    weight: {
                        required: "Please enter the weight",
                        digits: "Only digits"
                    },
                    datepicker: "Please select a date",
                    gender: "Please select your gender",
                    fname: {
                        required: "Please enter your first name",
                        minlength: "Your first name must consist of at least 4 characters"
                    },
                    lname: {
                        required: "Please enter your last name",
                        minlength: "Your last name must consist of at least 4 characters"
                    },
                    email: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address",
                    },
                    phone: {
                        required: "Please enter your phone number",
                        minlength: "Please enter a valid phone number"
                    }
                }
            });
        });

        
    </script>
@stop