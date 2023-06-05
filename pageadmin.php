<?php session_start(); ?>

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


$sql = 'SELECT * FROM Clients WHERE idClient = "'.$_SESSION['NomClient']['idClient'].'"';
$results = $db->query($sql);
$row = $results->fetchArray();
if (isset($_SESSION['NomClient'])){
if ($_SESSION['NomClient']['idClient'] === $row['idClient'] AND $row['Status'] === "Admin" ){
    $sql6 = 'SELECT * FROM Clients ';
    $results6 = $db->query($sql6);
    while ($row6 = $results6->fetchArray()) {
        echo "</br>";
        echo "Nom du Client : ".$row6['NomClient']." / Statut du Client : ".$row6['Status'];
        echo "</br>";
        echo '<a href='.'supprClient.php?idClient='.$row6['idClient'].'>'."Suprimer le Client".'</a>'.$_GET[$row6['idClient']];
        echo '<a href='.'supprPanier.php?idClient='.$row6['idClient'].'>'."Suprimer le Panier".'</a>'.$_GET[$row6['idClient']];
        echo "</br>";

    }
    echo "</br>";
    echo '<a href= addClient.php>'."Ajouter un Client".'</a>';
    echo '<a href= addAdmin.php>'."Ajouter un Admin".'</a>';
    echo "</br>";
    $sql7 = 'SELECT * FROM Produits ';
    $results7 = $db->query($sql7);
    while ($row7 = $results7->fetchArray()) {
        echo "</br>";
        echo "Nom du Produit : ".$row7['NomProd']." / Prix du Produit : ".$row7['Prix']."€ / Stock du Produit : ".$row7['Stock'];
        echo "</br>";
        echo '<a href='.'supprProd.php?idProd='.$row7['idProd'].'>'."Suprimer".'</a>'.$_GET[$row7['idProd']];
        echo "</br>";
    }
    echo "</br>";
    echo '<a href= addProd.php>'."Ajouter un Produit".'</a>';
}else {

    header('Location: index.php?error=1');
}
} else {
    header('Location: pageconnexio.php');
}




?> 


</body>
</html>