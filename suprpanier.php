<?php
session_start();

class MyDB extends SQLite3{
	function __construct(){
		$this->open('bdd.db');
	}
}
$db = new MyDB();

$idProd = $_GET['idProd'];
$idClient = $_SESSION['NomClient']['idClient'];

$sql = "SELECT * FROM Produits WHERE idProd = $idProd";
$result = $db->query($sql);
$row = $result->fetchArray();

$sql2 = "SELECT * FROM Panier WHERE idProd = $idProd AND idClient = $idClient";
$result2 = $db->query($sql2);
$row2 = $result2->fetchArray();


$Qtemoinsun = $row2['Qte'] - 1;
if ($Qtemoinsun <=0){
	$sql3 = "DELETE FROM Panier WHERE idProd = $idProd AND idClient = $idClient";
	$db->exec($sql3);
	$Stockplusun = $row['Stock'] + 1;
	$sql4 = "UPDATE Produits SET Stock = $Stockplusun WHERE idProd = $idProd";
	$db->exec($sql4);

}else{
	$sql5 = "UPDATE Panier SET Qte = $Qtemoinsun WHERE idProd = $idProd AND idClient = $idClient";
	$db->exec($sql5);
	$Stockplusun = $row['Stock'] + 1;
	$sql6 = "UPDATE Produits SET Stock = $Stockplusun WHERE idProd = $idProd";
	$db->exec($sql6);
}


$db->close();

header('Location: panier.php');
?>
