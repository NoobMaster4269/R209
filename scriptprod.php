<?php  session_start(); 


class MyDB extends SQLite3 {
    function  __construct(){
        $this->open('bdd.db');
    }
}


$db = new MyDB();

if(isset($_POST['NomProd'])){
    $NomProd = $_POST['NomProd'];
    $idCat = $_POST['idCat'];
    $Prix = $_POST['Prix'];
    $Stock = $_POST['Stock'];
    $Image = $_POST['Image'];
    $Description = $_POST['Description'];
}
$sql = "SELECT * FROM Produits WHERE NomProd = '$NomProd'";
$result = $db->query($sql);

if($result && $result->fetchArray()){
    header('Location: scriptprod.php?error=1');
}else{
    $sql2 = "INSERT INTO Produits (idCat,NomProd,Stock,Prix,Image,Description) VALUES ('$idCat','$NomProd','$Stock','$Prix','$Image','$Description')";
    $db->exec($sql2);
    header('Location: pageadmin.php');
}

$db->close();





?>