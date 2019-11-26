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
                    <h1 class="page-title">My Account - <b>{{ Auth::user()->fname }}</b><b> {{ Auth::user()->lname }}</b></h1>
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

            @if(Auth::user()->role == 'normal')

            <div class="twelve columns">
                <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container"><b>Customer</b> Details</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                
                <p>From your Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information.</p>
                
                <div class="comment">
                    <div class="single-comment">
                        <div class="comment-avatar">
                            <img alt="" src="{{url('assets/images/content/avatar-1.png')}}"><br>
                            <p><b>LEVEL 1</b><br><span>Unverified user</span></p>
                            
                        </div>
                        <div class="comment-head clearfix">
                            <div class="comment-name left"><a><b>{{ Auth::user()->fname }}</b><b> {{ Auth::user()->lname }}</b></a></div>
                            <div class="right">
                                <span class="comment-desc">Registered on {{ Auth::user()->created_at }}</span>
                                <span class="comment-reply"><a href="edit_profile"><b>Edit</b> Profile</a></span>
                            </div>  
                        </div>	
                        <div class="comment-text">
                            <p>

                            <table class="title-block profiletable">
                                                            <tr>
                                    <td>Name</td>
                                    <td><b>{{ Auth::user()->fname }}</b><b> {{ Auth::user()->lname }}</b></td>
                                </tr>
                                                            <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Mailing address</td>
                                    <td><b> {{ Auth::user()->address }}</b>,<b> {{ Auth::user()->city }}</b><br><b> {{ Auth::user()->postcode }}</b> <b> {{ Auth::user()->country }}</b></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Email address</td>
                                    <td><b> {{ Auth::user()->email }}</b></td>
                                </tr>
                                <tr>
                                    <td>Phone number</td>
                                    <td><b> {{ Auth::user()->phone }}</b></td>
                                </tr>
                                                        </table>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            @else

            <div class="twelve columns">
                <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container"><b>Customer</b> Details</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                
                <p>From your Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information.</p>
                
                <div class="comment">
                    <div class="single-comment">
                        <div class="comment-avatar">
                            <img alt="" src="images/content/avatar-1.png"><br>
                            <p><b>LEVEL 1</b><br><span>Unverified user</span></p>
                            
                        </div>
                        <div class="comment-head clearfix">
                            <div class="comment-name left"><a>Representative -<b>{{Auth::user()->bfname}}</b><b>{{Auth::user()->blname}}</b></a></div>
                            <div class="right">
                                <span class="comment-desc">Registered on 02 Nov 2019</span>
                                <span class="comment-reply"><a href="edit_profile"><b>Edit</b> Profile</a></span>
                            </div>  
                        </div>	
                        <div class="comment-text">
                            <p>

                            <table class="title-block profiletable">
                                                            <tr>
                                    <td>Firm Name</td>
                                    <td>{{ Auth::user()->fname }}</td>
                                </tr>
                                <tr><td>Other Business Names</td><td>{{ Auth::user()->bname }}</td></tr>							<tr>
                                    <td>Type of Business</td>
                                    <td>{{ Auth::user()->btype }}</td>
                                </tr>
                                <tr>
                                    <td>Nature of Business</td>
                                    <td>{{ Auth::user()->bnature }}</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Company Representative</td>
                                    <td><b>{{ Auth::user()->bfname }}</b><b> {{ Auth::user()->blname }}</b></td>
                                </tr>
                                                            <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Mailing address</td>
                                    <td><b> {{ Auth::user()->address }}</b>,<b> {{ Auth::user()->city }}</b><br><b> {{ Auth::user()->postcode }}</b> <b> {{ Auth::user()->country }}</b></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Email address</td>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <td>Phone number</td>
                                    <td>{{ Auth::user()->phone }}</td>
                                </tr>
                                <tr>
                                    <td>FAX</td>
                                    <td>{{ Auth::user()->fax }}</td>
                                </tr>
                            </table>

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            @endif


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
    @if(Auth::guest())
        @include('layouts.partials.switcher')
    @else
        @include('layouts.partials.switcher_account')
    @endif
    <!-- /.SWITCHER -->





    <p id="back-top"> <a href="#top" title="Back to Top"><span></span></a> </p>

</div>


@endsection