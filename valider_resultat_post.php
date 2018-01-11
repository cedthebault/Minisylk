<?php
	$chemin = "./include/";
	include($chemin . "Connect.php");
	include($chemin . "utils.php");
	
	$MaConnexion = new connect();
	
	$t=$_POST['Sexe'];
	$ls1=$_POST['Taille'];
	$ls2=$_POST['Poids'];
	$ls3=$_POST['Date'];
	if($ls1=="" || $ls2=="" || $ls3=="" || $t==""){
		header('Location: ./res.php?e="Au moins un des elements est vide"');
		exit();
	}
	
	$nb = isResultat();

	if($nb > 0)
	{
		//Modif
		$query = "update AppliPari set Sexe='$t',Taille='$ls1',Poid='$ls2',Date='$ls3' where Nom = 'RESULTAT' AND Prenom ='RESULTAT'";
	}
	else
	{
		//Création
		$query = "insert into AppliPari values('','RESULTAT','RESULTAT','@@@','$t','$ls1','$ls2','$ls3','1','','','')";
	}


	$db = $MaConnexion->getPDO();
	$q = $db->prepare($query);
	$q->execute() or die("VerifConnexion : Impossible d'éxécuter la requête");
	
	majScores();
	
	header('Location: ./res.php');
?>
