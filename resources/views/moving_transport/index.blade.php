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
    <div class="container clearfix m-bot-20">
        <div class="nine columns">
            <div class="caption-container-main m-bot-30 m-t-min-1">
                <div class="caption-text-container">International <b>Moving Services</b> </div>
                <div class="content-container-white caption-bg "></div>
            </div>
            <p>We move your household goods and personal effects. ETA Worldwid has been moving and relocating personal effects and household goods from US to all major cities since 1997.</p>
            <blockquote>When moving home or relocating, whether it is for business or personal reasons, one of the biggest challenges is finding a trust worthy company who will take the stress and hassle out of the move for you! Here at ETA Worldwid, our team of professional movers will make sure that the process of moving house will be simple and trouble free.</blockquote>
        </div>
        <div class="seven columns m-top-30">
            <div class="img-about"> <img class="" alt="about" src="{{url('assets/images/content/moveship.jpg')}}"> </div>
        </div>
    </div>

    <div class="container clearfix">

        <div class="row">
            <div class="sixteen columns">
                <div class="caption-container-main m-bot-10 m-t-min-1">
                    <div class="caption-text-container">US <b>Removal Services</b></div>
                    <div class="content-container-white caption-bg "></div>
                </div>
            </div>
        </div>
        
        <div class="row m-bot-35">
            <div class="five columns">
                <p>Our ETA Worldwid Global Services division is an International Freight Forwarder and NVOCC specializing in overseas car shipping for a complete range of vehicles, customs clearance filings, and international shipping services for specialized freight including heavy grade equipment, boats and air freight.</p>
            </div>
            <div class="eleven columns">
                <ul class="styled-list style-1">
                    <li>An economy baggage service, very useful to students who wish to use a cost effective method of moving cartons from A to B.</li>
                    <li>Part Load service, for removals that may not be a full household and where as a client you have some flexibility in your schedule. If you are in no immediate rush and happy to wait 2-3 weeks before delivery, this is a good method of movement at economical rates.</li>
                    <li>Direct service, normally for a full house move. The removal crew would pack and load your consignment, drive directly to your new residence, and carry out the delivery.</li>
                    <li>If storage is required we have safe, secure facilities for storage of your personal effects.</li>
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