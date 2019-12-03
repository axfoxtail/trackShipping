@extends('layouts.app')

@section('content')
    
    
<div id="wrap" class="boxed">

    <div class="grey-bg"> <!-- Grey bg  -->    

        <!-- HEADER -->
        @include('layouts.partials.header')
        <!-- ./HEADER -->

        <b id="page" page="homepage"></b>

        <!-- SLIDER -->

        <div class="slider-1 clearfix">

            <div class="flex-container">

                <div class="flexslider loading">

                    <ul class="slides">

                        <li style="background:url('assets/images/sliders/slider-1/slider-bg-5.jpg') no-repeat;background-position:50% 0">

                            <div class="container">

                                <div class="sixteen columns contain">

                                    <h2 data-toptitle="36%">INTERNATIONAL SHIPPING</h2>

                                    <p data-bottomtext="34%">Paris, Dortmund, Malmo, Buenos Aires, Wien, London, Moscow, Los Angeles, New York, Tokyo...<br>We can ship anywhere in the world at the lowest rates in the market.</p>

                                    <div class="links" data-bottomlinks="30%"> <a class="button medium r-m-plus r-m-full" href="about-us">READ MORE</a> </div>

                                    <!--img src="{{ url('assets/images/sliders/slider-1/slider-item-1.png')}}" class="item" alt="slide-item"  data-topimage="21%"/-->

                                </div>

                            </div>

                            <!-- End Container --> 

                        </li>

                        <!-- End item -->

                        

                        <li style="background:url('assets/images/sliders/slider-1/slider-bg-6.jpg') no-repeat;background-position:50% 0">

                            <div class="container">

                                <div class="sixteen columns contain">

                                    <h2 data-toptitle="36%">We are now on mobile too!</h2>

                                    <p data-bottomtext="34%">Proceed Shipping Limited Keeping up on-the-go made easy. Stay connected from any phone or tablet.</p>

                                    <img src="{{ url('assets/images/sliders/slider-1/slider-item-6.png')}}" class="item" alt="slide-item"  data-topimage="21%"/>

                                </div>

                            </div>

                            <!-- End Container --> 

                        </li>

                        <!-- End item -->

                        



                        <li style="background:url('assets/images/sliders/slider-1/slider-bg-4.jpg') no-repeat;background-position:50% 0">

                            <div class="container">

                                <div class="sixteen columns contain">

                                    <h2 data-toptitle="36%">Accreditations</h2>

                                    <p data-bottomtext="34%">Delivery Freights Shipping continuously focuses on improving internal procedures and training to maintain high standards...</p>

                                    <div class="links" data-bottomlinks="30%"> <a class="button medium r-m-plus r-m-full" href="accreditations">READ MORE</a> </div>

                                    <img src="{{ url('assets/images/sliders/slider-1/slider-item-4.png')}}" class="item" alt="slide-item"  data-topimage="21%"/>

                                </div>

                            </div>

                            <!-- End Container --> 

                        </li>

                        <!-- End item -->

                        

                        <li style="background:url('assets/images/sliders/slider-1/slider-bg-2.jpg') no-repeat; background-position:50% 0">

                            <div class="container">

                                <div class="sixteen columns contain">

                                    <h2 data-toptitle="36%">OVERSEAS MOVING</h2>

                                    <p data-bottomtext="39%"><strong>Proceed Shipping Limited</strong> offers a comprehensive international removals service...</p>

                                    <div class="links" data-bottomlinks="30%"> <a class="button medium r-m-plus r-m-full" href="moving_transport">READ MORE</a> </div>

                                    <img src="{{ url('assets/images/sliders/slider-1/slider-item-3.png')}}" class="item" alt="slide-item" data-topimage="24%"/>

                                </div>

                            </div>

                            <!-- End Container --> 

                        </li>

                        <!-- End item -->

                        

                        <li style="background:url('assets/images/sliders/slider-1/slider-bg-3.jpg') no-repeat; background-position:50% 0">

                            <div class="container">

                                <div class="sixteen columns contain">

                                    <h2 data-toptitle="36%">Wherever you are, wherever they are Proceed Shipping Limited keeps you together</h2>

                                    <div class="links" data-bottomlinks="30%"> <a class="button medium r-m-plus r-m-full" href="cars_transport">READ MORE</a> </div>

                                    <img src="{{ url('assets/images/sliders/slider-1/slider-item-2.png')}}" class="item" alt="slide-item" data-topimage="24%"/>

                                </div>

                            </div>

                            <!-- End Container --> 

                        </li>

                        <!-- End item -->

                        

                    </ul>

                </div>

            </div>

        </div>

        <!-- End slider --> 

    

        <!-- 3 BLOCKS (1 ver) -->

        <div class="container clearfix m-bot-35 min-m-top-75">

            <div class="sixteen columns m-bot-15"> 



                <!-- BLOCK -->

                <div class="block-4-col m-bot-20 ca-menu">

                    <div class="block-1-content-container">

                        <a class=" clearfix" href="#entertrackingnumber">

                            <div class="ca-icon"> <img src="{{ url('assets/images/icon-tracking_big.png')}}" alt="icon-tracking"> </div>

                            <div class="ca-content">

                                <h2 class="ca-main">TRACK YOUR SHIPMENT</h2>

                                <h3 class="ca-sub">Wonder how your vehicle's journey is going?</h3>

                            </div>

                        </a>

                    </div>

                </div>

                

                <!-- BLOCK -->

                <div class="block-4-col m-bot-20 ca-menu">

                    <div class="block-2-content-container">

                        <a class=" clearfix" href="register">

                            <div class="ca-icon"> <img src="{{ url('assets/images/icon-register.png')}}" alt="icon-gears"> </div>

                            <div class="ca-content">

                                <h2 class="ca-main">SIGN UP WITH US NOW!</h2>

                                <h3 class="ca-sub">Proceed Shipping Limited offers you solutions to suit all needs.</h3>

                            </div>

                        </a>

                    </div>

                </div>

                

                <!-- BLOCK -->

                <div class="block-4-col m-bot-20 ca-menu">

                    <div class="block-3-content-container">

                        <a class=" clearfix" href="quote">

                            <div class="ca-icon"> <img src="{{ url('assets/images/icon-calc.png')}}" alt="icon-comp"> </div>

                            <div class="ca-content">

                                <h2 class="ca-main">Shipping Quote</h2>

                                <h3 class="ca-sub">Shipping your vehicle has never been easier!</h3>

                            </div>

                        </a>

                    </div>

                </div>



                <!-- BLOCK -->

                <div class="block-4-col m-bot-20 ca-menu">

                    <div class="block-1-content-container">

                        <a class=" clearfix" href="home">

                            <div class="ca-icon"> <img src="{{ url('assets/images/icon-comp.png')}}" alt="icon-comp"> </div>

                            <div class="ca-content">

                                <h2 class="ca-main">SERVICES REVIEWS</h2>

                                <h3 class="ca-sub">View/Whrite <br> users reviews!</h3>

                            </div>

                        </a>

                    </div>

                </div>



            </div>

        </div>

    </div>

    <!-- Grey bg end --> 



    <!-- BUY NOW -->

    <div class="dark-grey-bg">

        <div class="container clearfix dark-grey-bg">

            <div class="sixteen columns">

                <div class="buy-container clearfix">

                    <div class="buy-img-container"> <img src="{{ url('assets/images/icon-buy.png')}}" alt="buy"> </div>

                    <div class="buy-text-container">

                        <div class="buy-text">

                            <h2>Start Shipping Online Today</h2>

                            <span class="buy-now-slogan">Use the web to create, book, track and manage your express shipments!</span>

                        </div>

                    </div>

                    <div class="button-buy-container"> <a class="" href="register">REGISTER</a> </div>

                </div>

            </div>

        </div>

    </div>	



    <div class="container clearfix">

        <div class="ten columns  m-bot-25">

            <div class="caption-container-main m-bot-30">

                <div class="caption-text-container">PEACE-OF-MIND VEHICLE SHIPPING</div>

                <div class="content-container-white caption-bg "></div>

            </div>

            <p>Very easy to ship a vehicle from one location to another with low rates. With more than 7 years of experience, Proceed Shipping Limited understands the intricacies involved better than anyone.</p>

            <p>At Proceed Shipping Limited, our mission is to make vehicle transporting a positive experience for each customer. When you trust us to ship your car, you receive peace-of-mind, expert advice and superior service.</p>

            <p>Our <a href="contact">Have Questions</a> page highlights <a href="faq">FAQs: CAR SHIPPING 101</a>, which provides helpful answers to common questions</p>

        </div>

        

        <!-- SIDEBAR -->

        <div class="six columns m-bot-25">

            <div class="caption-container content-container-grey block-testimonials">

                <div class="caption-text-container-test-block">TESTIMONIALS</div>

                <div class="carousel-navi jcarousel-scroll">

                    <div class="jcarousel-prev"></div>

                    <div class="jcarousel-next"></div>

                </div>

            </div>

            

            <!-- jCAROUSEL -->

            <div class="jcarousel testimonials-jc m-bot-35" >

                <ul>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>Great shipper! Great car ! Customer service, price and trucker was absolutely the best! If you need to ship your car there is no service better. I had a family emergency and they did everything to help me and get my car to my family member. Thank You</p>

                                <p class="right-text"><span class="author-testimonial">- Natasha and Mark</span><span class="quote-author-description">, Birmingham</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>We recently shipped our daughter car to her from Texas to Virginia. Advance was ahead of schedule and the driver kept in constant communication with us. We would definitely use them again. We highly recommend their services.</p>

                                <p class="right-text"><span class="author-testimonial">- Laura Maly</span><span class="quote-author-description">, Houston</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>Diese Jungs wissen wirklich, was sie tun. Vielen Dank</p>

                                <p class="right-text"><span class="author-testimonial">- Thomas W.</span><span class="quote-author-description">, Berlin, DE</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>Klara was very helpful in explaining how Crossmed shipping works. He answered all my questions and provided great service. The initial quote he provided also turned out to be the final price, which was great. I am very happy with crossmed shipping and would definitely use them again in the future</p>

                                <p class="right-text"><span class="author-testimonial">- Amy Britt</span><span class="quote-author-description">, Newton  MA</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>Just to let you know after all this time the car has arrived safely and in good shape. Thank you for your assistance along the way and to let you know that I would recommend your company.</p>

                                <p class="right-text"><span class="author-testimonial">- Gert Frederikson</span><span class="quote-author-description">, Roskilde, Denmark</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>Fast, easy, friendly and professional team. Excellent relation. Everything arrived on time (even before) and without any damages.</p>

                                <p class="right-text"><span class="author-testimonial">- Lora and David</span><span class="quote-author-description">, San Francisco</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>I would highly recommend this company. The staff is very friendly, they followed up every step of the way. The price is very affordable. The company is very reliable. They picked up my vehicle on schedule, the delivery went perfect. The driver was very nice. Delivery was on time. I love the service and would definitely use them again in the future.</p>

                                <p class="right-text"><span class="author-testimonial">- David Joyce</span><span class="quote-author-description">, Murfreesboro</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>Given a less than ideal shipping situation, these guys went above and beyond in getting my boat safely to me. The entire shipping team was in contact with each other and me starting the day before pick up. Once these folks got into the loop, I felt that I had professionals on my side and could not have been happier when my boat arrived.</p>

                                <p class="right-text"><span class="author-testimonial">- David Jennings</span><span class="quote-author-description">, Mobile, AL</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>Thank you very much for an amazing service!!! I would like to thank you, George and his crew for a job well done. Sorry for being a pain with all my questions.</p>

                                <p class="right-text"><span class="author-testimonial">- Thomas Olsen</span><span class="quote-author-description">, Denmark</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>Crossmed  provided excellent service from quotation to delivery of my vehicle. The car is a collectible and they made sure to take extra care to ensure it arrived in the same condition it left. I was impressed with the courtesy of the customer service people as well as the driver</p>

                                <p class="right-text"><span class="author-testimonial">- Zach Farnsworth</span><span class="quote-author-description">, Mobile Alabama</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>The whole process was very easy, the team were always helpful and friendly, and everything arrived on time and in one piece. I would definitely recommend this company and will use them again in the future. Sincerely,</p>

                                <p class="right-text"><span class="author-testimonial">- Ken</span><span class="quote-author-description">, Dallas, TX</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>Hello Liz & Mark, I received the shipment this morning in perfect condition. Thanks to both of you for seeing that it got packed properly to be shipped and handled to arrive worry free.</p>

                                <p class="right-text"><span class="author-testimonial">- Chris</span><span class="quote-author-description">, New York, NY</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>Vielen Danke!</p>

                                <p class="right-text"><span class="author-testimonial">- Thomas S.</span><span class="quote-author-description">, Kiel, DE</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>I have just received my bike !!! I want to say you and your staff ,thank you very much for your service . The job it was perfect and all very good . I give your contact at all my friend and people want import from USA . Thanks again All the best for you Regards</p>

                                <p class="right-text"><span class="author-testimonial">- Pandelisis K</span><span class="quote-author-description">, Athens, Greece</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>Gentlemen, good morning The container with my car was discharged this morning in my warehouse. My compliments to your company, as car was lashed properly and compliments to TR for selling me a clean car. Regards </p>

                                <p class="right-text"><span class="author-testimonial">- John and Lena</span><span class="quote-author-description">, London, UK</span> </p>

                            </div>

                        </div>

                    </li>



                    


                    <!-- TESTIMONIALS ITEM -->

                    <li class="six columns alpha">

                        <div class="testimonial-quote ">

                            <div class="quote-content content-container-grey">

                                <p>After a quite long shipping time due to snow and storm in New York last winter, my XJS eventually arrived one night in my yard. In good condition! Many thanks Kevin for your efficiency and reactivity to all of my questions. Best regards.</p>

                                <p class="right-text"><span class="author-testimonial">- Jean-Luc</span><span class="quote-author-description">, Paris, France</span> </p>

                            </div>

                        </div>

                    </li>



                    


                </ul>

            </div>

            <!-- OUR TESTIMONIALS & MORE End --> 

            

            <!-- jCAROUSEL End --> 

            

        </div>

    </div>



    <!-- LATEST WORK -->

    <div class="container clearfix m-top-40 m-bot-20">

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

        <div class="jcarousel latest-work-jc">

            <ul class="clearfix">

                

                <!-- LATEST WORK ITEM -->

                <li class="four columns">

                    <div class=" hover-item">

                        <div class="view view-first"> <img src="{{ url('assets/images/content/port-2-13.jpg')}}" alt="Ipsum" >

                            <div class="mask"></div>

                            <div class="abs"> <a></a><a href="onlineshop_transport" class="link info"></a> </div>

                        </div>

                        <div class="lw-item-caption-container"> <a class="a-invert" href="onlineshop_transport" >

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

                            <div class="abs"> <a href="{{url('assets/images/content/port-2-14.jpg')}}"></a><a href="cars_transport" class="link info"></a> </div>

                        </div>

                        <div class="lw-item-caption-container"> <a class="a-invert" href="cars_transport" >

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

                            <div class="abs"> <a href="{{url ('assets/images/content/port-2-12.jpg')}}"></a><a href="motorcycle_transport" class="link info"></a> </div>

                        </div>

                        <div class="lw-item-caption-container"> <a class="a-invert" href="motorcycle_transport" >

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

                            <div class="abs"> <a href="{{url('assets/images/content/port-2-11.jpg')}}"></a><a href="boats_transport" class="link info"></a> </div>

                        </div>

                        <div class="lw-item-caption-container"> <a class="a-invert" href="boats_transport" >

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

                            <div class="abs"> <a href="{{url('assets/images/content/port-2-10.jpg')}}" class="lightbox zoom info"></a><a href="moving_transport" class="link info"></a> </div>

                        </div>

                        <div class="lw-item-caption-container"> <a class="a-invert" href="moving_transport" >

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