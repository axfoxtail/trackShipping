<div class="switcher">

    <h2><b>Login</b> to your account <a href="#"><img class="s-s-icon" title="My Account" src="{{ url('assets/images/login.png')}}" alt="Style switcher"/></a></h2>

    <div class="content2">

        <form class="loginForm" method="post" action="{{ route('login') }}">
            @csrf

            <h3>User email</h3>

            <input type="text" name="email" value="{{ old('email') }}" id="lusername">

            <div class="clear"></div>

            <h3>Password</h3>

            <input type="password" name="password" id="lpassword">

            <div class="clear"></div>

                <!--<p><a href="password_recovery.php" title="Forgot your password?">Forgot your password?</a></p>-->

            <hr style="margin-bottom: 0">

            <p><i><a href="register" title="SIGN UP WITH US NOW!">SIGN UP WITH US NOW!</a></i></p>

            <button type="submit" name="login-formsubmit" class="button medium" style="width: 100%"><i class="fa fa-unlock"></i> Login</button>

        </form>

    
    </div>

</div>