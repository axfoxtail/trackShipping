@extends('layouts.app')

@section('content')
    
    
<div id="wrap" class="boxed">

    <div class="grey-bg"> <!-- Grey bg  -->    

        <!-- HEADER -->
        @include('layouts.partials.header')
        <!-- ./HEADER -->
    <b id="page" page="contactpage"></b> 

    <div class="container  clearfix">
        <div class="sixteen columns">
            <div class="page-title-container clearfix">
                <h1 class="page-title">Track Packages & Freight.</h1>
            </div>	
        </div>
    </div>	
        
    </div>
    <!-- Grey bg end -->	

    <!-- CONTACT FORM-->
    <div class="container clearfix">

        <!-- LEFT PANNEL -->
        <div class="ten columns m-bot-35">
        
            
            <div class="caption-container-main m-bot-30">
                <div class="caption-text-container"><b>PR15724648873UN</b> - Shipment Details</div>
                <div class="content-container-white caption-bg"></div>
            </div>
            
            <p class="m-bot-20">You can view shipment details, including package information, shipping charges, shipment status and location.</p>
            
                    
            <div class="five columns m-bot-35" style="margin-left:0">
                <div class="caption-container-main m-bot-30">
                    <div class="caption-text-container"><b>Sender</b> Details</div>
                    <div class="content-container-white caption-bg"></div>
                </div>
                
                <table width="100%" class="trackingtable">
                    <tr>
                        <td>Full Name:</td>
                        <td><b>Paul James Brighouse</b></td>
                    </tr>	
                    <tr>
                        <td>E-mail:</td>
                        <td><b>brighousepj1964@gmail.com</b></td>
                    </tr>
                    <tr>
                        <td>Mailing address:</td>
                        <td><b>7245 2nd Ave Sw Seattle, Wa, 98108, United States</b></td>
                    </tr>	
                </table>
            </div>
            
            <div class="five columns m-bot-35"  style="margin-right:0">
                <div class="caption-container-main m-bot-30">
                    <div class="caption-text-container"><b>Shipment</b> Details</div>
                    <div class="content-container-white caption-bg"></div>
                </div>
                
                <table width="100%" class="trackingtable">
                    <tr>
                        <td>Content:</td>
                        <td><b>1967 Porsche 912 Karmann Coupe</b></td>
                    </tr>	
                    <tr>
                        <td>Value:</td>
                        <td><b>11.700,00 USD</b></td>
                    </tr>	
                    <tr>
                        <td>Weight:</td>
                        <td><b>2200 Lbs</b></td>
                    </tr>	
                    <tr>
                        <td>Origin:</td>
                        <td><b>7245 2nd Ave Sw, Seattle, Wa, 98108, United States</b></td>
                    </tr>	
                    <tr>
                        <td>Destination:</td>
                        <td><b>30838 Prairie Smoke Cir, Murrieta, Ca, 92563, United States</b></td>
                    </tr>	
                </table>			

            </div>
            
            <div class="row">
                <table width="100%">
                    <tr class="dark-grey-bg">
                        <td width="40px"><h3 class="title-block">ID#</h3></td>
                        <td><h3 class="title-block">Date</h3></td>
                        <td><h3 class="title-block">Subject</h3></td>
                        <td><h3 class="title-block">Status</h3></td>
                    </tr>
                    
                            <tr class="trborder">
                                <td>
                                    <p style="text-align: center"><b>1</b></p>
                                </td>
                                <td>
                                    <p style="text-align: center"><b>Wed 30 October</b></p>
                                </td>
                                <td>
                                    <p>Seattle, Wa, United States</p>
                                </td>
                                <td>
                                    <p>Preparation In Progress</p>
                                </td>
                            </tr>
                            <tr class="trborder">
                                <td>
                                    <p style="text-align: center"><b>2</b></p>
                                </td>
                                <td>
                                    <p style="text-align: center"><b>Wed 30 October</b></p>
                                </td>
                                <td>
                                    <p>West Bromwich, United Kingdom</p>
                                </td>
                                <td>
                                    <p>Awaiting Payment</p>
                                </td>
                            </tr>			</table>			
            </div>
            
                        
                </div>
        <!-- END LEFT PANNEL -->
            
        <!-- SIDEBAR -->
            <div class="six columns">
            <div class="caption-container-main m-bot-30">
                <div class="caption-text-container"><b>Billing & Delivery</b> Details</div>
                <div class="content-container-white caption-bg "></div>
            </div>
            
            <div class="row">
                <table width="100%" class="trackingtable">
                    <tr>
                        <td>Full Name:</td>
                        <td><b>Stephan Korn</b></td>
                    </tr>	
                    <tr>
                        <td>E-mail:</td>
                        <td><b>stephankorn8@gmail.com</b></td>
                    </tr>	
                    <tr>
                        <td>Phone number:</td>
                        <td><b>9 806 990 298</b></td>
                    </tr>
                    <tr>
                        <td style="min-width: 95px">Mailing address:</td>
                        <td><b>30838 Prairie Smoke Cir Murrieta, Ca, 92563, United States</b></td>
                    </tr>	
                </table>
            </div>
            
                    <div class="caption-container-main m-bot-30 m-t-min-1">
                <div class="caption-text-container">Awaiting <b>bank wire payment</b></div>
                <div class="content-container-white caption-bg "></div>
            </div>
            <p>Bank wire payment. When arranging for your bank wire transfer be sure to make your bank aware that you (the customer) will be paying all bank fees involved in the bank wire transfer. </p>	
            <p>Please send us a bank wire with:</p>
            <div class="row">
            <table width="100%">
                <tr>
                    <td><i class="icon-double-angle-right"></i> <i>An amount of: </i></td>
                    <td><b>11.700,00 USD</b></td>
                </tr>	
                <tr>
                    <td><i class="icon-double-angle-right"></i> <i>Beneficiary: </i></td>
                    <td><b>Proceed Ltd</b></td>
                </tr>	
                <tr>
                    <td><i class="icon-double-angle-right"></i> <i>Bank: </i></td>
                    <td><b>Hsbc Uk Bank Plc</b></td>
                </tr>	
                <tr>
                    <td><i class="icon-double-angle-right"></i> <i>Bank Address: </i></td>
                    <td><b>328 High Street, West Bromwich B70 8dj, United Kingdom</b></td>
                </tr>	
                <tr>
                    <td><i class="icon-double-angle-right"></i> <i>IBAN: </i></td>
                    <td><b>GB34HBUK40461332129051</b></td>
                </tr>	
                <tr>
                    <td><i class="icon-double-angle-right"></i> <i>SWIFT/BIC: </i></td>
                    <td><b>HBUKGB4109P</b></td>
                </tr>	
                <tr>
                    <td><i class="icon-double-angle-right"></i> <i>Account: </i></td>
                    <td><b>32129051</b></td>
                </tr>
                            <tr>
                    <td><i class="icon-double-angle-right"></i> <i>Sort Code:</i></td>
                    <td><b>40-46-13</b></td>
                </tr>	
            </table>
                                
            </div>
                </div>
            <!-- END SIDEBAR -->
        
    </div>	

