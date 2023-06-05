<?php
session_start();

class MyDB extends SQLite3{
	function __construct(){
		$this->open('bdd.db');
	}
}
$db = new MyDB();

$idProd = $_GET['idProd'];

$sql = "SELECT * FROM Produits WHERE idProd = $idProd";
$result = $db->query($sql);
$row = $result->fetchArray();

$sql3 = "DELETE FROM Produits WHERE idProd= $idProd";
$db->exec($sql3);




$db->close();

header('Location: pageadmin.php');
?>
