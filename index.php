<?php session_start(); ?>
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
    
if (isset($_GET['error'])) {
        echo '<h2>Vous n\'avez pas les droits !</h2>';
    }  

  ?>



    </br>
    <h2>Ce site est LE site référenciel pour acheter les meilleurs cailloux au monde. </h2>
    </br>
    <img src="Image/TheRock.jpg"
    width="350"
    height="400">
    <h4>Fait par Bastosterone et NoobMaster</h4>
    <button onclick= "window.location.href='//www.youtube.com/watch?v=xvFZjo5PgG0'">Bouton 1</button>
    </form>
</body>
</html>
