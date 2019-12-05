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
                    <h1 class="page-title">HOW IT WORKS</h1>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Grey bg end --> 

    <!-- CONTENT -->
    <div class="container clearfix">
        <div class="ten columns">
            <div class="caption-container-main m-bot-30 m-t-min-1">
                <div class="caption-text-container"><b>5 simple & secure steps</b> for Buyers and Sellers</div>
                <div class="content-container-white caption-bg "></div>
            </div>
            <p>ETA Worldwid reduces the risk of fraud by acting as a trusted third-party that collects, holds and only disperses funds when both Buyers and Sellers are satisfied.</p>
            <blockquote>We take part at the selling process by offering our complete Buyers Protection and shipping services.<br><br> We are not just a regular Buyers Protection service, we have the infrastructure to conduct authorized pre-buy inspection on electrical equipment and all types merchandises.</blockquote>
        </div>
        <div class="six columns">
            <ul class="tabs-nav tabs-nav-new">
                <li class="active"><a href="#tab1">Step 1</a></li>
                <li class=""><a href="#tab2">Step 2</a></li>
                <li class=""><a href="#tab3">Step 3</a></li>
                <li class=""><a href="#tab4">Step 4</a></li>
                <li class=""><a href="#tab5">Step 5</a></li>
            </ul>
            
            <div class="content-container-white tab-main-container">
                <div id="tab1" class="tab-content" style="display: none;">
                    <div class="img-about"> <img class="" alt="about" src="{{url('assets/images/steps/HW__step1.jpg')}}"> </div>
                    <ul class="tab-post-container text">
                        <li>
                            <p>
                            <b>&raquo;</b> Either the Buyer or Seller begins a transaction.<br>
                            <b>&raquo;</b> After registering, all parties agree to the terms of the transaction.
                            </p>
                        </li>
                        
                    </ul>
                </div>
                <div id="tab2" class="tab-content" style="display: none;">
                    <div class="img-about"> <img class="" alt="about" src="{{url('assets/images/steps/HW__step2.jpg')}}"> </div>
                    <ul class="tab-post-container text">
                        <li>
                            <p>
                            <b>&raquo;</b> ETA Worldwid picks up the merchandise from the Seller and conduct a full pre-buy inspection of the merchandise at one of our partner services.<br>
                            <b>&raquo;</b> Both buyer and seller are informed about the inspection result.<br>
                            </p>
                        </li>
                    </ul>
                </div>
                <div id="tab3" class="tab-content" style="display: none;">
                    <div class="img-about"> <img class="" alt="about" src="{{url('assets/images/steps/HW__step2.jpg')}}"> </div>
                    <ul class="tab-post-container text">
                        <li>
                            <p>
                            <b>&raquo;</b> The Buyer submits the payment by approved payment method.<br>
                            <b>&raquo;</b> ETA Worldwid verifies the payment.
                            </p>
                        </li>
                    </ul>
                </div>
                <div id="tab4" class="tab-content" style="display: block;">
                    <div class="img-about"> <img class="" alt="about" src="{{url('assets/images/steps/HW__step5.jpg')}}"> </div>
                    <ul class="tab-post-container text">
                        <li>
                            <p>
                            <b>&raquo;</b> The Buyer has a set number of days to inspect the merchandise and the option to accept or reject it.<br>
                            <b>&raquo;</b> The Buyer accepts the merchandise.
                            </p>
                        </li>
                    </ul>
                </div>
                <div id="tab5" class="tab-content" style="display: block;">
                    <div class="img-about"> <img class="" alt="about" src="{{url('assets/images/steps/HW__step6.jpg')}}"> </div>
                    <ul class="tab-post-container text">
                        <li>
                            <p>
                            <b>&raquo;</b> ETA Worldwid releases funds to the Seller.<br>
                            <b>&raquo;</b> Transaction is complete. <b>Safety and Securely!</b>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>

    <div class="container clearfix m-bot-35">

        <div class="row">
            <div class="sixteen columns">
                <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container">There are a few situations that we currently handle</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                <ul class="styled-list style-3">
                    <li>The Seller and the Buyer have already agreed and discussed regarding the transaction and they want to use our Buyers Protection and shipping services. The funds are transferred to the Buyers Protection account and the seller will be paid at the end of the transaction.</li>
                    <li>You are a Seller/Buyer and you want to sell/buy a merchandise. After analyzing your case we will present our offer. Usually the transaction takes place like in the case above.</li>
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