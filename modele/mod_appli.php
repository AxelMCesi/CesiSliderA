<?php	
	function get_compte($log,$mdp)

{
	global $bdd;
	$req = $bdd->prepare("select * from utilisateur where LoginUti = '$log' and MdpUti='$mdp'");
	$req->execute();
	$compte = $req->fetch();
	return $compte;

}