<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["6.2.xx"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn62xx.php"; }
else { parent.quicksync('a11.10.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>6.2.xx</title>
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
     <a href="rn63xx.php">Previous</a>&nbsp;
     <a href="rn61xx.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.2.13</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/01/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables globales:</span><span class="f_Textestd"> Les nouvelles variables suivantes sont maintenant disponibles:</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 32px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="221" style="width: 221px; border: solid 1px ;"><p><span class="f_Variables">_EpaisseurDormantGauche</span></p>
</td>
<td width="237" style="width: 237px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur du dormant gauche</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="221" style="width: 221px; border: solid 1px ;"><p><span class="f_Variables">_EpaisseurDormantDroite</span></p>
</td>
<td width="237" style="width: 237px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur du dormant droit</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="221" style="width: 221px; border: solid 1px ;"><p><span class="f_Variables">_EpaisseurDormantHaut</span></p>
</td>
<td width="237" style="width: 237px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur du dormant haut</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="221" style="width: 221px; border: solid 1px ;"><p><span class="f_Variables">_EpaisseurDormantBas</span></p>
</td>
<td width="237" style="width: 237px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur du dormant bas</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="221" style="width: 221px; border: solid 1px ;"><p><span class="f_Variables">_EpaisseurDormantHautGauche</span></p>
</td>
<td width="237" style="width: 237px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur du dormant haut gauche</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="221" style="width: 221px; border: solid 1px ;"><p><span class="f_Variables">_EpaisseurDormantHautDroite</span></p>
</td>
<td width="237" style="width: 237px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur du dormant haut droit</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 32px;">&nbsp;</p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.2.08</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/10/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Exportation des documents &#8211; Configuration:</span><span class="f_Textestd"> Voici les informations n&#233;cessaires dans WinPro.ini pour le bon fonctionnement de l&#8217;exportation des documents :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">[MODE SORTIE DOCUMENTS]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Plan Atelier Simplifie &nbsp; &nbsp; &nbsp; &nbsp;= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Impression uniquement</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 2 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Exportation uniquement</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 3 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Impression et exportation</span></p>
<p class="p_Textestd"><span class="f_Winproini">Plan Atelier Detaille  &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">ou </span><span class="f_Winproini">2 </span><span class="f_Textestd">ou </span><span class="f_Winproini">3</span></p>
<p class="p_Textestd"><span class="f_Winproini">Controle Qualite &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">ou </span><span class="f_Winproini">2 </span><span class="f_Textestd">ou </span><span class="f_Winproini">3 &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">Devis Simplifie &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">ou </span><span class="f_Winproini">2 </span><span class="f_Textestd">ou </span><span class="f_Winproini">3</span></p>
<p class="p_Textestd"><span class="f_Winproini">Devis Detaille &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">ou </span><span class="f_Winproini">2 </span><span class="f_Textestd">ou </span><span class="f_Winproini">3</span></p>
<p class="p_Textestd"><span class="f_Winproini">Controle PA &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">ou </span><span class="f_Winproini">2 </span><span class="f_Textestd">ou </span><span class="f_Winproini">3</span></p>
<p class="p_Textestd"><span class="f_Winproini">Controle PR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">ou </span><span class="f_Winproini">2 </span><span class="f_Textestd">ou </span><span class="f_Winproini">3</span></p>
<p class="p_Textestd"><span class="f_Winproini">Controle PV &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">ou </span><span class="f_Winproini">2 </span><span class="f_Textestd">ou </span><span class="f_Winproini">3</span></p>
<p class="p_Textestd"><span class="f_Winproini">Commande Client &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">ou </span><span class="f_Winproini">2 </span><span class="f_Textestd">ou </span><span class="f_Winproini">3</span></p>
<p class="p_Textestd"><span class="f_Winproini">Commande Fabricant  &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">ou </span><span class="f_Winproini">2 </span><span class="f_Textestd">ou </span><span class="f_Winproini">3</span></p>
<p class="p_Textestd"><span class="f_Winproini">Confirmation  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">ou </span><span class="f_Winproini">2 </span><span class="f_Textestd">ou </span><span class="f_Winproini">3</span></p>
<p class="p_Textestd"><span class="f_Winproini">Preparation Livraison  &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">ou </span><span class="f_Winproini">2 </span><span class="f_Textestd">ou </span><span class="f_Winproini">3</span></p>
<p class="p_Textestd"><span class="f_Winproini">Document Livraison  &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">ou </span><span class="f_Winproini">2 </span><span class="f_Textestd">ou </span><span class="f_Winproini">3</span></p>
<p class="p_Textestd"><span class="f_Winproini">Facture &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">ou </span><span class="f_Winproini">2 </span><span class="f_Textestd">ou </span><span class="f_Winproini">3</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.2.07</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/10/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_TitreReleaseNote">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Analyse marge chantier:</span><span class="f_Textestd"> Ce &nbsp;nouveau module vous permet d&#8217;analyser les co&#251;ts et b&#233;n&#233;fices des commandes clients.  </span></p>
<p class="p_Textestd"><span class="f_Textestd">Il vous permet &#233;galement de contr&#244;ler les remises et prix de revient afin de pouvoir juger les r&#233;percussions sur le prix de vente et la marge nette.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle variable globale:</span><span class="f_Textestd"> Une nouvelle variable vous permet de basculer entre le prix de vente commercial, qui utilise les formules de prix de vente, et une calcul de prix de vente au d&#233;bours&#233;, qui utilise les formules de prix de revient. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette variable peut &#234;tre calcul&#233;e par une formule bas&#233;e, par exemple, sur une question, une variable client ou sur une d&#233;cision calcul&#233;e par une formule complexe.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Attention! Cette variable ne peut &#234;tre modifi&#233;e que dans les formules qui sont utilis&#233;es pour le pr&#233;-calcul des sections variables, &#224; savoir, la premi&#232;re formule de profil des dormants, ouvrants, quincailleries et traverses. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Si vous assignez une valeur &#224; cette variable dans d&#8217;autres formule, cela reste sans effet.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Note : pour permettre de calculer cette variables dans les volets, un pr&#233;-calcul de la premi&#232;re formule a &#233;t&#233; ajout&#233; aux caissons des volets roulants. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce pr&#233;-calcul dans les caissons n&#8217;a pour seule utilit&#233; que de permettre la d&#233;finition de cette variable.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="122" style="width: 122px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_TypePrix</span></p>
</td>
<td width="333" style="width: 333px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Cette variable peut avoir une des deux valeurs list&#233;es ci-dessous.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="122" style="width: 122px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_Debourse</span></p>
</td>
<td width="333" style="width: 333px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">En attribuant cette valeur &#224;</span><span class="f_Variables">_TypePrix</span><span class="f_Textestd">, cela implique que vous calculiez le prix de vente sur les formules et tables du prix de revient .</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="122" style="width: 122px; height: 42px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_Commercial</span></p>
</td>
<td width="333" style="width: 333px; height: 42px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">En attribuant cette valeur &#224;</span><span class="f_Variables">_TypePrix</span><span class="f_Textestd"> cela implique que vous calculiez le prix de vente sur les formules et tables du prix de vente..</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_TitreReleaseNote">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.2.06</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/10/2001</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 8px;">&nbsp;</p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">EDI vitrier (EDIV):</span><span class="f_Textestd"> WinPro vous permet actuellement &nbsp;la liaison avec 4 fournisseurs vitrages : Sprimoglass (Belgique), St Roch (Belgique), Pilkington (France) et Glassver(France).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Afin de b&#233;n&#233;ficier de cette possibilit&#233;, vous devez acqu&#233;rir, si vous ne l&#8217;avez pas encore, le module liaison vitrier EDI.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous trouverez ci-apr&#232;s la m&#233;thode de mise &#224; jour du fichier WinPro.ini afin de fonctionner avec un ou plusieurs de ces formats:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">1. Il faut cr&#233;er une section d&#233;crivant le format que vous voulez utiliser:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">[Glass Supplier]</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">Count = x &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">indiquera &#224; WinPro le nombre de formats fournisseurs n&#233;cessaires (dans l&#8217;exemple repris ci-dessus, la valeur &#224; encoder est 2).</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">1=</span>format de fichier d&#233;finit par l'un des protocoles suivants<span class="f_Winproini"> SPRIMOGLASS </span><span class="f_Textestd">ou</span><span class="f_Winproini"> TELEGLASS </span><span class="f_Textestd">ou</span><span class="f_Winproini"> PILKINGTON </span><span class="f_Textestd">ou</span><span class="f_Winproini"> GLASSVER;code </span>fournisseur winpro<span class="f_Winproini">;1 </span><span class="f_Textestd">pour exclure les vitrages non rectangulaire ou</span><span class="f_Winproini"> 0 </span><span class="f_Textestd">pour les inclure dans l'EDI</span><span class="f_Winproini">;</span><span class="f_Textestd" style="font-weight: bold;">path1</span> &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">2=</span>format de fichier d&#233;finit par l'un des protocoles suivants<span class="f_Winproini"> SPRIMOGLASS </span><span class="f_Textestd">ou</span><span class="f_Winproini"> TELEGLASS </span><span class="f_Textestd">ou</span><span class="f_Winproini"> PILKINGTON </span><span class="f_Textestd">ou</span><span class="f_Winproini"> GLASSVER;code </span>fournisseur winpro<span class="f_Winproini">;1 </span><span class="f_Textestd">pour exclure les vitrages non rectangulaire ou</span><span class="f_Winproini"> 0 </span><span class="f_Textestd">pour les inclure dans l'EDI</span><span class="f_Winproini">;</span><span class="f_Textestd" style="font-weight: bold;">path1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="font-weight: bold;">path1</span><span class="f_Textestd"> et </span><span class="f_Textestd" style="font-weight: bold;">path2</span><span class="f_Textestd"> est une cha&#238;ne de caract&#232;res d&#233;crivant &#224; la fois le nom du fichier et l&#8217;endroit o&#249; il sera enregistr&#233;. Le chemin doit reprendre une section #1#, que WinPro remplacera par le num&#233;ro de job (ou num&#233;ro de commande vitrage si la gestion des lots n&#8217;est pas active). </span><span class="f_Textestd">Attention!</span><span class="f_Textestd"> Le r&#233;pertoire sp&#233;cifi&#233; dans le chemin d&#8217;acc&#232;s </span><span class="f_Textestd">doit</span><span class="f_Textestd"> exister!!!</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Exemple:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">[Glass Supplier]</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">Count=3</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">1=SPRIMOGLASS;SPRIMO;0;c:\vitr\sprimo\preg#1#.txt</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">2=TELEGLASS;ST ROCH;0;c:\vitr\teleg\tele#1#.edi</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">3=PILKINGTON;PILK;0;c:\vitr\pilk\WP#1#.NAM</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">4=GLASSVER;TEST;1;c:\vitr\glassver\GLAS#1#.txt</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">2. Cr&#233;ation d&#8217;une section pour chaque fournisseur, d&#233;crivant votre num&#233;ro client pour chaque fournisseur.</span><span class="f_Textestd"> </span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Vous pouvez disposez de plusieurs num&#233;ros de client par fournisseur; Dans un tel cas, WinPro vous demandera d&#8217;indiquer lequel utiliser lorsque la commande vitrage sera cr&#233;&#233;e.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Exemple:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">[PILKINGTON]</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">Numeros=2</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">Numero 1=00001</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">Numero 2=00002</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">SendTo=info@pilkington.fr</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Vous avez la possibilit&#233; d&#8217;ajouter dans cette section des informations suppl&#233;mentaires sp&#233;cifiques pour chaque fournisseur (e.g., avec Pilkington, vous avez besoin d&#8217;information e-mail.)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.2.03</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">3/10/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Gestion colis et visualisation dans l&#8217;atelier:</span><span class="f_Textestd"> Si vous avez achetez les modules gestion de colis et visualisation dans l&#8217;atelier, ils peuvent tous deux figurer sur quelques &#233;crans dans l&#8217;atelier pour contr&#244;ler quel type de colis il faut utiliser.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.2.02</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">1/10/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Grilles de prix</span><span class="f_Textestd"> pour dormants, ouvrants, profils p&#233;riph&#233;riques, traverses, volets, a&#233;rateurs, panneaux fabriqu&#233;s: Vous pouvez maintenant d&#233;finir pour ces &#233;l&#233;ments une liste de prix bas&#233;e sur les dimensions &#171; jour &#187;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Arrondi des dimensions fen&#234;tre:</span><span class="f_Textestd"> vous pouvez contr&#244;ler la mani&#232;re dont les dimensions ont &#233;t&#233; arrondies avec les 4 cl&#233;s suivantes du fichier WinPro.ini:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[System]</span></p>
<p class="p_Textestd"><span class="f_Winproini">HOrg= </span><span class="f_Textestd">valeur de la mesure minimale en largeur (e.g.. 0; 0 by d&#233;faut)</span></p>
<p class="p_Textestd"><span class="f_Winproini">VOrg= </span><span class="f_Textestd">valeur de la mesure minimale en hauteur (e.g.. 50; 0 by d&#233;faut)</span></p>
<p class="p_Textestd"><span class="f_Winproini">HStep= </span><span class="f_Textestd">valeur de l'espace entre 2 largeurs (e.g. 100; 100 by d&#233;faut)</span></p>
<p class="p_Textestd"><span class="f_Winproini">VStep= </span><span class="f_Textestd">valeur de l'espace entre 2 longueurs (e.g. 100; 100 by d&#233;faut)</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables:</span><span class="f_Textestd"> Les nouvelles variable suivantes &nbsp;sont maintenant disponibles:</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="122" style="width: 122px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_HauteurHT</span></p>
</td>
<td width="333" style="width: 333px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Hauteur totale de la fen&#234;tre telle qu&#8217;elle sera fabriqu&#233;e</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="122" style="width: 122px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_LargeurHT</span></p>
</td>
<td width="333" style="width: 333px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Largeur totale de la fen&#234;tre telle qu&#8217;elle sera fabriqu&#233;e</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="122" style="width: 122px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_HauteurTableau</span></p>
</td>
<td width="333" style="width: 333px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Idem &#224; </span><span class="f_Variables">_HauteurHT</span><span class="f_Textestd">, moins &#233;paisseur mur</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="122" style="width: 122px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_LargeurTableau</span></p>
</td>
<td width="333" style="width: 333px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Idem &#224; </span><span class="f_Variables">_LargeurHT</span><span class="f_Textestd">, moins &#233;paisseur mur</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="122" style="width: 122px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_HauteurCaisson</span></p>
</td>
<td width="333" style="width: 333px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Hauteur du caisson volet</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Winproini">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.2.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">24/9/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Gestion de production (GLP):</span><span class="f_Textestd"> Cette nouvelle mise &#224; jour vous permet d&#8217;activer notre nouveau module de gestion de production. Ce module vous permet de planifier et d&#8217;organiser vos productions par lignes de production et l&#8217;aiguillage vers les quais de chargement par zone de livraison. &nbsp;Ce module est trop vaste pour que nous vous le pr&#233;sentions compl&#232;tement, nous vous informons simplement des points suivants :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Gestion des lignes de production. Chaque ligne de production peut avoir jusque 15 compteurs sp&#233;cifiques qui vous permettent de contr&#244;ler quotidiennement la capacit&#233; de travail. &nbsp;Vous pouvez &#233;galement m&#232;tre des coefficients pond&#233;rateurs pour rendre la production plus fluide. Enfin, vous pouvez indiquer la capacit&#233; de la ligne de production pour chaque jour avec une charge exceptionnelle pour des dates bien sp&#233;cifiques.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Le contenu de chaque lot peut &#234;tre g&#233;r&#233; et contr&#244;l&#233; ligne par ligne.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Des lots peuvent &#234;tre pr&#233;par&#233;s &#224; tout moment, m&#234;me pour des commandes non approuv&#233;es.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Des lots peuvent &#234;tre librement arrang&#233;s jusqu&#8217;au moment o&#249; ils sont lances.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Des lots peuvent &#234;tre automatiquement divis&#233;s en sous-lots. &nbsp;Chaque sous-lot est d&#233;fini par le nombre maximum de fen&#234;tres ou cadres qu&#8217;il peut contenir.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Les fen&#234;tres sont automatiquement destin&#233;es &#224; chaque ligne de production. &nbsp;Les lots sont r&#233;partis sur les lignes de production.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Des temps de production suppl&#233;mentaires peuvent &#234;tre calcul&#233;s et montr&#233;s &#224; l&#8217;utilisateur pour chaque fen&#234;tre.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Vous pouvez avoir un aper&#231;u de la charge connue des lignes pour les jours &#224; venir (Cet aper&#231;u vous est donn&#233; sans limite de temps).</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Des fen&#234;tres peuvent &#234;tre automatiquement tri&#233;es pour faciliter la soudure ou l&#8217;assemblage des cadres.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Des fen&#234;tres peuvent &#234;tre automatiquement r&#233;organis&#233;es pour fluidifier la production dans l&#8217;atelier.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Un tri s&#233;par&#233; peut intervenir pour ranger les fen&#234;tres pour le placement des vitrages et la pr&#233;paration des livraisons.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Variables globales utilis&#233;es en production:</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="211" style="width: 211px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_LigneProductionChassis</span></p>
</td>
<td width="547" style="width: 547px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Identificateur de la ligne de production sur laquelle la fen&#234;tre sera produite</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="211" style="width: 211px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_LigneProductionVolet</span></p>
</td>
<td width="547" style="width: 547px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Identificateur de la ligne de production sur laquelle le volet roulant sera produit</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="211" style="width: 211px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_OrdreLot</span></p>
</td>
<td width="547" style="width: 547px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Cl&#233; de tri des fen&#234;tres pour la production (intervient sur l'affection des n&#176; casier dormant)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="211" style="width: 211px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_OrdreCadre</span></p>
</td>
<td width="547" style="width: 547px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Cl&#233; de tri pour ranger les fen&#234;tres avec chaque type de vitrage (organise les palettes de vitrages). Ce tri ne sera calcul&#233; qu'apr&#232;s avoir effectu&#233; le tri sur base de la cl&#233; d&#233;finie dans le menu Technique | Production | Constitution du tri de production.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="211" style="width: 211px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_DelaiProductionChassis</span></p>
</td>
<td width="547" style="width: 547px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Temps suppl&#233;mentaire (en jours) pour la production d&#8217;une fen&#234;tre sp&#233;cifique</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="211" style="width: 211px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_DelaiProductionVolet</span></p>
</td>
<td width="547" style="width: 547px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Temps suppl&#233;mentaire (en jours) pour la production d&#8217;un volet sp&#233;cifique</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Liste de prix pour volets roulants:</span><span class="f_Textestd"> Dans la d&#233;finition de la liste de prix des volets roulants, vous trouverez de nouveaux champs. &nbsp;Vous pouvez dor&#233;navant contr&#244;ler la couleur finale ind&#233;pendamment de la couleur du caisson. &nbsp;Vous pouvez &#233;galement d&#233;terminer la position de la man&#339;uvre (gauche ou droite, int&#233;rieur ou ext&#233;rieur, haut ou bas)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Lin&#233;aire camion:</span><span class="f_Textestd"> Une nouvelle variable </span><span class="f_Variables">_LineaireCamion</span><span class="f_Textestd"> vous permet de calculer la surface occup&#233;e par une fen&#234;tre sur votre camion.  </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez imprimer des r&#233;sum&#233;s de ces informations afin que vous puissiez contr&#244;ler combien de fen&#234;tres peuvent &#234;tre rang&#233;es sur le camion.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables:</span><span class="f_Textestd"> quelques nouvelles variables sont disponibles:</span></p>
<p class="p_Textestd"><span class="f_Textestd">La variable </span><span class="f_Variables">_FormeDormant </span><span class="f_Textestd">renvoie la forme du dormant d&#8217;une fen&#234;tre. Cette variable peut avoir une des valeur suivantes : </span><span class="f_Variables">_Rectangle</span><span class="f_Textestd">, </span><span class="f_Variables">_Trapeze</span><span class="f_Textestd">, </span><span class="f_Variables">_TriangleRectangle</span><span class="f_Textestd">, </span><span class="f_Variables">_CoinCasse</span><span class="f_Textestd">, </span><span class="f_Variables">_Pentagone</span><span class="f_Textestd">, </span><span class="f_Variables">_TrapezeTronque</span><span class="f_Textestd">, </span><span class="f_Variables">_CoinCasse2</span><span class="f_Textestd">, </span><span class="f_Variables">_TrapezeRectangle</span><span class="f_Textestd">, </span><span class="f_Variables">_SimpleTrapeze</span><span class="f_Textestd">, </span><span class="f_Variables">_Cintre</span><span class="f_Textestd">, </span><span class="f_Variables">_PleinCintre</span><span class="f_Textestd">, </span><span class="f_Variables">_DemiPleinCintre</span><span class="f_Textestd">, </span><span class="f_Variables">_CintrePlat</span><span class="f_Textestd">, </span><span class="f_Variables">_DemiCintrePlat</span><span class="f_Textestd">, </span><span class="f_Variables">_CintreTronque</span><span class="f_Textestd">, </span><span class="f_Variables">_CoinArrondi</span><span class="f_Textestd">, </span><span class="f_Variables">_Quadrilatere</span><span class="f_Textestd">, </span><span class="f_Variables">_Triangle</span><span class="f_Textestd">, </span><span class="f_Variables">_OeilDeBoeuf</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>

</td></tr></table>
</div>

</body>
</html>
