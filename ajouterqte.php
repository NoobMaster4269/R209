<?php session_start();
class MyDB extends SQLite3 {
    function  __construct(){
	$this->open('bdd.db');
    }
}
$db = new MyDB();
if (isset($_SESSION['NomClient'])){
	$idProd = $_GET['idProd'];
	$idClient = $_SESSION['NomClient']['idClient'];
	$sql = "SELECT * FROM Produits WHERE idProd = $idProd";
	$result = $db->query($sql);
	$row = $result->fetchArray();
	$idClient = $_SESSION['NomClient']['idClient'];
	$stock = $row['Stock'];


	if ($stock > 0){
		$sql2 = "SELECT * FROM Panier WHERE idProd = $idProd AND idClient = $idClient";
		$result2 = $db->query($sql2);
		$row2 = $result2 ->fetchArray();

		if ($row2){
			$Qteplusun = $row2['Qte'] + 1;
			$sql3 = "UPDATE Panier SET Qte = $Qteplusun WHERE idProd = $idProd AND idClient = $idClient";
			$db->exec($sql3);

			$Stockmoinsun = $stock - 1;
			$sql5 = "UPDATE Produits SET Stock = $Stockmoinsun WHERE idProd = $idProd";
			var_dump($sql5);
			$db->exec($sql5);

		}else {
			$sql4 = "INSERT INTO Panier (NomProd, idProd, idClient, Prix, Qte, Image) VALUES ('".$row['NomProd']."','$idProd','$idClient','".$row['Prix']."', 1, '".$row['Image']."')";
			$db->exec($sql4);

			$Stockmoinsun = $stock - 1;
			$sql6 = "UPDATE Produits SET Stock = $Stockmoinsun WHERE idProd = $idProd";
			$db->exec($sql6);

		}
	header('Location: panier.php');
	}else{
		header('Location: panier.php?error=1');
	}
}


$db->close();

?>
