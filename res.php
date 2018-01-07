<?php
include 'header.php';
$chemin = "./include/";
	include($chemin . "Connect.php");

function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Exemple de fonction.\n";
    return $retval;
}

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
<?php
	$MaConnexion2 = new Connect();
	$db2 = $MaConnexion2->getPDO();

	$ReqPrincipale = "SELECT * from AppliPari";
	$reqInfoDest=$db2->query($ReqPrincipale);
	$dataInfoDest = $reqInfoDest->fetch();	

	$nb = $reqInfoDest->rowCount();
	
	$ReqMoy = "SELECT AVG(`Taille`) as moyTaille,AVG(`Poid`) as moyPoids FROM  `AppliPari`";
	$reqM = $db2->query($ReqMoy);
	$reqMo=$reqM->fetch();
	
	$ReqMoySexe = "SELECT AVG(`Sexe`) as moySexe FROM  `AppliPari` WHERE Sexe <> 'Surprise'";
	$reqMs = $db2->query($ReqMoySexe);
	$reqMos=$reqMs->fetch();
	
	echo '</br>';
	echo '</br>';
	
	try {
		//Tempo
		$moyTaille=$reqMo['moyTaille'];
		$moyPoids=$reqMo['moyPoids'];
		$moySexe=$reqMos['moySexe'];
		if ($moySexe<=1.5){
			$moySexe=1;
		}else{
			$moySexe=2;
		}

		print_r($moySexe." | ".$reqMo['moyTaille']." | ".$reqMo['moyPoids']);
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

	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
	
?>




<!--
	<table>
	<tr>
		<td>
			<div id="pageCentre"  name="pageCentre" class="box typeA2 alt02 inspForm">
				<form name="inspiration" id="inspiration">
				<?php
					$MaConnexion2 = new Connect();
					$db2 = $MaConnexion2->getPDO();
					
					$ReqPrincipale = "SELECT * from AppliPari";
					
					$reqInfoDest=$db2->query($ReqPrincipale);
					$dataInfoDest = $reqInfoDest->fetch();	
					
					$nb = $reqInfoDest->rowCount();
				?>
				<b>0 -</b> <span>Nombre participant : <?php echo $nb; ?></span>
				<label> </label>
				<dl>
				<b>1 -</b> <span>Sexe</span>
				<div class="themeBlock">
					<table border="0" >
						<tr>
							<td>
									<ul>
										<?php
											$MaConnexion2 = new Connect();
											$db2 = $MaConnexion2->getPDO();
											
											$ReqPrincipale2 = "SELECT * from AppliPari where Sexe=1";
											
											$reqInfoDest=$db2->query($ReqPrincipale2);
											$dataInfoDest = $reqInfoDest->fetch();	
											
											$nb2 = $reqInfoDest->rowCount();
										?>
										<li id="cat1" class="o1"><input type="text" name="t" id="ts1" value="<?php echo $nb2 ?>" disabled /><label for="ts1">Petit Homme</label></li>
																				<?php
											$MaConnexion2 = new Connect();
											$db2 = $MaConnexion2->getPDO();
											
											$ReqPrincipale3 = "SELECT * from AppliPari where Sexe=2";
											
											$reqInfoDest=$db2->query($ReqPrincipale3);
											$dataInfoDest = $reqInfoDest->fetch();	
											
											$nb3 = $reqInfoDest->rowCount();
										?>
										<li id="cat2" class="o2"><input type="text" name="t" id="ts2" value="<?php echo $nb3 ?>" disabled /><label for="ts2">Petite Femme</label></li>
										</ul>
							</td>
						</tr>
					</table>
				</div>

				<b>2 -</b> <span>Liste de naissance</span> 
				<div class="themeBlock2" id="themeBlock2" name="themeBlock2">
					<table border="0" >
						<tr>
							<td height="30">
								Si vous souhaitez faire un cadeau pour l'arriv&eacute; du machin ou de la machine &agrave; venir, c'est par ici : 	
							</td>
						</tr>
					</table>
				</div>
			
				</dl>
				
				</form>	
			</div>
		</td>
		<td>
		
		</td>
	</tr>
	</table> -->
</div>
<?php
include 'footer.php';
?>
