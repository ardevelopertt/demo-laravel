 @if (!Auth::user())
 <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
	{{ csrf_field() }}

	<div class="display-flex">

		<div class="email-and-remember-container">
			<div for="email" class="email-login">E-Mail Address</div>
		 	<input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
			<div class="checkbox">
                 <label class="remember-me">
                    <input type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}> Remember Me
                   </label>
     			</div>
 		</div>

		 <div class="password-and-login-container">
            <div class="password-login" for="password">Password</div>
			<input id="password" type="password"  name="password" required>
 			<button class="login-button" type="submit" >Login</button>
		</div>
                      
	</div>                       
</form>
@endif
 
		 