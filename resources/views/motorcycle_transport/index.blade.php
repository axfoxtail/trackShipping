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
                    <h1 class="page-title">SERVICES</h1>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Grey bg end --> 

    <!-- CONTENT -->
    <div class="container clearfix">
        <div class="nine columns">
            <div class="caption-container-main m-bot-30 m-t-min-1">
                <div class="caption-text-container"><b>Motorcycle and ATV</b> Shipping Services </div>
                <div class="content-container-white caption-bg "></div>
            </div>
            <p>We ship over 4,000 motorcycles and ATVs annually including personal motorcycles, corporate relocations, and dealer transfers.</p>
            <blockquote>We can ship your bike anywhere in the World! Use our online quoting tool to get an instant quote and see how affordable it is to ship your motorcycle or ATV. Our representatives are available everyday to help you understand the shipping process and plan your move.</blockquote>
        </div>
        <div class="seven columns">
            <div class="img-about"> <img class="" alt="about" src="{{url('assets/images/content/motoship.jpg')}}"> </div>
        </div>
    </div>

    <div class="container clearfix">

        <div class="row">
            <div class="sixteen columns">
                <p> You can track the shipment of your motorcycle or ATV anytime with our convenient online tracking. All you need is your Proceed Shipping Limited <b>tracking number</b>.</p>
            </div>
        </div>
            
        <div class="row">
            <div class="nine columns">
                <p>When you need to ship your motorcycle or ATV, it is important that you choose a carrier who shares your passion for these beautiful machines. Motorcycle and powersports enthusiasts are best served to enlist a motorcycle shipping company that understands the intricacies involved in the handling and movement of these types of vehicles. Proceed Shipping Limited understands, and we will manage your shipment the right way from start to finish.</p>
            </div>
            <div class="seven columns">
                <ul class="styled-list style-1">
                    <li>Purchased a motorcycle or ATV out of state from an online auction (<b>eBay, Craiglist, autotrader.com, cars.com</b>) or classified ad.</li>
                    <li>Relocating to a different state.</li>
                    <li>Transporting a motorcycle or ATV to a vacation or seasonal home.</li>
                    <li>Attending a motorcycle rally, auction, or show.</li>
                </ul>
            </div>
        </div>
        
        <div class="row m-bot-35">
            <div class="sixteen columns">
                <p>Our Proceed Shipping Limited Specialized Shipping division handles the movement of motorcycles longer than 106", motorcycles with sidecars, trikes, and UTVs. Proceed Shipping Limited can ship any vehicle, anywhere! Call today to get your custom quote.</p>
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

    