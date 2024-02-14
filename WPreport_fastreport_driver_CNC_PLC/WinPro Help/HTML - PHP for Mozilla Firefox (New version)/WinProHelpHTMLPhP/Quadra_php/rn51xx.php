<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["5.1.xx"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn51xx.php"; }
else { parent.quicksync('a11.14.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>5.1.xx</title>
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
     <a href="rn52xx.php">Previous</a>&nbsp;
     <a href="rn50xx.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.1.05</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">20/2/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Variables syst&#232;mes:</span><span class="f_Textestd"> Comme pour les variables clients, vous disposez maintenant de variables syst&#232;me. Ces variables sont &#233;galement &#233;valu&#233;es avant de commencer le calcul de chaque ch&#226;ssis.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Tri des lots:</span><span class="f_Textestd"> Vous pouvez, dans le param&#233;trage, d&#233;finir une nouvelle variable globale qui sera r&#233;cup&#233;r&#233;e par WinPro pour chaque fen&#234;tre, et sera utilis&#233;e pour trier les ch&#226;ssis dans un lot. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Le premier ch&#226;ssis sera celui pour lequel cette variable aura la valeur la plus faible, le dernier la valeur la plus &#233;lev&#233;e. Les valeurs possibles pour cette variable vont de &#8211;999.999.999 &#224; 999.999.999.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.1.02</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">30/1/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Bordereaux de pr&#233;paration de livraison:</span><span class="f_Textestd"> Un nouveau bouton &#171; Valider sans imprimer &#187; a &#233;t&#233; ajout&#233;. Celui-ci est d&#233;sactiv&#233; par d&#233;faut. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour l&#8217;activer, il faut ajouter la section et cl&#233; suivante dans le fichier Winpro.ini</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Preparation Livraison]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Valider Sans Imprimer &nbsp; &nbsp; &nbsp; &nbsp;= 1</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 0 </span></p>
<p class="p_Textestd"><span class="f_Winproini">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.1.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/1/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Variables client:</span><span class="f_Textestd"> Vous pouvez attribuer &#224; chaque client, individuellement, des variables globales. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces variables seront &#233;valu&#233;es avant le calcul du ch&#226;ssis ; vous pouvez donc les r&#233;cup&#233;rer dans toutes les formules de ch&#226;ssis pour agir sur le param&#233;trage en fonction du client.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.1.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">9/1/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Exportation des documents:</span><span class="f_Textestd"> Cette nouvelle version de WinPro vous permet d&#8217;exporter dans des tables en format FoxPro, les documents suivants : Devis, devis simplifi&#233;, devis simplifi&#233; sans cote, confirmation, note d&#8217;envoi, facture, plan d&#8217;atelier simplifi&#233;, plan d&#8217;atelier complet, contr&#244;le de prix de revient, contr&#244;le de prix de vente, contr&#244;le qualit&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les informations sont export&#233;es dans une s&#233;rie de tables qui sont situ&#233;es dans le r&#233;pertoire DATA de WinPro. </span></p>

</td></tr></table>
</div>

</body>
</html>
