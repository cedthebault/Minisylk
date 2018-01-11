<?php
	include 'header.php';
?>

<div id="pagePrincipale" name="pagePrincipale" style="overflow:auto; height:520px;">
<?php
	if(!isResultat()){
		echo '<b>&Agrave; bient&ocirc;t pour les r&eacute;sultats!</b></br>';

		$MaConnexion2 = new Connect();
		$db2 = $MaConnexion2->getPDO();

		$ReqPrincipale = "SELECT ID_Pari from AppliPari where 'NOM'<>'RESULTAT'";

		$reqInfoDest=$db2->query($ReqPrincipale);
		$dataInfoDest = $reqInfoDest->fetch();

		$nb = $reqInfoDest->rowCount();
		echo "Pour l'intant : ".$nb.' Votants :) ';
	}
?>
</br>
<?php
	if(isResultat()){
		dessineTableau();
	}
?>
</br>
<img src="images/bidoux.jpg" alt="Nous deux"> 
</div>

<?php
	include 'footer.php';
?>
