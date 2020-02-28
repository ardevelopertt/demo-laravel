 
@if($posts)
	@foreach($posts as $post)
		<div class="posts">
			<div class="posts-container-header display-flex same-height">
				<div class="posts-image">

					@if($userimage)
						@if($userimage->filename)
					@endif
						<img width="50px" height="50px"  src="{{ asset ('img/' . $userimage->filename) }}">
					@else	
 						<img width="50px" height="50px" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png"/>
					@endif 
					
				</div>
				<div class="posts-name ">
					 {{ $post->user->email }}
				</div>
			</div>
			<div class="posts-container-content">
				<div class="posts-title">
					{{$post->title}}
				</div>
				<div class="posts-body">
					{{$post->body}}
				</div>

				@if ($post->filename !== 'noImage')
				<div class="posts-image-shared">
					<img src="{{ asset ('img/' . $post->filename) }}" >
				</div>
				@endif
			</div>

		</div>  
        
	@endforeach
@endif
 			

<div class="text-center more-posts">
	{!! $posts->links(); !!}
</div>