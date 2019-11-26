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
                <div class="caption-text-container">What <b>We Ship</b> </div>
                <div class="content-container-white caption-bg "></div>
            </div>
            <p> There is a special bond between most cars and their owners. Whether your vehicle is the first car you ever bought, the tractor you need to get your work done, the boat you spent your summers in, or the RV taking you around the country, Proceed Shipping Limited understands this precious bond and does everything to protect it.</p>
            <blockquote>Our expert associates at Proceed Shipping Limited understand that you might be nervous about the thought of putting such an expensive investment in the hands of someone else to protect.</blockquote>
        </div>
        <div class="seven columns">
            <div class="img-about"> <img class="" alt="about" src="{{url('assets/images/content/services.jpg')}}"> </div>
        </div>
    </div>

    <div class="container clearfix">

        <div class="row">
            <div class="sixteen columns">
                <p> Don't worry. Proceed Shipping Limited Auto Shippers has more than 15 years of time-tested experience, knowledge and capabilities to ship any vehicle. No matter what vehicle you are shipping or where you are shipping it, let the experts at Proceed Shipping Limited handle it.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="sixteen columns">
                <div class="caption-container-main m-t-min-1">
                    <div class="caption-text-container">Proceed Shipping Limited <b>Vehicle and Auto Shipping</b> </div>
                    <div class="content-container-white caption-bg "></div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="nine columns">
                <p> If you are <b>moving / selling / buying</b> a car or motorbike, Proceed Shipping Limited will be able to assist. Our experienced team will help you look at the various options available to you to meet your Car or Motorbike shipping requirements whilst remaining in line with international vehicle shipping regulations. We provide very competitive rates for both roll on roll off and containerised shipments for your vehicles. We can ship anywhere in the World. All motorbikes will either be moved on flat racks strapped and secured or be shipped in motorcycle crates.</p>
            </div>
            <div class="seven columns">
                <ul class="styled-list style-1">
                    <li>Inspection and export preparation</li>
                    <li>Steam cleaning and certification</li>
                    <li>Movement by roll on – roll off vessels</li>
                    <li>Shipping in 20ft or 40ft steel containers</li>
                    <li>Option to combine with personal effects</li>
                    <li>Customs clearance</li>
                    <li>Delivery to residence and inspection</li>
                </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="sixteen columns">
                <div class="caption-container-main m-t-min-1">
                    <div class="caption-text-container">Selling your Car or Motorbike </div>
                    <div class="content-container-white caption-bg "></div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="sixteen columns">
                <p>If you are importing your vehicle, we can offer import clearance, collection and delivery service throughout US.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="five columns">
                <div class="img-about"> <img class="" alt="about" src="{{url('assets/images/content/services1.jpg')}}"> </div>
            </div>
            <div class="eleven columns">
                <blockquote>
                    <ul class="styled-list style-1">
                        <li>Collection from the port</li>
                        <li>Unloading from container or trailer</li>
                        <li>Cleaning and preparation</li>
                        <li>Delivery to residence</li>
                        <li>Customs clearance at port of entry</li>
                        <li>Inspection and importation condition report</li>
                    </ul>
                </blockquote>
            </div>
        </div>
        
        <div class="row m-bot-35">
            <div class="eight columns">
                <p> Proceed Shipping Limited vehicle transport service ships a large variety of car and vehicle types including:</p>
            </div>
            <div class="columns">
                <ul class="styled-list style-1">
                    <li><a href="cars-transport.php">Cars</a></li>
                    <li><a href="">Trucks</a></li>
                    <li><a href="motorcycle-transport.php">Motorcycles</a></li>
                    <li><a href="motorcycle-transport.php">ATVs</a></li>
                </ul>
            </div>
            <div class="columns">
                <ul class="styled-list style-1">
                    <li><a href="">Vans</a></li>
                    <li><a href="">Recreational Vehicles (RV)</a></li>
                    <li><a href="">Antique Cars</a></li>
                    <li><a href="boats-transport.php">Boats</a></li>
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
	