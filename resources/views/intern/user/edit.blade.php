@extends('layouts.intern')
@section('title', '| Edit')
@section('content')
 
<div class="upload-image-profile">	   
	{!! Form::open(['method'=>'POST', 'action'=> 'UserController@upload']) !!}

             <div class="slim"   data-label="Drop your avatar here" data-ratio="1:1">
             <input type="file" name="slim" />
             </div>

          <div class="display-flex space-between post-bottom">     
    			 {!! Form::submit('Upload Image', ['class'=>'btn btn-submit mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect']) !!}
      	  </div>
     {!! Form::close() !!}
</div>
@yield('content')

 
@endsection
