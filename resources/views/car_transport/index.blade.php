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
                    <h1 class="page-title">PRIVACY POLICY</h1>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Grey bg end --> 

        <!-- PAGE TITLE -->
        <div class="container m-bot-35 clearfix">
            <div class="sixteen columns">
                <div class="page-title-container clearfix">
                    <h1 class="page-title">SERVICES</h1>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Grey bg end --> 

    <!-- CONTENT -->
    <div class="container clearfix m-bot-30">
        <div class="nine columns">
            <div class="caption-container-main m-bot-30 m-t-min-1">
                <div class="caption-text-container"><b>Car </b> Shipping Services </div>
                <div class="content-container-white caption-bg "></div>
            </div>
            <p>You may wish to have your auto delivered directly to your door, or you may wish to pick your car up at one of over 85 terminal locations across the country. Most of our vehicles ship onboard an enclosed transport to ensure maximum protection for your vehicle during its journey.</p>
            <blockquote>We can ship your bike anywhere in the World! Our representatives are available everyday to help you understand the shipping process and plan your move.</blockquote>
        </div>
        <div class="seven columns">
            <div class="img-about"> <img class="" alt="about" src="{{url('assets/images/content/carship.jpg')}}"> </div>
        </div>
    </div>

    <div class="container clearfix">

        <div class="row m-bot-35">
            <div class="sixteen columns">
                <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container">ETA Worldwid Provides Full Service <b>International Shipping</b></div>
                    <div class="content-container-white caption-bg "></div>
                </div>
            </div>
            <div class="sixteen columns">
                <p>Our ETA Worldwid Global Services division is an International Freight Forwarder and NVOCC specializing in overseas car shipping for a complete range of vehicles, customs clearance filings, and international shipping services for specialized freight including heavy grade equipment, boats and air freight.</p>
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
    @if(Auth::guest())
        @include('layouts.partials.switcher')
    @else
        @include('layouts.partials.switcher_account')
    @endif
    <!-- /.SWITCHER -->



    <p id="back-top"> <a href="#top" title="Back to Top"><span></span></a> </p>

</div>


@endsection