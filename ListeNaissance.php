<?php
include 'header.php';


//-----------------------------récupération de l'URL courante-----------------------------------------
$URL = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$URL2 = parse_url($URL);
$URL = "https://".$URL2["host"].$URL2["path"];
?>
<script type="text/javascript" src="Script.js"></script>
<script type="text/javascript" src="./javascript/prototype.js"></script>
<div id="pagePrincipale" name="pagePrincipale" style="overflow:auto; height:520px;">
	<!-------------------------------------CRITERE DE RECHERCHE--------------------------------------------->
	<table>
	<tr>
		<td>
			<div id="pageCentre"  name="pageCentre" class="box typeA2 alt02 inspForm">
				En cours
			</div>
		</td>
		<td>
		
		</td>
	</tr>
	</table>
</div>
<?php
include 'footer.php';
?>
