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

    <script>
        $(function(){
            $('#pays').autoComplete({
                minChars: 0,
                source: function(term, suggest){
                    term = term.toLowerCase();
                    var choices = [['Afghanistan','AF'],['Afrique du Sud','ZA'],['Åland','AX'],['Albanie','AL'],['Algérie','DZ'],['Allemagne','DE'],['Andorre','AD'],['Angola','AO'],['Anguilla','AI'],['Antarctique','AQ'],['Antigua-et-Barbuda','AG'],['Antilles néerlandaises','AN'],['Arabie saoudite','SA'],['Argentine','AR'],['Arménie','AM'],['Aruba','AW'],['Australie','AU'],['Autriche','AT'],['Azerbaïdjan','AZ'],['Bahamas','BS'],['Bahreïn','BH'],['Bangladesh','BD'],['Barbade','BB'],['Belgique','BE'],['Belize','BZ'],['Bénin','BJ'],['Bermudes','BM'],['Bhoutan','BT'],['Biélorussie','BY'],['Birmanie','MM'],['Bolivie','BO'],['Bosnie-Herzégovine','BA'],['Botswana','BW'],['Brésil','BR'],['Brunei','BN'],['Bulgarie','BG'],['Burkina Faso','BF'],['Burundi','BI'],['Cambodge','KH'],['Cameroun','CM'],['Canada','CA'],['Cap-Vert','CV'],['Centrafrique','CF'],['Chili','CL'],['Chine','CN'],['Chypre','CY'],['Colombie','CO'],['Comores','KM'],['Congo-Brazzaville','CG'],['Congo-Kinshasa','CD'],['Corée du Nord','KP'],['Corée du Sud','KR'],['Costa Rica','CR'],['Côte dIvoire','CI'],['Croatie','HR'],['Cuba','CU'],['Danemark','DK'],['Djibouti','DJ'],['Dominique','DM'],['Égypte','EG'],['Émirats arabes unis','AE'],['Équateur','EC'],['Érythrée','ER'],['Espagne','ES'],['Estonie','EE'],['États-Unis','US'],['Éthiopie','ET'],['Fidji','FJ'],['Finlande','FI'],['France','FR'],['Gabon','GA'],['Gambie','GM'],['Géorgie','GE'],['Géorgie du Sud et les îles Sandwich du Sud','GS'],['Ghana','GH'],['Gibraltar','GI'],['Grèce','GR'],['Grenade','GD'],['Groenland','GL'],['Guadeloupe','GP'],['Guam','GU'],['Guatemala','GT'],['Guernesey','GG'],['Guinée','GN'],['Guinée équatoriale','GQ'],['Guinée-Bissau','GW'],['Guyana','GY'],['Guyane','GF'],['Haïti','HT'],['Honduras','HN'],['Hong Kong','HK'],['Hongrie','HU'],['Île Bouvet','BV'],['Île Christmas','CX'],['Île de Man','IM'],['Îles Caïmanes','KY'],['Îles Cocos','CC'],['Îles Cook','CK'],['Îles Féroé','FO'],['Îles Malouines (Falkland)','FK'],['Îles Mariannes du Nord','MP'],['Îles mineures éloignées des États-Unis','UM'],['Îles Salomon','SB'],['Îles Turques et Caïques','TC'],['Îles Vierges américaines','VI'],['Îles Vierges britanniques','VG'],['Inde','IN'],['Indonésie','ID'],['Irak','IQ'],['Iran','IR'],['Irlande','IE'],['Islande','IS'],['Israël','IL'],['Italie','IT'],['Jamaïque','JM'],['Japon','JP'],['Jersey','JE'],['Jordanie','JO'],['Kazakhstan','KZ'],['Kenya','KE'],['Kirghizstan','KG'],['Kiribati','KI'],['Koweït','KW'],['Laos','LA'],['Lesotho','LS'],['Lettonie','LV'],['Liban','LB'],['Libéria','LR'],['Libye','LY'],['Liechtenstein','LI'],['Lituanie','LT'],['Luxembourg','LU'],['Macao','MO'],['Macédoine','MK'],['Madagascar','MG'],['Malaisie','MY'],['Malawi','MW'],['Maldives','MV'],['Mali','ML'],['Malte','MT'],['Maroc','MA'],['Marshall','MH'],['Martinique','MQ'],['Maurice','MU'],['Mauritanie','MR'],['Mayotte','YT'],['Mexique','MX'],['Micronésie','FM'],['Moldavie','MD'],['Monaco','MC'],['Mongolie','MN'],['Monténégro','ME'],['Montserrat','MS'],['Mozambique','MZ'],['Namibie','NA'],['Nauru','NR'],['Népal','NP'],['Nicaragua','NI'],['Niger','NE'],['Nigeria','NG'],['Niué','NU'],['Norfolk','NF'],['Norvège','NO'],['Nouvelle-Calédonie','NC'],['Nouvelle-Zélande','NZ'],['Oman','OM'],['Ouganda','UG'],['Ouzbékistan','UZ'],['Pakistan','PK'],['Palaos','PW'],['Palestine','PS'],['Panamá','PA'],['Papouasie-Nouvelle-Guinée','PG'],['Paraguay','PY'],['Pays-Bas','NL'],['Pérou','PE'],['Philippines','PH'],['Pitcairn','PN'],['Pologne','PL'],['Polynésie française','PF'],['Porto Rico','PR'],['Portugal','PT'],['Qatar','QA'],['République dominicaine','DO'],['République tchèque','CZ'],['Réunion','RE'],['Roumanie','RO'],['Royaume-Uni','GB'],['Russie','RU'],['Rwanda','RW'],['Sahara occidental','EH'],['Saint-Christophe-et-Niévès','KN'],['Sainte-Hélène, île','SH'],['Sainte-Lucie','LC'],['Saint-Marin','SM'],['Saint-Pierre-et-Miquelon','PM'],['Saint-Vincent-et-les Grenadines','VC'],['Salvador','SV'],['Samoa','WS'],['Samoa américaines','AS'],['São Tomé-et-Principe','ST'],['Sénégal','SN'],['Serbie','RS'],['Seychelles','SC'],['Sierra Leone','SL'],['Singapour','SG'],['Slovaquie','SK'],['Slovénie','SI'],['Somalie','SO'],['Soudan','SD'],['Sri Lanka','LK'],['Suède','SE'],['Suisse','CH'],['Suriname','SR'],['Svalbard et île Jan Mayen','SJ'],['Swaziland','SZ'],['Syrie','SY'],['Tadjikistan','TJ'],['Taïwan','TW'],['Tanzanie','TZ'],['Tchad','TD'],['Terres australes et antarctiques françaises','TF'],['Territoire britannique de locéan Indien','IO'],['Territoires extérieurs de lAustralie','HM'],['Thaïlande','TH'],['Timor oriental','TL'],['Togo','TG'],['Tokelau','TK'],['Tonga','TO'],['Trinité-et-Tobago','TT'],['Tunisie','TN'],['Turkménistan','TM'],['Turquie','TR'],['Tuvalu','TV'],['Ukraine','UA'],['Uruguay','UY'],['Vanuatu','VU'],['Vatican','VA'],['Vénézuela','VE'],['Viêt Nam','VN'],['Wallis-et-Futuna','WF'],['Yémen','YE'],['Zambie','ZM'],['Zimbabwe','ZW']];
                    var suggestions = [];
                    for (i=0;i<choices.length;i++)
                        if (~(choices[i][0]+' '+choices[i][1]).toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                    suggest(suggestions);
                },
                renderItem: function (item, search){
                    search = search.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
                    var re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");
                    return '<div class="autocomplete-suggestion" data-langname="'+item[0]+'" data-lang="'+item[1]+'" data-val="'+search+'"><img src="./images/img/'+item[1]+'.png"> '+item[0].replace(re, "<b>$1</b>")+'</div>';
                },
                onSelect: function(e, term, item){
                    console.log('Item "'+item.data('langname')+' " selected by '+(e.type == 'keydown' ? 'pressing enter or tab' : 'mouse click')+'.');
                    $('#pays').val(item.data('langname'));
                }
            });

			$('#continent').autoComplete({
                minChars: 0,
                source: function(term, suggest){
                    term = term.toLowerCase();
                    var choices = [['Europe', 'eu'], ['Amérique du nord', 'usa'], ['Amérique du sud', 'ams'], ['Asie', 'asi'], ['Oceanie', 'oce']];
                    var suggestions = [];
                    for (i=0;i<choices.length;i++)
                        if (~(choices[i][0]+' '+choices[i][1]).toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                    suggest(suggestions);
                },
                renderItem: function (item, search){
                    search = search.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
                    var re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");
                    return '<div class="autocomplete-suggestion" data-langname="'+item[0]+'" data-lang="'+item[1]+'" data-val="'+search+'"><img src="./images/img/'+item[1]+'.png"> '+item[0].replace(re, "<b>$1</b>")+'</div>';
                },
                onSelect: function(e, term, item){
                    console.log('Item "'+item.data('langname')+'" selected by '+(e.type == 'keydown' ? 'pressing enter or tab' : 'mouse click')+'.');
                    $('#continent').val(item.data('langname'));
                }
            });
        });


    </script>

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
		</ul>
			<hr color="#7D26CD" /><br/>
		
		</td>
		<td width="10">&nbsp;</td>
		<td align="left" valign="top" nowrap>
	
