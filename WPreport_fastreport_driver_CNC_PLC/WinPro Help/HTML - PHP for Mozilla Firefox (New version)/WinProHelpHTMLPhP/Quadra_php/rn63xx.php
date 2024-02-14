<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["6.3.xx"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn63xx.php"; }
else { parent.quicksync('a11.9.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>6.3.xx</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Winpro.ini" />
   <meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
   <meta http-equiv="Content-Style-Type" content="text/css" />
   <link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload=" AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="rn640x.php">Previous</a>&nbsp;
     <a href="rn62xx.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versions 6.3.33 &#224; 47</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">12/11/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Correction:</span><span class="f_Textestd"> Dans le cas particulier des assemblages de type &#8216;droit court&#8217;, si la case &#8216;Corriger les usinages si assemblage droit&#8217; est coch&#233;e dans la page &#8216;Usinages&#8217; du dialogue de d&#233;finition des syst&#232;mes, WinPro r&#233;duisait erron&#233;ment la longueur des profils de dormant bas s&#8217;ils &#233;taient situ&#233;s &#224; c&#244;t&#233; d&#8217;une porte d&#8217;un c&#244;t&#233;. Ce comportement est corrig&#233; dans cette version.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.32</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">19/6/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Lin&#233;aire Camion:</span><span class="f_Textestd"> Si vous avez acquis le module lin&#233;aire camion, une liste s&#8217;imprime automatiquement lors de l&#8217;impression de la confirmation. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous avez maintenant la possibilit&#233; d&#8217;&#233;viter cette impression en ajoutant une nouvelle cl&#233; dans le fichier Winpro.ini :</span></p>
<p class="p_Textestd"><span class="f_Winproini">[documents]</span></p>
<p class="p_Textestd"><span class="f_Winproini">LineaireCamion &nbsp; &nbsp; &nbsp; &nbsp;= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Annule l'impression du document</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Active l'impression du document</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Saisie des traverses:</span><span class="f_Textestd">  Un param&#232;tre &#224; ajouter dans le fichier winpro.ini vous permet de sp&#233;cifier l'&#233;cart minimum entre la traverse et le bord du cadre parall&#232;le.</span></p>
<p class="p_Textestd"><span class="f_Winproini">[System]</span></p>
<p class="p_Textestd"><span class="f_Winproini">MinSpace = 20 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Valeur par d&#233;faut</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.31</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">11/6/2002</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 8px;">&nbsp;</p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Biblioth&#232;que:</span><span class="f_Textestd"> WinPro poss&#232;de une nouvelle m&#233;thode rapide de saisie de fen&#234;tres &#224; partir des biblioth&#232;ques. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour cela, vous disposez d&#8217;un nouveau bouton, sous le bouton Biblioth&#232;que actuel, qui vous permet de saisir uniquement le code du ch&#226;ssis que vous recherchez. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Si ce ch&#226;ssis n&#8217;existe que dans une seule biblioth&#232;que, il sera imm&#233;diatement ajout&#233; &#224; la commande ; au cas o&#249; un m&#234;me code existerait dans plusieurs biblioth&#232;ques, WinPro vous pr&#233;sentera une liste, reprenant le code ch&#226;ssis et le code biblioth&#232;que.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.30</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">3/6/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Informations suppl&#233;mentaires dans la table DetLot.dbf:</span><span class="f_Textestd"> Les champs suivants ont &#233;t&#233; ajout&#233;s : Commande, Chassis, LProd, Origine. Voir Dict.xls pour plus d&#8217;informations.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Information suppl&#233;mentaire dans la table InfoPst.dbf:</span><span class="f_Textestd"> Un champ Origine a &#233;t&#233; ajout&#233;. Voir Dict.xls pour plus d&#8217;informations.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Information suppl&#233;mentaire dans la table Atelier.dbf:</span><span class="f_Textestd"> Les champs LProdCha et LProdVol ont &#233;t&#233; ajout&#233;s. Voir Dict.xls pour plus d&#8217;informations.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.29</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">31/5/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Dimensions de vitrages sur confirmations:</span><span class="f_Textestd"> Une case &#224; cocher, dans la page Prix de la saisie de commande, vous permet de ne pas imprimer ces dimensions sur les confirmations. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette case recevra par d&#233;faut la valeur correspondante de la fiche client, au moment de la cr&#233;ation de la commande.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Couleurs RAL des articles sur les commandes fournisseurs:</span><span class="f_Textestd"> Sur les commandes fournisseurs g&#233;n&#233;r&#233;es &#224; partir de la fiche client, WinPro g&#233;n&#233;rait jusqu&#8217;ici d&#8217;office la couleur RAL en d&#233;but de description de l&#8217;article. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Maintenant, une case &#224; cocher sur la page Signal&#233;tique de la fiche article, &#8216;Commander sans couleur RAL&#8217;, vous permet d&#8217;emp&#234;cher cet ajout de couleur. Par contre, si la description de l&#8217;article contient une macro &#8216;#1#&#8217;, cette macro sera bien remplac&#233;e par la couleur de l&#8217;article.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Liste des variables disponibles dans les formules de parcloses:</span></p>
<p><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000; text-decoration: underline;">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 3px 0px;"><span class="f_Variables">NumeroRemplissage</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Num&#233;ro du cadre de parclose en cours de traitement (index dans les tableaux de variables globales de remplissage)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 3px 0px;"><span class="f_Variables">CategorieCroisillon</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Num&#233;ro de cat&#233;gorie du croisillon correspondant au remplissage en cours de traitement.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 3px 0px;"><span class="f_Variables">EpaisseurVitrage</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur du remplissage en cours de traitement</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 3px 0px;"><span class="f_Variables">TypeRemplissage</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Type de remplissage : </span><span class="f_Variables">Vitrage</span><span class="f_Textestd">, </span><span class="f_Variables">PanneauADecouper</span><span class="f_Textestd">, </span><span class="f_Variables">PanneauDecoratif</span><span class="f_Textestd">, </span><span class="f_Variables">PanneauFabrique</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 3px 0px;"><span class="f_Variables">Fixe</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">Vrai()</span><span class="f_Textestd"> s&#8217;il s&#8217;agit de parcloses dans un fixe simple cadre (= parcloses dans le dormant)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 3px 0px;"><span class="f_Variables">NumeroOuvrant</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Num&#233;ro de l&#8217;ouvrant auquel appartient le cadre parclose en cours de traitement (index dans les tableaux de variables globales d&#8217;ouvrant)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 3px 0px;"><span class="f_Variables">Position</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Num&#233;ro du vantail auquel appartient le cadre parclose en cours de traitement</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 3px 0px;"><span class="f_Variables">Sens</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Sens d&#8217;ouverture de l&#8217;ouvrant contenant le cadre de parcloses : </span><span class="f_Variables">Droite</span><span class="f_Textestd"> ou </span><span class="f_Variables">Gauche</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 0px 0px;"><span class="f_Variables">EnHaut</span></p>
<p><span class="f_Variables">EnBas</span></p>
<p><span class="f_Variables">AGauche</span></p>
<p style="margin: 0px 0px 3px 0px;"><span class="f_Variables">ADroite</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Indique ce qu&#8217;il y a de chaque c&#244;t&#233; du cadre de parclose : </span><span class="f_Variables">Dormant</span><span class="f_Textestd">, </span><span class="f_Variables">Ouvrant</span><span class="f_Textestd"> ou </span><span class="f_Variables">Traverse</span><span class="f_Textestd">.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 0px 0px;"><span class="f_Variables">Largeur</span></p>
<p style="margin: 0px 0px 3px 0px;"><span class="f_Variables">Hauteur</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Dimensions du cadre de parclose</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 3px 0px;"><span class="f_Variables">Dimension</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Indique la longueur de base du c&#244;t&#233; en cours de traitement</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 0px 0px;"><span class="f_Variables">CentreXCadre</span></p>
<p><span class="f_Variables">CentreYCadre</span></p>
<p><span class="f_Variables">RayonCadre</span></p>
<p><span class="f_Variables">OuvertureCadre</span></p>
<p><span class="f_Variables">AngleDebutCadre</span></p>
<p style="margin: 0px 0px 3px 0px;"><span class="f_Variables">AngleFinCadre</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Indiquent les caract&#233;ristiques du cintre &#233;ventuel.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 3px 0px;"><span class="f_Variables">Bord</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pour chaque bord ; vaut soit : </span><span class="f_Variables">Haut</span><span class="f_Textestd">, </span><span class="f_Variables">Bas</span><span class="f_Textestd">, </span><span class="f_Variables">Gauche</span><span class="f_Textestd">, </span><span class="f_Variables">Droite</span><span class="f_Textestd">, </span><span class="f_Variables">HautGauche</span><span class="f_Textestd"> ou </span><span class="f_Variables">HautDroite</span><span class="f_Textestd">.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="156" style="width: 156px; border: solid 1px ;"><p style="margin: 3px 0px 0px 0px;"><span class="f_Variables">Angle1</span></p>
<p style="margin: 0px 0px 3px 0px;"><span class="f_Variables">Angle2</span></p>
</td>
<td width="447" style="width: 447px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pour les profils uniquement, et pour chaque c&#244;t&#233; du cadre, indique les angles de coupe. Vous pouvez modifier les angles, que WinPro r&#233;cup&#233;rera en sortie de formule, pour modifier la coupe.</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.28</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/5/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle variable:</span><span class="f_Textestd"> 1 nouvelle variable, </span><span class="f_Variables">NumeroScie</span><span class="f_Textestd">, vous permet de configurer dynamiquement, pour chaque profil, le num&#233;ro de la scie sur laquelle le profil sera d&#233;coup&#233;. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Sur une m&#234;me fen&#234;tre, un m&#234;me profil peut ainsi &#234;tre envoy&#233; sur plus d&#8217;une scie, en fonction des crit&#232;res les plus divers (p.ex. longueur, angle de coupe, couleur, cintrage, urgence, pos&#233; ou pas, &#8230;). </span></p>
<p class="p_Textestd"><span class="f_Textestd" style="color: #ff0000;">Attention ! cette variable n&#8217;est pas cr&#233;&#233;e par WinPro. Vous devez donc lui affecter une valeur avant toute autre op&#233;ration.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables:</span><span class="f_Textestd"> 4 nouvelles variables (</span><span class="f_Variables">PrepaLivraison</span><span class="f_Textestd">, </span><span class="f_Variables">PlanSimplifie</span><span class="f_Textestd">, </span><span class="f_Variables">DocClient</span><span class="f_Textestd">, </span><span class="f_Variables">CtrlQualite</span><span class="f_Textestd">) vous permettent de contr&#244;ler dynamiquement sur quels documents le profil ou l&#8217;article seront imprim&#233;s (respectivement, pr&#233;paration de livraison, plan d&#8217;atelier simplifi&#233;, documents clients sauf facture, contr&#244;le qualit&#233;). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces variables ne sont pas disponibles pour les vitrages, panneaux, main d&#8217;oeuvre. Elles ne sont pas cr&#233;&#233;es par WinPro ; elles ne sont donc pas testables dans les formules ; vous pouvez seulement leur affecter une valeur. Si vous n&#8217;utilisez pas ces variables, c&#8217;est la valeur param&#233;tr&#233;e par la case &#224; cocher respective de chaque article ou profil qui sera utilis&#233;e.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouveau champ dans Det.dbf:</span><span class="f_Textestd"> un champ Section a &#233;t&#233; ajout&#233;, pour facilit&#233; la constitution de rapports. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce champ section (1 caract&#232;re) indique le type g&#233;n&#233;ral d&#8217;information contenue dans l&#8217;enregistrement, et peut prendre l&#8217;une des valeurs suivantes :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="30" style="width: 30px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">D</span></p>
</td>
<td width="538" style="width: 538px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">dormant, faux cintre, seuil, traverse de dormant</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="30" style="width: 30px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">O</span></p>
</td>
<td width="538" style="width: 538px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ouvrant, quincaillerie, parclose, accessoire, panneau fabriqu&#233;, croisillon, a&#233;rateur, traverse d&#8217;ouvrant</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="30" style="width: 30px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">V</span></p>
</td>
<td width="538" style="width: 538px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">caisson, tablier, coulisse</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="30" style="width: 30px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">P</span></p>
</td>
<td width="538" style="width: 538px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">profil p&#233;riph&#233;rique, coupleur</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="30" style="width: 30px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">I</span></p>
</td>
<td width="538" style="width: 538px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">messages, pose</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Dessins dans les tables d&#8217;exportation:</span><span class="f_Textestd"> vous pouvez choisir d&#8217;exporter ces dessins soit dans des fichiers s&#233;par&#233;s (ce qui &#233;tait pr&#233;c&#233;demment la seule possibilit&#233;), soit dans le contenu d&#8217;un champ m&#233;mo de la table correspondante. Les tables concern&#233;es sont : Art.dbf, Fen.dbf, Lin.dbf. Cette derni&#232;re m&#233;thode pr&#233;sente l&#8217;avantage de simplifier la maintenance (la suppression de l&#8217;enregistrement correspondant &#224; un dessin supprime automatiquement le dessin lui-m&#234;me) ; toutefois, elle n&#8217;est pas support&#233;es par tous les g&#233;n&#233;rateurs de rapport. Pour contr&#244;ler le mode d&#8217;exportation des dessins, ajoutez deux nouvelles cl&#233;s dans le fichier Winpro.ini:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Mode Sortie Documents]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Memo &nbsp; &nbsp; &nbsp; &nbsp;= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">pour ne pas activer l&#8217;exportation</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1</span> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Textestd">pour activer l&#8217;exportation</span></p>
<p class="p_Textestd"><span class="f_Winproini">Fichier &nbsp; &nbsp; &nbsp; &nbsp;= 0</span> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Textestd">pour ne pas activer l&#8217;exportation</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">pour activer l&#8217;exportation</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Notez qu&#8217;il est autoris&#233; d&#8217;activer les deux modes simultan&#233;ment, comme de n&#8217;activer aucun des deux.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Par d&#233;faut, si vous n&#8217;ajoutez pas ces lignes dans WinPro.ini, WinPro continuera &#224; exporter les dessins vers des fichiers s&#233;par&#233;s uniquement. Ceci pour assurer la compatibilit&#233; ascendante.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.25</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">8/4/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouveau droit utilisateur:</span><span class="f_Textestd"> Un nouveau droit, &#8216;Commercial&#8217;, permet de restreindre strictement l&#8217;utilisation de WinPro &#224; la cr&#233;ation ou modification de devis et de clients, ainsi qu&#8217;&#224; la cr&#233;ation ou modification de clients.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Affichage des champs de type &#8216;Combo Box&#8217;:</span><span class="f_Textestd"> WinPro poss&#232;de un certain nombre de champs de type &#8216;Combo Box&#8217; (listes d&#233;roulantes), qui pr&#233;sentent &#224; l&#8217;utilisateur un code et une description (p.ex. choix du syst&#232;me, du dormant, de l&#8217;ouvrant, etc&#8230;, dans l&#8217;encodage des commandes). Il est maintenant possible, par d&#233;faut pour l&#8217;ensemble de ces champs de saisie, ou suivant le type d&#8217;information qu&#8217;ils pr&#233;sentent, de d&#233;finir ce que l&#8217;utilisateur peut voir et dans quel ordre : code+description, description+code, code seul, description seule. En outre, la liste pr&#233;sent&#233;e sera toujours tri&#233;e sur la colonne de gauche. Pour cela, vous disposez d&#8217;une nouvelle page dans le dialogue Pr&#233;f&#233;rences (menu Utilitaires | Pr&#233;f&#233;rences). Cette page est intitul&#233;e &#8216;Combo Box&#8217;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.24</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2/4/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables globales:</span><span class="f_Textestd"> ces variables indiquent l&#8217;&#233;paisseur des profils situ&#233;s au bout de chaque traverse. S&#8217;il s&#8217;ag&#238;t d&#8217;un profil de dormant ou d&#8217;ouvrant, l&#8217;&#233;paisseur compl&#232;te du profil est donn&#233;e ; s&#8217;il s&#8217;ag&#238;t d&#8217;une autre traverse, la demi &#233;paisseur de la traverse (soit l&#8217;&#233;paisseur jusqu&#8217;&#224; l&#8217;axe) est donn&#233;e. Le type de profil touchant le bout d&#8217;une traverse peut &#234;tre examin&#233; au moyen des variables </span><span class="f_Variables">_TravHaut[]</span><span class="f_Textestd">, </span><span class="f_Variables">_TravBas[]</span><span class="f_Textestd">, </span><span class="f_Variables">_TravGauche[]</span><span class="f_Textestd">, </span><span class="f_Variables">_TravDroite[]</span><span class="f_Textestd">. Pour rappel, vous disposez dans les formules de traverse d&#8217;une variable </span><span class="f_Variables">NumeroTraverse</span><span class="f_Textestd">, qui indique quel &#233;l&#233;ment de chacun des tableaux de description de traverse correspond &#224; la traverse en cours de calcul. Vous disposez aussi d&#8217;une variable </span><span class="f_Variables">_NTraverses</span><span class="f_Textestd"> qui indique le nombre total de traverses dans la fen&#234;tre.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="194" style="width: 194px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_TravEpaisseurBas[]</span></p>
</td>
<td width="457" style="width: 457px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur du profil sous la traverse (</span><span class="f_Variables">0</span><span class="f_Textestd"> si traverse horizontale)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="194" style="width: 194px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_TravEpaisseurHaut[]</span></p>
</td>
<td width="457" style="width: 457px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur du profil au-dessus de la traverse (</span><span class="f_Variables">0</span><span class="f_Textestd"> si traverse horizontale)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="194" style="width: 194px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_TravEpaisseurGauche[]</span></p>
</td>
<td width="457" style="width: 457px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur du profil &#224; gauche de la traverse (</span><span class="f_Variables">0</span><span class="f_Textestd"> si traverse verticale)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="194" style="width: 194px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_TravEpaisseurDroite[]</span></p>
</td>
<td width="457" style="width: 457px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur du profil &#224; droite de la traverse (</span><span class="f_Variables">0</span><span class="f_Textestd"> si traverse verticale)</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.23</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">21/3/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Panneaux d&#233;coratifs et panneaux d&#233;coup&#233;s:</span><span class="f_Textestd"> Si vous travaillez avec un prix de vitrage d&#233;fini dans l&#8217;ouvrant, vous pouvez maintenant choisir, pour les panneaux, entre 2 modes de fonctionnement : ajouter le prix du panneau au prix de base du vitrage (option par d&#233;faut), ou ne pas tenir compte du prix de base du vitrage.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.22</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">7/3/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Gestion de colis:</span><span class="f_Textestd"> Un deuxi&#232;me type de colis peut &#234;tre d&#233;fini pour chaque article ; il sera utilis&#233; pour les profils fournis en barres non coup&#233;es.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.20</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">1/3/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fichiers DetLot et UsgLot:</span><span class="f_Textestd"> un champ CodeBarre a &#233;t&#233; ajout&#233; &#224; chacune de ces tables. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Le code barre de la pi&#232;ce y est stock&#233; sous le format suivant : </span><span class="f_Textestd" style="font-weight: bold;">Wwwwwoovcn</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">Wwwww</span><span class="f_Textestd"> : num&#233;ro de fen&#234;tre sur 5 caract&#232;res</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">oo</span><span class="f_Textestd"> : num&#233;ro d'ouvrant</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">v</span><span class="f_Textestd"> : num&#233;ro de vantail</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">c</span><span class="f_Textestd"> : num&#233;ro de c&#244;t&#233; (1=gauche, 2=droite, 3=haut, 4=bas, 5=vertical, 6=horizontal, 7 &amp; 8 = oblique)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">n</span><span class="f_Textestd"> : num&#233;ro s&#233;quentiel apr c&#244;t&#233; en base 36</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.19</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/2/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Exportation des changements d&#8217;&#233;tat:</span><span class="f_Textestd"> Vous pouvez configurer WinPro pour que tout changement d&#8217;&#233;tat de commande ou d&#8217;&#233;tat de fen&#234;tre soit export&#233; respectivement vers les tables CLogNav.dbf et RLogNav.dbf. </span></p>
<p class="p_Textestd"><span class="f_Textestd">WinPro n&#8217;exploite pas ces tables. Vous pouvez donc modifier librement leur contenu (manuellement ou par d&#8217;autres programmes). Le nouvel &#233;tat de chaque commande ou fen&#234;tre est indiqu&#233; sous forme de code et sous forme de texte.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour activer cette possibilit&#233;, ajoutez la nouvelle cl&#233; dans WinPro.ini:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[System]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Export Status &nbsp; &nbsp; &nbsp; &nbsp;= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Active cette fonctionnalit&#233;</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">D&#233;sactive cette fonctionnalit&#233;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Reportez-vous &#224; la documentation de la base de donn&#233;es pour le format des tables CLogNav et RLogNav.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Coloration des onglets dans la saisie des commandes:</span><span class="f_Textestd"> cette coloration vous permet de rep&#233;rer plus facilement l&#8217;onglet que vous recherchez.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Couleur des parcloses:</span><span class="f_Textestd"> Vous pouvez d&#233;finir globalement comment traiter la couleur des parcloses des ouvrants fixes, lorsque la couleur de parclose est sp&#233;cifi&#233;e (teinte RAL seulement). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces parcloses prendront, dans ce cas pr&#233;cis, au lieu de la couleur encod&#233;e pour les parcloses, la couleur int&#233;rieure du dormant. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour activer ce comportement, vous devez ajouter la cl&#233; suivante dans WinPro.ini :</span></p>
<p class="p_Textestd"><span class="f_Winproini">[System]</span></p>
<p class="p_Textestd"><span class="f_Winproini">ParcloseDormant &nbsp; &nbsp; &nbsp; &nbsp;= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">La parclose du fixe simple cadre doit &#234;tre de la couleur int du dormant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Winproini">= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">La parclose du fixe simple cadre doit &#234;tre de la couleur int de l'ouvrant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.17</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">5/2/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle variable pour les traverses:</span><span class="f_Textestd"> une nouvelle variable vous indique la position de l&#8217;axe de la traverse par rapport au cadre dans lequel elle se trouve : </span><span class="f_Variables">AxeDansCadre</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables de configuration:</span><span class="f_Textestd"> Une nouvelle s&#233;rie de variables globales vous permet d&#8217;examiner la configuration des remplissages d&#8217;une fen&#234;tre. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Les variables disponibles sont les suivantes :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="170" style="width: 170px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_Nremplissages</span></p>
</td>
<td width="497" style="width: 497px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Nombre total de remplissages dans la fen&#234;tre</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_RemplLargeur []</span></p>
</td>
<td width="497" style="width: 497px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Largeur de chaque remplissage.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_RemplHauteur []</span></p>
</td>
<td width="497" style="width: 497px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Hauteur de chaque remplissage.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_RemplX []</span></p>
</td>
<td width="497" style="width: 497px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Position horizontale du bord gauche de chaque remplissage (par rapport au bord ext&#233;rieur gauche de la fen&#234;tre).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_RemplY []</span></p>
</td>
<td width="497" style="width: 497px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Position verticale du bord bas de chaque remplissage (par rapport au bord ext&#233;rieur bas de la fen&#234;tre).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_RemplType []</span></p>
</td>
<td width="497" style="width: 497px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Type de chaque remplissage. Peut prendre l&#8217;une des valeurs suivantes : </span><span class="f_Variables">_Vitrage</span><span class="f_Textestd">, </span><span class="f_Variables">_PanneauADecouper</span><span class="f_Textestd">, </span><span class="f_Variables">_PanneauDecoratif</span><span class="f_Textestd">, </span><span class="f_Variables">_PanneauFabrique</span><span class="f_Textestd">.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_RemplCateg []</span></p>
</td>
<td width="497" style="width: 497px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Cat&#233;gorie de remplissage. Correspond au nombre repris dans le champ Categorie pour chaque type de remplissage.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_RemplOuvrant []</span></p>
</td>
<td width="497" style="width: 497px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Num&#233;ro de l&#8217;ouvrant auquel appartient le remplissage</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_RemplVantail []</span></p>
</td>
<td width="497" style="width: 497px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Num&#233;ro du vantail auquel appartient le remplissage.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_RemplEpaisseur []</span></p>
</td>
<td width="497" style="width: 497px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur du remplissage.</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remarques importantes : Les valeurs contenues dans </span><span class="f_Variables">_RemplLargeur[]</span><span class="f_Textestd">, </span><span class="f_Variables">_RemplHauteur[]</span><span class="f_Textestd">, </span><span class="f_Variables">_RemplX[]</span><span class="f_Textestd">, </span><span class="f_Variables">_RemplY[]</span><span class="f_Textestd"> sont les valeurs th&#233;oriques, calcul&#233;es &#224; partir du fond de batt&#233;e vitrage, d&#233;duction faite de l&#8217;aisance vitrage ou panneau de de l&#8217;aisance suppl&#233;mentaire. La pr&#233;sence &#233;ventuelle d&#8217;a&#233;rateurs n&#8217;est pas prise en compte. Pour les panneaux fabriqu&#233;s, comme l&#8217;aisance standard n&#8217;est pas connue, elle n&#8217;est donc pas d&#233;duite des dimensions donn&#233;es. Egalement pour les panneaux fabriqu&#233;s, l&#8217;&#233;paisseur donn&#233;e dans </span><span class="f_Variables">_RemplEpaisseur[]</span><span class="f_Textestd"> est celle renseign&#233;e dans le champ Epaisseur du panneau ; l&#8217;&#233;paisseur calcul&#233;e par formule dans le panneau n&#8217;est pas prise en compte ici.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.16</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">31/1/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Exportation des documents:</span><span class="f_Textestd"> Si vous utilisez le module &#8216;Exportation des documents&#8217;, WinPro vous propose quelques nouvelles options :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Champs suppl&#233;mentaires : dans les fichiers Cde.dbf, Fen.dbf, Det.dbf, des champs contenant les codes WinPro des &#233;l&#233;ments utilis&#233;s (syst&#232;me, parcloses, dormant, ...) ont &#233;t&#233; ajout&#233;s.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Exportation automatique d&#8217;un document g&#233;n&#233;rique &#224; chaque (r&#233;)enregistrement de la commande. Cette exportation contient un maximum de renseignements sur la commande, entre autre : prix de vente, liste compl&#232;te des composants. </span></td></tr></table></div><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Ce type de document est caract&#233;ris&#233; par un X dans le champ TypeDoc de chaque table de la base d&#8217;exportation. Ce type de document est activ&#233; en ajoutant une nouvelle cl&#233; dans le fichier Winpro.ini:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Winproini"> [Mode Sortie Documents] </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Winproini">Complet &nbsp; &nbsp; &nbsp; &nbsp;= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Activation de l'export des donn&#233;es &#224; chaque enregistrement (TypeDoc=X)</span></p>
<p style="margin: 0px 0px 0px 48px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">D&#233;sactivation de l'export des donn&#233;es &#224; chaque enregistrement </span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Contr&#244;le de l&#8217;exportation des dessins : vous pouvez contr&#244;ler si vous exportez les dessins, d&#8217;une part pour les documents export&#233;s proprement dits, d&#8217;autre part pour les nouveaux documents g&#233;n&#233;riques (export des dessins lors de l'enregistrement de la commande) d&#233;crits ci-dessus. </span></td></tr></table></div><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Ce contr&#244;le se fait par l'ajout de cl&#233;s dans le fichier Winpro.ini :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Winproini">[Mode Sortie Documents] </span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Winproini">Dessin &nbsp; &nbsp; &nbsp; &nbsp;= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">N&#8217;exporter aucun dessin en cas d'export lors d'impression de docs</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">exporter les dessins de ch&#226;ssis et/ou volets en cas d'export lors d'impression de docs</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 2 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">exporter les dessins d&#8217;articles (&#8216;DXF&#8217;) en cas d'export lors d'impression de docs</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 3 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">exporter tous les dessins en cas d'export lors d'impression de docs</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Winproini">Dessin Complet &nbsp; &nbsp; &nbsp; &nbsp;= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">n'exporter aucun dessin en cas d'enregistrement de la cde client</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">exporter les dessins de ch&#226;ssis et/ou volets en cas d'enregistrement de la cde client</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 2 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">exporter les dessins d&#8217;articles (&#8216;DXF&#8217;) en cas d'enregistrement de la cde client</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 3 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">exporter tous les dessins en cas d'enregistrement de la cde client</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Am&#233;lioration de la qualit&#233; des dessins export&#233;s. Ils s&#8217;appuient maintenant sur la r&#233;solution de l&#8217;imprimante par d&#233;faut, plut&#244;t que sur celle de l&#8217;&#233;cran.</span></td></tr></table></div><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.15</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">28/1/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Facturation simple:</span><span class="f_Textestd"> Un nouveau module, accessible depuis le menu Commandes | Gestion de livraison | Factures simples et notes de cr&#233;dit, vous permet d&#8217;&#233;tablir des factures simples ou des notes de cr&#233;dit (avoirs). Ces documents peuvent comprendre : un texte (format enrichi), un montant de base, une remise, des frais de port, taux de TVA, choix de la devise, conditions de paiement, ... L&#8217;impression de ces documents est limit&#233; &#224; une seule page. Si vous disposez de la liaison comptable, ils seront envoy&#233;es en comptabilit&#233;, comme les factures standard de WinPro.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Prix des vitrages sur grille:</span><span class="f_Textestd"> Vous pouvez d&#233;cider si les montants d&#8217;une grille de prix de vitrage repr&#233;sentent un prix forfaitaire pour la dimension concern&#233;e, ou un prix au m&#178;, qui sera donc multipli&#233; par la surface effective du vitrage.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez &#233;galement d&#233;finir une remise globale &#224; appliquer sur le prix du vitrage, quel que soit ce type de prix.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Impression des tarifs:</span><span class="f_Textestd"> WinPro utilise pour cette impression une instruction Windows permettant d&#8217;imprimer en une seule op&#233;ration tous les textes de m&#234;me type (fonte et alignement) composant la grille. Malheureusement, cette instruction fonctionne mal avec certaines imprimantes, et certaines cellules ou titres des pages de tarif peuvent pr&#233;senter des caract&#232;res al&#233;atoires.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez maintenant contourner ce probl&#232;me en ajoutant dans WinPro.ini la section et la cl&#233; suivante :</span></p>
<p class="p_Textestd"><span class="f_Winproini">  &nbsp; [TextOut]</span></p>
<p class="p_Textestd"><span class="f_Winproini">  &nbsp; &nbsp;Poly = 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Activera un mode d&#8217;impression un peu plus lent, mais supprime ce probl&#232;me d&#8217;impression.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Format de date:</span><span class="f_Textestd"> WinPro lit normalement le format de date dans les param&#232;tres de configuration de Windows. Ceci peut amener des diff&#233;rences entre diff&#233;rentes stations de travail sur un m&#234;me r&#233;seau. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez maintenant contourner ce probl&#232;me en ajoutant une section et 2 cl&#233;s dans le fichier WinPro.ini:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Date]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Short = </span><span class="f_Textestd" style="font-weight: bold;">ww/yy</span><span class="f_Winproini">  &nbsp; &nbsp; </span><span class="f_Textestd">pour le format de date court (ex. 18/01/02)</span></p>
<p class="p_Textestd"><span class="f_Winproini">Long = </span><span class="f_Textestd" style="font-weight: bold;">dd/mm/yyyy </span><span class="f_Winproini">  </span><span class="f_Textestd">  &nbsp;pour le format de date long (ex. vendredi 18 janvier 2002)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Chacune des deux cl&#233;s se d&#233;finit selon la m&#234;me syntaxe, qui est globalement identique &#224; celle utilis&#233;e par Windows :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">d</span><span class="f_Textestd"> repr&#233;sente le jour du mois, sur 1 ou 2 caract&#232;res (ex. 1, 2, ..., 9, 10, ...)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">dd</span><span class="f_Textestd"> repr&#233;sente le jour du mois, toujours sur 2 caract&#232;res (ex. 01, 02, ... 09, 10, ...)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">ddd</span><span class="f_Textestd"> repr&#233;sente le jours de la semaine sur 3 caract&#232;res (ex. lun, mar, ...)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">dddd</span><span class="f_Textestd"> repr&#233;sente le jour de la semaine, avec autant de caract&#232;res que n&#233;cessaire (ex. lundi, mardi, mercredi, ...</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">m</span><span class="f_Textestd"> repr&#233;sente le num&#233;ro du mois, sur 1 ou 2 caract&#232;res (ex. 1, 2, ..., 9, 10, ...)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">mm</span><span class="f_Textestd"> repr&#233;sente le num&#233;ro du mois, toujours sur 2 caract&#232;res (ex. 01, 02, ... 09, 10, ...)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">mmm</span><span class="f_Textestd"> repr&#233;sente le nom du mois abr&#233;g&#233; &#224; 3 caract&#232;res (ex. jan, f&#233;v, ...)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">mmmm</span><span class="f_Textestd"> repr&#233;sente le nom du mois, avec autant de caract&#232;res que n&#233;cessaire (janvier, f&#233;vrier, mars, ...)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">y</span><span class="f_Textestd"> repr&#233;sente l&#8217;ann&#233;e sur 1 ou 2 caract&#232;res (ex. 0, 1, 2, ..., 9, 10, ...)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">yy</span><span class="f_Textestd"> repr&#233;sente l&#8217;ann&#233;e sur 2 caract&#232;res (ex. 00, 01, 02, ..., 09, 10, ...)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">yyyy</span><span class="f_Textestd"> repr&#233;sente l&#8217;ann&#233;e sur 4 caract&#232;res (ex. 1999, 2000, 2001, ...)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">w</span><span class="f_Textestd"> repr&#233;sente le num&#233;ro de semaine dans l&#8217;ann&#233;e, sur 1 ou 2 caract&#232;res (ex. 0, 1, 2, ..., 9, 10, ...)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">ww</span><span class="f_Textestd"> repr&#233;sente le num&#233;ro de semaine dans l&#8217;ann&#233;e sur 2 caract&#232;res (ex. 00, 01, 02, ..., 09, 10, ...)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">s</span><span class="f_Textestd"> repr&#233;sente le suffixe ordinal du jour du mois (ex. ds donnera 1er, 2&#232;me, ...)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Si un des caract&#232;res pr&#233;c&#233;dents est en majuscules, la valeur correspondante repr&#233;sentera &#233;galement cette majuscule (ex : </span><span class="f_Textestd" style="font-weight: bold;">Mmm</span><span class="f_Textestd"> donnera Jan, F&#233;v, Mar, ... ; </span><span class="f_Textestd" style="font-weight: bold;">mmm</span><span class="f_Textestd"> donnera jan, f&#233;v, mar, ... ; </span><span class="f_Textestd" style="font-weight: bold;">MMM</span><span class="f_Textestd"> donnera JAN, F&#201;V, MAR, ...)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour qu&#8217;un des caract&#232;res r&#233;serv&#233;s soit reproduit sans interpr&#233;tation, il faut le faire pr&#233;c&#233;der d&#8217;un caract&#232;re \ (&#8216;backslash&#8217;)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Tous les autres caract&#232;res sont reproduits tels quels.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Alternativement, une suite de caract&#232;res entre guillemets sera &#233;galement reproduite telle quelle sans interpr&#233;tation.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.14</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">18/1/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Frais de port:</span><span class="f_Textestd"> WinPro disposait d&#233;j&#224; de la possibilit&#233; d&#8217;ajouter des frais de port &#224; une commande. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette fonction a &#233;t&#233; am&#233;lior&#233;e : vous pouvez maintenant indiquer un pourcentage de frais ; vous pouvez aussi demander la r&#233;partition des frais de port sur l&#8217;ensemble des lignes de commande (ch&#226;ssis, articles, profil, t&#244;les pli&#233;es, pose). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Attention ! dans ce dernier cas, seule les frais de port exprim&#233;s en pourcentage de la valeur de la commande sont admis ; les frais de port fixes ne sont pas possibles.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Confirmation de commande:</span><span class="f_Textestd"> Vous pouvez maintenant imprimer ce document imm&#233;diatement depuis la fen&#234;tre de saisie de commande client. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez toujours, comme auparavant, l&#8217;imprimer depuis la fen&#234;tre d&#8217;impression de listes de confirmations.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Documents par poste d&#8217;atelier:</span><span class="f_Textestd"> Vous pouvez maintenant imprimer le dessin de chaque ch&#226;ssis sur ce type de document. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez aussi imprimer un dessin par croisillon appliqu&#233;. Dans ce dernier cas, les composants propre au croisillon et/ou au vitrage seront imprim&#233;s &#224; la suite du dessin correspondant. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour activer ces deux nouvelles options, il suffit de cocher les cases correspondants dan la d&#233;finition du poste d&#8217;atelier. Les deux options peuvent &#234;tre utilis&#233;es simultan&#233;ment.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.13</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">14/1/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Main d&#8217;oeuvre:</span><span class="f_Textestd"> Vous pouvez affecter un coefficient &#224; chaque poste de main d&#8217;oeuvre. Ce coefficient affectera le prix de revient de la main d&#8217;oeuvre.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Profils:</span><span class="f_Textestd"> Vous pouvez affecter un coefficient de remplissage &#224; chaque profil. Ce coefficient sera utilis&#233; pour d&#233;terminer le taux d&#8217;occupation dans les casiers de chute, par profil.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Documents de lot:</span><span class="f_Textestd"> Un nouveau document est disponible, qui liste les temps de main d&#8217;oeuvre consomm&#233;s dans le lot. Ce document s&#8217;imprime en m&#234;me temps que les autres documents du lot, apr&#232;s l&#8217;optimisation.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.11</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">7/1/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Volets roulants (1):</span><span class="f_Textestd"> Vous pouvez d&#233;finir si une question de caisson ou tablier concerne la man&#339;uvre du volet. Cela vous permet de poser les questions de man&#339;uvre pour chaque tablier, si vous avez plus d&#8217;un tablier dans un m&#234;me caisson. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour d&#233;finir quelles sont les questions de man&#339;uvre, il suffit de cocher la case correspondante de la colonne Man&#339;uvre dans la d&#233;finition de la question.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Du point de vue de l&#8217;utilisateur, une s&#233;rie de &#8216;boutons radio&#8217; ont &#233;t&#233; ajout&#233;s juste au-dessus des questions de dormant. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces boutons permettent de choisir quel est le tablier s&#233;lectionn&#233;, de sorte que les questions et r&#233;ponses correspondantes apparaissent.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous devez adapter les formules pour utiliser cette possibilit&#233; :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">- au niveau des formules de tablier, vous ne devez rien faire de sp&#233;cial. Chaque tablier voit uniquement les questions et r&#233;ponses qui le concernent.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">- au niveau des formules de caisson, c&#8217;est un peu plus complexe : vous disposez sous chaque formule de 3 cases &#224; cocher : Caisson, Flasque, Tablier. Si la troisi&#232;me case (Tablier) est coch&#233;e, vous disposez de l&#8217;ensemble des questions, dont les questions de man&#339;uvre du tablier en cours de calcul. Si elle n&#8217;est pas coch&#233;e, vous ne disposez que des questions qui ne conernent pas la man&#339;uvre.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Volets roulants (2):</span><span class="f_Textestd"> Il est possible de verrouiller le choix de comprendre le caisson dans la hauteur du dormant ou non. Vous disposez pour cela de 2 nouvelles variables : </span><span class="f_Variables">_CaissonDeduitAutorise</span><span class="f_Textestd"> et </span><span class="f_Variables">_CaissonNonDeduitAutorise</span><span class="f_Textestd">. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces deux variables sont &#233;valu&#233;es uniquement lors de la premi&#232;re phase de calcul, c&#8217;est-&#224;-dire dans la premi&#232;re formule de dormant, ouvrant, quincaillerie, traverse, et caisson, (ce sont les m&#234;mes r&#232;gles que pour les sections variables).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Volets roulants (3):</span><span class="f_Textestd"> Les extensions lat&#233;rales du caisson peuvent &#234;tre dessin&#233;es ; pour cela, vous devez affecter la valeur de l&#8217;extension aux variables </span><span class="f_Variables">ExtensionGaucheCaisson</span><span class="f_Textestd"> et </span><span class="f_Variables">ExtensionDroiteCaisson</span><span class="f_Textestd">, depuis la premi&#232;re formule de profil de caisson.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.10</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2/1/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Questions:</span><span class="f_Textestd"> Vous pouvez d&#233;finir une formule pour chaque question. Cette formule est utilis&#233;e pour 2 choses :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">D&#233;finir une variable &#8216;Visible&#8217;, ce qui permet de cacher la question lorsqu&#8217;elle contient la valeur 0 ou Faux () (la variable Visible est toujours &#8216;Vrai()&#8217; par d&#233;faut).</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Forcer la r&#233;ponse de toute question accessible.</span></td></tr></table></div><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour les questions de type s&#233;lection, vous pouvez masquer individuellement chaque r&#233;ponse possible. Vous disposez pour cela d&#8217;une variable </span><span class="f_Variables">Selection []</span><span class="f_Textestd">, dont chaque &#233;l&#233;ment est </span><span class="f_Variables">Vrai ()</span><span class="f_Textestd"> par d&#233;faut. Il suffit de d&#233;clarer </span><span class="f_Variables">Faux ()</span><span class="f_Textestd"> les &#233;l&#233;ments que vous souhaitez masquer. Notez qu&#8217;au moins un &#233;l&#233;ment doit &#234;tre visible ! Veillez aussi &#224; red&#233;finir la r&#233;ponse &#224; la question, si la r&#233;ponse courante correspond &#224; une des r&#233;ponses masqu&#233;es.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour chaque formule de question, les variables des autres questions peuvent &#234;tre lues ou modifi&#233;es, selon les r&#232;gles suivantes :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Les formules de dormant peuvent acc&#233;der aux questions de seuil, et vice versa</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Les formules d&#8217;ouvrant peuvent acc&#233;der aux questions de quincaillerie, et vice versa</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Les formules de volets roulants peuvent acc&#233;der aux questions de caisson, coulisse, tablier</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les variables d&#8217;autres questions peuvent &#234;tre lues seulement, selon les r&#232;gles suivantes :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Les formules de dormant peuvent lire les questions de caisson, tablier et coulisse</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Les formules d&#8217;ouvrant, quincaillerie, traverse de dormant, profil p&#233;riph&#233;rique, volet roulant peuvent lire les questions de dormant</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Les formules d&#8217;ouvrant et quincaillerie peuvent en plus lire les questions de volet.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Les formules de traverse d&#8217;ouvrant, panneau fabriqu&#233;, croisillons, a&#233;rateur peuvent lire les questions d&#8217;ouvrant, quincaillerie, et dormant</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les variables </span><span class="f_Variables">Visible</span><span class="f_Textestd"> et </span><span class="f_Variables">Selection []</span><span class="f_Textestd"> de chaque question ne peuvent &#234;tre modifi&#233;es que depuis la formule de question correspondante.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Chaque fois que vous r&#233;pondez &#224; une question, la formule de chaque question visible est r&#233;&#233;valu&#233;e et appliqu&#233;e. De cette mani&#232;re, vous pouvez changer la visibilit&#233; ou la r&#233;ponse &#224; une question en tenant compte de toutes les autres questions.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les variables de configuration (</span><span class="f_Variables">_NOuvrants</span><span class="f_Textestd">, </span><span class="f_Variables">_OuvrantL[]</span><span class="f_Textestd">, </span><span class="f_Variables">_TravType[]</span><span class="f_Textestd">, etc. ...) sont &#233;galement accessibles. </span></p>
<p class="p_Textestd"><span class="f_Textestd">En plus, suivant le type de question, les variables suivantes sont disponibles :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">NumeroOuvrant</span><span class="f_Textestd"> : ouvrant, quincaillerie, traverse d&#8217;ouvrant, croisillon, a&#233;rateur, panneau fabriqu&#233;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Vantail</span><span class="f_Textestd"> : ouvrant, quincaillerie, traverse d&#8217;ouvrant, croisillon, a&#233;rateur, panneau fabriqu&#233;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">NumeroTraverse</span><span class="f_Textestd"> : traverse de dormant et ouvrant (sauf au moment de la cr&#233;ation ; la traverse n&#8217;&#233;tant pas encore cr&#233;&#233;e, elle n&#8217;a pas de num&#233;ro)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">NumeroProfil</span><span class="f_Textestd"> : profils p&#233;riph&#233;riques (sauf seuils).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour rappel, les variables de configuration comprennent &#233;galement une variable </span><span class="f_Variables">_WinPro</span><span class="f_Textestd">, qui peut contenir l&#8217;une de ces deux valeurs : </span><span class="f_Variables">_Fabricant</span><span class="f_Textestd"> ou </span><span class="f_Variables">_Devis</span><span class="f_Textestd">. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ceci vous permet de masquer l&#8217;une ou l&#8217;autre question ou r&#233;ponse en fonction du contexte (si vous &#234;tes dans WinPro, </span><span class="f_Variables">_WinPro = _Fabricant</span><span class="f_Textestd"> ; si vous &#234;tes dans WinPro/D, </span><span class="f_Variables">_Winpro = _Devis</span><span class="f_Textestd">).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Une liste de messages a &#233;t&#233; ajout&#233;e sous chaque liste de questions. Si vous g&#233;n&#233;rez un message dans les formules de questions, il appara&#238;tra dans cette liste. Ceci vous permet de guider l&#8217;utilisateur dans ses choix. </span></p>
<p class="p_Textestd"><span class="f_Textestd">La formule de message est la formule habituelle, telle qu&#8217;utilis&#233;e dans d&#8217;autres parties du programme.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.08</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">18/12/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Usinages:</span><span class="f_Textestd"> WinPro vous permet de r&#233;aliser deux nouveaux types d&#8217;usinage</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Variables">Usinage (</span><span class="f_Textestd">pos</span><span class="f_Variables">,</span><span class="f_Textestd"> org</span><span class="f_Variables">,</span><span class="f_Textestd"> type</span><span class="f_Variables">,</span><span class="f_Textestd"> code</span><span class="f_Variables">, AUTO)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cet usinage permet &#224; un profil de s&#8217;usiner lui-m&#234;me. Il doit &#234;tre utilis&#233; depuis la formule qui d&#233;finit l&#8217;utilisation du profil lui-m&#234;me. </span></p>
<p class="p_Textestd"><span class="f_Textestd">N&#8217;importe quel type de profil peut utiliser ce type d&#8217;usinage, y compris les profils dans les panneaux fabriqu&#233;s, les croisillons, les a&#233;rateurs, &#8230;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les param&#232;tres cadre et bord (qui se retrouvent dans la fonction Usinage de base) &nbsp;n&#8217;ont pas de sens dans ce cas-ci, et ne doivent donc pas &#234;tre d&#233;finis.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Un exemple d&#8217;utilisation de cette formule est de permettre &#224; une traverse de percer sur elle-m&#234;me des usinages de fixation.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Variables">Usinage (</span><span class="f_Textestd">pos</span><span class="f_Variables">,</span><span class="f_Textestd"> org</span><span class="f_Variables">,</span><span class="f_Textestd"> type</span><span class="f_Variables">,</span><span class="f_Textestd"> code, </span><span class="f_Variables">SPECIAL,</span><span class="f_Textestd"> cat, bord[</span><span class="f_Variables">,</span><span class="f_Textestd"> vent]</span><span class="f_Variables">)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce format vous permet d&#8217;envoyer l&#8217;usinage sur un profil dont la cat&#233;gorie d&#8217;usinage est &#8216;cat&#8217;. La cat&#233;gorie d&#8217;un profil peut &#234;tre d&#233;finie de deux mani&#232;res : en attribuant une valeur fixe dans un nouveau champ dans le dialogue Profil (dans l&#8217;onglet Description) ou en attribuant dynamiquement une valeur avec la variable </span><span class="f_Variables">CategorieUsinage</span><span class="f_Textestd">. &nbsp;Le param&#232;tre cat de l&#8217;instruction Usinage peut &#234;tre une valeur fixe ou une formule.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les param&#232;tres &#8216;SPECIAL, cat&#8217; remplacent le param&#232;tre habituel cadre de l&#8217;instruction standard d&#8217;usinage.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez utilisez cette syntaxe pour envoyer des usinages sur diff&#233;rentes sortes de profils, p.ex. les seuils et profils p&#233;riph&#233;riques, des profils suppl&#233;mentaires de dormant ou ouvrant, &#8230;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces nouvelles syntaxes sont &#233;galement disponibles avec l&#8217;instruction </span><span class="f_Variables">UsinageExt (</span><span class="f_Textestd">&#8230;</span><span class="f_Variables">)</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.06 &amp; 07</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">12/12/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Scies:</span><span class="f_Textestd"> Certaines des informations copi&#233;es dans chaque profil ont &#233;t&#233; d&#233;plac&#233;es dans la table scie : perte en bout de chute, impression d&#8217;&#233;tiquettes et listes, longueur minimum et maximum support&#233;es par la scie, scie alternative. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces informations ont &#233;t&#233; enlev&#233;e de la table Profil, de telle sorte qu&#8217;elles ne doivent &#234;tre d&#233;finies qu&#8217;une seule fois par scie.  </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cependant, il est toujours possible de d&#233;cider de ne pas imprimer des &#233;tiquettes pour chaque profil, ind&#233;pendamment.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Documents atelier:</span><span class="f_Textestd"> la r&#233;f&#233;rence de la commande est dor&#233;navant imprim&#233;e sur les documents ateliers avec chaque fen&#234;tre.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Document &#233;lectronique Pilkington:</span><span class="f_Textestd"> les noms du lot et de la ligne de production ont &#233;t&#233; ajout&#233; &#224; la ligne K2, apr&#232;s les dates.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.05</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">3/12/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">3me niveau de remise:</span><span class="f_Textestd"> Un troisi&#232;me niveau de remise a &#233;t&#233; ajout&#233; dans les commandes clients. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Tout comme les deux niveaux pr&#233;c&#233;dents, ce niveau de remise peut &#234;tre d&#233;finis de trois mani&#232;res diff&#233;rentes : globalement au niveau de la commande, &nbsp;individuellement pour chaque fen&#234;tre or calcul&#233; en formule pour chaque fen&#234;tre, en utilisant les variables : </span><span class="f_Variables">Remise3</span><span class="f_Textestd"> et </span><span class="f_Variables">RemiseVolet3</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Description variable profil:</span><span class="f_Textestd"> tout comme la description article, la description d&#8217;un profil peut dor&#233;navant comporter certaines de ces trois macros </span><span class="f_Variables">#1#</span><span class="f_Textestd">, </span><span class="f_Variables">#2#</span><span class="f_Textestd"> ou </span><span class="f_Variables">#3#</span><span class="f_Textestd"> (respectivement couleur, dimension(s), &#233;paisseur). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce qui a un impact important sur l&#8217;optimisation: des profils avec des descriptions diff&#233;rentes peuvent &#234;tre optimis&#233;s s&#233;par&#233;ment. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ceci vous permet principalement d&#8217;optimiser des profils de section diff&#233;rente, s&#233;par&#233;ment pour chaque section.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Toutefois, les profils standards seront toujours optimis&#233;s comme pr&#233;c&#233;demment.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.04</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">30/11/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Donn&#233;es client:</span><span class="f_Textestd"> De nouveaux champs ont &#233;t&#233; ajout&#233;s: 2 RIB &#8216;relev&#233; d&#8217;identit&#233; bancaire&#8217;, une 3&#232;me remise et un champ dans lequel vous pouvez d&#233;finir un code client pour la facturation.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.03</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/11/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Prix vitrage:</span><span class="f_Textestd"> Vous pouvez entrer en grille les prix d&#8217;achat vitrage.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.02</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">19/11/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Analyse co&#251;t commande:</span><span class="f_Textestd"> 2 nouvelles colonnes ont &#233;t&#233; ajout&#233;es, indiquant le prix de vente avec et sans remise.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Coefficient de prix sur les syst&#232;mes &#8216;ch&#226;ssis&#8217;:</span><span class="f_Textestd"> Dor&#233;navant, vous avez la possibilit&#233; d&#8217;encoder un coefficient s&#233;par&#233; pour les prix de vente bas&#233; sur un prix de revient courant, pour chaque syst&#232;me de ch&#226;ssis.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2/11/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Module scie multiple:</span><span class="f_Textestd"> Avec ce module, vous pouvez d&#233;finir pour chaque profil une s&#233;rie de scies alternatives. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces scies vous seront propos&#233;es lorsque vous lancerez &nbsp;une optimisation. &nbsp;Vous pourrez d&#232;s lors d&#233;cider individuellement pour chaque profil sur quelle scie il sera coup&#233;. </span></p>
<p class="p_Textestd"><span class="f_Textestd">WinPro proposera toujours la scie principale par d&#233;faut. &nbsp;Ainsi, dans la plupart des cas, il suffira de cliquer sur OK.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez s&#233;lectionner diff&#233;rents profils simultan&#233;ment. &nbsp;Dans ce cas, WinPro propose uniquement les scies qui sont communes aux profils s&#233;lectionn&#233;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce choix a lieu avant l&#8217;optimisation. &nbsp;Cela permet &#224; WinPro d&#8217;utiliser des r&#232;gles diff&#233;rentes pour chaque scie : la perte en bout de barre, la perte de trait de scie peuvent &#234;tre diff&#233;rentes sur chaque scie.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Au choix, vous pouvez &#233;galement avoir un stock de chutes commun ou s&#233;par&#233;. &nbsp;Puisque vous pouvez encoder un num&#233;ro de stock chute pour chaque scie, WinPro maintiendra un stock s&#233;par&#233; pour chaque num&#233;ro. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cela vous permet de g&#233;rer votre stock de chutes avec un maximum de flexibilit&#233;. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Par exemple, si vous d&#233;finissez 3 scies pour un profil, deux d&#8217;entre-elles peuvent &#234;tre r&#233;unies dans un m&#234;me stock alors que la troisi&#232;me aura un stock s&#233;par&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.3.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">29/10/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Chute variable:</span><span class="f_Textestd"> Vous pouvez d&#233;finir une perte de trait de scie diff&#233;rent pour chaque s&#233;quence d&#8217;angles sur une barre optimis&#233;e. </span></p>
<p class="p_Textestd"><span class="f_Textestd">A cette fin, vous devez cr&#233;er une scie dans le menu Techniques | Scie.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour chaque s&#233;quence d&#8217;angles (pr&#233;sent&#233;e graphiquement dans la fen&#234;tre Scie), vous pouvez exprimer la perte soit comme un simple nombre soit comme une formule, o&#249; H est la hauteur totale du profil, comme d&#233;fini dans la fen&#234;tre Profil, dans le 3&#232;me champ de la page Description. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez &#233;galement autoriser ou interdire des s&#233;quences sp&#233;cifiques d&#8217;angles.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous devez &#233;galement d&#233;finir le sens dans lequel la barre avance pendant la coupe. &nbsp;C&#8217;est sp&#233;cialement important si la perte n&#8217;est pas sym&#233;trique comme repris dans l&#8217;exemple ci-apr&#232;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Enfin, vous pouvez &#233;galement d&#233;cider d&#8217;un num&#233;ro de stock de chute. Cela sera utilis&#233; avec le module Scie multiple (cf. notes 6.3.1).</span></p>
<p class="p_Textestd"><img src="img/img_111.jpg" width="791" height="567" border="0" vspace="1" hspace="1" alt="img_111"></p>

</td></tr></table>
</div>

</body>
</html>
