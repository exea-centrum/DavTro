<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["1.3.2x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn132x.php"; }
else { parent.quicksync('a11.29.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>1.3.2x</title>
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
     <a href="rn14xx.php">Previous</a>&nbsp;
     <a href="rn131x.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.21</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">29/7/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d&#8217;une fen&#234;tre de param&#233;trage des taux de TVA:</span><span class="f_Textestd"> menu </span><span class="f_Textestd">&#171; Utilitaires | Taux de TVA &#187;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Int&#233;gration de la pose de WinProD dans WinPro</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Modification de la r&#233;partition des chutes RAL:</span><span class="f_Textestd"> WinPro v&#233;rifie que le ch&#226;ssis contient au moins un profil RAL ou en couleur standard avec chutes &#224; compter au client, avant de r&#233;partir les chutes.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Modification de la pr&#233;sentation des totaux des documents client</span><span class="f_Textestd"> (devis, confirmations, factures).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.20</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">21/7/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Am&#233;lioration du support multilingue:</span><span class="f_Textestd"> tous les termes traduits dans le param&#233;trage apparaissent dor&#233;navant &#224; l&#8217;&#233;cran dans la langue de l&#8217;utilisateur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Possibilit&#233; de ne pas imprimer d&#8217;&#233;tiquettes pour un profil optimis&#233;</span><span class="f_Textestd"> (dans le but de laisser un centre d&#8217;usinage imprimer lui-m&#234;me l&#8217;&#233;tiquette).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Possibilit&#233; de valoriser les chutes &#224; compter au client pour un profil en teinte standard</span><span class="f_Textestd">, comme s&#8217;il s&#8217;agissait d&#8217;un profil RAL. Pour qu&#8217;un profil soit valoris&#233;, il faut cocher la case correspondant &#224; sa couleur dans la fen&#234;tre Profil (2&#176; colonne &#224; cocher).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remarque : si la coupe du profil se fait en double, l&#8217;&#233;valuation des chutes se fera aussi sur cette base. Ce qui peut produire une valeur de chute &#233;lev&#233;e sur un seul petit ch&#226;ssis. (p.ex. un seul ch&#226;ssis fixe de 800x800, &#224; couper en double dans 2 barres de dormant de 6000, produira 2 fois 4400 mm de chutes!).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>

</td></tr></table>
</div>

</body>
</html>
