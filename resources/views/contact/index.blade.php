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
                    <h1 class="page-title">CONTACT</h1>
                </div>	
            </div>
        </div>	
        
    </div>
    <!-- Grey bg end -->	

    <!-- CONTENT -->

    <!-- CONTACT FORM-->
    <div class="container clearfix">
        <div class="eleven columns  m-bot-35">
        
            
            <div class="caption-container-main m-bot-30">
                <div class="caption-text-container"><span class="bold">SEND</span> US A MESSAGE</div>
                <div class="content-container-white caption-bg"></div>
            </div>

            <div class="contact-form-container">
                <form action="{{ url('/contact') }}" id="contact-form" method="post" class="clearfix">			
                    @csrf
                    @method('PUT')
                    <fieldset class="field-1-3 left">
                        <label class="title-block">Name</label>
                        <input type="text" name="name" id="msgname" placeholder="Name..." class="text m-bot-20" >
                    </fieldset >
                    <fieldset class="field-1-3 left">
                        <label class="title-block">Email</label>	
                        <input type="email" name="email" id="msgemail" placeholder="Your email..." class="text email m-bot-20" >
                    </fieldset>
                    <fieldset class="field-1-3 left">
                        <label class="title-block">Subject</label>	
                        <input type="text" name="subject" id="msgsubject" placeholder="Subject..." class="text subject m-bot-20" >
                    </fieldset>	
                    <fieldset class="field-1-1 left">
                        <label class="title-block">Message</label>
                        <textarea name="content" id="msgmessage" rows="5" cols="30" class="text" placeholder="Your message..." value=""></textarea>
                    </fieldset>
                    <fieldset class="right m-t-min-1">
                        <input type="submit" name="contact-formsubmit" id="contact-formsubmit" value="SEND" class="button medium">
                    </fieldset>
                </form>
            </div>
        </div>
            

    <!-- SIDEBAR -->
        <div class="five columns  m-bot-25">
            
            <div class="caption-container-main m-bot-30">
                <div class="caption-text-container"><span class="bold">CONTACT</span> INFO</div>
                <div class="content-container-white caption-bg "></div>
            </div>
            
            <div class="">
                <ul class="contact-list">
                    <li class="contact-loc"> Globe House, Eclipse Park, Sittingbourne Rd, Maidstone<br/>ME14 3EN, United Kingdom </li>
                    <li class="contact-loc"> 7245 2nd Ave SW Seattle, WA 98108, USA </li>
                    <li class="contact-mail"> office@proceed-shipping.com </li>
                    <li class="contact-phone"> 	
                        <br/>
                        Monday-Friday: 08:00 - 17:00 <br/>Saturday / Sunday: Closed
                    </li>
                </ul>				
            </div>		
        </div>
            
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
                            <div class="view view-first"> <img src="{{ url('assets/images/content/port-2-13.jpg')}}" alt="Ipsum" >
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
                            <div class="view view-first"> <img src="{{ url('assets/images/content/port-2-14.jpg')}}" alt="Ipsum" >
                                <div class="mask"></div>
                                <div class="abs"> <a href="images/content/port-2-14.jpg"></a><a href="cars-transport.php" class="link info"></a> </div>
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
                            <div class="view view-first"> <img src="{{ url('assets/images/content/port-2-12.jpg')}}" alt="Ipsum" >
                                <div class="mask"></div>
                                <div class="abs"> <a href="images/content/port-2-12.jpg"></a><a href="motorcycle-shipping.php" class="link info"></a> </div>
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
                            <div class="view view-first"> <img src="{{ url('assets/images/content/port-2-11.jpg')}}" alt="Ipsum" >
                                <div class="mask"></div>
                                <div class="abs"> <a href="images/content/port-2-11.jpg"></a><a href="boat-shipping.php" class="link info"></a> </div>
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
                            <div class="view view-first"> <img src="{{ url('assets/images/content/port-2-10.jpg')}}" alt="Ipsum" >
                                <div class="mask"></div>
                                <div class="abs"> <a href="images/content/port-2-10.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a> </div>
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
    <script>
        $(document).ready(function() {
            $("#contact-form").validate({
                rules: {
                    name: 		{ required: true, minlength: 4, letterswithbasicpunc: true },
                    email: 	{ required: true, minlength: 4, email: true },
                    subject: 	{ required: true, minlength: 5, letterswithbasicpunc: true },
                    content: 	{ required: true, minlength: 5, letterswithbasicpunc: true }
                },
                messages: {
                    name: {
                        required: "Please enter your name"
                    },
                    email: {
                        required: "Please enter your email address"
                    },
                    subject: {
                        required: "Please enter a subject"
                    },
                    content: {
                        required: "Please enter your message"
                    }
                }
            });
        });
        </script>
        <!--GOOLE MAP-->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/jquery.gmap.min.js"></script>
        <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyARuqf7MvXmf5qNrZKz9kZXXmLN18vTWWE&sensor=true_OR_false"></script>
        <script type="text/javascript">
        jQuery('#googlemaps').gMap({
            maptype: 'ROADMAP',
            scrollwheel: false,
            zoom: 14,
            markers: [
                {
                    address: 'Globe House, Eclipse Park, Sittingbourne Rd Maidstone United Kingdom ME14 3EN', // Your Adress Here
                    html: '',
                    popup: false,
                }
            ],
        });
    </script>
@stop