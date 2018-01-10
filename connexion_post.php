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
		header('Location: res.php?e="Mauvais mot de passe"');
	}
	else
	{
		$_SESSION['id'] = $resultat['id'];
		//$_SESSION['pseudo'] = $pseudo;
		header('Location: res.php');
	}
	
	//echo password_hash("MiniDou2018!",PASSWORD_DEFAULT);
//Test USER/MDP
//Save in session
//Release connexion
//Redirect to res
	//header('Location: res.php');
?>
