<div class="switcher">

	<h2><b>My Account</b> <a href="#"><img class="s-s-icon" title="My Account" src="{{url('assets/images/logedin.png')}}" alt="Style switcher"/></a></h2>

	<div class="content2">

		
		<div class="item-title-main-container clearfix">

			<div class="item-title-text-container"> 

			{{ Auth::user()->fname }} <b>{{ Auth::user()->lname }}<b/>
			</div>

		</div>

		<ul class="styled-list style-5">

			<li><a href="myaccount">View Profile</a></li>

			<li><a href="transactions">View Transactions <b class="newtrans">NEW</b></a></li>

			<li><a href="start_transaction">Request new transaction</a></li>

		</ul>

		<div class="item-title-main-container clearfix">

			<div class="item-title-text-container"> <span class="bold">GET</span> HELP </div>

		</div>

		<ul class="styled-list style-5">

			<li><a href="gethelp">Support Tickets</a></li>

			<li><a href="contact">Contact</a></li>

		</ul>

        <button class="button medium" style="width: 100%" onClick="document.getElementById('logout-form').submit();"><i class="icon-lock"></i> Logout</button>
        <form method="POST" action="{{url('logout')}}" id="logout-form">
            @csrf
        </form>

		
	</div>

</div>