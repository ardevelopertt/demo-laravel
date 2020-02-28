 <?php 
	use App\UserImage; 
	$username = Auth::user()->name;
	 $user_id = Auth::user()->id;
 	$userimage = UserImage::where('user_id', '=' , $user_id)->get()->last();
  ?>

<div class="sidenav-container-top">
	<a href="{{ url('myprofile/edit') }}" class="sidenav-edit-button">
		Edit Image
	</a>
	<div class="sidenav-image">
	@if($userimage)
		@if($userimage->filename)
	@endif
			<img src="{{ asset ('img/' . $userimage->filename) }}"   width="250px">
	@else	
 	<img  width="250px" src="http://placehold.it/250x250"/>
	@endif    
	</div>
</div>
<div class="sidenav-container-middel">
	<a href="{{ url('myprofile') }}">
		<div class="sidenav-name">
			{{Auth::user()->name}}
		</div>
		<div class="sidenav-email">
			{{Auth::user()->email}}
		</div>
	</a>
</div>
<div class="sidenav-container-bottom">
	<div class="navigation">Navigation</div>
	<a  href="{{ url ('/home') }}" class="link-sidenav same-height"><i class="material-icons">home</i><div>Home</div></a>
	<a class="link-sidenav same-height"><i class="material-icons">supervisor_account</i> <div>Placeholder</div></a>
	<a class="link-sidenav same-height"><i class="material-icons">check_circle</i><div>Placeholder</div></a>
	<a class="link-sidenav same-height"><i class="material-icons">build</i><div>Placeholder</div></a>
	<a class="link-sidenav same-height"><i class="material-icons">explore</i><div>Placeholder</div></a>
	<a class="link-sidenav same-height"><i class="material-icons">flight_land</i><div>Placeholder</div></a>
	<a class="link-sidenav same-height"><i class="material-icons">http</i><div>Placeholder</div></a>
</div>


 