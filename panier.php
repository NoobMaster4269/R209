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
    
class MyDB extends SQLite3 {
    function  __construct(){
        $this->open('bdd.db');
    }
}
$db = new MyDB();



if (isset($_SESSION['NomClient'])){

} else {
    header('Location: pageconnexio.php');
}

$sql = 'SELECT * FROM Panier WHERE idClient = "'.$_SESSION['NomClient']['idClient'].'"';
$result = $db->query($sql);

if (isset($_GET['error'])) {
    echo '<p>Plus de stock, va en chercher dehors</p>';
}



while ($row = $result->fetchArray()) {
	echo '<img src= "'.$row['Image'].'" max-width="50" max-height="50"></img>';
    echo "<br>";
	echo $row['NomProd'];
	echo "<br>";
	echo "Prix : ".$row['Prix']."€". "<br>";
	echo "Quantité : " .$row['Qte'];
    echo "<br>";
    echo '<a href='.'ajouterqte.php?idProd='.$row['idProd'].'>'."Ajouter une quantité".'</a>'. $_GET['idProd'].'<br>'; 
	echo '<a href='.'suprpanier.php?idProd='.$row['idProd'].'>'."Suprimer".'</a>'.$_GET['idProd'];
    echo "<br>".'<br>'.'<br>'.'<br>';
}


$PrixTot = 'SELECT SUM(Prix*Qte) FROM Panier WHERE idClient ="' .$_SESSION['NomClient']['idClient'].'"';
$result2 = $db->query($PrixTot);
$row = $result2->fetchArray();
echo "Prix total : ".$row['SUM(Prix*Qte)']."€";

$db->close();




?>
</br>
<input type="submit" name="Acheter" class="button" value="Acheter" />



</body>
</html>
