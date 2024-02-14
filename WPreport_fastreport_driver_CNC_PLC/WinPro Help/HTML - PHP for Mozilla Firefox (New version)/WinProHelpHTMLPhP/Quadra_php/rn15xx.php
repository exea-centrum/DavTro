<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["1.5.xx"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn15xx.php"; }
else { parent.quicksync('a11.27.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>1.5.xx</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="" />
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
     <a href="rn160x.php">Previous</a>&nbsp;
     <a href="rn14xx.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.5.05</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">29/9/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Dessin pleine page:</span><span class="f_Textestd"> </span><span class="f_Textestd">Vous pouvez imprimer en pleine page le dessin d&#8217;un ch&#226;ssis. Cliquez simplement sur le bouton Imprimer de la page dessin.</span></p>
<p class="p_Textestd"><span class="f_Textestd">N.B.</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Outre le dessin, la page comporte les informations suivantes : en haut, nom du client et r&#233;f&#233;rence de la commande; en bas, num&#233;ro de commande et de ch&#226;ssis, nom du fabricant, &#233;chelle.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">L&#8217;impression peut se faire sur toute taille de page, p.ex. sur A3, pour peu que votre imprimante supporte ce format.</span></td></tr></table></div><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Jours de livraison de fournisseurs:</span><span class="f_Textestd"> </span><span class="f_Textestd">Vous pouvez maintenant d&#233;finir deux ou trois jours habituels de livraison pour chaque fournisseur. Les possibilit&#233;s sont les suivantes (dans l&#8217;ordre de leur pr&#233;sentation) :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">lundi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">mardi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">mercredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">jeudi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">vendredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">samedi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">??? (ind&#233;fini)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">lundi, mardi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">lundi, mercredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">lundi, jeudi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">lundi, vendredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">mardi, mercredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">mardi, jeudi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">mardi, vendredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">mercredi, jeudi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">mercredi, vendredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">jeudi, vendredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">lundi, mardi, mercredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">lundi, mardi, jeudi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">lundi, mardi, vendredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">lundi, mercredi, jeudi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">lundi, mercredi, vendredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">lundi, jeudi, vendredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">mardi, mercredi, jeudi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">mardi, mercredi, vendredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">mardi, jeudi, vendredi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">mercredi, jeudi, vendredi</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Corrections:</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">A&#233;rateurs sous traverse (sans vitrage):</span><span class="f_Textestd"> </span><span class="f_Textestd">Si la traverse est trop &#233;loign&#233;e de quelques millim&#232;tres de l&#8217;a&#233;rateur, WinPro donne maintenant un message d&#8217;erreur plus ad&#233;quat (&#8216;Approchez la traverse de x mm&#8217; au lieu de &#8216;Vitrage inexistant&#8217;). Ce probl&#232;me ne se produisait en fait que lorsque la traverse &#233;tait trop &#233;loign&#233;es d&#8217;1 &#224; 2 mm seulement !</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Textes de d&#233;but et de fin de document:</span><span class="f_Textestd"> Il est maintenant possible d&#8217;utiliser des textes s&#8217;&#233;tendant sur plusieurs pages, aussi bien au d&#233;but qu&#8217;&#224; la fin de chaque document.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.5.04</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/9/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Perte sur chutes</span></p>
<p class="p_Textestd"><span class="f_Textestd">La fiche profil comporte un nouveau champ : Perte en bout de chute. Ce champ permet d&#8217;indiquer une perte &#224; d&#233;compter au bout de chaque chute, de la m&#234;me mani&#232;re que la chute en bout de barre est &#224; d&#233;compter au bout de chaque barre neuve.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Panneaux fabriqu&#233;s</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Deux nouvelles variables sont ajout&#233;es aux panneaux fabriqu&#233;s:</span><span class="f_Textestd"> </span><span class="f_Variables">LargeurInterieure</span><span class="f_Textestd"> et </span><span class="f_Variables">HauteurInterieure</span><span class="f_Textestd">. Ces variables indiquent respectivement la largeur et la hauteur du panneau, fond de batt&#233;e int&#233;rieure ouvrant. Pour un panneau fabriqu&#233; ordinaire, elles ont la m&#234;me valeur que les variables </span><span class="f_Variables">Largeur</span><span class="f_Textestd"> et </span><span class="f_Variables">Hauteur</span><span class="f_Textestd">. Elles diff&#232;rent par contre pour un panneau fabriqu&#233; recouvrant l&#8217;ouvrant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fonction de remplacement:</span><span class="f_Textestd"> </span><span class="f_Textestd">WinPro vous permet de cr&#233;er une variante d&#8217;un ch&#226;ssis en rempla&#231;ant un type d&#8217;&#233;l&#233;ment par un autre (bouton </span><span class="f_Textestd">Remplacer</span><span class="f_Textestd"> en haut &#224; droite de la fen&#234;tre</span><span class="f_Textestd"> Commande client</span><span class="f_Textestd">). Toutefois, en cas de changement de syst&#232;me, un remplacement automatique des profils p&#233;riph&#233;riques n&#8217;est pas toujours possible.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Chanagement de syst&#232;me avec profil p&#233;riph&#233;rique:</span><span class="f_Textestd"> Vous pouvez maintenant cr&#233;er un profil p&#233;riph&#233;rique de cat&#233;gorie 999, n&#8217;appartenant &#224; aucun syst&#232;me, et contenant simplement un message (p.ex. &#8216;Profil p&#233;riph&#233;rique inexistant dans ce syst&#232;me &#8211; veuillez sp&#233;cifier un autre profil&#8217;). Si lors d&#8217;un changement de syst&#232;me, la cat&#233;gorie d&#8217;un profil p&#233;riph&#233;rique n&#8217;existe pas dans le nouveau syst&#232;me, le profil de cat&#233;gorie 999 sera utilis&#233; &#224; sa place; l&#8217;utilisateur recevra donc un message l&#8217;avertissant que le remplacement du profil n&#8217;a pas pu se faire en mode automatique.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Corrections:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Ensembles de ch&#226;ssis: Il est maintenant possible de calculer correctement un ensemble de forme cintr&#233;e.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Commandes fournisseurs sur une commande client: WinPro ne distinguait pas correctement les articles RAL (hors stock) des non - RAL (de stock) lors de la pr&#233;paration de commandes fournisseur &#224; partir d&#8217;une commande client. Ce probl&#232;me est corrig&#233;.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Modification du prix arrondi par 10 cm sur certains types de cintre.</span></td></tr></table></div><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.5.03</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">19/9/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Liste des composants:</span><span class="f_Textestd"> Vous pouvez maintenant consulter la liste des composants d&#8217;un ch&#226;ssis dans une commande, dans la page d&#8217;onglet </span><span class="f_Textestd">Composants</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Liste des r&#233;servations:</span><span class="f_Textestd"> Vous pouvez &#233;galement consulter la liste des &#233;ventuelles r&#233;servations en cours pour la commande, dans l&#8217;onglet </span><span class="f_Textestd">R&#233;servation</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Recalcul des r&#233;servations:</span><span class="f_Textestd"> Il est maintenant possible de recalculer les r&#233;servations d&#8217;une commande, avec le bouton </span><span class="f_Textestd">Recalcul</span><span class="f_Textestd"> sur la page d&#8217;onglet </span><span class="f_Textestd">R&#233;servations</span><span class="f_Textestd">. Ce bouton n&#8217;est accessible qu&#8217;aux utilisateurs ayant le droit d&#8217;acc&#232;s sur le stock, et n&#8217;est actif que si la commande est dans un &#233;tat appropri&#233; (entre l&#8217;approbation et la mise en production)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Traduction des articles de pose:</span><span class="f_Textestd"> Vous pouvez dor&#233;navant traduire les articles de pose. La proc&#233;dure est la m&#234;me que pour la traduction d&#8217;autres composants comme les dormants, quincailleries, etc... Le libell&#233; appara&#238;tra dans la langue du client; en cas d&#8217;affichage d&#8217;une liste de recherche, le libell&#233; appara&#238;tra dans la langue de l&#8217;utilisateur, ind&#233;pendamment de la langue du client.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Affichage des temps de fabrication:</span><span class="f_Textestd"> La liste des commandes &#224; optimiser indique maintenant les temps de fabrication de chaque commande, sur 4 colonnes (ch&#226;ssis rectangulaires, non rectangulaires, portes, volets). Un total des commandes est &#233;galement affich&#233; en haut de la fen&#234;tre au fur et &#224; mesure des s&#233;lections de l&#8217;utilisateur. Le nombre total de pi&#232;ces est &#233;galement indiqu&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Corrections:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Remise &#224; blanc du champ num&#233;ro de commande dans l&#8217;encodage des commandes fournisseur.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">V&#233;rification et suppression des blancs devant le num&#233;ro de commande.</span></td></tr></table></div><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.5.02</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/9/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Commande fournisseur (gestion des commandes):</span><span class="f_Textestd"> Une colonne a &#233;t&#233; ajout&#233;e imm&#233;diatement &#224; droite de la colonne code article. Cette colonne contient une case qui est coch&#233;e si l&#8217;article est tra&#231;able, c&#8217;est &#224; dire si WinPro g&#233;n&#232;re une ligne de commande fournisseur par commande client pour cet article.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">R&#233;ception fournisseur (gestion des commandes):</span><span class="f_Textestd"> Une colonne a &#233;t&#233; ajout&#233;e imm&#233;diatement &#224; droite de la colonne code article, comme pour l&#8217;&#233;cran d&#8217;encodage des commandes fournisseur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Une deuxi&#232;me colonne a &#233;t&#233; ajout&#233;e, &#224; droite du tableau, indiquant le num&#233;ro de commande client &#233;ventuel correspondant &#224; la ligne de commande fournisseur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Avalisation financi&#232;re (gestion des commandes):</span><span class="f_Textestd"> Le tableau des commandes &#224; avaliser est compl&#233;t&#233; de la marge brute et du taux de remise accord&#233;. </span></p>
<p class="p_Textestd"><span class="f_Textestd">La pr&#233;sentation a &#233;t&#233; modifi&#233;e afin de disposer d&#8217;une place suffisante.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Encours client:</span><span class="f_Textestd"> </span><span class="f_Textestd">WinPro vous donne maintenant la possibilit&#233; d&#8217;imprimer un encours des commandes client. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cet encours a &#233;t&#233; con&#231;u pour pouvoir &#234;tre donn&#233; tel quel &#224; chaque client, et contient notamment le m&#234;me ent&#234;te que sur les offres et confirmations (adresse et logo du fabricant, adresse du client).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les termes contenus dans ce document sont donc traduisibles (par le menu Donn&#233;es | Traductions).</span></p>
<p class="p_Textestd"><span class="f_Textestd">La s&#233;lection peut se faire selon les crit&#232;res suivants:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Code client (de ... &#224; ...)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Cat&#233;gorie de client (une ou plusieurs cat&#233;gories)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Code repr&#233;sentant (un seul repr&#233;sentant)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&#201;tat de la commande (un ou plusieurs &#233;tats)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez choisir d&#8217;imprimer le dessin de chaque ch&#226;ssis ou non.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Messages et echecs:</span><span class="f_Textestd"> </span><span class="f_Textestd">Vous avez la possibilit&#233; de regrouper le texte des instructions </span><span class="f_Textestd">message</span><span class="f_Textestd"> et </span><span class="f_Textestd">echec</span><span class="f_Textestd"> du param&#233;trage dans une table, &#224; la quelle vous acc&#233;dez par le point de menu </span><span class="f_Textestd">Donn&#233;es | Messages</span><span class="f_Textestd">. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ceci offre plusieurs avantages :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Choix du destinataire du message (utilisateur et / ou client et / ou atelier)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Notion de hors garantie (pour les messages)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Traduction dans la langue du destinataire</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Uniformisation des messages similaires</span></p>
<p><span style="font-family: 'Times New Roman'; color: #000000;">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">La syntaxe de des instructions message et echec a &#233;t&#233; compl&#233;t&#233;e : si le corps du message commence par le signe </span><span class="f_Variables">#</span><span class="f_Textestd">, la suite du message est interpr&#233;t&#233;e comme un code &#224; rechercher dans la table des messages, avec traduction &#233;ventuelle.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Exemple : </span><span class="f_Variables">Message #DORMANT TP GRAND</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Corrections:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">R&#233;partition des chutes RAL si devis ou confirmation en devise.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Calcul traverse si un c&#244;t&#233; du dormant a une &#233;paisseur nulle.</span></td></tr></table></div><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.5.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">7/9/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Chutes en bout de barre (optimisation):</span><span class="f_Textestd"> En plus de pouvoir indiquer globalement une chute en bout de barre pour toutes les couleurs d&#8217;un m&#234;me profil, WinPro permet maintenant de pr&#233;ciser une chute en bout de barre particuli&#232;re pour chaque couleur. Si aucune chute n&#8217;est donn&#233;e (ou si la chute est de 0), c&#8217;est la chute en bout de barre globale qui sera utilis&#233;e. Si vous ne voulez pas du tout de chute bout de barre pour une couleur de profil, alors qu&#8217;il y a une chute globale pour les autres couleurs, indiquez une chute bout de barre </span><span class="f_Textestd">n&#233;gative </span><span class="f_Textestd">(p.ex. &#8211;1).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle variable:</span><span class="f_Textestd"> </span><span class="f_Variables">DimensionDormant</span><span class="f_Textestd"> dans le param&#233;trage des profils p&#233;riph&#233;riques. Cette variable indique la dimension du dormant sur le c&#244;t&#233; o&#249; se fixe le profil p&#233;riph&#233;rique. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ne pas confondre avec la variable Dimension, qui indique elle la dimension souhait&#233;e du profil p&#233;riph&#233;rique, qui peut &#234;tre soit une dimension demand&#233;e par l&#8217;utilisateur, soit une dimension calcul&#233;e par le programme en fonction des profils p&#233;riph&#233;riques d&#233;j&#224; pr&#233;sents.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">&#338;il de b&#339;uf:</span><span class="f_Textestd"> </span><span class="f_Textestd">WinPro peut maintenant cr&#233;er des ch&#226;ssis circulaires (&#339;il de b&#339;uf). Il s&#8217;agit toutefois ici d&#8217;une version simplifi&#233;e, ne permettant notamment pas d&#8217;ins&#233;rer des traverses, ni des croisillons. Ceci fera l&#8217;objet d&#8217;une &#233;volution ult&#233;rieure.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Num&#233;rotation automatique suppl&#233;mentaire:</span><span class="f_Textestd"> Une nouvelle num&#233;rotation automatique a &#233;t&#233; ajout&#233;e pour l&#8217;encodage de service apr&#232;s-vente. Comme pour les autres num&#233;rotations, la distinction ne se fait qu&#8217;au niveau du pr&#233;fixe et du compteur. Utilisez le point de menu &#8216;Utilitaires | Bon de commande client&#8217; pour d&#233;terminer le pr&#233;fixe du service apr&#232;s vente (champ SAV).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Notation du num&#233;ro de confirmation de commande fournisseur:</span><span class="f_Textestd"> </span><span class="f_Textestd">Il est maintenant possible de noter le num&#233;ro de confirmation d&#8217;une commande fournisseur. Il peut y avoir un num&#233;ro diff&#233;rent pour chaque ligne de commande; il est aussi possible d&#8217;encoder globalement un seul num&#233;ro pour une commande compl&#232;te.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Rappels fournisseurs:</span><span class="f_Textestd"> </span><span class="f_Textestd">Possibilit&#233; de donner deux limites de date pour s&#233;lectionner les articles &#224; rappeler.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour chaque fournisseur, ajout d&#8217;un titre comprenant le n&#176; de fournisseur, nom, t&#233;l&#233;phone, t&#233;l&#233;fax, et contact. Ajout d&#8217;une colonne &#8216;Num&#233;ro de confirmation&#8217; (</span><span class="f_Textestd">cf.</span><span class="f_Textestd"> paragraphe pr&#233;c&#233;dent), et d&#8217;une num&#233;rotation des lignes (r&#233;initialis&#233;e &#224; 1 &#224; chaque changement de fournisseur).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Modification de la liste simplifi&#233;e d&#8217;articles:</span><span class="f_Textestd"> </span><span class="f_Textestd">Ajout d&#8217;une colonne &#8216;unit&#233;&#8217;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Historique des mouvements de stock:</span><span class="f_Textestd"> </span><span class="f_Textestd">Possibilit&#233; de s&#233;lectionner le type de mouvement (entr&#233;e, sortie, correction, transfert).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Modification des zones de texte d&#233;sactiv&#233;es:</span><span class="f_Textestd"> </span><span class="f_Textestd">A l&#8217;encodage, un certain nombre de zones texte sont d&#233;sactiv&#233;es par WinPro, pour emp&#234;cher toute modification intempestive. Cette d&#233;sactivation peut d&#233;pendre des droits de l&#8217;utilisateur, ou de l&#8217;&#233;tat de la fen&#234;tre d&#8217;encodage (recherche, visualisation, cr&#233;ation, encodage).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Dans les versions pr&#233;c&#233;dentes, ces zones &#233;taient totalement inaccessibles, et l&#8217;affichage en &#233;tait estomp&#233;, le rendant peu lisible. D&#233;sormais, ces zones sont accessibles (p. ex. pour copier leur contenu), et sont d&#8217;une couleur plus nette (en principe noir sur fond gris, mais ces couleurs peuvent d&#233;pendre de votre installation Windows). Il est toutefois toujours impossible de modifier ces zones.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Pr&#233;sentation des grilles d&#8217;encodage:</span><span class="f_Textestd"> </span><span class="f_Textestd">Alternance de couleur de fond pour une meilleure lisibilit&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Coulisses centrales:</span><span class="f_Textestd"> </span><span class="f_Textestd">Les coulisses centrales sont maintenant mentionn&#233;es sur les documents clients (sauf devis simplifi&#233;).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Panneaux fabriqu&#233;s:</span><span class="f_Textestd"> </span><span class="f_Textestd">Possibilit&#233; de d&#233;finir un panneau couvrant la surface ext&#233;rieure de l&#8217;ouvrant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remarque :</span><span class="f_Textestd"> si la surface couverte par le panneau est d&#233;limit&#233;e par une traverse, la dimension donn&#233;e par le programme couvrira la moiti&#233; de la traverse (donc jusqu&#8217;&#224; l&#8217;axe).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Exemple : Panneau fabriqu&#233; en all&#232;ge sur une porte &#8211; axe de la traverse &#224; 600 mm &#8211; largeur ext&#233;rieur ouvrant 900 mm &#8211; jeu bas de porte 5 mm : le panneau fera 900 x (600-5=595)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Corrections:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Probl&#232;me de traduction des vitrages sur les documents client.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Dessin des ch&#226;ssis ouverture ext&#233;rieure avec parcloses &#224; l&#8217;ext&#233;rieur : la couleur de remplissage des ouvrants est maintenant correcte.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Am&#233;lioration de la pr&#233;sentation des commandes en r&#233;solution 640x480 dans WinPro/D</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Plus de remise &#224; 1 de la quantit&#233; (&gt; 1) en cas de changement de syst&#232;me.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">M&#233;morisation correcte des remarques des commandes fournisseur.</span></td></tr></table></div><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.5.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">31/8/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Assemblage de ch&#226;ssis:</span><span class="f_Textestd"> Des ch&#226;ssis reli&#233;s entre eux par des coupleurs ou par des parties vides.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette possibilit&#233; ne fait pas partie du programme de base; elle peut &#234;tre acquise s&#233;par&#233;ment.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Une notion de coupleur a &#233;t&#233; ajout&#233;e aux rehausses. Les rehausses marqu&#233;es &#8216;Coupleur&#8217; seront propos&#233;es comme pseudo - traverses pour les subdivisions de l&#8217;assemblage de ch&#226;ssis.</span></p>
<p class="p_Textestd"><span class="f_Textestd">L&#8217;encodage se fait comme suit :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="18"><span style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td><td><span class="f_Textestd">Cliquer sur la case &#8216;Assemblage de ch&#226;ssis&#8217; de l&#8217;onglet Ch&#226;ssis. Seule la quantit&#233;, le syst&#232;me et la couleur restent apparents lorsque cette case est coch&#233;e. L&#8217;onglet ouvrant est d&#233;sactiv&#233;.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="18"><span style="font-size: 10pt; font-family: 'Arial'; color: #000000;">2.</span></td><td><span class="f_Textestd">Indiquer, comme pour un ch&#226;ssis classique, la forme et les dimensions de l&#8217;assemblage (mesures ext&#233;rieures).</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="18"><span style="font-size: 10pt; font-family: 'Arial'; color: #000000;">3.</span></td><td><span class="f_Textestd">Ins&#233;rer des subdivisions, de la m&#234;me mani&#232;re que pour l&#8217;encodage de traverses (WinPro proposera ici les rehausses marqu&#233;es comme &#8216;coupleurs&#8217;).</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="18"><span style="font-size: 10pt; font-family: 'Arial'; color: #000000;">4.</span></td><td><span class="f_Textestd">Indiquer &#233;ventuellement les parties &#224; laisser vides. N&#8217;importe quelle partie peut &#234;tre vide, sans les contraintes impos&#233;es pour les parties vides &#224; l&#8217;int&#233;rieur d&#8217;un cadre de dormant.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="18"><span style="font-size: 10pt; font-family: 'Arial'; color: #000000;">5.</span></td><td><span class="f_Textestd">Cliquer sur le bouton &#8216;Valider ch&#226;ssis&#8217; (onglet &#8216;Dormant&#8217;). WinPro cr&#233;era automatiquement autant de ch&#226;ssis que de parties non vides. Vous pouvez alors encoder le contenu de chaque ch&#226;ssis. Les nouveaux ch&#226;ssis seront &#233;galement g&#233;n&#233;r&#233;s, si n&#233;cessaire, par toute action impliquant une validation de l&#8217;assemblage.</span></td></tr></table></div><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Remarques:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">La forme et les dimensions des ch&#226;ssis ne seront pas modifiables au niveau des ch&#226;ssis eux-m&#234;mes; c&#8217;est la configuration de l&#8217;assemblage qui les d&#233;termine.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">En cas de modification de la structure de l&#8217;assemblage, WinPro supprimera automatiquement les &#233;ventuels ch&#226;ssis exc&#233;dentaires et en cr&#233;era de nouveaux si n&#233;cessaire, apr&#232;s que vous ayez cliqu&#233; sur le bouton &#8216;Valider ch&#226;ssis&#8217; (ou effectu&#233; une validation implicite).</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">En cas de suppression d&#8217;un assemblage, tous les ch&#226;ssis constituant le remplissage seront &#233;galement supprim&#233;s.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Il est possible de cr&#233;er un assemblage ne comportant en fait aucun ch&#226;ssis. Il suffit que chaque partie soit d&#233;finie comme &#8216;vide&#8217;. Un tel assemblage ne comportera que d&#8217;&#233;ventuelles rehausses, seuils et/ou coupleurs.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Vous ne pouvez supprimer un ch&#226;ssis constituant une partie d&#8217;un assemblage, qu&#8217;en marquant, au niveau de l&#8217;assemblage, la partie correspondante comme &#8216;vide&#8217;, et en revalidant l&#8217;assemblage.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Sur les documents, l&#8217;assemblage sera d&#8217;abord dessin&#233;. S&#8217;il comporte des profils p&#233;riph&#233;riques et/ou des coupleurs, ceux-ci seront valoris&#233;s. A sa suite, seront d&#233;taill&#233;s tous les ch&#226;ssis le remplissant, qui seront valoris&#233;s individuellement.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Des profils p&#233;riph&#233;riques peuvent &#234;tre ajout&#233;s &#224; chaque ch&#226;ssis individuellement, mais uniquement en d&#233;duction des dimensions du ch&#226;ssis.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Des profils p&#233;riph&#233;riques peuvent &#233;galement &#234;tre ajout&#233;s &#224; un assemblage, d&#233;duits et non d&#233;duits.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Chaque ch&#226;ssis d&#8217;un assemblage peut appartenir &#224; un syst&#232;me diff&#233;rent. WinPro n&#8217;effectue aucune v&#233;rification &#224; ce niveau.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Un assemblage ne peut pas &#234;tre associ&#233; &#224; un volet. Toutefois, chaque ch&#226;ssis individuel peut l&#8217;&#234;tre.</span></td></tr></table></div><p class="p_Textestd"><span class="f_Variables">&nbsp;</span></p>

</td></tr></table>
</div>

</body>
</html>
