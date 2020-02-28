 <?php 
	use App\UserImage; 
	$username = Auth::user()->name;
	 $user_id = Auth::user()->id;
 	$userimage = UserImage::where('user_id', '=' , $user_id)->get()->last();
  ?>

@if (Auth::check())
	<header>	
		<div class="header-extern display-flex space-between same-height">
			<div class="left-side">
				 <div class="same-height show-nav logoIntern">
					<i onclick="showHideNav()" class="material-icons">menu</i> 
					<a  class="logoIntern" href="{{ url('/home') }}">demo<b>App</b></a>
				</div>
			</div>
			<div class="right-side">
				<div id="demo-menu-lower-right" class="user-settings display-flex same-height">
             		<div class="user-name">{{ Auth::user()->name }}</div>
             		 <i class="material-icons">arrow_drop_down</i>
 				</div>  
 
				<div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
					<div class="account-container">
						<div class="account-header display-flex space-between">
							<div class="my-account">My Account</div>
							<div class="logout">
                      	 		<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><b>Logout</b> </a>
                       			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    	 	</div>
                    	 </div>
                    	 <div class="account-bottom display-flex">
                    	 	<div class="account-image">
                    	 		@if($userimage)
								@if($userimage->filename)
								@endif
									<img src="{{ asset ('img/' . $userimage->filename) }}" height="80px" width="80px">
								@else	
								 	<img  src="http://placehold.it/80x80"/>
								@endif 
                    	 	</div>
                    	 	<div class="account-name-email-myaccount">
                    	 		<div class="account-name">{{ Auth::user()->name }}</div>
                    	 		<div class="account-email">{{Auth::user()->email }}</div>
                    	 		<a href="{{ url('myprofile') }}" class="account-myaccount-button"><button>Account</button></a>
                    	 	</div>
                    	 </div>
                    </div> 
                </div> 
             </div>   
	</header> 

@endif




