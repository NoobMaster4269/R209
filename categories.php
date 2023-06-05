<?php session_start();?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Rocher.css" rel="stylesheet" type="text/css">

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
    
    echo $_GET['NomProd'];
    
    $sql = "SELECT DISTINCT * from Produits WHERE idCat=" . $_GET['idCat'];
    $results = $db->query($sql);
    echo "<div class='container_images'>";
    if (isset($_GET['error'])) {
        echo '<h2>Le stock de ce produit '.$_GET['NomProd'].' est écoulé.</h2>';
    }  
    while ($row = $results->fetchArray()) {
        
    
        echo "<div class = 'im'>";
            echo '<img src=" '.$row['Image'].'" max-width="500" max-height="300"></img>';
            echo "<div class='txt'>";
                echo "<div class='Nom'>";
                    echo $row['NomProd'];
                echo "</div>";
                echo "</br>"."</br>";
                echo "<div class = 'des'>";
                    echo $row['Description'];
                echo "</div>";
                echo "</br>"."</br>";
                echo "<div class='stock'>";
                    echo 'Stock : '.$row['Stock'];
                echo "</div>";
                echo "</br>"."</br>";
                echo "<div class='pri'>";
                    echo 'Prix : '.$row['Prix'].' €';
                    echo '</br>'.'<br>';
                    echo '<a href='.'ajouteraupanier.php?idProd='.$row['idProd'].'>'."Ajouter au panier".'</a>'. $_GET['idProd'].'<br>'; 
                echo "</div>";
            echo "</div>";
        echo "</div>";
                    
    } 
                
    echo "</div>";
                
                
 
$db->close();
?>
</body>
</html>
