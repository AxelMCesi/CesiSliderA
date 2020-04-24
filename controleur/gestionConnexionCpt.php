<?php
//test de $cnxCpt pour voir s'il s'agit d'une connexion ou d'une déconnexion

if ($cnxCpt=='v')
{

		$wlogin = htmlspecialchars($_POST['Tlogin']);
		$wmdp = htmlspecialchars($_POST['Tmdp']);
	
		echo $wlogin.' '.$wmdp;
		
	include_once('modele/mod_appli.php');
	
	$cpt = get_compte($wlogin,$wmdp);

	$Lib = $cpt['LoginUti'];


	if ($cpt['LoginUti'] != null)

	{
		
		$_SESSION['idCpt']= $cpt['IdUti'];
		$_SESSION['LibCpt']= $cpt['LoginUti'];
		$_SESSION['nomCpt']= $cpt['NomUti'];
		$_SESSION['prenomCpt']= $cpt['PrenomUti'];
		

		$_SESSION['validationConnexion']= true;
		$_SESSION['co'] = 'co';
		header("location:index.php?section=index");
				 
	}
	else
	{		

		$_SESSION['validationConnexion']= false;

		header("location:index.php?section=seconnecter");
		$_SESSION['no'] = 'no';

	}
	
}
else

{

session_destroy();
header("location:index.php?section=index");

}




