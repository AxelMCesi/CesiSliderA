<?php 
include "vue/vue_entete.php";
?>

<?php

if(!empty($_FILES)){
	require("imgClass.php");
	$img = $_FILES['img'];
	$ext = strtolower(substr($img ['name'], -3));
	$allow_ext = array ('jpg','png');
	if(in_array($ext,$allow_ext)){
		move_uploaded_file($img['tmp_name'],"images/".$img['name']);
		Img::creerMin("images/".$img['name'],"images/min",$img['name'],215,112);
	}
	else
	{
		$erreur ="Votre fichier n'est pas une image";
	}	
}
?>

<html>
<head>

	<meta name = "viewport" content = "width = device-width, initial-scale = 1">      
	<link rel = "stylesheet"
	href = "https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel = "Òstylesheet"
	href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
	<script type = "text/javascript"
	src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
	</script> 
</head>


<body>

	<?php
	if(isset($erreur)){
		echo $erreur;
	}

	?>


	<br>
	<form method="post" action="index.php?section=AddImageConfirm" enctype="multipart/form-data">
		<div  class = "container">
			<div class = "row"></br>
				<div class = "col s12 m8 offset-m2 l8 offset-l2">
					<div class = "card-panel center">

						<input type="file" name="img"/>
						<input type="text" name="txtImage" placeholder="Nom de l'image :" size="50" required />
						<!--<input type="submit" name="Envoyer"/>-->
						<button class="waves-effect waves-light btn" type="submit" name ="btnAdd" value="Valider" onclick="return confirm('Etes vous sur de vouloir ajouter cette image ?');" > Envoyer</button>
					</div></div></div></div>

				</form>
				<?php
				$dos = "images/min";
				$dir = opendir($dos);
				while($file = readdir($dir)){
					$allow_ext = array ('jpg','png');
					$ext = strtolower(substr($file, -3));
					if(in_array($ext,$allow_ext)){
						?>
		
				
						<img src="images/min/<?php echo $file; ?>"/>
					
						<?php 
					}
				}


				?>

			</body>

			<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

			<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
