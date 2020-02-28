<!DOCTYPE html>
  <html lang="en">
    
    <head>
    @include('partials.head')
   </head>
  
    <body >
      
      <div class="effect-dark" style="display:none"></div>
      <div id="main-container"> 
        
        @include('partials.nav-intern')  
          
          @if (Auth::check()) 
            <div id="sidenav" class="sidenav-container">
               @include('partials.sidenav')
            </div>
          @endif
              
             @include('partials.messages')
             @yield('content')
             @include('partials.footer')
 

      </div>

            @include('partials.javascript')
            
    
  </body>
</html>
