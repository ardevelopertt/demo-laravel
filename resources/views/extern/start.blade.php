@extends('layouts.extern')
@section('content')
 

 <div class="display-flex margin-top-20">
 	<div class="info-text margin-auto">

 		<div class="info-header">Infos</div> 
 			<div class="container-infos">
 				<div class="same-height margin-top-5">
					<i class="material-icons">stop</i>
					<div class="info-size">Als Backend wurde das PHP Framework <a href="https://laravel.com/"> Laravel </a> verwendet</div>
				</div>
 				<div class="same-height  margin-top-5">
					<i class="material-icons">stop</i>
					<div>Als Front-End-Tech­no­lo­gien wurden HTML, CSS und Java-Script verwendet</div>
				</div>
				<div class="same-height  margin-top-5">
					<i class="material-icons">stop</i>
					<div>Die Demo-App soll nur meinen bisherhigen Kenntnisse über HTML, PHP, JAVASCRIPT und CSS veranschaulichen </div>
				</div>
			</div>


		<div class="info-header">Features</div>
			<div class="container-infos">
				<div class="same-height  margin-top-5">
					<i class="material-icons">done</i>
					<div><b>Website Protection:</b> Password Hashing, Schutz vor: SQL-Injection, XSS, uvm..</div>
				</div>
				<div class="same-height  margin-top-5">
					<i class="material-icons">done</i>
					<div><b>MVC</b> (Model View Controller) Architektur</div>
				</div>
				<div class="same-height  margin-top-5">
					<i class="material-icons">done</i>
					<div><b>Reponsive Design</b> via Media Queries (nur für diese Startseite)</div>
				</div>
				<div class="same-height  margin-top-5">
					<i class="material-icons">done</i>
					<div><b>Serverseitige Validierung</b></div>
				</div>
 				<div class="same-height  margin-top-5">
					<i class="material-icons">done</i>
					<div><div> <b>Image-Upload</b> mittels Plugin: <a href="http://slimimagecropper.com/">Slim Image Cropper</a></div></div>
				</div>
				<div class="same-height  margin-top-5">
					<i class="material-icons">done</i>
					<div>Getestet in: Google-Chrome und Mozilla-Firefox </div>
				</div>
			</div>

			
	 	<div class="info-header">Installation dieser Demo-App</div>
	 	
			<div id="show-installation-app" class="show-more same-height ">
				<i class="material-icons">arrow_drop_down_circle</i>
	 			<div id="show-more"><b>Zeige mehr ...</b></div>
	 		</div>
	 	
 			<div class="installation-app" style="display:none">
 				<div>Um die Funktionalitäten dieser App zu testen muss zunächst eine MySQL Datenbank-Anbindung hergestellt werden:</div>
 					<ul>
 						<li>
 							<div>Dafür muss z.B. über phpMyAdmin eine neue Datenbank erstellt werden.</div>
 							<div>(Name: <b>demo</b>)</div>
 						</li>
 						<li>
 							<div>Ein neues Passwort oder Username ist für diese Demo nicht erforderlich</div> 
 						</li>
 						<li>
 							<div>Die Tabellen können anschließend über das Terminal erstellt werden:</div>
 							<div>Den <b>demo</b> Ordner öffnen und <b> php artisan migrate </b> in das Terminal eingeben.
 								 Die Datenbank sollte nun erstellt werden.
 							</div> 
						</li>
 						<li>
 							<div>Alternativ kann auch einfach die beiliegende Datei <b> demo.sql </b> direkt über phpMyAdmin geuploadet werden.</div>
 						</li>
 				 	</ul>
 			</div>
 			
 	 
 			
 		
 	</div>
     @if (!Auth::check()) 
   <div class="register-container margin-auto">
    <div class="register-container-inner "> <div class="register-text">Register</div>
		<form  role="form" method="POST" action="{{ route('register') }}"> {{ csrf_field() }}
			
			<label for="name" class="color-black-07 font-size-18">Name</label>
				<div class="input-register">
                   <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="your name">
				</div>
                         

			 <label for="email" class="color-black-07 font-size-18 ">E-Mail Address</label>
				<div class="input-register">  
                    <input id="email" type="email" class=" " name="email" value="{{ old('email') }}" required placeholder="your email">
				</div>
                        
 			 <label for="password" class="color-black-07 font-size-18 " >Password</label>
				<div class="input-register" >
                    <input id="password" type="password" class=" " name="password" required placeholder="your password">
				</div>
                   
             <label for="password-confirm" class="color-black-07 font-size-18 ">Confirm Password</label>
				 <div  class="input-register">
                    <input id="password-confirm" type="password" class=" " name="password_confirmation" required required placeholder="confirm your password">
				 </div>
             
           
              <button class="register-button" type="submit">Register</button>             
         
        </form>
    </div>
  @endif

    </div>
</div>    

<script>

</script>


@yield('content')
@endsection