<!-- LATEST WORK -->
	<div class="container clearfix m-top-30">
	
		<div class="four columns carousel-intro m-bot-33">
			<div class="caption-container m-bot-20">
				<div class="title-block-text"> SAFE<br>	RELIABLE<br> <strong>DEPENDABLE</strong> </div>
				<div class="carousel-navi jcarousel-scroll">
					<div class="jcarousel-prev"></div>
					<div class="jcarousel-next"></div>
				</div>
			</div>
		</div>

		
		<!-- jCAROUSEL -->
		<div class="jcarousel latest-work-jc m-bot-30" >
			<ul class="clearfix">
				<!-- LATEST WORK ITEM -->
				<li class="four columns">
					<div class=" hover-item">
						<div class="view view-first"> <img src="{{url('assets/images/content/port-2-13.jpg')}}" alt="Ipsum" >
							<div class="mask"></div>
							<div class="abs"> <a></a><a href="onlineshop-transport.php" class="link info"></a> </div>
						</div>
						<div class="lw-item-caption-container"> <a class="a-invert" href="onlineshop-transport.php" >
							<div class="item-title-main-container clearfix">
								<div class="item-title-text-container"> <span class="bold">ONLINE</span> SHOP AND SHIP </div>
							</div>
							</a>
							<div class="item-caption">Online shopping and shipping services</div>
						</div>
					</div>
				</li>
				
				<!-- LATEST WORK ITEM -->
				<li class="four columns">
					<div class="hover-item">
						<div class="view view-first"> <img src="{{url('assets/images/content/port-2-14.jpg')}}" alt="Ipsum" >
							<div class="mask"></div>
							<div class="abs"> <a href="{{url('assets/images/content/port-2-14.jpg')}}"></a><a href="cars-transport.php" class="link info"></a> </div>
						</div>
						<div class="lw-item-caption-container"> <a class="a-invert" href="cars-transport.php" >
							<div class="item-title-main-container clearfix">
								<div class="item-title-text-container"> <span class="bold">CAR</span> SHIPPING </div>
							</div>
							</a>
							<div class="item-caption">Honesty - Integrity &amp; value for money</div>
						</div>
					</div>
				</li>
				
				<!-- LATEST WORK ITEM -->
				<li class="four columns">
					<div class=" hover-item">
						<div class="view view-first"> <img src="{{url('assets/images/content/port-2-12.jpg')}}" alt="Ipsum" >
							<div class="mask"></div>
							<div class="abs"> <a href="{{url('assets/images/content/port-2-12.jpg')}}"></a><a href="motorcycle-shipping.php" class="link info"></a> </div>
						</div>
						<div class="lw-item-caption-container"> <a class="a-invert" href="motorcycle-shipping.php" >
							<div class="item-title-main-container clearfix">
								<div class="item-title-text-container"> <span class="bold">MOTORCYCLE</span> SHIPPING </div>
							</div>
							</a>
							<div class="item-caption">We are motorcycle transport experts</div>
						</div>
					</div>
				</li>
				
				<!-- LATEST WORK ITEM -->
				<li class="four columns">
					<div class=" hover-item">
						<div class="view view-first"> <img src="{{url('assets/images/content/port-2-11.jpg')}}" alt="Ipsum" >
							<div class="mask"></div>
							<div class="abs"> <a href="{{url('assets/images/content/port-2-11.jpg')}}"></a><a href="boat-shipping.php" class="link info"></a> </div>
						</div>
						<div class="lw-item-caption-container"> <a class="a-invert" href="boat-shipping.php" >
							<div class="item-title-main-container clearfix">
								<div class="item-title-text-container"> <span class="bold">BOAT</span> SHIPPING </div>
							</div>
							</a>
							<div class="item-caption">Boats, Yachts and watercraft of all shapes and sizes</div>
						</div>
					</div>
				</li>
				
				<!-- LATEST WORK ITEM -->
				<li class="four columns">
					<div class=" hover-item">
						<div class="view view-first"> <img src="{{url('assets/images/content/port-2-10.jpg')}}" alt="Ipsum" >
							<div class="mask"></div>
							<div class="abs"> <a href="{{url('assets/images/content/port-2-10.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a> </div>
						</div>
						<div class="lw-item-caption-container"> <a class="a-invert" href="portfolio-single.html" >
							<div class="item-title-main-container clearfix">
								<div class="item-title-text-container"> <span class="bold">MOVING</span> HOUSEHOLD GOODS </div>
							</div>
							</a>
							<div class="item-caption">Moving over 10,000 shipments yearly</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!-- jCAROUSEL End -->
	</div>	
