<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  





    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Oswald|Raleway|Roboto" rel="stylesheet">
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="inc/css/materialize.css"  media="screen,projection"/>
     


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>
    <!--JavaScript at end of body for optimized loading-->
         <script type="text/javascript" src="inc/javascript/materialize.min.js"></script>


  <title>Slider</title>
</header>


<!--MENU-->
<nav>
  <div class="nav-wrapper blue-grey darken-3" >

 <?php
      if($okConnexion==true)
      {
        echo" <a class='waves-effect waves-light btn grey lighten-2 black-text hoverable' href='index.php?section=galerieimage'>Galerie d'image</a></button> ";
        echo" <a class='waves-effect waves-light btn grey lighten-2 black-text hoverable' href='index.php?section=galerieslider'>Galerie slider</a></button> ";
         echo" <a class='waves-effect waves-light btn grey lighten-2 black-text hoverable' href='index.php?section=creationslider'>Creation slider</a></button> ";

      }       
      ?>

<ul id="nav-mobile" class="right hide-on-med-and-down">
<!--Menu avant connexion.-->
      <?php
      if($okConnexion==false)
      {
        echo" <a class='waves-effect waves-light btn grey lighten-2 black-text hoverable' href='index.php?section=index'>Accueil</a></button> ";

        echo" <a class='waves-effect waves-light btn grey lighten-2 black-text hoverable' href='index.php?section=seconnecter'>Connexion</a></button> ";

      }       
     else 
      //Menu avant connexion//
      {

         echo"Bienvenue $prenomSessionCpt $nomSessionCpt";

      
        echo" <a class='waves-effect waves-light btn grey lighten-2 black-text hoverable' href='index.php?section=sedeconnecter'>Déconnexion</a></button> ";

         
      }
      ?>
 
 

</ul>

</a></a></div></nav>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>




</html>