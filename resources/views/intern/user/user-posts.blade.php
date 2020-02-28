@if(count($posts) > 0)
<div class="posts-from-user">Posts from {{ Auth::user()->name }}</div>

	@foreach($posts as $post)
		<div class="posts">
			<div class="posts-container-header display-flex same-height">
				<div class="posts-image ">
						@if($userimage)
						@if($userimage->first()->filename)
					@endif
						<img width="50px" height="50px"  src="{{ asset ('img/' . $userimage->first()->filename) }}">
					@else	
 						<img width="50px" height="50px" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png"/>
					@endif 
				</div>
				<div class="posts-name " >
					{{Auth::user()->email}}
				</div>
			</div>
			<div class="posts-container-content">
				<div class="posts-title">
					{{$post->title}}
				</div>
				<div class="posts-body">
					{{$post->body}}
				</div>
				<div class="posts-image">

				</div>
			</div>

		</div>  
        
	@endforeach

 			

<div class="text-center more-posts">
	{!! $posts->links(); !!}
</div>
@else
		<div class="posts">
			<div class="posts-container-header display-flex same-height">
				<div class="posts-image">
					<img width="50px" height="50px" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png"/>
				</div>
				<div class="posts-name">
					Admin
				</div>
			</div>
			<div class="posts-container-content">
				<div class="posts-title">
					Sorry
				</div>
				<div class="posts-body">
					No posts yet. You can create your first one  <a href="{{ url ('/home ')}}" >here</a>.
				</div>
				<div class="posts-image">

				</div>
			</div>

		</div>  


@endif