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
                <div class="caption-text-container"><b>Boat </b> Shipping Services </div>
                <div class="content-container-white caption-bg "></div>
            </div>
            <p>ETA Worldwid offers towable and non-towable boat transport services through numerous partners that deliver safe and secure boat transportation.</p>
            <blockquote>ETA Worldwid has access to a variety of equipment types to handle any boat shipping need, including boats that are NOT on trailers. We can provide specially engineered trailers with custom racking and bunking to ensure safe and secure transportation for your boat or watercraft.</blockquote>
        </div>
        <div class="seven columns">
            <div class="img-about"> <img class="" alt="about" src="{{url('assets/images/content/boatship.jpg')}}"> </div>
        </div>
    </div>

    <div class="container clearfix">

        <div class="row m-bot-35">
            <div class="sixteen columns">
                <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container"><b>Towable Service</b> for Boats</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
            </div>
            <div class="sixteen columns">
                <p>ETA Worldwid uses over 800 independent contractors who haul boats on trailers with one-ton pick-up trucks. To get a free estimate on towable boat transportation, please fill out and submit the quote form on the left side of this page. We will customize a quote to exact needs and type of boat.</p>
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