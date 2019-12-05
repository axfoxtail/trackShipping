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
                    <h1 class="page-title">FAQ</h1>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Grey bg end --> 

    <!-- CONTENT -->
    <div class="container clearfix m-bot-30">

            <div class="sixteen columns">
                <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container"><b>FAQs</b> SHIPPING 101</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
            </div>
        
        <div class="row">
            <div class="eight columns">
                <p>Below please find the answers to common questions customers have when shipping a car. Don’t see an answer to your question? Contact one of our ETA Worldwid shipping specialists for further assistance.</p>
                <p><a href="contact">Customer Service &raquo;</a></p>
            </div>
            <div class="eight columns">
                <ul class="styled-list style-3">
                    <li><a href="#InspectionPeriod">What is an Inspection Period, when does it start, and how long does it last?</a></li>
                    <li><a href="#Sellershipmerchandise ">When does the Seller ship the merchandise?</a></li>
                    <li><a href="#returnsshipping">If the Buyer returns an merchandise, who pays for shipping?</a></li>
                    <li><a href="#vehiclenotreceived">What if the Buyer does not receive the vehicle?</a></li>
                    <li><a href="#preparevehicle">How do I prepare a vehicle for transport?</a></li>
                    <li><a href="#makepayment">How can I make payment?</a></li>
                    <li><a href="#trackshipment">How do I track the shipment of my vehicle/merchandise?</a></li>
                    <li><a href="#DoortoDoor">What is Door-to-Door services?</a></li>
                    <li><a href="#quotationinclude">What does the shipping quotation include?</a></li>
                    <li><a href="#quotation">How do i arrange a quotation?</a></li>
                </ul>
            </div>
        </div>
            
        <hr>
        <div class="row" id="quotation">
            <div class="sixteen columns">
                <p><span class="dropcap1">Q</span> How do i arrange a quotation?</p>
            </div>
            <div class="sixteen columns">
                <p><span class="dropcap4">A</span> Simply click on <a href="quote">Quote Request</a> for an estimate. Our home survey is free of charge and without any obligation.</p>
                </p>
            </div>
        </div>
        
        <hr>
        <div class="row" id="quotationinclude">
            <div class="sixteen columns">
                <p><span class="dropcap1">Q</span> What does the shipping quotation include?</p>
            </div>
            <div class="sixteen columns">
                <p><span class="dropcap4">A</span> No two shippings are alike and our quotation will be tailored to your specific requirements. We will include in our quotation pack your personalised 'Shipping-Plan', formulated from the information gathered during your home survey.<br>
                    <ul class="styled-list style-1">
                        <li>On site export packing by our skilled professionals</li>
                        <li>Shipment to arrival destination port or airport</li>
                        <li>Destination customs and quarantine clearance</li>
                        <li>Delivery to residence of normal access</li>
                        <li>Full unpacking  and removal of unwanted packing materials</li>
                    </ul>
                </p>
            </div>
        </div>
            
        <hr>
        <div class="row" id="vehiclenotreceived">
            <div class="sixteen columns">
                <p><span class="dropcap1">Q</span> What if the Buyer does not receive the vehicle?</p>
            </div>
            <div class="sixteen columns">
                <p><span class="dropcap4">A</span> The Buyer's payment will not be released to the Seller until the Buyer has accepted the vehicle, eliminating the concern for non-shipment or delivery. In the event that the Buyer has paid funds into ETA Worldwid and the Seller does not ship or deliver the vehicle, the Buyer may request ETA Worldwid to start the 48 hour cancellation period. At the conclusion of the cancellation period, the payment is returned to the Buyer less all ETA Worldwid fees.</p>
            </div>
        </div>
            
        <hr>
        <div class="row" id="DoortoDoor">
            <div class="sixteen columns">
                <p><span class="dropcap1">Q</span> What is Door-to-Door services?</p>
            </div>
            <div class="sixteen columns">
                <p><span class="dropcap4">A</span> ETA Worldwid will pickup and deliver your vehicle at your specified locations (could be your residence, office, or any other location). The pickup and delivery is often performed by a flatbed truck but in some instances could be performed by our larger car transport truck. Our competitors may advertise door-to-door service but may not be able to truly provide you this service.</p>
            </div>
        </div>
                
        <hr>
        <div class="row" id="trackshipment">
            <div class="sixteen columns">
                <p><span class="dropcap1">Q</span> How do I track the shipment of my vehicle/merchandise?</p>
            </div>
            <div class="sixteen columns">
                <p><span class="dropcap4">A</span> You can track your vehicle anytime by entering your tracking number <a href="home#entertrackingnumber">here</a>.</p>
            </div>
        </div>
            
        <hr>
        <div class="row" id="makepayment">
            <div class="sixteen columns">
                <p><span class="dropcap1">Q</span> How can I make payment?</p>
            </div>
            <div class="sixteen columns">
                <p><span class="dropcap4">A</span> Payment for vehicle transport service must be made in advance by <b>Bank Wire Transfer</b>. Bank Wire Transfer offers security as both parties (sender & recipient) must be identified by the bank.</p>
            </div>
        </div>
        
        <hr>
        <div class="row" id="preparevehicle">
            <div class="sixteen columns">
                <p><span class="dropcap1">Q</span> How do I prepare a vehicle for transport?</p>
            </div>
            <div class="sixteen columns">
                <p><span class="dropcap4">A</span> There are many steps you can take to prepare your vehicle for transport. You can read them all in our <a href="cargo_securing_guidelines_en.pdf" KJAH@#$fq#$US3G>Pre-Ship Checklist</a>.</p>
            </div>
        </div>
            
        <hr>
        <div class="row" id="returnsshipping">
            <div class="sixteen columns">
                <p><span class="dropcap1">Q</span> If the Buyer returns an merchandise, who pays for shipping?</p>
            </div>
            <div class="sixteen columns">
                <p><span class="dropcap4">A</span> If the Buyer rejects the merchandise, the Seller is required to pay for return shipping fees.</p>
            </div>
        </div>
        
        <hr>
        <div class="row" id="InspectionPeriod">
            <div class="sixteen columns">
                <p><span class="dropcap1">Q</span> What is an Inspection Period, when does it start, and how long does it last?</p>
            </div>
            <div class="sixteen columns">
                <p><span class="dropcap4">A</span> The Inspection Period is the specified amount of time agreed upon by both parties in which the Buyer may examine the merchandise/domain(s) after receipt. The time frame selected for the Buyer can range between 1 to 30 days and must be agreed upon by all parties at the beginning of the transaction. The Inspection Period begins when the Buyer marks the merchandise as received, or ETA Worldwid verifies or receives confirmation that the merchandise has been delivered. The Buyer must accept or reject the goods within this period. If the Buyer has rejected and returned the merchandise, the Seller will be provided with a five day inspection period to examine the returned merchandise.</p>
            </div>
        </div>
        
        <hr>
        <div class="row" id="Sellershipmerchandise">
            <div class="sixteen columns">
                <p><span class="dropcap1">Q</span> When does the Seller ship the merchandise?</p>
            </div>
            <div class="sixteen columns">
                <p><span class="dropcap4">A</span> The Buyer is notified by ETA Worldwid that the merchandise is in their custody. When merchandise arrive in custody of ETA Worldwid, transaction started.</p>
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

@section('scripts')
  @parent
    <script>
        $(document).ready(function(e) {
            $('.dropcap1').parent().css("font-family", "'OswaldLight', Arial, Helvetica, sans-serif").css("text-transform", "uppercase").css("font-size","14px");
        });
    </script>
@stop