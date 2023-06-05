<?php  session_start(); 


class MyDB extends SQLite3 {
    function  __construct(){
        $this->open('bdd.db');
    }
}


$db = new MyDB();

if(isset($_POST['NomClient'])){
    $NomClient = $_POST['NomClient'];
    $MDP = $_POST['MDP'];
}
$sql = "SELECT * FROM Clients WHERE NomClient = '$NomClient'";
$result = $db->query($sql);

if($result && $result->fetchArray()){
    header('Location: inscription.php?error=1');
}else{
    $sql2 = "INSERT INTO Clients (Status,NomClient, MDP) VALUES ('Pigeon','$NomClient','$MDP')";
    $db->exec($sql2);
    header('Location: pageadmin.php');
}

$db->close();





?>