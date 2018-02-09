<?php

$TIMESTAMP_1102='1518303600';

function calculScore($val,$result,$span)
{
	$score=2*exp(-(pow($val-$result,2)/(2*pow($span/2.3548,2))));
	return $score;
}

function calculScoreTaille($val,$result){
	return calculScore($val,$result,1.5);
}

function calculScorePoids($val,$result){
	return calculScore($val,$result,0.75);
}

function calculScoreDate($val,$result){
	return calculScore($val/86400,$result/86400,3);
}

function calculScoreTotal($ES,$ET,$EP,$ED,$RS,$RT,$RP,$RD){
	if($ES==$RS){
		$sexe=4;
	}else{
		$sexe=0;
	}
	return $sexe+calculScorePoids($EP,$RP)+calculScoreTaille($ET,$RT)+calculScoreDate($ED,$RD);
}
function getInfoTab(){
	$MaConnexion2 = new Connect();
	$db2 = $MaConnexion2->getPDO();
	$ReqPrincipale = "SELECT * from AppliPari WHERE Nom <> 'RESULTAT' ORDER BY Val4 DESC";
	$reqInfoDest=$db2->query($ReqPrincipale);
	//$dataInfoDest = $reqInfoDest->fetch();
	//$reqInfoDest->closeCursor();
	return $reqInfoDest;
}
function getMoyInfoTab(){
	$MaConnexion2 = new Connect();
	$db2 = $MaConnexion2->getPDO();
	$ReqMoy = "SELECT AVG(`Taille`) as moyTaille,AVG(`Poid`) as moyPoids FROM  `AppliPari`";
	$reqM = $db2->query($ReqMoy);
	$DataMo=$reqM->fetch();
	$reqM->closeCursor();
	return $DataMo;
}
function getMoySexeInfoTab(){
	$MaConnexion2 = new Connect();
	$db2 = $MaConnexion2->getPDO();
	$ReqMoySexe = "SELECT AVG(`Sexe`) as moySexe FROM  `AppliPari` WHERE Sexe <> 'Surprise'";
	$reqMs = $db2->query($ReqMoySexe);
	$DataMos=$reqMs->fetch();
	$reqMs->closeCursor();
	return $DataMos;
}
function dessineTableau(){
$reqInfoDest=getInfoTab();
echo "<table>";
	echo "<th>Nom</th><th>Sexe</th><th>Taille</th><th>Poids</th><th>Date</th><th>Score /10</th>";
	foreach($reqInfoDest as $row) {
		echo "<tr>";
		echo "<td>";
			print_r($row['Prenom']." ".$row['Nom']);
		echo "</td>";
		//echo "<td>";
		//	print_r($row['Email']);
		//echo "</td>";
		echo "<td>";
			print_r($row['Sexe']);
		echo "</td>";
		echo "<td>";
			print_r($row['Taille']);
		echo "</td>";
		echo "<td>";
			print_r($row['Poid']);
		echo "</td>";
		echo "<td>";
			print_r($row['Date']);
		echo "</td>";
		echo "<td>";
			print_r($row['Val4']);
			//echo number_format(calculScoreTotal($row['Sexe'],$row['Taille'],$row['Poid'],$row['Date'],$Sexe,$Taille,$Poids,$date),2);
		echo "</td>";
		echo "</tr>";
	}
echo "</table>";
}
function isResultat(){
	$MaConnexion2 = new Connect();
	$db2 = $MaConnexion2->getPDO();
	
	$ReqPrincipale = "SELECT * from AppliPari where Nom = 'RESULTAT' and Prenom = 'RESULTAT'";
	
	$reqInfoDest=$db2->query($ReqPrincipale);
	$dataInfoDest = $reqInfoDest->fetch();
	
	$nb = $reqInfoDest->rowCount();
	return $nb;
}
function getInfoRes(){
	$MaConnexion2 = new Connect();
	$db2 = $MaConnexion2->getPDO();
	
	$ReqPrincipale = "SELECT * from AppliPari where Nom = 'RESULTAT' and Prenom = 'RESULTAT'";
	
	$reqInfoDest=$db2->query($ReqPrincipale);
	$dataInfoDest = $reqInfoDest->fetch();
	
	return $dataInfoDest;
}
function majScores(){
	$DataInfoRes=getInfoRes();
	$Sexe=$DataInfoRes['Sexe'];
	$Taille=$DataInfoRes['Taille'];
	$Poids=$DataInfoRes['Poid'];
	//echo $DataInfoRes['Date'];echo "</br>";
	$date=date_timestamp_get(date_create_from_format('!j/m/Y', $DataInfoRes['Date']));
	//echo $date;echo "</br>";echo "</br>";
	$reqInfoDest=getInfoTab();
	
	$MaConnexion2 = new Connect();
	$db2 = $MaConnexion2->getPDO();
	
	foreach($reqInfoDest as $row) {
		//echo $row['Date'];echo "</br>";
		
		//echo date_timestamp_get(date_create_from_format('!j/m/Y', $row['Date']));echo "</br>";
		$score = number_format(calculScoreTotal($row['Sexe'],$row['Taille'],$row['Poid'],date_timestamp_get(date_create_from_format('!j/m/Y', $row['Date'])),$Sexe,$Taille,$Poids,$date),2);
		//echo $score;echo "</br>";echo "</br>";
		//$score = 10;
		//update
		$query = "update AppliPari set Val4=:score where Nom = :nom AND Prenom = :prenom";
		$req=$db2->prepare($query);
		$req->execute(array('score' => $score,'nom' => $row['Nom'],'prenom' => $row['Prenom']));
	}
}
function plop(){
$ReqPrincipale = "SELECT * from AppliPari";
		$reqInfoDest=$db2->query($ReqPrincipale);
		$dataInfoDest = $reqInfoDest->fetch();	

		$nb = $reqInfoDest->rowCount();
		
		$ReqMoy = "SELECT AVG(`Taille`) as moyTaille,AVG(`Poid`) as moyPoids FROM  `AppliPari`";
		$reqM = $db2->query($ReqMoy);
		$DataMo=$reqM->fetch();
		
		$ReqMoySexe = "SELECT AVG(`Sexe`) as moySexe FROM  `AppliPari` WHERE Sexe <> 'Surprise'";
		$reqMs = $db2->query($ReqMoySexe);
		$DataMos=$reqMs->fetch();
		
		echo '</br>';
		echo '</br>';
	
		//Tempo
		$moyTaille=$DataMo['moyTaille'];
		$moyPoids=$DataMo['moyPoids'];
		$moySexe=$DataMos['moySexe'];
		
		if ($moySexe<=1.5){
			$moySexe=1;
		}else{
			$moySexe=2;
		}
		
		print_r($moySexe." | ".$moyTaille." | ".$moyPoids);
		echo "</br>";
		print_r(calculScoreTotal(1,1,1,1,1,1,1,1));
		//Fin tempo
		echo "</br>";
		echo "".$nb." Votants </br>";
}
?>
