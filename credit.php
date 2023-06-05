<?php session_start(); ?>
<html>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="TheRock_Style.css" rel="stylesheet" type="text/css">
    
</head>
<body>
    <h1>TheRock</h1>
  
    <?php
    
    

    echo '<nav>';
    echo '<a href='." index.php".'>'.'Accueil'.'</a>';
    echo '<a href='."catalogue.php".'>'.'Catalogue'.'</a>';
    echo '<a href='."panier.php".'>'.'Panier'.'</a>';
    echo '<a href='."credit.php".'>'.'Crédit'.'</a>';
    echo '<a href='."inscription.php" .' class="con"'.'>'.'S\'inscrire'.'</a>';
    echo '<a href='."pageconnexio.php" .' class="con"'.'>'.'Connexion'.'</a>';
    echo '<a href='."deconnexion.php".' class="con"'.'>'.'Deconnexion'.'</a>';
    echo '<a href='."pageadmin.php".' class="con"'.'>'.'Administration'.'</a>';
   
    echo '</nav>';



    ?>
<p>Ce site à était fait par les soins de Yoan Croisier et Bastien Lespes dans le cadre de module R209 encadré par Mr Munier</p>
</body>
</html>



