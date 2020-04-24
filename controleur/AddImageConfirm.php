<?php
$wLibImage = $_POST['txtImage'];


include_once('modele/mod_image.php');

ajoutJob($wLibImage);

include_once('vue/vue_galerieimage.php');

?>