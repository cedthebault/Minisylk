<?php
	$chemin = "./include/";
	include($chemin . "Connect.php");
	$MaConnexion = new connect();
	
	$N1=trim(strtoupper($_GET['N1']));
	$P1=trim(strtoupper($_GET['P1']));
	$E1=$_GET['E1'];
	$t=$_GET['t'];
	$ls1=$_GET['ls1'];
	$ls2=$_GET['ls2'];
	$ls3=$_GET['ls3'];
	
	$MaConnexion2 = new Connect();
	$db2 = $MaConnexion2->getPDO();
	
	$ReqPrincipale = "SELECT * from AppliPari where Nom = '$N1' and Prenom = '$P1'";
	
	$reqInfoDest=$db2->query($ReqPrincipale);
	$dataInfoDest = $reqInfoDest->fetch();	
	
	$nb = $reqInfoDest->rowCount();

	
	if($nb > 0)
	{
		$type = 'modif';
	}
	else
	{
		$type = 'création';
	}

	
	if($type == 'création'){
		$query = "insert into AppliPari values('','$N1','$P1','$E1','$t','$ls1','$ls2','$ls3','','','','')";
		
	}
	else{
		$query = "update AppliPari set Nom='$N1', Prenom='$P1',Email='$E1',Sexe='$t',Taille='$ls1',Poid='$ls2',Date='$ls3' where Nom = '$N1' AND Prenom ='$P1'";
		
	}
	
	$db = $MaConnexion->getPDO();
	$q = $db->prepare($query);
	$q->execute() or die("VerifConnexion : Impossible d'éxécuter la requête");
	
	header('Location: ./appliPari.php');
	
?>
