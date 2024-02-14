<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Utilities","Utilitaires","Utilities"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?utilitaires.php"; }
else { parent.quicksync('a9'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Utilitaires</title>
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
     <a href="stkraz.php">Previous</a>&nbsp;
     <a href="utilpreferences.php">Next</a>
     </span>
    </td>
  </tr>
</table>
<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>This menu contains a large number of utilities and parameters that allows you to refine the best use of your software WinPro.
The various features from this menu are version dependant, the screenhots and details given into this manual may vary depending on version and modules into the licence. In case of any doubt, ask for details to Quadrature.</p>
<p>&nbsp;</p>

</td></tr></table>
</div>
<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>Ce menu comporte un grand nombre d'utilitaires et de param&#232;tres qui vous permettront d'affiner au mieux l'utilisation de votre logiciel WinPro.
Les fonctionalités de ce menu sont dépendantes de la version et des modules utilisés. Les captures et détails donnés dans ce manuel sont susceptibles de varier en fonction de ces paramètres. En cas de doute, n'hésitez pas à solliciter Quadrature pour plus d'informations.</p>
<p>&nbsp;</p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>Dit menu bevat een groot aantal hulpprogramma's en parameters waarmee u het gebruik van uw software WinPro kan verfijnen.</p>
<p>&nbsp;</p>

</td></tr></table>
</div>
</body>
</html>
