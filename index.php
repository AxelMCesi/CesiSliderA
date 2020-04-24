<?php
session_start();
include_once('modele/connexionBDD.php');

if  (
    (!isset($_SESSION['validationConnexion']) )

    OR

    ($_SESSION['validationConnexion'] ==false)

)

{
    $okConnexion = false;
}
else

{
    $okConnexion = true;
    $idSessionCpt = $_SESSION['idCpt'];
    $libSessionCpt = $_SESSION['LibCpt'];
    $nomSessionCpt = $_SESSION['nomCpt'];
    $prenomSessionCpt = $_SESSION['prenomCpt'];

    
}

if($_GET['section'] == 'sedeconnecter')
{
    $cnxCpt='d';
    include_once('controleur/gestionConnexionCpt.php');
}

include_once('modele/connexionBDD.php');



if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleur/accueil.php');
}
else
{
  if ($_GET['section'] == 'seconnecter')
  {  
     include_once('controleur/seconnecter.php');
 }
 if ($_GET['section'] == 'compte')
 {  
    include_once('controleur/compte.php');
}
 if ($_GET['section'] == 'galerieimage')
 {  
    include_once('controleur/galerieimage.php');
}
 if ($_GET['section'] == 'galerieslider')
 {  
    include_once('controleur/galerieslider.php');
}

 if ($_GET['section'] == 'creationslider')
 {  
    include_once('controleur/creationslider.php');
}
        if ($_GET['section'] == 'AddImageConfirm')
    {  
        include_once('controleur/AddImageConfirm.php');
    }

if ($_GET['section'] == 'verifConnexion')
{  
    $cnxCpt='v';
    include_once('controleur/gestionConnexionCpt.php');
}
}