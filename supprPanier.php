<?php
session_start();

class MyDB extends SQLite3{
	function __construct(){
		$this->open('bdd.db');
	}
}
$db = new MyDB();

$idClient = $_GET['idClient'];


$sql3 = "DELETE FROM Panier WHERE idClient = $idClient";
$db->exec($sql3);




$db->close();

header('Location: pageadmin.php');
?>
