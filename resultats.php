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
<p>
<b>Petite explication des scores:</b></br>
Le sexe est sur 4 points,</br>
Les trois autres sont calculés sur 2 points avec la formule suivante :</br></br>

<math>
	Score<sub>elem</sub> = 2*e<sup>-<box>(Pronostic-Resultat)<sup>2</sup>/(2*(Eccart/2.3548)<sup>2</sup>)</box></sup>
</math>
</br></br>
Avec les parametres suivant : </br></br>
<table>
<th>elem</th><th>Eccart</th>
<tr><td>Taille</td><td>1.5</td></tr>
<tr><td>Poids</td><td>0.75</td></tr>
<tr><td>Date</td><td>3</td></tr>
</table></br>

Le calcul suit donc une <a href="https://fr.wikipedia.org/wiki/Fonction_gaussienne">Gaussienne</a> non <a href="https://fr.wikipedia.org/wiki/Fonction_gaussienne">Normale</a>. L'eccart est le "score" à mi-hauteur. </br>
Traduction : pour un pronostic à 49.75cm pour un resultat à 49 vous avez 1 point /2.
</br>
Le tout pour un total sur 10 ;).
</p>

</br>
<img src="images/bidoux.jpg" alt="Nous deux"> 
</div>

<?php
	include 'footer.php';
?>
