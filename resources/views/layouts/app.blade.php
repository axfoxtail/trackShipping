
<!DOCTYPE html>

<html>

   <head>


      <title>Proceed Shipping Limited - Courier Services & Delivery Company</title>

      <meta charset=utf-8 >

      <meta name="keywords" content="Proceed Shipping Limited, Courier Services & Delivery Company" >

      <meta name="description" content="Looking for a reliable international vehicle shipper?. We have helped customers transport their vehicles overseas safely since 2007.">

      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      <link rel="shortcut icon" href="favicon.ico">


      <!-- CSS begin -->

      <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css')}}" >
      <link rel="stylesheet" type="text/css" href="{{ url('assets/css/modal.css')}}" >

      <link rel="stylesheet" type="text/css" href="{{ url('assets/css/skeleton.css')}}" >

      <link rel="stylesheet" type="text/css" href="{{ url('assets/css/jquery.fancybox-1.3.4.css')}}" >

      <link rel="stylesheet" href="{{ url('assets/css/switcher/style.css')}}">

      <link rel="stylesheet" href="{{ url('assets/css/layout/wide.css')}}" id="layout">

      <link rel="stylesheet" href="{{ url('assets/css/colors/red.css')}}" id="colors">

      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



      <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="{{ url('assets/css/ie-warning.css" ><![endif]')}}-->

      <!--[if lte IE 9]><link rel="stylesheet" type="text/css" media="screen" href="{{ url('assets/css/style-ie.css" /><![endif]')}}-->

      <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="{{ url('assets/css/ei8fix.css" ><![endif]')}}-->



      <!-- flexslider slider CSS -->



      <link rel="stylesheet" type="text/css" href="{{ url('assets/css/flexslider.css')}}"  >



      <!--end flexslider slider CSS -->



      <!-- CSS end -->



   </head>

   <body>



      <div class="topnav">

	      <form method="get" action="tracking.php" class="trackWrapper">

		      <input type="text" placeholder="Enter your tracking number..." name="tr" id="tracking">

	      	<button type="submit" class="button medium r-m-plus r-m-full"><b>TRACK</b></button>

	      </form>

	      <div id="google_translate_element"></div>

	      <div class="chatWrapper">

		      <!-- <script src="livesupport/welive_image.php" language="javascript"></script> -->

	      </div>

      </div>

				
      <!-- Start wrap -->

      @yield('content')

      <!-- End wrap -->



      <!-- JS begin --> 

      <script type="text/javascript" src="{{ ('assets/js/jquery-1.8.3.min.js') }}"></script> 

      <script type="text/javascript" src="{{ ('assets/js/jquery.easing.1.3.js') }}"></script> 

      <script type="text/javascript" src="{{ ('assets/js/superfish.js') }}"></script> 

      <script type="text/javascript" src="{{ ('assets/js/jquery-ui.min.js') }}"></script>



      <!-- Flex Slider  --> 

      <script src="{{ ('assets/js/jquery.flexslider.js') }}"></script> 

      <script src="{{ ('assets/js/flex-slider.js') }}"></script> 

      <!-- end Flex Slider -->



      <script type="text/javascript" src="{{ ('assets/js/jquery.jcarousel.js') }}"></script> 

      <script type="text/javascript" src="{{ ('assets/js/jquery.fancybox-1.3.4.pack.js') }}"></script> 

      <script type="text/javascript" src="{{ ('assets/js/jQuery.BlackAndWhite.min.js') }}"></script> 

      <script type="text/javascript" src="{{ ('assets/js/jquery.validate.min.js') }}"></script> 

      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.js"></script>



      <script type="text/javascript" src="{{ ('assets/js/jquery.quicksand.js') }}"></script> 

      <script type="text/javascript" src="{{ ('assets/js/main.js') }}"></script> 

      <script type="text/javascript" src="{{ ('assets/js/jquery-cookie.js') }}"></script> 

      <!-- Google Translate -->

      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      <script src="{{ ('assets/js/styleswitcher.js') }}"></script> 



      <script type='text/javascript'>

         $(function(){

            var iFrames = $('iframe');

            function iResize() {

               for (var i = 0, j = iFrames.length; i < j; i++) {

               iFrames[i].style.height = iFrames[i].contentWindow.document.body.offsetHeight + 'px';}

               }

               if ($.browser.safari || $.browser.opera) { 

                  iFrames.load(function(){

                     setTimeout(iResize, 0);

                  });

                  for (var i = 0, j = iFrames.length; i < j; i++) {

                     var iSource = iFrames[i].src;

                     iFrames[i].src = '';

                     iFrames[i].src = iSource;

                  }

               } else {

                  iFrames.load(function() { 

                     this.style.height = this.contentWindow.document.body.offsetHeight + 'px';

                  });

               }

            }

         );

      </script>

   </body>

</html>

@section('scripts')
@show


