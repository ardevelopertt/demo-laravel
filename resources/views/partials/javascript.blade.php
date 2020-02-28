<!-- jquery framework -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <!-- bootstrap javascript, z.B. für dropdown --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- material design lite -->
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<!-- Slim Plugin -->
{{ Html::script('js/slim.kickstart.min.js') }}


<!--  javascript code für seitliche sidenav -->
<script>

		function openSidenav() {
		      document.getElementById("sidenav").style.width = "250px";
		      document.getElementById("main-container").style.marginLeft = "250px";
		  }

		function closeSidenav() {
		      document.getElementById("sidenav").style.width = "0";
		      document.getElementById("sidenav").style.padding = "0";
		      document.getElementById("main-container").style.marginLeft= "0";
		  }

		function showHideNav() {
		    var mySideWidth = document.getElementById("sidenav").style.width;
		    if ( mySideWidth == "0px" ) {
		      openSidenav();
		    } else {
		      closeSidenav();
		    }
		  }

		window.onload = openSidenav();

</script>


 


<!-- jquery für animationen von create-post -->

<script>

$(document).ready(function(){

/* onclick create-post container */
  $('#create-post').on('click',function(){

    $("#upload-image-container").hide();
    $('.effect-dark').fadeIn();
    $('.post-container').slideDown();
    $('#create-post').slideUp();

  });

/* onclick image-button */
  $('#upload-image').on('click',function(){

    $("#upload-image-container").show();
    $('.post-container').slideDown();

  });
  
/* onclclck close-button */
  $('#closeContainer').on('click',function(e){
     e.preventDefault();

    $('.post-container').slideUp();
    $('.effect-dark').fadeOut();
    $('.tagsContainer').hide();
    $('#create-post').slideDown();
  
  });

/* nach einer sekunde success-message verschwinden lassen */
  $('#success-message').delay(1000).fadeOut('slow');


/* onclick installation-demo-app button */
  $('#show-installation-app').on('click',function(){

    $('.installation-app').slideToggle();
  });




});




 
</script>