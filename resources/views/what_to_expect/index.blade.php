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
                    <h1 class="page-title">WHAT TO EXPECT</h1>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Grey bg end --> 

    <!-- CONTENT -->
    <div class="container clearfix m-bot-30">

        <div class="row">
            <div class="sixteen columns">
                <div class="caption-container-main m-bot-20 m-t-min-1">
                    <div class="caption-text-container"><b>Proceed Shipping Limited</b> is here to help with your car transport needs</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="four columns">
                <div class="img-about"> <img class="" alt="about" src="{{url('assets/images/content/motoship.jpg')}}"> </div>
            </div>
            <div class="eleven columns">
                <p>There is more to shipping a vehicle from one location to another than meets the eye. With more than 17 years of experience, Proceed Shipping Limited understands the intricacies involved better than anyone.</p>
                <p>If you are new to the process, you may not know what questions to ask while choosing the car shipping service that is right for you. Not to worry. We provide you with the service that you and your vehicle deserve. Proceed Shipping Limited will guide you through the vehicle transport process from start to finish.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="sixteen columns">
                <div class="caption-container-main m-bot-20 m-t-min-1">
                    <div class="caption-text-container">More Information on <b>auto transport</b></div>
                    <div class="content-container-white caption-bg "></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="five columns">
                <p>Our <a href="contact-us.php">Have Questions</a> page highlights <a href="faq.php">FAQs: CAR SHIPPING 101</a>, which provides helpful answers to common questions, including:</p>
            </div>
            <div class="eleven columns">
                <ul class="styled-list style-6">
                    <li><a href="faq.php#type">What types of vehicles can I ship with Proceed Shipping Limited?</a></li>
                    <li><a href="faq.php#advance">How far in advance should I schedule the transport of my vehicle?</a></li>
                    <li><a href="faq.php#green">How does auto shipping allow for a greener planet?</a></li>
                    <li><a href="faq.php#prepare">How do I prepare my vehicle for transport?</a></li>
                    <li><a href="faq.php#payment">How can I make payment?</a></li>
                    <li><a href="faq.php#track">How do I track the shipment of my vehicle?</a></li>
                </ul>
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