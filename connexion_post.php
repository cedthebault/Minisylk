<?php session_start(); 
$chemin = "./include/";
	include($chemin . "Connect.php");
?>
<?php
//Connexion BDD
	$MaConnexion = new Connect();
	$db2 = $MaConnexion->getPDO();

	$Req = "SELECT * from AppliPari_user";
	$result=$db2->query($Req);
	$dataInfoDest = $result->fetch();
	//execute(array($_POST['pseudo'], $_POST['message']));
	echo password_hash("MiniDou2018!",PASSWORD_DEFAULT);
//Test USER/MDP
//Save in session
//Release connexion
//Redirect to res
	//header('Location: res.php');
?>
