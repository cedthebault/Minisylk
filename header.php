<?php session_start(); ?>
<html>
<head>
	<meta http-equiv="Content-Language" content="fr">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<link rel="stylesheet" href="./css/design.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Gabriela' rel='stylesheet' type='text/css'>
	<meta http-equiv="Page-Enter" content="revealTrans(Duration=1,Transition=1)">

	<script type="text/javascript" src="Script.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.1.min.js"></script>
	<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.ui/1.8.10/jquery-ui.js"></script>
	<link rel="Stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="jquery.auto-complete.js"></script>
	<link rel="stylesheet" href="jquery.auto-complete.css">

	<title>Pronostics</title>

</head>

<style type="text/css">
<!--
INPUT{font-family:calibri;}
SELECT{font-family:calibri;}
-->
</style>
<?php $PAGE = $_SERVER['PHP_SELF']; ?>

<body height="100%" width="100%" style="background-image: url(./images/Naissance.jpeg)">

<table  width="1200" height="300" bgcolor="white" align="center"  border="0" cellpadding="0" cellspacing="0" style="background-color:transparent;border-left:4px #7D26CD;border-right:4px #7D26CD;border-style: solid;border-top:4px #7D26CD;border-style: solid;border-top-right-radius: 15px;-moz-border-top-right-radius: 10px;-webkit-border-top-right-radius: 10px;border-top-left-radius: 15px;-moz-border-top-left-radius: 10px;-webkit-border-top-left-radius: 10px;border-bottom:0px" >
	<tr>
		<td width="210"  align="center" valign="top" bgcolor="white" style="background-repeat:no-repeat;border-top-left-radius: 15px;-moz-border-top-left-radius: 10px;-webkit-border-top-left-radius: 10px;">
		
		<img src="./images/Couple.jpg" width="350"  height="300" />
		</td>
		
		<td width="1200" height="300" align="center" id="pagePrincipale" name="pagePrincipale" bgcolor="white" style="background-size:cover;background-image: url(./images/banniere.jpg); ">
			<span id="pagePrincipale" name="pagePrincipale">
				<font id="Titre" name="Titre" style="padding-top:10px;padding-bottom:10px;background-color: rgba(213, 244, 230, 0.3);">
					<b>
						&nbsp;Participer &agrave; l'un des plus grand moments de notre vie&nbsp;
					</b>
				</font>
			</span>
		</td>
	</tr>	
</table>
<table width="1200" bgcolor="white" align="center" border="0" cellpadding="0" cellspacing="0" style="border-left:4px #7D26CD;border-right:4px #7D26CD;border-style: solid;border-bottom:0px;border-top:0px">
	<tr>
		<td>
			<img src="./images/pointent.png" width="100%" alt=""/>
		</td>
	</tr>
</table>
<table height="65%" width="1200" class="header" border="0" align="center" style="background-repeat: no-repeat;border-left:4px #7D26CD;border-right:4px #7D26CD;border-style: solid;border-bottom:0px;border-top:0px" cellpadding="0" cellspacing="0">
	<tr>
	<td colspan="3" valign="top" bgcolor="#f4f4f4">
	
	<table cellpadding="1" cellspacing="0" border="0" width="100%" height="100%"  style="border-bottom:solid 2px #CCCCCC;">
	<tr>
		
		<td style="border-style: solid;border-width: 2px;border-color:#CCCCCC;border-left: 0px;border-bottom: 0px;" bgcolor="#FFFFFF" class="menu" width="210" align="left" valign="top">
		<font class="champsForm">
		<center><b>MENU</b></center>
		<hr color="#7D26CD" />
		<ul class="menu-vertical">
			<li class="mv-item"><a id="boutonEffet" name="boutonEffet" href="appliPari.php">Pronostique</a></li>
			<li class="mv-item"><a id="boutonEffet" name="boutonEffet" href="http://bit.ly/MiniNous2018">Liste de naissance</a></li>
			<li class="mv-item"><a id="boutonEffet" name="boutonEffet" href="resultats.php">Resultats</a></li>
		</ul>
			<hr color="#7D26CD" /><br/>
		
		</td>
		<td width="10">&nbsp;</td>
		<td align="left" valign="top" nowrap>
	
