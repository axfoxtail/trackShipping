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
					<h1 class="page-title">ABOUT US</h1>
				</div>
			</div>
		</div>
		
	</div>
	<!-- Grey bg end --> 
	
	<!-- CONTENT -->
	<div class="container m-bot-35 clearfix">
		<div class="seven columns">
			<div class="img-about"> <img class="" alt="about" src="{{url('assets/images/content/about.jpg')}}"> </div>
		</div>
		<div class="nine columns">
			<div class="caption-container-main m-bot-30 m-t-min-1">
				<div class="caption-text-container">WELCOME TO <b>ETA Worldwid</b></div>
				<div class="content-container-white caption-bg "></div>
			</div>
			<p> Founded in 1997, <b>ETA Worldwid</b> is one of the largest vehicle shipping service providers in the world. With more than 90 certified partner facilities, ETA Worldwid safely and efficiently transports more than 100,000 vehicles each year. You name it, we have shipped it – everything from cars and motorcycles to vans and specialty vehicles via a variety of proven auto shipping methods.</p>
		</div>
	</div>
	<div class="container clearfix m-bot-35">
		<div class="caption-container-main m-bot-30 m-t-min-1">
			<div class="caption-text-container">WHY <b>ETA Worldwid</b></div>
			<div class="content-container-white caption-bg "></div>
		</div>
		<p> <b>ETA Worldwid</b> provides vehicle transport services to customers anywhere across the country and around the world, including individuals, corporations and anyone that has the need to ship a vehicle.</p>
		<p> <b>ETA Worldwid</b> handles everything that has to do with the actual inland transport, sea freight, air freight, loading & unloading and Customs processing for cars, motorcycles, boats or other vehicles. We have the experience and knowledge to be a full service provider for car handling and shipping / importing of vehicles. Our professional working methods and competitive pricing enables us to offer you a price-quality ratio that can compete with the best in our business. Combined with our great passion for cars and extended logistic experience, you can be sure that every vehicle is being shipped professionally and treated with respect.</p>
	</div>
	
	<div class="container clearfix m-bot-30">
	
		<!-- jCAROUSEL -->
		<div class="jcarousel latest-work-jc">
			<ul class="clearfix">
				
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
							<div class="abs"> <a href="{{url('assets/images/content/port-2-12.jpg')}}"></a><a href="motorcycle-transport.php" class="link info"></a> </div>
						</div>
						<div class="lw-item-caption-container"> <a class="a-invert" href="motorcycle-transport.php" >
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
							<div class="abs"> <a href="{{url('assets/images/content/port-2-11.jpg')}}"></a><a href="boats-transport.php" class="link info"></a> </div>
						</div>
						<div class="lw-item-caption-container"> <a class="a-invert" href="boats-transport.php" >
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
							<div class="abs"> <a href="{{url('assets/images/content/port-2-10.jpg')}}" class="lightbox zoom info"></a><a href="moving-transport.php" class="link info"></a> </div>
						</div>
						<div class="lw-item-caption-container"> <a class="a-invert" href="moving-transport.php" >
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