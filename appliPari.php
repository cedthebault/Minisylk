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
				<form name="inspiration" id="inspiration" action="ajoutPari.php">
				<b>1 -</b> <span>Vos informations pour le suivi des parents : </span>
				</br></br>
				Prenom <input type="text" style="width:130px" name="P1" id="P1" value="" size="25"/> Nom<input type="text" style="width:130px" name="N1" id="N1" value="" size="25"/> Email <input type="Text" style="width:200px" name="E1" id="E1" value="@" size="25"/>
				<dl>
				<b>2 -</b> <span>Sexe</span>
				<div class="themeBlock">
					<table border="0" >
						<tr>
							<td>
									<ul>
										<li id="cat1" class="o1"><input type="radio" name="t" id="ts1" value="1"/><label for="ts1">Petit Homme</label></li>
										<li id="cat2" class="o2"><input type="radio" name="t" id="ts2" value="2"/><label for="ts2">Petite Femme</label></li>
										</ul>
							</td>
						</tr>
					</table>
				</div>

				<b>3 -</b> <span>Taille(cm) - Poid(kg) - Date(jj/mm)</span> 
				<div class="themeBlock2" id="themeBlock2" name="themeBlock2">
					<table border="0" >
						<tr>
							<td height="30">
									<ul>
										<li id="cat1" class="o1"><input type="float" style="width:60px" name="ls1" id="ls1" value="0.0" size="3"/><label for="ts1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taille</label></li>
										<li id="cat2" class="o2"><input type="float" style="width:60px"  name="ls2" id="ls2" value="0.0" size="3"/><label for="ts2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Poids</label></li>
										<li id="cat3" class="o3"><input type="text" style="width:80px" name="ls3" id="ls3" value="jj/mm" size="10"/><label for="ts3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date</label></li>
									</ul>
							</td>
						</tr>
					</table>
				</div>
			
			
				<div align="center" style="margin-top:20px">
			
					<input type="submit"  value="Valider" id="boutonInput" name="boutonInput" />
				</div>
				
				</dl>
				
				</form>	
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
