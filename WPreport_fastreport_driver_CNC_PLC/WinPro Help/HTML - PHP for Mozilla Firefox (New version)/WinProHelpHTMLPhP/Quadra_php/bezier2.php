<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Bezier","Bezier"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?bezier2.php"; }
else { parent.quicksync('a2.6.17.4'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Bezier</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Bezier" />
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
     <a href="arcsensrotation.php">Previous</a>&nbsp;
     <a href="contourchemin.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Draws a curved B&#233;zier line</p>
<p>Each pair of settings represent the coordinate of a point, into the order x,y.<br>
The start point x0,y0 is useless as retrieved from the end point of the previous function declared.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Bezier (x1, y1, x2, y2, x3, y3[, x4,y4, x5,y5, x6,y6[, ...])</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note</span><span style="text-decoration: underline;">:</span> </p>
<p style="margin: 0px 0px 0px 13px;">The function <span class="f_Variables">Bezier (...)</span> with 6 settings should be used to continue an existing path already declared. The start point of this function is the end point of the previous function defined into the code.</p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Traçage d'une courbe de Bézier.</p>
<p>Chaque paire de paramètres représente les coordonnées d'un point, dans l'ordre x,y.<br>
Le point de départ x0,y0 est inutile car il récupère directement le point d'arrivée de la fonction précédente.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Bezier (x1, y1, x2, y2, x3, y3[, x4,y4, x5,y5, x6,y6[, ...])</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span> </p>
<p style="margin: 0px 0px 0px 13px;">La fonction <span class="f_Variables">Bezier (...)</span> à 6 paramètres doit être utilisée pour la continuité d'un chemin et prend comme point de départ, les coordonnées du point d'arrivée de la fonction qui la précède.</p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>

</td></tr></table>
</div>

</body>
</html>
