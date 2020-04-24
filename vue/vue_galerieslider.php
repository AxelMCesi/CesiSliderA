<?php 
include "vue/vue_entete.php";


?>

<html>
<head>  

	<meta name = "viewport" content = "width = device-width, initial-scale = 1">      
	<link rel = "stylesheet"
	href = "https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel = "Òstylesheet"
	href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
	<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>  
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script type="text/javascript" src="func.js"></script>
<script>
	alert('test');
</script>

	<script>
		function imageGalerie()
		{
			var active=$('galerie .active');

			var next = (active.next().length > 0) ? active.next() : $('#galerie img:first');

			active.fadeOut(function(){

				active.removeClass('active');
				next.fadeIn().addClass('active');

			});


		}

		setInterval('imageGalerie()',2500);

	</script>

	<style>
		#galerie
		{
			position:relative;
			width:1024px;
			height:768px; 

		}

		#galerie img
		{
			position:absolute;
			display:none;
		}

		#galerie .active
		{
			display:block;
		}

	</style>



</head>


<div id= "galerie">
	<img src="images/min/Image1.jpg" alt="image1" class="active"/>
	<img src="images/min/MLD.jpg" alt="image2"/>

</div>





