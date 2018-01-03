<?php
include 'header.php';
$chemin = "./include/";
	include($chemin . "Connect.php");

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
	</table>
</div>
<?php
include 'footer.php';
?>
