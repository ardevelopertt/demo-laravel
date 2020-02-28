	<div id="create-post" class="create-post-container">
		<div class="display-flex same-height">
			<div class="post-image">
				<img width="50px" height="50px" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png"/>
			</div>
			<div class="post-infotext">What do you want to share?</div>   
		</div>
 	</div>
	
	<div class="post-container" style="display:none">
    <div class="display-flex space-between post-header">
      <div class=" same-height"> 
        <div class="post-name">{{Auth::user()->name}}</div>
        <div class="post-create-button same-height"><i class="material-icons">edit</i></div> 
      </div>
      <div class="post-picture">
        <div id="upload-image" class="post-image-button"> <i class="material-icons">add_a_photo</i>            </div>  
      </div>
    </div>
	    {!! Form::open(['method'=>'POST', 'action'=> 'PostController@store']) !!}
		    	<div class="post-title">
            <input type="" placeholder="title" name="title"></input>
          </div>
          <div class="post-body">
         	  <textarea placeholder="your text" name="body"></textarea>
          </div>
           <div id="upload-image-container">
              <div class="slim" data-ratio="8:4" data-size="640,640" data-label="Add your Photo" data-ratio="1:1">
               <input type="file" name="slim" />
              </div>
          </div>
          <div class="display-flex space-between post-bottom">     
    			 {!! Form::submit('Create Post', ['class'=>'btn btn-submit mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect']) !!}
           <button class="mdl-button mdl-js-button mdl-js-ripple-effect" id="closeContainer">Close</button>
          </div>
     {!! Form::close() !!}
    </div>            

















  

          



 
 
 