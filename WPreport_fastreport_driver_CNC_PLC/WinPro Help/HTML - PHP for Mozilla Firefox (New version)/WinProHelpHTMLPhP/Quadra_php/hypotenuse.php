<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Hypotenuse","Hypotenuse","Hypotenuse"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?hypotenuse.php"; }
else { parent.quicksync('a2.4.4.7'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Hypotenuse</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Hypotenuse,Pythagore" />
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="degres.php">Previous</a>&nbsp;
     <a href="pi.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p>This function computes the hypotenuse of a right angled triangle, using the length of the two other sides.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Hypotenuse (side1, side2)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Hypotenuse (3, 4) </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># result is now 5</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Interligne">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction calcule l'hypoténuse d'un triangle rectangle, connaissant la longueur des deux autres côtés, qui sont donnés en paramètre.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Hypotenuse (cote1, cote2)</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">resultat := Hypotenuse (3, 4)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultat vaut 5</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Interligne">&nbsp;</span></p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p>Deze functie berekent de schuine zijde van een rechthoekige driehoek, waarbij de lengte van de twee andere zijden gebruikt wordt.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Hypotenuse (zijde1, zijde2)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeeld:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">resultaat := Hypotenuse (3, 4) </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultaat is 5</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Interligne">&nbsp;</span></p>

</td></tr></table>
</div>
</body>
</html>
