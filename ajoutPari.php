<?php
	$chemin = "./include/";
	include($chemin . "Connect.php");
	
	$MaConnexion = new connect();
	
	$N1=trim(strtoupper($_GET['N1']));
	$p1=trim($_GET['P1']);
	$P1=trim(strtoupper($p1));
	$E1=$_GET['E1'];
	$t=$_GET['t'];
	$ls1=$_GET['ls1'];
	$ls2=$_GET['ls2'];
	$ls3=$_GET['ls3'];
	if($N1=="" || $P1=="" || $E1=="" || $ls1=="" || $ls2=="" || $ls3=="" || $t==""){
		header('Location: ./appliPari.php?S=""');
		exit();
	}
	
	$MaConnexion2 = new Connect();
	$db2 = $MaConnexion2->getPDO();
	
	$ReqPrincipale = "SELECT * from AppliPari where Nom = '$N1' and Prenom = '$P1'";
	
	$reqInfoDest=$db2->query($ReqPrincipale);
	$dataInfoDest = $reqInfoDest->fetch();	
	
	$nb = $reqInfoDest->rowCount();

	if($nb > 0)
	{
		//Modif
		$query = "update AppliPari set Email='$E1',Sexe='$t',Taille='$ls1',Poid='$ls2',Date='$ls3',Val3=".time()." where Nom = '$N1' AND Prenom ='$P1'";
	}
	else
	{
		//Création
		$query = "insert into AppliPari values('','$N1','$P1','$E1','$t','$ls1','$ls2','$ls3','1',".time().",'','')";
	}


	$db = $MaConnexion->getPDO();
	$q = $db->prepare($query);
	$q->execute() or die("VerifConnexion : Impossible d'éxécuter la requête");
	
	header('Location: ./appliPari.php?V='.$p1);
	
?>
