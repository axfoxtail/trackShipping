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
                    <h1 class="page-title">PRIVACY POLICY</h1>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Grey bg end --> 

    <!-- CONTENT -->
    <div class="container clearfix">
        <div class="row">
            <div class="sixteen columns">
            
                <p class="styled-box iconed-box info">This policy was last modified on September 28 2017</p>
                                
                <div class="caption-container-main m-bot-25">
                    <div class="caption-text-container"><b>What information</b> do we collect?</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                
                <div class="blog-item-text-container m-bot-25 m-left-0">
                    <p>We collect information from you when you place an order or fill out a form.</p>
                </div>
                <p>When ordering or registering on our site, as appropriate, you may be asked to enter your: name, e-mail address, mailing address, phone number or credit card information. You may, however, visit our site anonymously.</p>
                
                <!------------------------------------------------------------->
                
                <div class="caption-container-main m-bot-25">
                    <div class="caption-text-container"><b>What do we use</b> your information for?</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                <p>Any of the information we collect from you may be used in one of the following ways:</p>
            
                <ul class="styled-list style-5">
                    <li><b>To process transactions</b> <br> Your information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without your consent, other than for the express purpose of delivering the purchased product or service requested.</li>
                    <li><b>To send periodic emails</b> <br> The email address you provide for order processing, will only be used to send you information and updates pertaining to your order.</li>
                </ul>	
                
                <!------------------------------------------------------------->
                
                <div class="caption-container-main m-bot-25">
                    <div class="caption-text-container">How do we <b>protect your information</b>?</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                <div class="blog-item-text-container m-bot-25 m-left-0">
                    <p>We implement a variety of security measures to maintain the safety of your personal information when you enter, submit, or access your personal information. </p>
                </div>
                <div class="blog-item-text-container m-bot-25 m-left-0">
                    <p>We offer the use of a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted into our Database to be only accessed by those authorized with special access rights to our systems, and are required to?keep the information confidential. </p>
                </div>
                <p>After a transaction, your private information (credit cards, social security numbers, financial s, etc.) will not be stored on our servers.</p>
                
                <!------------------------------------------------------------->
                
                <div class="caption-container-main m-bot-25">
                    <div class="caption-text-container">Do we disclose any information to outside parties?</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                <p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>
                
                <!------------------------------------------------------------->

                <div class="caption-container-main m-bot-25">
                    <div class="caption-text-container">Terms and Conditions</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                <div class="blog-item-text-container m-bot-25 m-left-0">
                    <p>Please also visit our Terms and Conditions section establishing the use, disclaimers, and limitations of liability governing the use of our website at <a href="terms.php"><b>http://proceed-shipping.com/terms.php</b></a></p>
                </div>
                
                <p class="m-bot-30"><strong>By using our site, you consent to our web site privacy policy.</strong></p>
                
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