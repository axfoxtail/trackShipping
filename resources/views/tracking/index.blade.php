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

        @if($error == true)          
    
        <!-- Guest PANNEL -->
        <div class="ten columns m-bot-35">
                
            <div class="caption-container-main m-bot-30">
                <div class="caption-text-container"><b>{{$tracking_number}}</b> - Shipment Details</div>
                <div class="content-container-white caption-bg"></div>
            </div>
            
            <p class="m-bot-20">You can view shipment details, including package information, shipping charges, shipment status and location.</p>
            
            <div class="styled-box iconed-box notice">{{$message}}</div>
            </div>
                    
        </div>
        <!-- END LEFT PANNEL -->

        @else

        <!-- LEFT PANNEL -->
        <div class="ten columns m-bot-35">
        
            
            <div class="caption-container-main m-bot-30">
                <div class="caption-text-container"><b>{{$tracking_number}}</b> - Shipment Details</div>
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
                        <td><b>{{$sender->fname}} </b> <b>{{$sender->lname}}</b></td>
                    </tr>	
                    <tr>
                        <td>E-mail:</td>
                        <td><b>{{$sender->email}}</b></td>
                    </tr>
                    <tr>
                        <td>Mailing address:</td>
                        <td><b>{{$sender->address}}</b>     <b>{{$sender->city}}</b>   <b>{{$sender->postcode}}</b>  <b>{{$sender->country}}</b></td>
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
                        <td><b><b>{{$transaction->extra}}</b></b></td>
                    </tr>	
                    <tr>
                        <td>Value:</td>
                        <td><b>{{$transaction->price}} USD</b></td>
                    </tr>	
                    <tr>
                        <td>Weight:</td>
                        <td><b>{{$transaction->weight}} Lbs</b></td>
                    </tr>	
                    <tr>
                        <td>Origin:</td>
                        <td><b>{{$faddress->address}}</b> <b>{{$faddress->city}}</b> <b>{{$faddress->postcode}}</b> <b>{{$faddress->country}}</b></td>
                    </tr>	

                    <tr>
                        <td>Destination:</td>
                        <td><b>{{$taddress->address}}</b> <b>{{$taddress->city}}</b> <b>{{$taddress->postcode}}</b> <b>{{$taddress->country}}</b></td>
                    </tr>
                    
                    <tr>
                        <td>Visual vehicle inspection:</td>
                        <td><b>{{$sender->visualcheck}}</b></td>
                    </tr>
                    <tr>
                        <td>All documents of the car:</td>
                        <td><b>{{$sender->doccheck}}</b></td>
                    </tr>
                    <tr>
                        <td>General car inspection:</td>
                        <td><b>{{$sender->generalcheck}}</b></td>
                    </tr>
                    <tr>
                        <td>Class:</td>
                        <td><b>{{$sender->class}}</b></td>
                    </tr>
                    <tr>
                        <td>Reception date:</td>
                        <td><b>{{$transaction->created_at}}</b></td>
                    </tr>
                    <tr>
                        <td>Estimated delivery time:</td>
                        <td><b>{{$transaction->date}}</b></td>
                    </tr>	
                </table>			

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
                        <td><b>{{Auth::user()->fname}}</b> <b>{{Auth::user()->lname}}</b></td>
                    </tr>	
                    <tr>
                        <td>E-mail:</td>
                        <td><b>{{Auth::user()->email}}</b></td>
                    </tr>	
                    <tr>
                        <td>Phone number:</td>
                        <td><b>{{Auth::user()->phone}}</b></td>
                    </tr>
                    <tr>
                        <td style="min-width: 95px">Mailing address:</td>
                        <td><b>{{Auth::user()->address}}</b>     <b>{{Auth::user()->city}}</b>   <b>{{Auth::user()->postcode}}</b>  <b>{{Auth::user()->country}}</b></td>
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

             <!-- Trigger/Open The Modal -->
             <button id="myBtn" class="nl-button" style="padding: 10"> Route map</button>
                                
            </div>
        </div>
        <!-- END SIDEBAR -->

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>

                <img src="{{$transaction->mapurl }}" alt="client"> 
            </div>

        </div>

            


            
        @endif
    
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
<input type="hidden" id="start" value="Seattle, Wa, United States"/>
<select style="display: none" multiple="" id="waypoints">
	<option value="Seattle, Wa, United States" selected></option></select>
			<select style="display: none" id="end"><option value="West Bromwich, United Kingdom" selected></option></select>
<!--<input type="hidden" id="end" value="Murrieta, Ca, United States">
-->
<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCa8o9D8EXtYoRapl0na82_pDKndC3jx9s"></script> -->

<script type="text/javascript">
$(document).ready(function() {
	initialize();
                
	// function initialize() {
		
	// 	var directionDisplay;
	// 	var directionsService = new google.maps.DirectionsService();
	// 	var map;

	// 	directionsDisplay = new google.maps.DirectionsRenderer();
		
	// 	var myOptions = {
	// 		scrollwheel: false,
	// 		mapTypeId: google.maps.MapTypeId.ROADMAP,
	// 	}
		
	// 	var start = document.getElementById("start").value;
	// 	var end = document.getElementById("end").value;
			
	// 	var waypoints = [];
	// 	var checkboxArray = document.getElementById('waypoints');
	// 	//var checkboxArray = $('#waypoints').val();
		
	// 	for (var i = 0; i < checkboxArray.length; i++) {
	// 		if (checkboxArray.options[i].selected == true) {
	// 			waypoints.push({
	// 				location:checkboxArray[i].value,
	// 				stopover:true
	// 			});
	// 		}
	// 	}
			
	// 	var request = {
	// 		origin:start, 
	// 		destination:end,
	// 		waypoints:waypoints, //an array of waypoints
	// 		optimizeWaypoints: false, //set to true if you want google to determine the shortest route or false to use the order specified.
	// 		travelMode: google.maps.DirectionsTravelMode.DRIVING
	// 	};
		
	// 	directionsService.route(request, function(response, status) {
	// 		if (status == google.maps.DirectionsStatus.OK) {
	// 			directionsDisplay.setDirections(response);
	// 		}
	// 	});	
	
	// 	map = new google.maps.Map(document.getElementById("googlemaps"), myOptions);
	// 	directionsDisplay.setMap(map);
	// }
	
});
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

@stop
