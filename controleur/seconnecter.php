<?php
	
	
// affichage de la vue associée
	include_once('vue/vue_seconnecter.php');



  if(isset($_SESSION['no'])){
 	echo"<script>M.toast({html:'Login ou mot de passe incorrecte !'})</script>";
 	unset($_SESSION['no']);
 }

?>	

