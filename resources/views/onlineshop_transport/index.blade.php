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
                <div class="caption-text-container"> ONLINE <b>SHOP AND SHIP </b> </div>
                <div class="content-container-white caption-bg "></div>
            </div>
            <p class="m-bot-25">Buying and selling vehicles online has never been easier or more secure. Proceed Shipping Limited's simple step process ensures money transfer and vehicle delivery with every sale.</p>
            <a class="button large" href="start-transaction.php"><i class="icon-edit"></i>START YOUR <b>TRANSACTION</b></a>
            <blockquote>
                <b>The benefits</b><br/>
                Both Buyers and Sellers benefit from using Proceed Shipping Limited as a neutral third party to monitor and transact the exchange of payment and vehicle.
            </blockquote>
        </div>
        <div class="seven columns">
            <div class="img-about"> <img class="" alt="about" src="{{url('assets/images/content/onlinepurchases.jpg')}}"> </div>
        </div>
    </div>

    <div class="container clearfix">

        <div class="row">
            <div class="sixteen columns">
                <blockquote>
                    <b>Peace of mind for vehicle Sellers</b><br/>
                    The Seller lives the vehicle to Proceed Shipping Limited. The Buyer sends the agreed upon payment to Proceed Shipping Limited. After verifying funds, we deliver the vehicle to the Buyer. Protected from fraudulent checks and money order scams, the Seller has peace of mind knowing funds are behind the Proceed Shipping Limited shield.
                </blockquote>
                <blockquote>
                    <b>Confidence for vehicle Buyers</b><br/>
                    We do not release the money to the Seller until the vehicle has been received and accepted by the Buyer. This provides online car buyers the opportunity to inspect the vehicle before sellers are paid.
                </blockquote>
            </div>
        </div>

        <div class="row m-bot-35">
            <div class="sixteen columns">
                <p>Proceed Shipping Limited reduces the risk of online fraud for both buyers and sellers. As a trusted third party, Proceed Shipping Limited collects, holds and releases funds and merchandise, according to transaction terms agreed upon by the Buyer and Seller. You can easily sell or buy vehicles, websites, domain names, general merchandise and nearly anything else. We pioneered the process of online transaction services and are the leading provider of secure business and consumer transaction management on the Internet.</p>
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