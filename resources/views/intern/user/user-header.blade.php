<?php 
$username = Auth::user()->name;
  ?>

<div class="profile-image">
	
	@if (Auth::user())
	<a href="{{ url('myprofile/edit') }}" class="profile-edit-button">
		Edit Image
	</a>
	@endif

@if($userimage)
@if($userimage->first()->filename)
@endif
	<img src="{{ asset ('img/' . $userimage->filename) }}" height="500px" width="500px">
@else	
 	<img  src="http://placehold.it/500x500"/>
@endif      

                        
</div>
