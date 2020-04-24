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
</head>


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


<body>

	<!----------------------------- Présentation ------------------------------>
	<div class="container container-presentation">
		<div class="row row-titre">
			<!-- Titre -->

			<h3 class="h1-titre">Bienvenue sur l'outil de Génération de Slides Online.</h3>
		</div>

			<div class="row row-description">
				<!-- Description -->
				<p>

					Nous vous invitons à suivre les tutoriels associés à ce présent générateur afin de l'utiliser d'une manière convenable et sans problèmes.
					<br />Rejoignez la rubrique <strong>"Tutoriels"</strong> de notre site que vous pourrez trouver dans la barre de naviguation ci-dessus.
				</p>
			</div>
		</div>



              

<br/>
	<div id= "galerie">

			<img src="images/min/Image1.jpg" alt="image1" class="active"/>
			<img src="images/min/MLD.jpg" alt="image2"/>
	</div>
	<!--<input type="button" value="Cliquez moi" onClick="Message()">-->
		<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>  
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

		<script type="text/javascript" src="./func.js"></script>
	</body></html>

 </body>
 </html>


 


