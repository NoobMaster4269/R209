<?php 
    session_start(); 
    if (isset($_SESSION['NomClient'])) {
        header('Location: index.php');
        exit;
    }
    if (isset($_SESSION['idClient'])){
            
    }


    class MyDB extends SQLite3 {
        function  __construct(){
            $this->open('bdd.db');
        }
    }
    $db = new MyDB();


    $sql = 'SELECT * FROM Clients WHERE NomClient = "'.$_POST['NomClient'].'" AND MDP = "'.$_POST['MDP'].'";';
    $result = $db->query($sql);

    $NomClient = $result->fetchArray();


    if ($NomClient) {
        $_SESSION['NomClient'] = $NomClient;
        $sql2 = "SELECT * FROM Clients WHERE NomClient = '$NomClient'";
        $result2 = $db->query($sql2);
	$idClient = $result2->fetchArray();
        $_SESSION['idClient'] = $idClient['idClient'];
        

        header('Location: index.php');
    } else {
        header('Location: pageconnexio.php?error=1');
    }
   
    $db->close();

?>

 
