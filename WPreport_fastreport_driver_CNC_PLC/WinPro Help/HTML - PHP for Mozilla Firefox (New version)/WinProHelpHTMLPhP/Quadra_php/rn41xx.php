<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["4.1.xx"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn41xx.php"; }
else { parent.quicksync('a11.16.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>4.1.xx</title>
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
     <a href="rn50xx.php">Previous</a>&nbsp;
     <a href="rn4000.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 4.1.12</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">10/01/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Base pour multi-soci&#233;t&#233;s:</span><span class="f_Textestd"> </span><span class="f_Textestd">Un noyau multi-soci&#233;t&#233;s a &#233;t&#233; introduit dans winpro. Ce noyau se base sur le lien entre un num&#233;ro de soci&#233;t&#233; et les articles et les syst&#232;mes . </span></p>
<p class="p_Textestd"><span class="f_Textestd">Le module multi-soci&#233;t&#233; est d&#233;velopp&#233; actuellement sur </span><span class="f_Textestd">demande sp&#233;cifique</span><span class="f_Textestd">. Le principe de base consiste &#224; scinder une commande initiale et &#224; exporter les diff&#233;rentes parties vers des soci&#233;t&#233;s de productions diff&#233;rentes.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Commandes Vitrage via T&#233;l&#233;glass:</span><span class="f_Textestd"> </span><span class="f_Textestd">il est d&#233;sormais possible de passer les commandes vitrages chez les fournisseurs de St Roch &#233;lectroniquement. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour ce faire, cette interface doit &#234;tre activ&#233;e dans WinPro et un programme sp&#233;cifique T&#233;l&#233;glass doit &#234;tre install&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Note d&#8217;envoi r&#233;capitulative:</span><span class="f_Textestd"> </span><span class="f_Textestd">une note d&#8217;envoi r&#233;capitulative chiffr&#233;e par client peut &#234;tre imprim&#233;e si cette option est activ&#233;e dans la fiche documents client sous le menu &#171; pr&#233;f&#233;rence &#187;. La note d&#8217;envoi r&#233;capitulative est imprim&#233;e lorsque une ou plusieurs note d&#8217;envois sont imprim&#233;es pour un m&#234;me client. Ce document reprend toutes les commandes &#224; livrer pour un m&#234;me client et donne un aper&#231;u des montants &#224; payer. Un montant de frais de livraison ainsi qu&#8217;un montant franco de port &nbsp;peuvent &#234;tre encod&#233;s dans la fiche client.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p style="margin: 8px 0px 0px 29px;"><img src="img/img_117.jpg" width="1024" height="768" border="0" vspace="1" hspace="1" alt="img_117"></p>
<p style="margin: 8px 0px 0px 5px;"><span class="f_ImageCaption">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 4.1.11</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">30/12/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">Mise en page des factures:</span><span class="f_Textestd"> Il est possible dans la facture de d&#233;sactiver ou d'activer les colonnes par le biais de param&#232;tres dans le fichier WinPro.ini. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette modification ajoute la possibilit&#233; de d&#233;s/activer une colonne PRIX UNITAIRE, de d&#233;s/activer le POIDS TOTAL dans la cartouche des totaux de la facture et de d&#233;s/activer le commentaire client de l'onglet ch&#226;ssis dans la colonne syst&#232;me.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_Winproini">[Invoice]</span></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_Winproini">ColumnFrame &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 1  &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; color: #000000;">pour activer </span></p>
<p style="margin: 0px 0px 0px 5px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; color: #000000;">pour d&#233;sactiver</span></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_Winproini">ColumnQuantity  &nbsp; &nbsp; &nbsp; &nbsp;= 1</span><span style="font-family: 'Tahoma'; color: #000000;"> ou </span><span class="f_Winproini">0</span></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_Winproini">ColumnSystem  &nbsp; &nbsp; &nbsp; &nbsp;= 1</span><span style="font-family: 'Tahoma'; color: #000000;"> ou </span><span class="f_Winproini">0</span></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_Winproini">ColumnColor  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 1</span><span style="font-family: 'Tahoma'; color: #000000;"> ou </span><span class="f_Winproini">0</span></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_Winproini">ColumnSize  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 1</span><span style="font-family: 'Tahoma'; color: #000000;"> ou </span><span class="f_Winproini">0</span></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_Winproini">ColumnUnitPrice  &nbsp; &nbsp; &nbsp; &nbsp;= 1</span><span style="font-family: 'Tahoma'; color: #000000;"> ou </span><span class="f_Winproini">0</span></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_Winproini">ColumnPrice  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 1</span><span style="font-family: 'Tahoma'; color: #000000;"> ou </span><span class="f_Winproini">0</span></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_Winproini">ColumnWeight  &nbsp; &nbsp; &nbsp; &nbsp;= 1</span><span style="font-family: 'Tahoma'; color: #000000;"> ou </span><span class="f_Winproini">0</span></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_Winproini">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_Winproini">PrintTotalWeight  &nbsp; &nbsp; &nbsp; &nbsp;= 1</span><span style="font-family: 'Tahoma'; color: #000000;"> ou </span><span class="f_Winproini">0</span></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_Winproini">CommentSys  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 1</span><span style="font-family: 'Tahoma'; color: #000000;"> ou </span><span class="f_Winproini">0</span></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_Winproini">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 4.1.09</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">1/12/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Gestion des acomptes:</span><span class="f_Textestd"> </span><span class="f_Textestd">Un nouvel onglet acompte a &#233;t&#233; ajout&#233; dans la fiche Commande entre les onglets Prix et Actions.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez y encoder les diff&#233;rents acomptes qui auraient &#233;t&#233; effectu&#233;s. Vous disposez pour cela des champs Libell&#233;, Date, Montant et Facture. Les modifications des acomptes ne seront plus possible une fois que la commande aura atteint l&#8217;&#233;tat Validation de la confirmation.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces acomptes apparaissent sur la facture finale.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 4.1.06</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/10/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ent&#234;te des commandes fournisseur:</span><span class="f_Textestd"> Vous devez param&#233;trer la disposition de cet ent&#234;te, par le menu Utilitaires | Pr&#233;f&#233;rences&#8230;, onglet &#8216;Ent&#234;te cde fourn.&#8217;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 4.1.05</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">1/10/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Pr&#233;s&#233;lection des cases &#8216;Arrondir par 10cm&#8217;, &#8216;Compter les chutes RAL&#8217;, &#8216;R&#233;partir chutes RAL&#8217;:</span><span class="f_Textestd"> L&#8217;&#233;tat de ces cases &#224; cocher, pr&#233;sentes dans l&#8217;onglet Prix de l&#8217;encodage des commandes, peut &#234;tre pr&#233;d&#233;fini en ajoutant dans WinPro.ini les lignes suivantes:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Customer Order]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Round up &nbsp; &nbsp; &nbsp; &nbsp;= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">La case Arrondir par 10 cm n'est pas coch&#233;e</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Winproini">= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">La case Arrondir par 10 cm est coch&#233;e</span></p>
<p class="p_Textestd"><span class="f_Winproini">RAL Cutoffs</span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Winproini">= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">La case Compter les chutes RAL n'est pas coch&#233;e</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1</span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp; &nbsp;La case Compter les chutes RAL est coch&#233;e</span></p>
<p class="p_Textestd"><span class="f_Winproini">RAL Distribution</span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Winproini">= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">La case R&#233;partir chutes RAL n'est pas coch&#233;e</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">La case R&#233;partir chutes RAL est coch&#233;e</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Calcul de l&#8217;escompte:</span><span class="f_Textestd"> Par d&#233;faut, WinPro calcul l&#8217;escompte sur le montant hors TVA. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Il est maintenant possible de calculer l&#8217;escompte sur le montant TVA comprise; il faut pour cela ajouter la cl&#233; suivante, dans le fichier WinPro.ini :</span></p>
<p class="p_Textestd"><span class="f_Winproini">[VAT] </span></p>
<p class="p_Textestd"><span class="f_Winproini">Escompte HTVA  &nbsp; &nbsp; &nbsp; &nbsp;= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Calcul de l'escompte sur le montant TVA comprise</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Calcul de l'escompte sur le montant hors TVA</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Totaux des documents clients:</span><span class="f_Textestd"> Le total g&#233;n&#233;ral a &#233;t&#233; agrandi et soulign&#233;, afin qu&#8217;il ressorte mieux.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Valeur en euro:</span><span class="f_Textestd"> pour les documents comportant en plus du total g&#233;n&#233;ral sa contrepartie en euro, un texte a &#233;t&#233; ajout&#233;, qui mentionne qu&#8217;il s&#8217;agit d&#8217;un montant indicatif. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce texte peut &#234;tre adapt&#233;, par le menu Donn&#233;es|Traductions.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">&#201;tiquettes d&#8217;optimisation:</span><span class="f_Textestd"> Une nouvelle case &#224; cocher, dans le menu Utilitaires|Pr&#233;f&#233;rences&#8230; , onglet Optimisation, vous permet d&#8217;imprimer sur les &#233;tiquettes la dimension hors tout du cadre correspondant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Vitrages et croisillons:</span><span class="f_Textestd"> ajout d&#8217;un champ permettant de m&#233;moriser le code article du vitrage ou du croisillon chez le fournisseur. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces champs sont utilis&#233;s pour une &#233;ventuelle liaison &#233;lectronique pour l&#8217;envoi des commandes.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Vitrages et panneaux:</span><span class="f_Textestd"> Ajout d&#8217;une notion de suppl&#233;ment minimum. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce suppl&#233;ment est appliqu&#233; en majoration du prix au m&#178; ou en grille li&#233; &#224; l&#8217;ouvrant (onglet Ouvrant | Tarif).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Liste comparative devis/commande:</span><span class="f_Textestd"> Une nouvelle liste, accessible par le menu Commande | Liste d&#8217;encours | Liste comparative Devis/Commande, permet, pour une p&#233;riode choisie, de sortir la liste comparative (&#233;cran et papier) des devis et commandes par repr&#233;sentant. Cette liste comprend, par repr&#233;sentant, le nombre total de devis, leur valeur cumul&#233;e, le nombre total de commandes confirm&#233;es et approuv&#233;es, leur valeur totale cumul&#233;e. Cette liste ne fonctionne qu&#8217;avec le module &#8216;Gestion de production&#8217;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables:</span><span class="f_Textestd"> Dans les ouvrants et les dormants, WinPro cr&#233;e maintenant 2 variables, repr&#233;sentant les position gauche et bas de chaque vantail. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces variables sont nomm&#233;es </span><span class="f_Variables">PositionBas</span><span class="f_Textestd"> et </span><span class="f_Variables">PositionGauche</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 4.1.03</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">1/8/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Biblioth&#232;ques:</span><span class="f_Textestd"> Vous pouvez maintenant m&#233;moriser du texte pour chaque ch&#226;ssis mis en biblioth&#232;que; vous disposez d&#8217;un texte pour le client et un pour l&#8217;atelier. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces textes seront copi&#233;s dans votre commande quand vous r&#233;cup&#233;rerez un ch&#226;ssis de la biblioth&#232;que.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Prix des devis:</span><span class="f_Textestd"> WinPro peut maintenant m&#233;moriser &#224; la demande le prix des devis, de mani&#232;re &#224; maintenir ces prix pendant le reste du traitement du devis et/ou de la commande.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Si la commande est modifi&#233;e, WinPro vous demande, au moment de l&#8217;enregistrement de la nouvelle version, s&#8217;il faut ou non maintenir les prix calcul&#233;s pr&#233;c&#233;demment (pour autant que ces prix aient d&#233;j&#224; &#233;t&#233; m&#233;moris&#233;s). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Lors de la premi&#232;re impression d&#8217;un devis, WinPro vous demande s&#8217;il faut m&#233;moriser les prix; lors des r&#233;impressions ult&#233;rieures, il vous demande s&#8217;il faut les recalculer, et, si oui, s&#8217;il faut m&#233;moriser la nouvelle version.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 4.1.02</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">17/7/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">T&#244;les pli&#233;es:</span><span class="f_Textestd"> WinPro permet maintenant l&#8217;encodage de t&#244;les pli&#233;es, dans l&#8217;onglet T&#244;les pli&#233;es de la fen&#234;tre d&#8217;encodage des commandes. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Les t&#244;les &#224; plier doivent pr&#233;alablement avoir &#233;t&#233; d&#233;finies en tant que Article (menu Donn&#233;es), Profils, et T&#244;les &#224; plier (menu Technique)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 4.1.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">3/7/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Import / Export Devis et Commande via &#201;mail:</span><span class="f_Textestd"> L&#8217;importation et l&#8217;exportation des commandes et des devis Winpro peuvent se faire maintenant via le syst&#232;me de courrier &#233;lectronique Internet install&#233; sur l&#8217;ordinateur. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Lorsque cette option est activ&#233;e, au moment de la s&#233;lection du bouton export ou import, un choix est possible entre &#171; par disquette &#187; ou &#171; par &#201;mail &#187;. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Lors de l&#8217;export, si l&#8217;option &#201;mail est choisie, la commande ou le devis s&#233;lectionn&#233; sera pr&#233;alablement copi&#233; dans le r&#233;pertoire temporaire pr&#233;cis&#233; par la cl&#233; </span><span class="f_Textestd">Export</span><span class="f_Textestd"> dans la section </span><span class="f_Textestd">LastPath</span><span class="f_Textestd"> du fichier </span><span class="f_Textestd">Winpro</span><span class="f_Textestd">.</span><span class="f_Textestd">ini.</span><span class="f_Textestd"> Ensuite Winpro d&#233;marre le syst&#232;me &#201;mail et attache le fichier sauvegard&#233;. Si l&#8217;export se fait depuis Winpro Devis, l&#8217;adresse du destinataire sera celle reprise dans la table soci&#233;t&#233;. Si l&#8217;export se fait depuis Winpro, l&#8217;adresse du destinataire sera celle reprise dans la fiche client li&#233;e &#224; la commande ou devis export&#233;. Si un repr&#233;sentant est &#233;galement pr&#233;cis&#233;, son adresse &#201;mail sera reprise pour copie conforme. Le sujet du message envoy&#233; sera celui repris par la cl&#233; </span><span class="f_Textestd">SubjectImEx </span><span class="f_Textestd">dans la section </span><span class="f_Textestd">Email </span><span class="f_Textestd">du fichier</span><span class="f_Textestd"> Winpro.ini.</span><span class="f_Textestd"> Pour l&#8217;import, Winpro recherche dans la boite de r&#233;ception du compte par d&#233;faut les &#201;mail non ouverts dont le sujet est repris par la cl&#233; </span><span class="f_Textestd">SubjectImEx </span><span class="f_Textestd">dans la section </span><span class="f_Textestd">Email </span><span class="f_Textestd">du fichier</span><span class="f_Textestd"> Winpro.ini. </span><span class="f_Textestd">Les fichiers attach&#233;s sont extraits dans le r&#233;pertoire temporaire de Windows et une liste est propos&#233;e &#224; l&#8217;utilisateur. Identiquement &#224; l&#8217;export, les copies interm&#233;diaires des fichiers sont laiss&#233;es dans les r&#233;pertoires pr&#233;cit&#233;s. C&#8217;est &#224; l&#8217;utilisateur qu&#8217;est laiss&#233;e la gestion de ces fichiers. Le module import / export est disponible s&#233;par&#233;ment. L&#8217;activation se fait par la cl&#233; </span><span class="f_Textestd">Enable</span><span class="f_Textestd"> de la section </span><span class="f_Textestd">&#201;mail</span><span class="f_Textestd"> dans le fichier </span><span class="f_Textestd">Winpro.ini</span><span class="f_Textestd"> et l&#8217;installation de la DLL &#171; </span><span class="f_Textestd">wpcomm</span><span class="f_Textestd">.</span><span class="f_Textestd">dll</span><span class="f_Textestd"> &#187;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Exemple de Winpro.ini</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">[LastPath]</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">Export=C:\TEMP</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">Import=C:\TEMP</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">[Email]</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">Enable=1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">SubjectImEx=Winpro (Im)(Ex)port</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Correction automatique des usinages:</span><span class="f_Textestd"> WinPro peut maintenant corriger automatiquement les usinages sur les profils de dormant assembl&#233;s en coupe droite, sur le dormant raccourci. Pour activer cette fonctionnalit&#233;, qui est destin&#233;e avant tout aux syst&#232;mes aluminium, il faut cocher une nouvelle case &#8216;Correction des usinages sur les assemblages droits&#8217; dans la d&#233;finition de chaque syst&#232;me.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="color: #ff0000;">Attention ! Seuls les usinages provenant d&#8217;autres composants que le dormant sont concern&#233;s. Les usinages g&#233;n&#233;r&#233;s depuis le dormant proprement dit ne sont pas affect&#233;s par cette modification.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Gestion des palettes de transport:</span><span class="f_Textestd"> Winpro poss&#232;de un nouveau module optionnel, qui permet de g&#233;rer le suivi des palettes de transport.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 4.1.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/6/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Notion de variable Tableau:</span><span class="f_Textestd"> Un tableau est une variable pouvant stocker plusieurs valeurs sous un m&#234;me nom. On acc&#232;de &#224; chacune des valeurs en sp&#233;cifiant le nom de la variable, suivi du num&#233;ro de la valeur souhait&#233;e entre crochets (ex : </span><span class="f_Textestd">angle[3]</span><span class="f_Textestd"> : acc&#232;de &#224; la troisi&#232;me valeur de la variable angle). Pour cr&#233;er un tableau, indiquez son nom, suivi de &#8216; :&#8217; puis du nombre d&#8217;&#233;l&#233;ments que le tableau doit contenir. Un tableau peut &#234;tre redimensionn&#233; dynamiquement simplement en sp&#233;cifiant une nouvelle fois sa dimension; les valeurs qu&#8217;il contenait sont conserv&#233;es. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Exemples :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"># cr&#233;er une variable &#8216;angle&#8217; pouvant contenir 4 valeurs</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">angle : 4</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"># affecter une valeur unique &#224; ces 4 valeurs</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">angle := 90</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"># affecter une valeur particuli&#232;re au 3&#232;me &#233;l&#233;ment</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">angle[3] := 45</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"># redimensionner le tableau angle pour qu&#8217;il contienne 6 &#233;l&#233;ments</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"># Les nouveaux &#233;l&#233;ments auront une valeur 0</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">angle : 6</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"># r&#233;cup&#233;rer le 2&#232;me &#233;l&#233;ment dans une variable simple</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">angle1 := angle[2]</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">La taille limite d&#8217;un tableau est de 32767 &#233;l&#233;ments. Le num&#233;ro d&#8217;&#233;l&#233;ment, ainsi que le nombre d&#8217;&#233;l&#233;ments pour la cr&#233;ation du tableau, peuvent &#234;tre des expressions arithm&#233;tiques quelconques.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fonction Appliquer:</span><span class="f_Textestd"> WinPro permet maintenant de g&#233;n&#233;rer plusieurs &#233;l&#233;ments diff&#233;rents &#224; partir d&#8217;une seule formule. Ceci est utile notamment pour des profils, lorsqu&#8217;il faut g&#233;n&#233;rer plusieurs longueurs diff&#233;rentes pour un m&#234;me profil. </span></p>
<p class="p_Textestd"><span class="f_Textestd">La syntaxe est tr&#232;s simple : il suffit de sp&#233;cifier sur une ligne le mot </span><span class="f_Variables">Appliquer</span><span class="f_Textestd">. Les valeurs n&#233;cessaires sont alors m&#233;moris&#233;es par WinPro, et l&#8217;ex&#233;cution de la formule continue.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Angles de coupe:</span><span class="f_Textestd"> Une convention a &#233;t&#233; d&#233;finie pour repr&#233;senter des coupes particuli&#232;res : coupe en &#8216;V&#8217; (traverses soud&#233;es) ou en onglet partiel : les coupes en &#8216;V&#8217; sont repr&#233;sent&#233;es par un angle de 300&#176;; les coupes en onglet partiel sont repr&#233;sent&#233;es par un angle de 200 ou 250&#176; suivant le c&#244;t&#233; sur lequel se fait l&#8217;onglet.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">300&#176; : </span><img src="img/img_118.jpg" width="78" height="16" border="0" vspace="1" hspace="1" alt="img_118"></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">250&#176; : </span><img src="img/img_119.jpg" width="78" height="16" border="0" vspace="1" hspace="1" alt="img_119"></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">200&#176; : </span><img src="img/img_120.jpg" width="78" height="16" border="0" vspace="1" hspace="1" alt="img_120"></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Segments de dormant et de traverses d&#8217;ouvrant:</span><span class="f_Textestd"> WinPro vous permet maintenant de m&#233;langer dans une m&#234;me fen&#234;tre des frappes ext&#233;rieures et int&#233;rieures. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Il calculera les tron&#231;ons de dormant et de traverse &#224; souder bout &#224; bout.</span></p>
<p class="p_Textestd"><span class="f_Textestd">WinPro stocke la liste des segments constituant chaque c&#244;t&#233; de cadre et chaque traverse dans une variable indic&#233;e (voir ci-dessus). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce type de variable permet de stocker plusieurs valeurs sous un m&#234;me nom; on acc&#232;de &#224; chaque valeur en sp&#233;cifiant un indice, ou num&#233;ro d&#8217;ordre.</span></p>
<p class="p_Textestd"><span class="f_Textestd">WinPro cr&#233;e plusieurs variables, qui contiennent les indications n&#233;cessaires :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">DORMANTS</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">NbSousSegments</span><span class="f_Textestd"> : nombre de segments diff&#233;rents pour le c&#244;t&#233; calcul&#233;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">TypeSegment</span><span class="f_Textestd"> </span><span class="f_Variables">[]</span><span class="f_Textestd">: Type de chaque segment : soit Normal (batt&#233;e vers l&#8217;int&#233;rieur), soit Inverse (batt&#233;e vers l&#8217;ext&#233;rieur).</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Assemblage1Segment</span><span class="f_Textestd"> </span><span class="f_Variables">[]</span><span class="f_Textestd"> et </span><span class="f_Variables">Assemblage2Segment</span><span class="f_Textestd"> : </span><span class="f_Variables">NbSousSegments</span><span class="f_Textestd"> : contient les m&#234;mes valeurs que les variables </span><span class="f_Variables">Assemblage1</span><span class="f_Textestd"> et </span><span class="f_Variables">Assemblage2</span><span class="f_Textestd">, </span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Textestd">sauf au raccord entre 2 segments; dans ce cas, ces valeurs contiennent la valeur est </span><span class="f_Variables">EntreSegment</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">dimSegment []</span><span class="f_Textestd"> : Ce tableau contient la longueur de chaque sous segment.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">TRAVERSES</span></p>
<p class="p_Textestd"><span class="f_Variables">NbSousSegments</span><span class="f_Textestd"> : nombre de segments diff&#233;rents pour le c&#244;t&#233; calcul&#233;</span></p>
<p class="p_Textestd"><span class="f_Variables">TypeSegment []</span><span class="f_Textestd">: Type de chaque segment : &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Variables">TNormal</span><span class="f_Textestd"> (les 2 batt&#233;es vers l&#8217;int&#233;rieur), </span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Variables">TInverse</span><span class="f_Textestd"> (les 2 batt&#233;es vers l&#8217;ext&#233;rieur) , </span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Variables">ZNormal</span><span class="f_Textestd"> (batt&#233;e gauche ou haut vers l&#8217;int&#233;rieur, l&#8217;autre vers l&#8217;ext&#233;rieur) , </span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Variables">ZInverse</span><span class="f_Textestd"> (batt&#233;e droite ou bas vers l&#8217;int&#233;rieur, l&#8217;autre vers l&#8217;ext&#233;rieur).</span></p>
<p class="p_Textestd"><span class="f_Variables">Angle1Segment []</span><span class="f_Textestd"> et </span><span class="f_Variables">Angle2Segment []</span><span class="f_Textestd"> : contient les m&#234;mes valeurs que les variables </span><span class="f_Variables">Angle1</span><span class="f_Textestd"> et </span><span class="f_Variables">Angle2</span><span class="f_Textestd">, sauf au raccord entre 2 segments; dans ce cas, ces valeurs contiennent suivant les cas les valeurs </span><span class="f_Variables">200</span><span class="f_Textestd">, </span><span class="f_Variables">250</span><span class="f_Textestd"> ou </span><span class="f_Variables">300</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Variables">DimSegment []</span><span class="f_Textestd"> : Ce tableau contient la longueur de chaque sous segment.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Exemple 1 : param&#233;trage dormant : Pour les ouvertures ext&#233;rieures :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Soudure := 3</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Si NbSousSegments = 1 et TypeSegment[1] = 0</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> Quantite := 1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> Longueur := Dimension + 6</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Sinon</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> a1 := Angle1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> a2 := Angle2</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> i := 1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> Repeter Tant Que i &lt;= NbSousSegments</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Si TypeSegment[i] = Normal</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Quantite := 1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Longueur := DimSegment[i]</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;# il est indispensable que WinPro connaisse le num&#233;ro</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;# du segment qui a &#233;t&#233; choisi, afin de g&#233;n&#233;rer correctement</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;# vues en coupe et usinages</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;NumeroSegment := i</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Si Assemblage1Segment[i] = EntreSegments</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp; &nbsp; Angle1 := 200</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp; &nbsp; Longueur += Soudure</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Sinon Si Assemblage1Segment[i] = Onglet</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp; &nbsp; Angle1 := a1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp; &nbsp; Longueur += Soudure</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Sinon Si AuDessusVide</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp; &nbsp; Angle1 := 300</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp; &nbsp; Longueur += 46 + Soudure</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Si Assemblage2Segment[i] = EntreSegments</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp; &nbsp; Angle2 := 200</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp; &nbsp; Longueur += Soudure</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Sinon Si Assemblage2Segment[i] = Onglet</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp; &nbsp; Angle2 := a2</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp; &nbsp; Longueur += Soudure</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Sinon Si AuDessusVide</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp; &nbsp; Angle2 := 300</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp; &nbsp; Longueur += 46 + Soudure</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Appliquer</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Quantite := 0</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; i += 1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> Fin Repeter</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Fin Si</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Exemple 2 : param&#233;trage traverses avec 2 frappes int&#233;rieures</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">soudure := 3</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">i := 1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Repeter Tant Que i &lt;= NbSousSegments</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> Si TypeSegment[i] = Tnormal</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Longueur := DimSegment[i]</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Quantite := 1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Angle1 := Angle1segment[i]</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Angle2 := Angle2segment[i]</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; NumeroSegment := i</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Si i = 1 et Angle1 = 90 et Non AcotePorte et non AcoteVide</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Angle1 := 300</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Si i = NbSousSegments et Angle2 = 90</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Angle2 := 300</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Si Angle1 = 300</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Longueur += 34</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Si Angle2 = 300</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Longueur += 34</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Si Angle1 &gt;= 200</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Longueur += Soudure</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Si Angle2 &gt;= 200</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp; &nbsp;Longueur += Soudure</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Appliquer</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; Quantite := 0</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> i += 1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Fin Repeter</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 8px 0px 0px 29px;"><img src="img/img_121.jpg" width="578" height="627" border="0" vspace="1" hspace="1" alt="img_121"></p>

</td></tr></table>
</div>

</body>
</html>
