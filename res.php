<?php
	include 'header.php';
?>

<div id="pagePrincipale" name="pagePrincipale" style="overflow:auto; height:520px;">
<?php
if (isset($_GET['e'])){
	echo '<span style="color:red">';
	echo $_GET['e'];
	echo '</span>';
}
if(!isset($_SESSION['id'])){
echo'
<form action="connexion_post.php" method="post">
	<p>
		<label for="mdp">mdp</label> : <input type="password" name="mdp" id="mdp" /><br />
		<input type="submit" value="Envoyer" />
	</p>
</form>';
}else
{
	?>
	<form action="valider_resultat_post.php" method="post">
	<p>
		Entrez le resultat final:</br>
		<label for="Sexe">Sexe</label> : 
			<input type="radio" name="Sexe" value="1"> Garçon
			<input type="radio" name="Sexe" value="2"> Fille<br>
		<label for="Taille">Taille (cm)</label> : 
			<input type="text" name="Taille" id="Taille" style="width:100px" value="" size="25"/><br />
		<label for="Poids">Poids (kg)</label> : 
			<input type="text" name="Poids" id="Poids" style="width:100px" value="" size="25"/><br />
		<label for="Date">Date (jj/mm/aaaa)</label> : 
			<input type="text" name="Date" id="Date" style="width:100px" value="jj/mm/aaaa" size="25"/><br />
		
		<input type="submit" value="Envoyer" />
	</p>
	</form>
	<?php
	dessineTableau();
	try {
	
	
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
}	
?>

</div>
<?php
include 'footer.php';
?>
