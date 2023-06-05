<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style_connec.css" rel="stylesheet" type="text/css">

</head>
<body>
    <h1 class="The">TheRock</h1>
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
    
    <form action="scriptinscription.php" method="POST">
    <h1>Inscription</h1>     
    <label><b>Nom d'utilisateur</b></label>
    <input type="text" name="NomClient" required>
    <label><b>Mot de passe</b></label>
    <input type="password" name="MDP" required>
    <input type="submit" id='submit' value='Continuer' >
   
    <?php
    if (isset($_GET['error'])) {
        echo '<p>Nom d\'utilisateur déjà pris.</p>';
    }
    ?>
    
    </form>
</body>
</html>
