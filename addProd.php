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
echo '<a href='."".'>'.'Crédit'.'</a>';
echo '<a href='."inscription.php" .' class="con"'.'>'.'S\'inscrire'.'</a>';
echo '<a href='."pageconnexio.php" .' class="con"'.'>'.'Connexion'.'</a>';
echo '<a href='."deconnexion.php".' class="con"'.'>'.'Deconnexion'.'</a>';
echo '<a href='."pageadmin.php".' class="con"'.'>'.'Administration'.'</a>';

echo '</nav>';
    
    
    ?>
    <form action="scriptprod.php" method="POST">
    <h1>Ajout d'un Produit</h1>     
    
    <label><b>Nom du Produit</b></label>
    <input type="text" name="NomProd" required>
    <h3>Rappel des Catégories :</h3>
    <p>0 = Caillou</p>
    <p>1 = Rocher</p>
    <p>2 = Galet</p>
    <p>3 = Pierre</p>
    <p>4 = Gravier</p>
    <p>5 = Obsidienne</p>
    <p>6 = Pierre précieuse</p>
    <label><b>id Catégorie</b></label>
    <input type="text" name="idCat" required>
    <label><b>Prix</b></label>
    <input type="text" name="Prix" required>
    <label><b>Stock</b></label>
    <input type="text" name="Stock" required>
    <label><b>Lien de l'image</b></label>
    <input type="text" name="Image" required>
    <label><b>Description</b></label>
    <input type="text" name="Description" required>
    <input type="submit" id='submit' value='Continuer' >
   
    <?php
    if ($_GET['error']) {
        echo '<p>Nom du Produit déjà pris.</p>';
    }
    ?>
    
    </form>
</body>
</html>