<!-- OUR PROJECTS End -->
	
	

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
<input type="hidden" id="start" value="Seattle, Wa, United States"/>
<select style="display: none" multiple="" id="waypoints">
	<option value="Seattle, Wa, United States" selected></option></select>
			<select style="display: none" id="end"><option value="West Bromwich, United Kingdom" selected></option></select>
<!--<input type="hidden" id="end" value="Murrieta, Ca, United States">
-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
$(document).ready(function() {
	initialize();
	
	function initialize() {
		
		var directionDisplay;
		var directionsService = new google.maps.DirectionsService();
		var map;

		directionsDisplay = new google.maps.DirectionsRenderer();
		
		var myOptions = {
			scrollwheel: false,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
		}
		
		var start = document.getElementById("start").value;
		var end = document.getElementById("end").value;
			
		var waypoints = [];
		var checkboxArray = document.getElementById('waypoints');
		//var checkboxArray = $('#waypoints').val();
		
		for (var i = 0; i < checkboxArray.length; i++) {
			if (checkboxArray.options[i].selected == true) {
				waypoints.push({
					location:checkboxArray[i].value,
					stopover:true
				});
			}
		}
			
		var request = {
			origin:start, 
			destination:end,
			waypoints:waypoints, //an array of waypoints
			optimizeWaypoints: false, //set to true if you want google to determine the shortest route or false to use the order specified.
			travelMode: google.maps.DirectionsTravelMode.DRIVING
		};
		
		directionsService.route(request, function(response, status) {
			if (status == google.maps.DirectionsStatus.OK) {
				directionsDisplay.setDirections(response);
			}
		});	
	
		map = new google.maps.Map(document.getElementById("googlemaps"), myOptions);
		directionsDisplay.setMap(map);
	}
	
});
</script>

@stop
