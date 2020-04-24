<?php

// Connexion à la base de données bddimages
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=bddimage', 'root','');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}



