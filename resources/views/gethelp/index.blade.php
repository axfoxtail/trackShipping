
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
                    <h1 class="page-title">Helpdesk</h1>
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
                    <div class="caption-text-container">All <b>tickets</b></div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                
                <div class="row">
                    <p>Alternate ways to get help:</p>
                    <ul class="styled-list style-5">
                        <li>Check our <a href="faq">FAQ list</a>. It has a lot of questions answered.</li>
                        <li>Use our <a href="contact">contact page</a>.</li>
                    </ul>
                </div>
                
                <div class="row">
                    <table width="100%">
                        <tr class="dark-grey-bg">
                            <td><h3 class="title-block">ID#</h3></td>
                            <td><h3 class="title-block">Subject</h3></td>
                            <td><h3 class="title-block">Status</h3></td>
                        </tr>
                        @if($count == 0)
                        <tr class="trborder"><td><p>&nbsp;</p></td><td>No open tickets</td><td>&nbsp;</td></tr>				
                        @else 
                            @foreach($tickets as $ticket)
                            <tr class="trborder">
                                <td>
                                    <p>{{$ticket->id}}</p>
                                </td>
                                <td>
                                    <p><a href="">Ticket -{{$ticket->subject}}</a></p>
                                </td>
                                <td>
                                    <p>{{$ticket->status}}</p>
                                </td>
                            </tr>	
                            @endforeach			
                        @endif
                    </table>
                </div>
                
                <div class="caption-container-main m-bot-30 m-t-min-1">
                    <div class="caption-text-container">Submit <b>new ticket</b></div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                
                            
                <div class="row">
                    <form action="{{ url('/gethelp') }}/{{ Auth::user()->id }}" method="POST" class="clearfix">		
                    @csrf
                    @method('PUT')	
                        <fieldset class="field-1-3 left">
                            <label class="title-block">Subject</label>	
                            <input type="text" name="subject" id="subject" placeholder="Subject..." class="text subject m-bot-20" >
                        </fieldset>	
                        <fieldset class="field-1-1 left">
                            <label class="title-block">Message</label>
                            <textarea name="content" id="message" rows="5" cols="30" class="text" placeholder="Your message..." value=""></textarea>
                        </fieldset>
                        <fieldset class="right m-t-min-1 left">
                            <input type="submit" name="ticket-formsubmit" value="Subit Ticket" class="button medium">
                        </fieldset>
                    </form>
                </div>


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
            $("#ticket-form").validate({
                rules: {
                    subject: 	{ required: true, minlength: 5, letterswithbasicpunc: true },
                    content: 	{ required: true, minlength: 10, letterswithbasicpunc: true }
                },
                messages: {
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

@stop