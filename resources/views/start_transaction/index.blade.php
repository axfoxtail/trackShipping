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
                    <h1 class="page-title">My Account - <b>Stephan Korn</b></h1>
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
                    <div class="caption-text-container">REQUEST <b>NEW TRANSACTION</b></div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                
                <h3 class="title-block">Insufficient Privileges!</h3>
                <p>ETA Worldwid imposes transaction limits via so-called user levels. LEVEL 2 accounts have the highest transaction limits. ETA Worldwid set all users at LEVEL 1, and after the required verification only the seller can get to LEVEL 2 status.</p>
                
                <blockquote>
                    To start a <b>transaction</b> you need to do two things:
                    <p style="margin-bottom: 0;">
                        <b>1)</b> Be ready to close the <b>deal</b>.<br>
                        <b>2)</b> Make sure you inform the seller so he can start the transaction
                    </p>
                </blockquote>
                
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

