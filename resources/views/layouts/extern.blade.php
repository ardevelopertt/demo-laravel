<!DOCTYPE html>
  <html lang="en">
    
    <head>
    @include('partials.head')
   </head>
  
    <body >
      
      <div class="effect-dark" style="display:none"></div>
      <div id="main-container"> 
        
        @include('partials.nav-extern')  
          
             @include('partials.messages')
             @yield('content')
             @include('partials.footer')
 

      </div>

            @include('partials.javascript')
            
    
  </body>
</html>
