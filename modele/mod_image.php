<?php

function ajoutJob($LibImage)
{

    global $bdd;
    $req = $bdd->prepare("INSERT INTO image(LibImage) VALUES ('$LibImage')");
    $req->execute();

}