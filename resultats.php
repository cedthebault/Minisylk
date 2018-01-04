<?php
	include 'header.php';
?>
<script type="text/javascript" src="Script.js"></script>
<script type="text/javascript" src="./javascript/prototype.js"></script>
<div id="pagePrincipale" name="pagePrincipale" style="overflow:auto; height:520px;">
<b>&Agrave; bient&ocirc;t pour les r&eacute;sultats!</b>
</br>
<?php
	$chemin = "./include/";
	include($chemin . "Connect.php");
	$MaConnexion2 = new Connect();
	$db2 = $MaConnexion2->getPDO();

	$ReqPrincipale = "SELECT ID_Pari from AppliPari";

	$reqInfoDest=$db2->query($ReqPrincipale);
	$dataInfoDest = $reqInfoDest->fetch();

	$nb = $reqInfoDest->rowCount();
	echo "Pour l'intant : ".$nb.' Votants :) ';
?>
</br>
</br>
<img src="images/bidoux.jpg" alt="Nous deux"> 
</div>
<?php
	include 'footer.php';
?>
