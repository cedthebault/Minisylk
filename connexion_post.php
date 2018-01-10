<?php session_start(); 
$chemin = "./include/";
	include($chemin . "Connect.php");
?>
<?php
	//Connexion BDD
	$MaConnexion = new Connect();
	$db2 = $MaConnexion->getPDO();
	
	$req = $db2->prepare('SELECT id,pwd FROM AppliPari_user');
	$req->execute();
	$resultat = $req->fetch();
	
	if (!password_verify($_POST['mdp'], $resultat["pwd"]))
	{
		//echo 'Mauvais identifiant ou mot de passe ! </br>';
	}
	else
	{
		$_SESSION['id'] = $resultat['id'];
		//$_SESSION['pseudo'] = $pseudo;
	}
	
	//echo password_hash("MiniDou2018!",PASSWORD_DEFAULT);
//Test USER/MDP
//Save in session
//Release connexion
//Redirect to res
	//header('Location: res.php');
?>
