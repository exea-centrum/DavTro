<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Filters","Filtres","Filters"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?articlesfiltres.php"; }
else { parent.quicksync('a4.5.12'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Filtres</title>
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
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="artatelier.php">Previous</a>&nbsp;
     <a href="profils.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This filter is suitable for combo list filled when inputing an additional article or profile from Article or Profile tab of an order or quote.</p>
<p style="text-align: center;"><img src="img/clip0106eng.jpg" width="829" height="150" border="0" alt="Clip0106eng"></p>
<p>Refer to page about <a href="filtres.php">filters</a> for more details about this feature. </p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Ce filtre s'applique sur la liste présentant les articles ou profils complémentaires disponibles depuis les onglets Articles et Profils de la commande client.</p>
<p style="text-align: center;"><img src="img/clip0106.gif" width="601" height="167" border="0" alt="Clip0106"></p>
<p>Consultez la page traitant des <a href="filtres.php">filtres</a> pour plus d'informations à ce sujet. </p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Deze filter is geschikt voor de combo lijst wanneer een extra artikel of profiel wordt ingevoerd in het tabblad "Artikel" of "Profiel" van een bestelling of offerte.</p>
<p style="text-align: center;"><img src="img/clip0106eng.jpg" width="829" height="150" border="0" alt="Clip0106eng"></p>
<p>Cosulteer de pagina over <a href="filtres.php">filters</a> voor meer informatie en details over dit onderwerp. </p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
