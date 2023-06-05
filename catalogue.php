<!DOCTYPE html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Catalogue.css" rel="stylesheet" type="text/css">
</head>
<html>
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
    if(!$db){
        echo $db -> lastErrorMsg();
    }
    $sql = "SELECT DISTINCT * from Categorie";
    $results = $db->query($sql);

    echo "<div class='container_images'>";
    while ($row = $results->fetchArray()) {
       
            echo '<img src=" '.$row['Image'].'" width="300"></img>'.'<br>';
            echo '<a href='.'categories.php?idCat='.$row['idCat'].'>'.$row['NomCat'].'</a>'. $_GET['idCat'].'<br>'; 
        }   
    echo "</div>";
        $db->close();
?>  

    </body>
</html>