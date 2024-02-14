<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["BowCutAddBow","DecArcAjouterArc","BowCutAddBow"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?decarcajouterarc.php"; }
else { parent.quicksync('a2.4.5.2.2.4'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>DecArcAjouterArc</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="DecArcAjouterArc" />
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload="AddTitleAndLangFlags();highlight();">
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
     <a href="decarcdefinirfin.php">Previous</a>&nbsp;
     <a href="decarcnbarcs.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This required function stores into an array the properties of the arc that has just been defined. </p>
<p>This function returns <span class="f_Variables">-1 </span>in case of error, the number of arcs already recorded otherwise.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := BowCutAddBow ()</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction indispensable stocke dans un tableau les propri&#233;t&#233;s de l'arc venant d'&#234;tre d&#233;fini. </p>
<p>Cette fonction renvoie  <span class="f_Variables">-1 </span>en cas d'erreur, et renvoie le nombre d'arcs d&#233;j&#224; enregistr&#233;s dans le tableau dans le cas contraire.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := DecArcAjouterArc ()</span></p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Deze benodigde functie slaat de eigenschappen van de net gedefinieerde boog op in een array. </p>
<p>Deze functie geeft steeds de waarde <span class="f_Variables">-1 </span>in geval van een fout, het aantal reeds opgeslagen bogen.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := BowCutAddBow ()</span></p>

</td></tr></table>
</div>

</body>
</html>
