<?php
include 'header.php';
$chemin = "./include/";
	include($chemin . "Connect.php");

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
	return calculScore($val,$result,4);
}
function calculScoreTotal($ES,$ET,$EP,$ED,$RS,$RT,$RP,$RD){
	if($ES==$RS){
		$sexe=4;
	}else{
		$sexe=0;
	}
	return $sexe+calculScorePoids($EP,$RP)+calculScoreTaille($ET,$RT);
}
?>

<script type="text/javascript" src="Script.js"></script>
<script type="text/javascript" src="./javascript/prototype.js"></script>


<div id="pagePrincipale" name="pagePrincipale" style="overflow:auto; height:520px;">

<form action="connexion_post.php" method="post">
	<p>
		<label for="user_name">user_name</label> : <input type="text" name="user_name" id="user_name" /><br />
		<label for="mdp">mdp</label> :  <input type="text" name="mdp" id="mdp" /><br />
		<input type="submit" value="Envoyer" />
	</p>
</form>

<?php
	$MaConnexion2 = new Connect();
	$db2 = $MaConnexion2->getPDO();

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
	//$reqInfoDest->closeCursor()
	echo '</br>';
	echo '</br>';
	
	try {
		//Tempo
		$moyTaille=$DataMo['moyTaille'];
		$moyPoids=$DataMo['moyPoids'];
		$moySexe=$DataMos['moySexe'];
		if ($moySexe<=1.5){
			$moySexe=1;
		}else{
			$moySexe=2;
		}
		
		//Close 2 prem connexion.
		reqM->closeCursor();
		reqMs->closeCursor();
		
		print_r($moySexe." | ".$moyTaille." | ".$moyPoids);
		echo "</br>";
		print_r(calculScoreTotal(1,1,1,1,1,1,1,1));
		//Fin tempo
		echo "</br>";
		echo "".$nb." Votants </br>";
		echo "<table>";
		echo "<th>Nom</th><th>Email</th><th>Sexe</th><th>Taille</th><th>Poids</th><th>Date</th><th>Score /8</th>";
		foreach($reqInfoDest as $row) {
			echo "<tr>";
			echo "<td>";
				print_r($row['Prenom']." ".$row['Nom']);
			echo "</td>";
			echo "<td>";
				print_r($row['Email']);
			echo "</td>";
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
				echo number_format(calculScoreTotal($row['Sexe'],$row['Taille'],$row['Poid'],$row['Date'],$moySexe,$moyTaille,$moyPoids,0),2);
			echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
		$reqInfoDest->closeCursor();
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
	
?>

</div>
<?php
include 'footer.php';
?>
