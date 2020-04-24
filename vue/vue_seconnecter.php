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
 <script type = "text/javascript"
 src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
 <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
 </script> 
</head>

</head>
<div id= "Corps">


  <Form action = "index.php?section=verifConnexion" METHOD = "POST" name = "FormConnexion" id="connexion">

    <body>
      <!-- Connexion-->
      
      <div  class = "container">
        <div class = "row"></br>
         <div class = "col s12 m8 offset-m2 l8 offset-l2">
           <div class = "card-panel center">

            <h4>Connexion</h4>

            <div class ="input-field">
              <input type="text" name=Tlogin id="Tlogin" class = "active validate" required="">
              <label for="login">Login :</label>                                       
            </div>

            <div class ="input-field">
              <input type="password" name=Tmdp id="mdp" class = "active validate" required="">
              <label for="mdp">Mot de passe :</label>
            </div>

   
           
             <button class="waves-effect waves-light btn" type="submit" name ="Envoyer"> Se connecter</button>
            
    
</div>
</div>
</div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script >



</script>