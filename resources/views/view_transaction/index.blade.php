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
                    <h1 class="page-title">My Account - <b><b>{{Auth::user()->fname}} </b> <b>{{Auth::user()->lname}}</b></b></h1>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Grey bg end --> 


    <!-- CONTENT -->
    <div class="container clearfix m-bot-30">
        <div class="row">
        
            <!-- START MENIU -->
            @include('layouts.partials.account_submenu')
            <!-- END MENIU -->
            
            <!-- START MY ACCOUNT -->
            <div class="twelve columns">
                
                <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container">Transaction: <b><a class="dark" href="tracking.php?tr=PR15724648873UN">{{$transaction->trackingnumber}}</a></b></div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                
                <!-- RECEIPT START -->
                <div class="receiptView">
                
                    <!-- TOP SECTION -->
                    <div class="receipt-wrapper">
                        <div class="receipt-main-section">
                            <!-- RECEIPT HEADER TITLE & PRICE -->
                            <h3 class="title-block m-bot-10" style="position:relative">{{$transaction->extra}} <span class="receipt-amount">{{$transaction->price}} USD</span></h3>
                            <p>Online purchase<p>
                            <!-- END RECEIPT HEADER TITLE & PRICE -->
                            
                            <!-- DATE -->
                            <div class="receipt-section dark">
                                <div>{{$transaction->created_at}}</div>
                            </div>
                            <!-- END DATE -->
                            <div class="receipt-section">
                                <p><strong>*</strong> All the transaction, payment and personal information is considered confidential and will not be released under any circumstances.</p>
                                <p><strong>*</strong> Our main and constant priority is the safety of our customers.</p>
                            </div>
                            
                            <!-- ORDER DETAILS -->
                            <div class="receipt-section">
                                <p>ETA Worldwid Shipment Details</p>
                            </div>
                            
                            <table width="100%" cellspacing="0" class="dark m-bot-30">
                                <thead>
                                    <tr>
                                        <th style="width: 5%"><h4 class="title-block"><b>Qty</b></h4></th>
                                        <th style="width: 10%"></th>
                                        <th style="width: 65%%"><h4 class="title-block"><b>Item</b></h4></th>
                                        <th style="width: 15%; text-align:right"><h4 class="title-block"><b>Price</b></h4></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding-left: 13px">1</td>
                                        <td>&nbsp;</td>
                                        <td><a class="dark" href="tracking.php?tr=PR15724648873UN">{{$transaction->extra}}</a></td>
                                        <td style="text-align: right; padding-right: 13px">{{$transaction->price}} USD</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <div class="receipt-section">
                                <p style="position:relative">
                                    <button class="button medium" href="#payinfo" id="paybutton"><i class="icon-money"></i> Make Payment</button>
                                    <div class="receipt-amount dark">
                                        <div style="text-align:right">TOTAL</div>
                                        <div style="text-align:right">{{$transaction->price}} USD</div>
                                    </div>
                                </p>
                            </div>
                            <!-- END ORDER DETAILS -->

                            <!-- ADRESE -->
                            <div class="receipt-section">
                                <p>Purchasing from</p>
                                <div class="dark">
                                    <b><a href="user_page.php?us=396" class="dark">Paul James Brighouse</a></b>
                                    <br/>
                                    <b>{{$faddress->address}}  </b><b>{{$faddress->city}}</b>	<br/>
                                    <b>{{$faddress->postcode}}  </b><b>{{$faddress->country}}</b>							</div>
                            </div>
                            <div class="receipt-section">
                                <p>Delivery address</p>
                                <div class="dark">
                                <b>{{$taddress->address}} </b><b>{{$taddress->city}}</b>	<br/>
                                <b>{{$taddress->postcode}} </b><b>{{$taddress->country}}</b>						</div>
                            </div>
                            <!-- END ADRESE -->

                            <!-- TRACKING # -->
                            <div class="receipt-section">
                                <p>Transaction Tracking Number</p>
                                <div class="dark"> #<b><a class="dark" href="tracking.php?tr=PR15724648873UN">{{$transaction->trackingnumber}}</a></b> </div>
                                <p><b>*</b> Track your package or shipment with <a href="tracking?tr=PR15724648873UN">ETA Worldwid Tracking</a>.</p>
                            </div>
                            
                            <div class="receipt-section">
                                <p> <strong>*</strong> ETA Worldwid LEVEL 2 member, <b>Paul James Brighouse</b> as the Seller, initiated a new transaction through ETA Worldwid program and registered you, <b>Stephan Korn</b> LEVEL 1 member, as the Buyer.</p>
                                <p> <strong>*</strong> We verified all the details of this transaction and we concluded that they are accurate and the transaction is approved. Please follow our instructions to complete the transaction safely. Your purchase is protected for up to 11.700,00 USD.</p>
                            </div>

                            <div class="receipt-section">
                                <p>Questions or concerns?</p>
                                <p>Our <a href="contact">Have Questions</a> page highlights <a href="faq">FAQs: CAR SHIPPING 101</a>, which provides helpful answers to common questions.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END TOP SECTION -->
                    
                    <!-- MIDDLE SECTION -->
                    <div class="receipt-wrapper">
                        <div class="title-block white m-bot-10">How to make the payment</div>
                        <div class="receipt-section whitish">
                            <p><b>*</b> Payment must be submitted through Bank to Bank transfer to a designated Regional Manager in charge of this transaction.</p>
                            <span><b>*</b> ETA Worldwid will secure the payment until the buyer receives, inspects and accepts the item. Or, if it will be the case, ETA Worldwid will refund the payment to the buyer.</span>
                            <ul style="list-style-type: disc; margin-bottom: 0; padding-left: 13px" class="white">
                                <li>Make the payment using our ETA Worldwid agent bank details (Check bellow for the agent details).</li>
                                <li>Confirm the payment to ETA Worldwid.</li>
                                <li>Email us the copy of the receipt at: <a href="mailto:office@proceed-shipping.com" target="_top" subject="Payment info - TR: PR15724648873UN">office@proceed-shipping.com</a> or by FAX: </li>
                            </ul>
                        </div>
                    </div>
                    <!-- MIDDLE SECTION -->
                    
                    <!-- NEXT SECTION -->
                    <div class="receipt-wrapper" id="payinfo">
                        <div class="receipt-main-section">
                        
                            <!-- RECEIPT HEADER TITLE & PRICE -->
                            <h3 class="title-block m-bot-10 m-t-min-1">Payment information</h3>
                            <p>ETA Worldwid Regional Manager Bank Details<p>
                            <!-- END RECEIPT HEADER TITLE & PRICE -->
                                            
                            <div class="receipt-section">
                                <p>
                                <table width="100%" cellspacing="0" >
                                    <tr>
                                        <td style="width: 110px">Account Name:</td>
                                        <td class="dark">Proceed Ltd</td>
                                    </tr>
                                    <tr>
                                        <td>Bank Name:</td>
                                        <td class="dark">Hsbc Uk Bank Plc</td>
                                    </tr>
                                    <tr>
                                        <td>Sort Code:</td>
                                        <td class="dark">40-46-13</td>
                                    </tr>
                                    <tr>
                                        <td>Account Number:</td>
                                        <td class="dark">32129051</td>
                                    </tr>
                                                                    <tr>
                                        <td>IBAN:</td>
                                        <td class="dark">GB34HBUK40461332129051</td>
                                    </tr>
                                    <tr>
                                        <td>SWIFT:</td>
                                        <td class="dark">HBUKGB4109P</td>
                                    </tr>
                                    <tr>
                                        <td>Bank Address:</td>
                                        <td class="dark">328 High Street, West Bromwich B70 8dj, United Kingdom</td>
                                    </tr>
                                    <tr>
                                        <td>Transfer Type:</td>
                                        <td class="dark"><b>Bank To Bank Transfer</b></td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <!-- END NEXT SECTION -->
                    
                    <!-- LAST SECTION -->
                    <div class="receipt-wrapper">
                        <div class="title-block white m-bot-10">Protection and refund</div>
                        <div class="receipt-section whitish">
                            <p>The item is insured for damage during the transportation, inspection process and prior to the physical sale. You have 7 days to inspect the item and the option to use an independent Inspection Authority to make sure that the item is as described.</p>
                            <p class="white"><b>1.</b> If you decide to keep the item, we will forward the payment to the seller. </p>
                            <p class="white"><b>2.</b> In case the buyer will not receive the product in time or as was described in the listing, the buyer will get a full refund from ETA Worldwid by wire transfer. During the Buyer Inspection Period, Buyer may reject one or more items for any reason. Upon such rejection, ETA Worldwid will send both, Buyer and Seller, an email stating Buyer's decision to reject and return the goods and Buyer agrees to promptly ship good to Seller within ten (10) calendar days at seller expense, a full refund is immediately sent to the buyer.</p>
                            <p>For safety reasons the payment details will be dealt with the utmost security and will not be handed to any third parties. ETA Worldwid will be in full control of the funds as soon as it reaches the regional account. Once the funds have been sent to our regional account, no one but the Purchaser will have access to it.</p>
                            <p>In order to properly validate your payment and avoid transfer related issues, please forward us a copy of the transfer receipt to us at <span style="color: #ffea00">office@proceed-shipping.com</span>. We hereby take full responsibility for the security of the transfer. please allow us 24 hours to verify payment. Sending the payment by any other method of payment will void this transaction and your right to refund.</p>
                        </div>
                    </div>
                    <!-- END LAST SECTION -->


                </div>
                <!-- END RECEIPT -->
                
            </div>
            <!-- END MY ACCOUNT -->

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
    @include('layouts.partials.switcher_account')
    <!-- /.SWITCHER -->





    <p id="back-top"> <a href="#top" title="Back to Top"><span></span></a> </p>

</div>


@endsection

@section('scripts')
  @parent
<script>
$(document).ready(function() {
	$('#paybutton').click(function(){
		$('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		}, 1000);
		return false;
	});
});
</script>

@stop
