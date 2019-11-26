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
                    <h1 class="page-title">My Account - <b>{{Auth::user()->fname}}</b><b>{{Auth::user()->lname}}</b></h1>
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
                    <div class="caption-text-container">Transactions</div>
                    <div class="content-container-white caption-bg "></div>
                </div>
                <p>View and manage your transactions. Use the list below to view and process your transactions</p>
                
                <div class="right m-bot-25"> &nbsp; <b> 1</b> - <b>1</b> of <b>{{$count}}</b> orders &nbsp;</div>
                <table class="transactionsTable">
                @if($count == 0)
                    <tr>
						<td class="dataColumn"><div>&nbsp;</div></td>
						<td class="descriptionColumn">
							<h3 class="title-block"> No Orders </h3>
						</td>
						<td class="statusColumn"> <div><b>&nbsp;</b></div> </td>
					</tr>

                @else

                @foreach($transactions as $transaction)
                    <tr href="view_transaction/{{$transaction->id}}">
                        <td> <i class="icon-circle"></i> </td>
                        <td class="dataColumn"><div>{{$transaction->created_at}}</div></td>
                        <td class="descriptionColumn">
                            <h3 class="title-block">{{$transaction->extra}}</h3>
                        </td>
                        <td class="statusColumn"> <div><b>{{$transaction->price}}</b><b> USD</b></div> </td>
                    </tr>
                @endforeach
                @endif
                            
                </table>
                <div class="right m-top-25 m-bot-25"> &nbsp; <b> 1</b> - <b>1</b> of <b>{{$count}}</b> orders &nbsp;</div>
                <ul class="legend m-top-25">
                    <li><i class="icon-circle"></i> Buying</li>
                    <li><i class="icon-ok-circle"></i>I bought</li>
                    <li><i class="icon-circle-blank"></i> Selling</li>
                    <li><i class="icon-ok-sign"></i> I sold</li>
                </ul>
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
            $('.transactionsTable tr').click(function() {
                if ($(this).attr('href') !== undefined) {
                    window.location = $(this).attr("href");
                } else {
                    // attribute does not exist
                }
            });
            
        });
    </script>

@stop

